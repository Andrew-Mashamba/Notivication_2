<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class GenerateMigrations extends Command
{
    protected $signature = 'generate:migrations';

    protected $description = 'Generate migrations and seeders for all tables in the connected database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get all tables in the connected database
        $tables = DB::select('SHOW TABLES');
        $databaseName = DB::connection()->getDatabaseName();
        $key = 'Tables_in_' . $databaseName;

        foreach ($tables as $table) {
            $tableName = $table->$key;

            // Skip the migrations table
            if ($tableName === 'migrations') {
                continue;
            }

            // Generate migration file
            $migrationName = 'create_' . Str::snake($tableName) . '_table';
            $timestamp = date('Y_m_d_His');
            $migrationPath = database_path('migrations/' . $timestamp . '_create_' . Str::snake($tableName) . '_table.php');
            $migrationContent = $this->generateMigrationContent($tableName);
            file_put_contents($migrationPath, $migrationContent);
            $this->info('Generated migration for table: ' . $tableName);

            // Generate seeder file
            $seederName = Str::studly($tableName) . 'Seeder';
            $seederPath = database_path('seeders/' . $seederName . '.php');
            $seederContent = $this->generateSeederContent($tableName);
            file_put_contents($seederPath, $seederContent);
            $this->info('Generated seeder for table: ' . $tableName);
        }
    }

    /**
     * Generate the content of the migration file.
     *
     * @param string $tableName
     * @return string
     */
    private function generateMigrationContent($tableName)
    {
        $className = 'Create' . Str::studly($tableName) . 'Table';
        $tableName = Str::snake($tableName);

        // Generate columns
        $columns = Schema::getColumnListing($tableName);
        $columns = array_filter($columns, function($column) {
            return !in_array($column, ['id', 'created_at', 'updated_at']);
        });

        $columnsDefinition = array_map(function($column) {
            return "\$table->string('$column')->nullable();";
        }, $columns);

        $columnsDefinition = implode("\n            ", $columnsDefinition);

        return <<<EOD
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class $className extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('$tableName', function (Blueprint \$table) {
            \$table->id();
            $columnsDefinition
            \$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('$tableName');
    }
}
EOD;
    }

    /**
     * Generate the content of the seeder file.
     *
     * @param string $tableName
     * @return string
     */
    private function generateSeederContent($tableName)
    {
        $seederName = Str::studly($tableName) . 'Seeder';

        // Get existing data
        $data = DB::table($tableName)->get();
        $rows = $data->map(function($row) {
            return var_export((array) $row, true);
        })->implode(",\n            ");

        return <<<EOD
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class $seederName extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('$tableName')->insert([
            $rows
        ]);
    }
}
EOD;
    }
}
