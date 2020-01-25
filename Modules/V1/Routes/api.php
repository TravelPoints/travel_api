<?php
// >>>routes>>>
// Tour routes
Route::group(['prefix' => 'v1', 'namespace' => '\\Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/tour/bulk', 'TourController@createBulk');
    Route::patch('/tour/bulk', 'TourController@updateBulk');
    Route::delete('/tour/bulk', 'TourController@deleteBulk');
    // basic routes
    Route::options('/tour', 'TourController@options');
    Route::get('/tour', 'TourController@index');
    Route::get('/tour/{id}', 'TourController@view');
    Route::post('/tour', 'TourController@create');
    Route::patch('/tour/{id}', 'TourController@update');
    Route::delete('/tour/{id}', 'TourController@delete');
    // relation routes
    Route::get('/tour/{id}/{related}', 'TourController@related');
    Route::get('/tour/{id}/relationships/{relations}', 'TourController@relations');
    Route::post('/tour/{id}/relationships/{relations}', 'TourController@createRelations');
    Route::patch('/tour/{id}/relationships/{relations}', 'TourController@updateRelations');
    Route::delete('/tour/{id}/relationships/{relations}', 'TourController@deleteRelations');
});
// <<<routes<<<

// >>>routes>>>
// TourGuides routes
Route::group(['prefix' => 'v1', 'namespace' => '\\Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/tour_guides/bulk', 'TourGuidesController@createBulk');
    Route::patch('/tour_guides/bulk', 'TourGuidesController@updateBulk');
    Route::delete('/tour_guides/bulk', 'TourGuidesController@deleteBulk');
    // basic routes
    Route::options('/tour_guides', 'TourGuidesController@options');
    Route::get('/tour_guides', 'TourGuidesController@index');
    Route::get('/tour_guides/{id}', 'TourGuidesController@view');
    Route::post('/tour_guides', 'TourGuidesController@create');
    Route::patch('/tour_guides/{id}', 'TourGuidesController@update');
    Route::delete('/tour_guides/{id}', 'TourGuidesController@delete');
    // relation routes
    Route::get('/tour_guides/{id}/{related}', 'TourGuidesController@related');
    Route::get('/tour_guides/{id}/relationships/{relations}', 'TourGuidesController@relations');
    Route::post('/tour_guides/{id}/relationships/{relations}', 'TourGuidesController@createRelations');
    Route::patch('/tour_guides/{id}/relationships/{relations}', 'TourGuidesController@updateRelations');
    Route::delete('/tour_guides/{id}/relationships/{relations}', 'TourGuidesController@deleteRelations');
});
// <<<routes<<<

// >>>routes>>>
// User routes
Route::group(['prefix' => 'v1', 'namespace' => '\\Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/user/bulk', 'UserController@createBulk');
    Route::patch('/user/bulk', 'UserController@updateBulk');
    Route::delete('/user/bulk', 'UserController@deleteBulk');
    // basic routes
    Route::options('/user', 'UserController@options');
    Route::get('/user', 'UserController@index');
    Route::get('/user/{id}', 'UserController@view');
    Route::post('/user', 'UserController@create');
    Route::patch('/user/{id}', 'UserController@update');
    Route::delete('/user/{id}', 'UserController@delete');
    // relation routes
    Route::get('/user/{id}/{related}', 'UserController@related');
    Route::get('/user/{id}/relationships/{relations}', 'UserController@relations');
    Route::post('/user/{id}/relationships/{relations}', 'UserController@createRelations');
    Route::patch('/user/{id}/relationships/{relations}', 'UserController@updateRelations');
    Route::delete('/user/{id}/relationships/{relations}', 'UserController@deleteRelations');
});
// <<<routes<<<
