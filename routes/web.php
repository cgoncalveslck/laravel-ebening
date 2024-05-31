<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $disk = Storage::disk('s3');
    $files = $disk->allFiles();
    // map files to name and url
    $files = array_map(function ($file) use ($disk) {
        return [
            'name' => $file,
            'url' => $disk->url($file)
        ];
    }, $files);

    return view('files', ['files' => $files]);
});

Route::post('/upload', function (Request $request) {
    $file = $request->allFiles();

    dd($file);
});

