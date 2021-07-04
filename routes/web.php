<?php


Route::get('/', 'HomeController@index');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');


/*===============   Admin    ===================*/
Route::resource('user' ,'UserController');
Route::get('change-status/{id}', 'UserController@change_status');
Route::post('change-pass', 'UserController@change_pass');

/*===============   Member   ===================*/
Route::resource('member' ,'MemberController');

/*===============   Cash In   ===================*/
Route::get('cash-in', 'CashInController@index');
Route::get('cash-in/create', 'CashInController@create');
Route::post('cash-in/store', 'CashInController@store');

/*===============   Cash Out   ===================*/
Route::get('cash-out', 'CashOutController@index');
Route::get('cash-out/create', 'CashOutController@create');
Route::post('cash-out/store', 'CashOutController@store');

/*===============   Reports   ===================*/
Route::get('/reports/create', 'ReportController@create');
Route::post('reports', 'ReportController@index');
Route::post('reports-pdf', 'ReportController@reports_pdf');

/*===============   Investments   ===================*/
Route::get('/investments', 'InvestmentController@index');
Route::get('/investments/create', 'InvestmentController@create');
Route::post('/investments/store', 'InvestmentController@store');

/*===============   Bank Balance   ===================*/
Route::get('/bank-balance', 'BankBalanceController@index');
Route::get('/bank-balance/edit', 'BankBalanceController@edit');
Route::post('/bank-balance/update', 'BankBalanceController@update');

