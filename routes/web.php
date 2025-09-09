<?php

use App\Http\Controllers\Admin\BookPrice\BookPriceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 *
 *  Website Controllers List
 *
 * **/

use App\Http\Controllers\Website\Book\BookController;
use App\Http\Controllers\Website\Cart\CartController;
use App\Http\Controllers\Website\Profile\ProfileController;


/**
 *
 *  Admin Panel Controllers List
 *
 * **/

use App\Http\Controllers\Admin\Books\BooksController;

use App\Http\Controllers\Admin\Dashboard\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\ShippingPrice\ShippingPriceController;
use App\Http\Controllers\Website\CheckOut\CheckOutController;
use App\Http\Controllers\Website\Home\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/**
 *
 *
 *      Website Routes
 *
 *
 **/

// Route::get('/', function () {
//     return view('website.home.index');
// });

Route::controller(HomeController::class)->group(
    function ()
    {
        Route::get('/','index');
    }
);


/**  Loading book Listing Route  **/
Route::controller(BookController::class)->group(
    function ()
    {
        Route::get('/all-books','books')->name('books');
        Route::get('/book-detail/{id}','BookDetail')->name('book-detail');
    }
);


/**  Loading add to Cart Route  **/

Route::middleware(['auth'])->group(function(){
    Route::controller(CartController::class)->group(function(){
        Route::post('/add-to-cart','addTOCart');
        Route::get('/cart-items','cartItem')->name('cart-item');
        Route::get('/delete-cart','destroy')->name('cart-delete-cart');
        Route::post('/update-cart','updateCart')->name('cart-update-cart');
    });

    /**  Loading Checkout route  **/
    Route::controller(CheckOutController::class)->group(function(){
        Route::get('/checkout','checkOut')->name('cart-checkout');
        Route::post('/place-order','placeOrder')->name('cart-place-order');
        Route::get('/order-slip','orderSlip')->name('cart-orderSlip');
    });

    /** Loading Profile Route with Orders List **/
    Route::resource('profile', ProfileController::class);

});











/**
 *
 *
 *      Admin Panel Routes With Gurad Middleware
 *
 * **/

Route::group(['prefix' => '/admin', 'as' => 'admin.'],function (){

    /** Loading Admin Login Route **/
    Route::match(['get','post'],'/',[AdminController::class,'adminLogin']);

    /**  Loading Protected Routes  **/
    Route::group(['middleware'=> 'admin'],function (){

        Route::controller(AdminController::class)->group(function(){
            /** Loading Dashboard Route **/
            Route::get('/dashboard','dashboard');
            /** Loading Admin Logout Route **/
            Route::get('/admin-logout','logout');
        });

        /*Supliment Resource Route*/
        Route::controller(CategoryController::class)->group(function(){
            Route::get('categoris/get-parent-categories', 'getParentCategories')->name('categories.get-parent-categories');
        });
        /** Loading Categorires Route **/
        Route::resource('categories', CategoryController::class);
        /** Loading Categories Level Dependent Route **/
        Route::get('check-level',[CategoryController::class,'checkLevel']);

        /** Loading Books Route **/
        Route::resource('books', BooksController::class);
        Route::controller(BooksController::class)->group(function()
        {
            Route::post('/status-update','statusUpdate')->name('books.status-update');
            Route::post('/publish-update','statusPublish')->name('books.publish-update');
            Route::post('/recommend-update','statusRecommend')->name('books.recommend-update');
        });

        /**  loading book Price Route  **/
        Route::resource('book-prices', BookPriceController::class);
        Route::resource('shipping-prices', ShippingPriceController::class);
        Route::resource('orders', OrderController::class);



    });

});
