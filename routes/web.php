<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'show']);
Route::get('/item/{id}', [ItemController::class, 'show']);
/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/admin-users',                            'Admin\AdminUsersController@index');
    Route::get('/admin/admin-users/create',                     'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users',                           'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit',           'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}',               'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}',             'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation','Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');
});

/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/items',                                  'Admin\ItemsController@index');
    Route::get('/admin/items/create',                           'Admin\ItemsController@create');
    Route::post('/admin/items',                                 'Admin\ItemsController@store');
    Route::get('/admin/items/{item}/edit',                      'Admin\ItemsController@edit')->name('admin/items/edit');
    Route::post('/admin/items/bulk-destroy',                    'Admin\ItemsController@bulkDestroy')->name('admin/items/bulk-destroy');
    Route::post('/admin/items/{item}',                          'Admin\ItemsController@update')->name('admin/items/update');
    Route::delete('/admin/items/{item}',                        'Admin\ItemsController@destroy')->name('admin/items/destroy');
});

Route::middleware(['web', 'admin'])->group(function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::post('/wysiwyg-media','WysiwygMediaUploadController@upload')->name('wysiwyg-upload');
    });
});