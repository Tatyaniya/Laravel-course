<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('post-list', function() {
  return response()->json([
    "posts" => [
      [
        "name" => "Title",
        "body" => "Description",
      ],
      [
        "name" => "Title 2",
        "body" => "Description",
      ],
      [
        "name" => "Title 3",
        "body" => "Description",
      ],
    ]
  ]);
});
