<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('fa\model\repository\contract\IUserRepositoryInterface', 'fa\model\repository\UserRepository');
        $this->app->bind('fa\model\repository\contract\IRoleRepositoryInterface', 'fa\model\repository\RoleRepository');
        $this->app->bind('fa\model\repository\contract\IPermissionRepositoryInterface', 'fa\model\repository\PermissionRepository');
        $this->app->bind('fa\model\repository\contract\IUserRoleRepositoryInterface', 'fa\model\repository\UserRoleRepository');
        $this->app->bind('fa\model\repository\contract\IPermissionRoleRepositoryInterface', 'fa\model\repository\PermissionRoleRepository');
        
        $this->app->bind('fa\model\repository\contract\IAddressRepositoryInterface', 'fa\model\repository\AddressRepository');
        $this->app->bind('fa\model\repository\contract\IDepartmentRepositoryInterface', 'fa\model\repository\DepartmentRepository');
        $this->app->bind('fa\model\repository\contract\IEmployeeRepositoryInterface', 'fa\model\repository\EmployeeRepository');
        $this->app->bind('fa\model\repository\contract\ICompanyRepositoryInterface', 'fa\model\repository\CompanyRepository');
        $this->app->bind('fa\model\repository\contract\ISiteRepositoryInterface', 'fa\model\repository\SiteRepository');
        $this->app->bind('fa\model\repository\contract\IAreaRepositoryInterface', 'fa\model\repository\AreaRepository');
    }
}
