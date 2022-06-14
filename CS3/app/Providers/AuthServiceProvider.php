<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use App\Policies\CategoryPolicy;
use App\Services\PermissionGateAndPolicyAccess;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        //   Category::class => CategoryPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
         // Define permission
        $permissionGateAndPolicy = new PermissionGateAndPolicyAccess();
        $permissionGateAndPolicy->setGateAndPolicyAccess();


    }
}
