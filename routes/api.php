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

//rute / jalan / jalur
Route::get('helo', function () {
    return '<h1>Helo laravel</h1>';
});


//rute api sederhana
Route::get('get-data', function () {
    return response()->json(
        [
            'data' => [
                'sekolah' => 'SMKN 2 Jakarta'
            ],
            'siswa' => [
                'nama' => 'Banscull',
                'kelas' => 'x pplg 2',
                'datakeluarga' => [
                    'ayah' => 'test',
                    'ibu' => 'test'
                ]
            ],

        ]
    );
});
