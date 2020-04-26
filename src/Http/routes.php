<?php
/**
 * Create By: Will Yin
 * Date: 2020/4/26
 * Time: 17:05
 **/
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');

// 测试路由
Route::get('test', 'TestController@index');