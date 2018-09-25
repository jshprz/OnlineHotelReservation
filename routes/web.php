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


Route::get('404',function(){
   return view('errors/404'); 
})->name('404');

Route::group(['middleware'=>'guest'], function(){

Route::get('/', 'HomeController@homePage');
Route::get('/guest/password/email',function(){
return view('membership.forgot_password');
});
Route::post('/guest/password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('/guest/password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('/guest/password/reset', [
  'as' => '',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('/guest/password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
Route::get('/guest/amenities','HomeController@amenitiesPage')->name('amenitiesPage');
Route::get('/guest/register','Auth\RegisterController@index')->name('register');
Route::post('/guest/login',[
'uses'=>'Auth\LoginController@dologin',
'as'=>'login'
]);
Route::get('/guest/register/confirm/{token}','Auth\RegisterController@confirmEmail')->name('confirmation');
Route::get('/guest/login', 'Auth\LoginController@index')->name('login');
Route::get('/guest/gallery', function () {
    return view('gallery/index');
})->name('gallery');
Route::get('/guest/about_us', function () {
    return view('master/aboutus');
})->name('about_us');
Route::get('/guest/contactus','HomeController@getContactus')->name('contactus');
Route::get('/guest/aboutus','HomeController@getAboutus')->name('aboutus');
Route::post('/guest/register','Auth\RegisterController@register')->name('goregister');
Route::get('/guest/reviews','HomeController@viewfeedbackPage')->name('viewfeedbackPage');
Route::get('/guest/allreviews','HomeController@viewallfeedbackPage')->name('viewallfeedbackPage');
});
Route::group(['middleware'=>'auth'], function(){
Route::get('/user/reviews','UserController@viewfeedbackPage')->name('reviews');
Route::get('/user/feedback','UserController@writefeedbackPage')->name('feedback');
Route::post('/user/feedback','UserController@sendFeedback')->name('sendfeedback');
Route::get('/user/account-user','UserController@getnotification')->name('dashboard');
Route::get('/user/trashnotification','UserController@trashnotif')->name('trashnotif');
Route::get('/user/logout','Auth\LoginController@logout')->name('logout');
Route::get('/user/setting','UserController@gotoSettings')->name('setting');
Route::post('/user/setting','UserController@updateUser')->name('update');
Route::get('/user/room/reserve','ReserveController@checkAvailabilityForm')->name('room_availability');
Route::get('/user/view-notification','UserController@viewNotification')->name('notification');


Route::get('/user/room/availability','ReserveController@checkAvailability')->name('availability');
Route::get('/user/room/reserve/info','ReserveController@index')->name('book');
Route::get('/user/room/reserve/status','PayWithPaypalController@getPaymentStatus')->name('status');
Route::get('/user/room/reserve/payment','PayWithPaypalController@payWithPaypal')->name('payment');
Route::get('/user/reserve','ReserveController@reserve')->name('requestReserve');
});

Route::group(['middleware' => ['admin']], function () {
   Route::get('/admin/dashboard','AdminController@index')->name('admin');
   Route::get('/admin/users','AdminController@usersPage')->name('users');
   Route::get('/admin/banned','AdminController@bannedUserPage')->name('bannedUser');
   Route::get('/admin/room','AdminController@roomsPage')->name('rooms');
   Route::get('/admin/image','AdminController@imagePage')->name('image');
   Route::get('/admin/customer','AdminController@customerPage')->name('customer');
   Route::get('/admin/setting','AdminController@settingPage')->name('setting');
   Route::get('/admin/unconfirmed','AdminController@unconfirmedUser')->name('unconfirmedUser'); 
   Route::get('/admin/ban','AdminController@banUser')->name('ban');
   Route::get('/admin/unban','AdminController@unbanUser')->name('unban');
   Route::get('/admin/searched/user','AdminController@searchUser')->name('searchUser');
   Route::get('/admin/searched/room','AdminController@searchRoom')->name('searchRoom');
   Route::get('/admin/searched/customer','AdminController@searchCustomer')->name('searchCustomer');
   
   Route::post('/admin/setting/sitename','AdminController@postSitename')->name('postsitename');
   Route::post('/admin/setting/siteemail','AdminController@postEmail')->name('postemail');
   Route::post('/admin/setting/sitemobile','AdminController@postMobile')->name('postmobile');
   Route::post('/admin/setting/sitetelephone','AdminController@postTelephone')->name('posttelephone');
   Route::post('/admin/setting/aboutus','AdminController@postAboutus')->name('postaboutus');
   Route::post('/admin/image/upload','AdminController@imageUpload')->name('addimage');
   Route::post('/admin/edit/user','AdminController@editUser')->name('updateAdmin');
   Route::post('/admin/edit/room','AdminController@editRoom')->name('updateRoom');
   Route::post('/admin/add/room','AdminController@addRoom')->name('addRoom');
   Route::post('/admin/background/change','AdminController@backgroundChange')->name('backgroundChange');
   Route::post('/admin/logo/change','AdminController@logoChange')->name('logoChange');
});
Route::group(['middleware' => ['frontdesk']], function () {
    Route::get('/frontdesk','FrontdeskController@index')->name('frontdesk');
    Route::get('/endduration','FrontdeskController@endDuration')->name('endDuration');
    Route::get('/disapprove','FrontdeskController@disapprove')->name('disapprove');
});
