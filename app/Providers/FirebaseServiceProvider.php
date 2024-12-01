<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class FirebaseServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $this->app->singleton('firebase', function ($app) {
//            $serviceAccount = ServiceAccount::fromJsonFile(base_path('storage/firebase/firebase.json'));
//            return (new Factory)
//                ->withServiceAccount($serviceAccount)
//                ->create();
//        });

//        $this->app->singleton('firebase', function ($app) {
//            $firebaseConfigPath = base_path('storage/firebase/firebase.json');
//
//            return (new Factory)
//                ->withServiceAccount($firebaseConfigPath)
//                ->create();
//        });

//        $this->app->singleton('firebase.database', function ($app) {
//            $firebaseConfigPath = base_path('storage/firebase/firebase.json');
//
//            $factory = (new Factory)->withServiceAccount($firebaseConfigPath);
//
//            return $factory->createDatabase();
//        });

        $this->app->singleton('firebase.database', function ($app) {
            $firebaseConfigPath = base_path('storage/firebase/firebase.json');

            $factory = (new Factory)
                ->withServiceAccount($firebaseConfigPath)
                ->withDatabaseUri('https://collateral-manager-f7cfa-default-rtdb.firebaseio.com'); // Use the correct database URL

            return $factory->createDatabase();
        });


    }

    public function boot()
    {
        //
    }
}

