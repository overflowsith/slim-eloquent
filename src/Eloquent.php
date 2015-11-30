<?php

namespace Overflowsith\SlimEloquent;

use Illuminate\Database\Capsule\Manager as Capsule;

class Eloquent
{
    public static function boot(array $dbSettings = [])
    {
        if (count($dbSettings) === 0) {
            $dbSettings = require __DIR__ . '/../config/database.php';
        }
        $capsule = new Capsule;
        $capsule->addConnection($dbSettings);
        $capsule->bootEloquent();
    }
}
