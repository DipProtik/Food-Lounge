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


// ::-> Routes For Website Front End

Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@index')->name('homepage');




Route::get('/menu','HomeController@getMenu')->name('menu');
Route::get('/galleries','HomeController@getGalleries')->name('galleries');



// ::-> Routes For Reservation
Route::get('/reservation','HomeController@getReservation')->name('reservation');
Route::post('/reservation','HomeController@postReservation')->name('reservation.submit');
Route::get('/reservation/confirm/{res_id}','HomeController@confirmReservation')->name('reservation.confirm');
Route::post('/reservation/confirm/','HomeController@confirmReservationSubmit')->name('reservation.confirm.submit');


// ::-> Routes For Contact Page
Route::get('/contact','HomeController@getContact')->name('contact');
Route::post('/contact','HomeController@postContact')->name('contact.submit');



// ::-> Routes For Cart Page
Route::get('/cart','DishController@getCart')->name('cart');
Route::post('/add-to-cart','DishController@addTocart')->name('addTocart');
Route::post('/update-dish-Cart','DishController@updateCart')->name('updateCart');
Route::post('/delete-dish-form-cart','DishController@deleteFromCart')->name('deleteFromCart');


// ::-> Routes For Billing & Shipping Page Page
Route::get('/checkout-info','DishController@checkoutInfo')->name('checkout.info');
Route::post('/checkout-info','DishController@postCheckoutInfo')->name('checkout.info.submit');
Route::get('/checkout-info-update','DishController@UpdatecheckoutInfo')->name('checkout.info.update');



// ::-> Routes For Checkout Page
Route::get('/checkout','DishController@getChecout')->name('checkout');
Route::post('/checkout-bkash','DishController@checkoutWithBkash')->name('checkout.bkash.submit');
Route::post('/checkout-cod','DishController@checkoutWithCOD')->name('checkout.cod.submit');



// ::-> Routes For Users
Auth::routes();


Route::prefix('users')->group(function(){
   Route::get('/logout','Auth\LoginController@logout')->name('user.logout');
   Route::get('/profile','UserController@index')->name('user.profile');
   Route::get('/orders','UserController@getOrders')->name('user.orders');
   Route::get('/orders/{order_id}','UserController@getSingleOrder')->name('user-single-order');
   Route::get('/profile/update/', 'UserController@viewUpdateUser')->name('user.update');
   Route::post('/profile/update', 'UserController@UpdateUser')->name('user.update.submit');   
});






// ::-> Routes For Admin Panel

Route::prefix('admin')->group(function(){

   // ::-> Routes For Admin Login And Register
   Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
   Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

   Route::get('/register','AdminController@register')->name('admin.register');
   Route::post('/register','AdminController@postRegister')->name('admin.register.submit');



   // ::-> Routes For Password Resets
   Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
   Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
   Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
   Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
   



   // ::-> Routes For Logged-in Admin
   Route::get('/', 'AdminController@index')->name('admin');
   Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

   Route::get('/profile', 'AdminController@getAdmin')->name('admin.profile');
   
   Route::get('/profile/update/', 'AdminController@viewUpdateUser')->name('admin.profile.update');
   Route::post('/profile/update/', 'AdminController@UpdateAdmin')->name('admin.profile.update.submit');


   // ::-> Routes For All Admins
   Route::get('/admins', 'AdminController@getAllAdmins')->name('admin.admins');
   Route::get('/admins/profile/{admin_id}', 'AdminController@viewUser')->name('admin.admins.profile');
   Route::get('/delete-admin/{admin_id}','AdminController@deleteAdmin')->name('delete.admin');


   //::-> Routes For Admin Home Page

   Route::get('/home', 'AdminController@getHome')->name('admin.home');

   


   //::-> Routes For Admin Home Page - Most Loved Dish
   Route::post('add-to-loved-dish','AdminController@addLovedDish')->name('add.to.lovedDish');
   Route::get('remove-loved-dish/{dish_id}','AdminController@removeLovedDish')->name('remove.lovedDish');


   //::-> Routes For Admin Home Page - Chef Special Dish
   Route::post('add-to-chef-special','AdminController@addChefSpecial')->name('add.to.chefspecial');
   Route::get('remove-chef-special/{dish_id}','AdminController@removeChefSpecial')->name('remove.chefSpecial');


   

   //::-> Routes For Admin Customers Page
   Route::get('/customers', 'AdminController@getCustomers')->name('admin.customers');
   Route::get('/customers/profile/{id}', 'AdminController@getSingleCustomer')->name('view.customer'); 
   Route::get('/customers/delete/{id}', 'AdminController@deleteCustomer')->name('delete.customer');



   //::-> Routes For Admin Gallery Page
   Route::get('/galleries', 'AdminController@getGalleries')->name('admin.galleries');
   Route::post('/add-new-photo','AdminController@addNewPhoto')->name('add.new.photo');
  
   Route::get('/delete-photo/{id}','AdminController@deletePhoto')->name('delete.photo');
   Route::post('/edit-photo','AdminController@getEditPhoto')->name('edit.photo');
   Route::post('/edit-photo-submit','AdminController@editPhoto')->name('edit.photo.submit');


   //::-> Routes For Admin Website Details Page
   Route::get('/website-details', 'AdminController@getDetails')->name('admin.details');
   Route::get('/update-website-details', 'AdminController@viewUpdateDetails')->name('admin.details.update');
   Route::post('/update-website-details', 'AdminController@updateDetails')->name('details.update.submit');


   //::-> Routes For Admin Dish Page -- Dishes
   Route::get('/dish', 'AdminController@getDish')->name('admin.dish');
   Route::post('/add-new-dish', 'AdminController@addNewDish')->name('add.dish');

   Route::post('/edit-dish', 'AdminController@editDish')->name('edit.dish');
   Route::post('/edit-dish-submit', 'AdminController@editDishSubmit')->name('edit.dish.submit');
   Route::get('/delete-dish/{id}', 'AdminController@deleteDish')->name('dish.delete');



   //::-> Routes For Admin Dish Page -- Categories
   Route::post('/add-new-dish-category', 'AdminController@addNewDishCategory')->name('add.dish-category');
   Route::get('/delete-dish-category/{id}', 'AdminController@deleteDishCategory')->name('dish.category.delete');
   Route::post('/edit-dish-category', 'AdminController@editDishCategory')->name('edit.dish.category');
   Route::post('/update-dish-category', 'AdminController@UpdateDishCategory')->name('update.category');



   Route::post('/website/status', 'AdminController@websiteStatus')->name('website.status');



   
   //::-> Routes For Admin Order Page
   Route::get('/orders', 'AdminController@getOrders')->name('admin.orders');
   Route::get('/orders-single-category', 'AdminController@getSingleOrderCategory')->name('admin.orders.single');

   Route::get('/orders/{order_id}','AdminController@getSingleOrder')->name('admin-view-order');
   Route::get('/orders/update/{order_id}','AdminController@updateOrderStatus')->name('update-order-status');
   Route::get('/orders/delete/{order_id}','AdminController@deleteOrder')->name('delete.order');




   //::-> Routes For Admin Reservation Page
   Route::get('/reservations', 'AdminController@getReservations')->name('admin.reservations');
   Route::post('/reservations', 'AdminController@getReservationsbyDate')->name('reservation.date.submit');
   Route::post('/orders', 'AdminController@getordersbyDate')->name('order.date.submit');


   Route::get('/update-reservation/{id}', 'AdminController@updateReservation')->name('update.status.reservation');
   Route::get('/delete-reservation/{id}', 'AdminController@deleteReservation')->name('delete.reservation');


   //::-> Routes For Admin Invoice Page
   Route::get('/view-invoice/{id}', 'AdminController@viewInvoice')->name('invoice.view');
   Route::get('/send-invoice/{order_id}','AdminController@sendInvoice')->name('send.invoice');

   
   //::-> Routes For Admin Contact Page
   Route::get('/messages', 'AdminController@getMessages')->name('admin.messages');
   Route::post('/messages', 'AdminController@showMessage')->name('admin.messages.show');
   Route::get('/deleteContact/{id}','AdminController@deleteMessages')->name('contact.delete');

});
