<?php

// here we write all admin releted route...........................................

Route::post('admin-login','Admin\LoginController@login')->name('admin.login');
Route::get('admin-login','Admin\LoginController@adminlogin')->name('admin.login.get');
Route::get('admin-forgot-password','Admin\ForgotPasswordController@adminLinkRequestForm')->name('admin.forgot.password');
Route::post('admin-password-mail','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password-reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password-update','Admin\ResetPasswordController@reset')->name('admin.password.update');



Route::group(['middleware'=>'auth:admin'],function(){

    Route::get('dashboard','AdminController@dashboard')->name('admin.dashboard'); 
    Route::get('admin-logout','AdminController@logout')->name('admin.logout');

    // Ex-Student Route

    Route::get('all-ex-student','Admin\UserController@index')->name('admin.index.ex.student'); 
    Route::get('create-ex-student','Admin\UserController@create')->name('admin.create.ex.student'); 
    Route::post('store-ex-student','Admin\UserController@store')->name('admin.store.ex.student'); 
    Route::get('edit-ex-student/{id}','Admin\UserController@edit'); 
    Route::post('update-ex-student','Admin\UserController@update')->name('admin.update.ex.student');
    Route::get('view-ex-student/{id}','Admin\UserController@view');
    Route::get('delete-ex-student/{id}','Admin\UserController@delete'); 

// Notice Route
    Route::get('all-notice','Admin\noticeController@index')->name('admin.index.notice'); 
    Route::get('create-notice','Admin\noticeController@create')->name('admin.create.notice'); 
    Route::post('store-notice','Admin\noticeController@store')->name('admin.store.notice'); 
    Route::get('edit-notice/{id}','Admin\noticeController@edit'); 
    Route::post('update-notice','Admin\noticeController@update')->name('admin.update.notice');
    Route::get('view-notice/{id}','Admin\noticeController@view');
    Route::get('delete-notice/{id}','Admin\noticeController@delete'); 


// Event Route
    Route::get('all-event','Admin\eventController@index')->name('admin.index.event'); 
    Route::get('create-event','Admin\eventController@create')->name('admin.create.event'); 
    Route::post('store-event','Admin\eventController@store')->name('admin.store.event'); 
    Route::get('edit-event/{id}','Admin\eventController@edit'); 
    Route::post('update-event','Admin\eventController@update')->name('admin.update.event');
    Route::get('view-event/{id}','Admin\eventController@view');
    Route::get('delete-event/{id}','Admin\eventController@delete'); 



















    Route::get('all/verify/request','Admin\UserController@showVerifyRequest')->name('admin.show.all.verify.request'); // show all verify request
    Route::get('verified/user','Admin\UserController@showVerifiedUser')->name('admin.show.verified.user'); // show verified user

    Route::get('view/user/{id}','Admin\UserController@viewSingleUser');
    Route::get('view/veriry/request/{id}','Admin\UserController@viewSingleVerifyRequest'); // view Single Verify Request



    Route::get('/unblock/user/{id}','Admin\UserController@unblockUser'); // block or unblock user
    Route::get('/block/user/{id}','Admin\UserController@blockUser'); // block or unblock user

    Route::get('/unverify/user/{id}','Admin\UserController@unverifyUser'); // verify or unverify user
    Route::get('/verify/user/{id}','Admin\UserController@verifyUser'); // verify or unverify user

// admin show,add,edit,update,delete city route....... 
    Route::get('all/city','Admin\CityController@showAllCity')->name('admin.show.all.city'); // show all city
    Route::post('store/city','Admin\CityController@storeCity')->name('admin.store.city'); // add new city
    Route::get('/edit/city/{id}','Admin\CityController@editCity'); // show editbale city with form    
    Route::post('/update/city/','Admin\CityController@updateCity')->name('admin.update.city'); // update city
    Route::get('/delete/city/{id}','Admin\CityController@deleteCity'); // delete city    

// GeekCategory show,add,edit,update route.............................. 
    Route::get('all/geekcategory','Admin\GeekCategoryController@showAllGeekCategory')->name('admin.show.all.geekcategory'); // show all city
    Route::post('store/geekcategory','Admin\GeekCategoryController@storeGeekCategory')->name('admin.store.geekcategory'); // add new city
    Route::get('/edit/geekcategory/{id}','Admin\GeekCategoryController@editGeekCategory'); // show editbale city with form    
    Route::post('/update/geekcategory/','Admin\GeekCategoryController@updateGeekCategory')->name('admin.update.geekcategory'); // update city
    Route::get('/delete/geekcategory/{id}','Admin\GeekCategoryController@deleteGeekCategory'); // delete city    

// Geek show,add,edit,update route.............................. 
    Route::get('all/geek','Admin\GeekController@showAllGeek')->name('admin.show.all.geek'); // show all geeks
    Route::get('suspended/geek','Admin\GeekController@showSuspendedGeek')->name('admin.show.suspended.geek'); // show all geeks
    Route::get('view/geek/{id}','Admin\GeekController@viewSingleGeek'); // view single geek
    Route::get('/edit/geek/{id}','Admin\GeekController@editGeek'); // show geek edit from  
    Route::post('/update/geek/','Admin\GeekController@updateGeek')->name('admin.update.geek'); // update geek by admin
    Route::get('/block/geek/{id}','Admin\GeekController@blockGeek'); // block geek 
    Route::get('/unblock/geek/{id}','Admin\GeekController@unblockGeek'); // unblock geek 
    Route::get('/show/geek/{id}','Admin\GeekController@showGeek'); // shokw geek 
    Route::get('/hide/geek/{id}','Admin\GeekController@hideGeek'); // hide geek 

    // Order show,add,edit,update route.............................. 
    Route::get('show/all/order','Admin\OrderController@showAllOrder')->name('admin.show.all.order'); // show all order
    Route::get('show/cancle/order','Admin\OrderController@showCancleOrder')->name('admin.show.cancle.order'); // show cancle order
    Route::get('view/order/{id}','Admin\OrderController@viewSingleOrder'); // view single order

    Route::get('/block/order/{id}','Admin\OrderController@blockOrder'); // block order 
    Route::get('/unblock/order/{id}','Admin\OrderController@unblockOrder'); // unblock order  


    // General Setting
    Route::get('general/setting','Admin\SettingController@generalSetting')->name('admin.general.setting'); /// general setting
    Route::post('update/general/setting','Admin\SettingController@updateGeneralSetting')->name('admin.update.general.setting');

    // geek setting
    Route::get('geek/setting','Admin\SettingController@geekSetting')->name('admin.geek.setting'); 
    Route::post('update/geek/setting','Admin\SettingController@updateGeekSetting')->name('admin.update.geek.setting'); 

    // color setting
    Route::get('color/setting','Admin\SettingController@colorSetting')->name('admin.color.setting'); 
    Route::post('update/color/setting','Admin\SettingController@updateColorSetting')->name('admin.update.color.setting'); 

    

});

?>





