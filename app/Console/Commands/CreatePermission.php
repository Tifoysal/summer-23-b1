<?php

namespace App\Console\Commands;

use App\Models\Order;
use App\Models\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class CreatePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create all routes as a permission into permission table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $routes = Route::getRoutes();
        foreach($routes as $route)
        {
            if($route->getPrefix()=='/admin'){

               Permission::updateOrCreate([
                'name'=>str_replace("."," ",$route->getName()),
                'slug'=>$route->getName(),
               ]);

            }
           
        }

        echo "all permission store successfully.";
    }

}
