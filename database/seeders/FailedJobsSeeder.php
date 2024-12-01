<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FailedJobsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('failed_jobs')->insert([
            array (
  'id' => 1,
  'uuid' => '0333e1fa-af40-4aae-8147-24bca4727c84',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"0333e1fa-af40-4aae-8147-24bca4727c84","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'ErrorException: Attempt to read property "loan_account_number" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()
#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()
#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()
#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()
#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()
#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#37 {main}',
  'failed_at' => '2023-11-27 22:25:36',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
),
            array (
  'id' => 2,
  'uuid' => 'b5950fc5-fb74-49e6-b153-a19a77864ec3',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"b5950fc5-fb74-49e6-b153-a19a77864ec3","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'ErrorException: Attempt to read property "loan_account_number" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()
#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()
#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()
#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()
#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()
#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#37 {main}',
  'failed_at' => '2023-11-27 22:25:36',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
),
            array (
  'id' => 3,
  'uuid' => '307e9bfc-02e7-4199-a037-d91c3d03ac1a',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"307e9bfc-02e7-4199-a037-d91c3d03ac1a","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'ErrorException: Attempt to read property "loan_account_number" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()
#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()
#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()
#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()
#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()
#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#37 {main}',
  'failed_at' => '2023-11-27 22:25:36',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
),
            array (
  'id' => 4,
  'uuid' => '5d74c720-97be-4af6-9d90-a5db798714c1',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"5d74c720-97be-4af6-9d90-a5db798714c1","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'ErrorException: Attempt to read property "loan_account_number" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()
#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()
#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()
#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()
#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()
#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#37 {main}',
  'failed_at' => '2023-11-27 22:25:36',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
),
            array (
  'id' => 5,
  'uuid' => '7e8d229a-0a8b-4e26-b962-ea4749e311b4',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"7e8d229a-0a8b-4e26-b962-ea4749e311b4","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'ErrorException: Attempt to read property "loan_account_number" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()
#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()
#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()
#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()
#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()
#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#37 {main}',
  'failed_at' => '2023-11-27 22:25:36',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
),
            array (
  'id' => 6,
  'uuid' => 'b0e853bb-4593-4e14-96b1-9962f8e6c183',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"b0e853bb-4593-4e14-96b1-9962f8e6c183","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'ErrorException: Attempt to read property "loan_account_number" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()
#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()
#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()
#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()
#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()
#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#37 {main}',
  'failed_at' => '2023-11-27 22:25:36',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
),
            array (
  'id' => 7,
  'uuid' => 'c48eb889-fbe1-433f-b84e-554a3f97da86',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"c48eb889-fbe1-433f-b84e-554a3f97da86","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'ErrorException: Attempt to read property "loan_account_number" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()
#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()
#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()
#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()
#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()
#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#37 {main}',
  'failed_at' => '2023-11-27 22:25:54',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
),
            array (
  'id' => 8,
  'uuid' => 'cf4aacce-f6a7-43da-b657-c5f67756e79b',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"cf4aacce-f6a7-43da-b657-c5f67756e79b","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'ErrorException: Attempt to read property "loan_account_number" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()
#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()
#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()
#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()
#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()
#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()
#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#37 {main}',
  'failed_at' => '2023-11-27 22:28:09',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
),
            array (
  'id' => 9,
  'uuid' => 'a09cf548-4833-4369-a024-40eddabdacb2',
  'connection' => 'database',
  'queue' => 'default',
  'payload' => '{"uuid":"a09cf548-4833-4369-a024-40eddabdacb2","displayName":"App\\\\Jobs\\\\EndOfDay","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\EndOfDay","command":"O:17:\\"App\\\\Jobs\\\\EndOfDay\\":0:{}"}}',
  'exception' => 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\EndOfDay has been attempted too many times or run too long. The job may have previously timed out. in /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php:746
Stack trace:
#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(505): Illuminate\\Queue\\Worker->maxAttemptsExceededException()
#1 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(414): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts()
#2 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()
#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()
#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()
#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()
#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()
#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()
#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()
#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()
#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()
#12 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()
#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()
#14 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()
#15 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()
#16 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()
#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()
#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()
#19 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()
#20 {main}',
  'failed_at' => '2023-12-15 14:50:30',
  'user_id' => NULL,
  'ip_address' => NULL,
  'type' => NULL,
  'username' => NULL,
  'email' => NULL,
)
        ]);
    }
}