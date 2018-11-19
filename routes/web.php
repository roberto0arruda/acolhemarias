<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function() {
    $this->get('admin', 'HomeController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Admin'] , function () {
    Route::resource('rooms', 'RoomsController');
    Route::post('rooms_mass_destroy', ['uses' => 'RoomsController@massDestroy', 'as' => 'rooms.mass_destroy']);

    // Settings
    Route::resource('settings/permissions', 'Settings\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Settings\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('settings/roles', 'Settings\RolesController');

    Route::resource('settings/users', 'Settings\UsersController');
});