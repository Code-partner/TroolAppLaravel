<?php

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

Route::get('/', function () {
    return view('index');
});

// Auth Routes
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/{slug}','ProductController@show')->name('product');
Route::get('/category/{id}','CategoryController@index')->name('category');
Route::get('/cart','CartController@index')->name('cart');
Route::post('/cart/add','CartController@store')->name('cart.add');
Route::get('/checkout','CheckoutController@index')->name('checkout');
Route::get('/contact','PageController@contact')->name('contact');


// Admin Routes

Route::middleware(['auth', 'role'])->group(function () {
    Route::group(['as'=>'admin.'],function (){
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->middleware('role')->name('dashboard');

//        Product Admin Routes

        Route::get('/admin/product', 'ProductController@index')->name('allProduct');
        Route::get('/admin/product/create', 'ProductController@create')->name('createProduct');
        Route::post('/admin/product/create', 'ProductController@store');
        Route::get('/admin/product/edit/{product}', 'ProductController@edit')->name('edit_product');
        Route::post('/admin/product/edit/{product}', 'ProductController@update');
        Route::post('/admin/product/delete/{product}', 'ProductController@destroy')->name('product.delete');
//        Users Admin Routes

//        Category Admin Controller
        Route::group(['as'=>'category','prefix'=>'/admin/categories'],function (){
            Route::get('/', 'AdminCategoryController@index');
            Route::post('/', 'AdminCategoryController@store');
        });
        Route::group(['as'=>'color','prefix'=>'/admin/colors'],function (){
            Route::get('/', 'ColorController@index');
            Route::post('/', 'ColorController@store');
        });
        Route::group(['as'=>'size','prefix'=>'/admin/sizes'],function (){
            Route::get('/', 'SizeController@index');
            Route::post('/', 'SizeController@store');
        });
        Route::get('/admin/inventory','InventoryController@index')->name('inventory');
        Route::post('/admin/inventory/update/{inventory}','InventoryController@update')->name('inventory.update');

        Route::get('/admin/images','ImagesController@index')->name('images');
        Route::post('/admin/images','ImagesController@store');
        Route::post('/admin/images/delete/{images}','ImagesController@destroy')->name('images.delete');
//        Order Admin Routes
        Route::group(['as'=>'order.'],function (){
            Route::get('/admin/orders','OrderController@index')->name('dashboard');
            Route::get('/admin/order/new',function (){
                return "New";
            });
            Route::get('/admin/order/shipped',function(){
                return 'Shipped';
            });
            Route::get('/admin/order/delivered',function (){
                return 'Delivered';
            });

        });
    });
});