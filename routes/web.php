<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;

// admin
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CoaController;
use App\Http\Controllers\admin\CostCenterController;

use App\Http\Controllers\admin\CompanyController; // sample
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\RolesController;
use App\Http\Controllers\admin\PermissionsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLoginForm'])
    ->middleware(\App\Http\Middleware\RedirectIfAuthenticated::class)
    ->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// admin access
Route::group([
    'middleware' => 'auth'
], function ($router) {

    $router->get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    $router->get('profile', [ProfileController::class, 'index'])->name('profile');
    $router->post('profile/store', [ProfileController::class, 'store'])->name('profile.store');

    // chart of account
    Route::group([
        'prefix' => 'coa',
    ], function ($router) {
        $router->get('/', [CoaController::class, 'index'])->name('coa.index');
        $router->get('data', [CoaController::class, 'getData'])->name('coa.data');
        $router->get('new', [CoaController::class, 'create'])->name('coa.create');
        $router->post('store', [CoaController::class, 'store'])->name('coa.store');
        $router->get('edit/{id}', [CoaController::class, 'edit'])->name('coa.edit');
        $router->get('delete/{id}', [CoaController::class, 'destroy'])->name('coa.delete');
    });

    // cost center
    Route::group([
        'prefix' => 'cost-center',
    ], function ($router) {
        $router->get('/', [CostCenterController::class, 'index'])->name('cost-center.index');
        $router->get('data', [CostCenterController::class, 'getData'])->name('cost-center.data');
        $router->get('new', [CostCenterController::class, 'create'])->name('cost-center.create');
        $router->post('store', [CostCenterController::class, 'store'])->name('cost-center.store');
        $router->get('edit/{id}', [CostCenterController::class, 'edit'])->name('cost-center.edit');
        $router->get('delete/{id}', [CostCenterController::class, 'destroy'])->name('cost-center.delete');
    });

    // sample
    Route::group([
        'prefix' => 'company',
    ], function ($router) {
        $router->get('/', [CompanyController::class, 'index'])->name('company.index');
        $router->get('data', [CompanyController::class, 'getData'])->name('company.data');
        $router->get('new', [CompanyController::class, 'create'])->name('company.create');
        $router->post('store', [CompanyController::class, 'store'])->name('company.store');
        $router->get('edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
        $router->get('delete/{id}', [CompanyController::class, 'destroy'])->name('company.delete');
    });


    // user
    Route::group([
        'prefix' => 'users',
    ], function ($router) {
        $router->get('/', [UsersController::class, 'index'])->name('users.index');
        $router->get('data', [UsersController::class, 'getData'])->name('users.data');
        $router->get('new', [UsersController::class, 'create'])->name('users.create');
        $router->post('store', [UsersController::class, 'store'])->name('pusers.store');
        $router->get('edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
        $router->get('delete/{id}', [UsersController::class, 'destroy'])->name('users.delete');
    });

    Route::group([
        'prefix' => 'roles',
    ], function ($router) {
        $router->get('/', [RolesController::class, 'index'])->name('roles.index');
        $router->get('data', [RolesController::class, 'getData'])->name('roles.data');
        $router->get('new', [RolesController::class, 'create'])->name('roles.create');
        $router->post('store', [RolesController::class, 'store'])->name('roles.store');
        $router->get('edit/{id}', [RolesController::class, 'edit'])->name('roles.edit');
        $router->get('delete/{id}', [RolesController::class, 'destroy'])->name('roles.delete');
    });

    Route::group([
        'prefix' => 'permissions',
    ], function ($router) {
        $router->get('/', [PermissionsController::class, 'index'])->name('permissions.index');
        $router->get('data', [PermissionsController::class, 'getData'])->name('permissions.data');
        $router->get('new', [PermissionsController::class, 'create'])->name('permissions.create');
        $router->post('store', [PermissionsController::class, 'store'])->name('permissions.store');
        $router->get('edit/{id}', [PermissionsController::class, 'edit'])->name('permissions.edit');
        $router->get('delete/{id}', [PermissionsController::class, 'destroy'])->name('permissions.delete');
    });

});
