<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api', 'as' => 'api.'], function () {

  Route::group(['prefix' => 'course', 'as' => 'api_course.'], function () {

    Route::get('/', ['uses' => 'CoursesController@index', 'as' => 'courses.index']);
    Route::get('/{slug}', ['uses' => 'CoursesController@show', 'as' => 'courses.show']);
    Route::post('payment', ['uses' => 'CoursesController@payment', 'as' => 'courses.payment']);
    Route::post('/{course_id}/rating', ['uses' => 'CoursesController@rating', 'as' => 'courses.rating']);

  });
  Route::group(['prefix' => 'lesson', 'as' => 'api_course.'], function () {

    Route::get('/{course_id}/{slug}', ['uses' => 'LessonsController@show', 'as' => 'lessons.show']);
    Route::post('/{slug}/test', ['uses' => 'LessonsController@test', 'as' => 'lessons.test']);
  });

  Route::post('login', 'AuthController@login');
});
