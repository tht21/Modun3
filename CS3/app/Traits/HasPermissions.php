<?php

namespace App\Traits;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

trait HasPermissions
{
    protected $permissionList = null;

    public function userCan($permission = null)
    {
        return $this->hasPermission($permission);

    }

    public function hasPermission($permission = null)
    {
       // var_dump($permission);
        if (is_null($permission)) {
            return $this->getPermissions()->count() > 0;
        }

        if (is_string($permission)) {
            return $this->getPermissions()->contains('keycode', $permission);
        }

        return false;
    }

    private function getPermissions()
    {
        $this->permissionList = [];
        foreach ($this->roles as $role) {
            //  var_dump($role->permissions->toArray());
            foreach ($role->permissions as $permission) {
                $this->permissionList[] = $permission;
            }
        }
        $this->permissionList = collect($this->permissionList);

        //   return collect();
//        dd(__method__);
//        $this->permissionList = $this->roles->permissions;
        return $this->permissionList ?? collect();
    }
}
