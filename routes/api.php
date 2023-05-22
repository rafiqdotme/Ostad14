<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;

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

Route::controller(AssignmentController::class)->group(function (){
    //Route for Question 1
    Route::post('users', 'AddUser');

    //Route for Question 2
    Route::post('useragent','UserAgent');

    //Route for Question 3
    Route::get('query', 'PageQuery');

    //Route for Question 4
    Route::get('jsonresponse', 'JsonResponse');

    //Route for Question 5
    Route::post('files', 'FileUpload');

    //Route for Question 6
    Route::post('tokens', 'VerifyToken');
});

//Route for Question 7
Route::post('/submit', function (Request $request) {
    $email = $request->input('email');
    if ($email){
        return array(
            'success' => true,
            'message' => 'Form submitted successfully.'
        );
    }else{
        return 'Please give your Email';
    }
});