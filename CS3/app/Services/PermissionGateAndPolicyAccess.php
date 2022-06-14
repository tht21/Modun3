<?php
namespace App\Services;

use App\Policies\CategoryPolicy;
use App\Policies\ProductPolicy;
use Illuminate\Support\Facades\Gate;

class PermissionGateAndPolicyAccess {

    public function setGateAndPolicyAccess()
    {
        $this->defineGateCategory();
        $this->defineGateProduct();
    }

    public function defineGateCategory()
    {

        Gate::define('view_category', [CategoryPolicy::class, 'view']);
        Gate::define('create_category', [CategoryPolicy::class, 'create']);
        Gate::define('edit_category', [CategoryPolicy::class, 'update']);
        Gate::define('delete_category', [CategoryPolicy::class, 'update']);
    }
    public function defineGateProduct()
    {
//        Gate::define('view_product', [ProductPolicy::class, 'view']);
//        Gate::define('create_product', [ProductPolicy::class, 'create']);
        Gate::define('edit_product', [ProductPolicy::class, 'update']);
    //    Gate::define('delete_product', [ProductPolicy::class, 'update']);
    }


}

