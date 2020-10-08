<?php
Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::post('user-login', 'HomeController@userLogin');
Route::get('user-logout', function(){
    Auth::logout();
    return redirect('/');
});
Route::post('post-question', 'MessageController@postQuestion');
Route::post('contactform', 'HomeController@contactUs');

Route::post('msgsubscription', 'HomeController@msgFrDaySub');

Route::resource('messages', 'MessageController')->middleware(['auth']);
Route::get('contactformsubmissions', 'HomeController@contactFormSubmissions')->middleware(['auth']);
Route::get('letters', 'MessageController@letters')->middleware(['auth']);
Route::get('msg-users', 'MessageController@subscibedUsers')->middleware(['auth']);

Route::post('business-user-home', 'HomeController@businessUserHome')->middleware(['auth']);
Route::get('/user-home', 'HomeController@businessUserHome')->middleware(['auth']);
Route::get('/admin-home', 'HomeController@AdminUserHome')->middleware(['auth']);







