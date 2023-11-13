<?php

use App\Http\Controllers\HorsesController;
use App\Models\Horses;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/stable/all', [HorsesController ::class, 'index']);

Route::get('/stable/detail/{showHorses}', [HorsesController::class, 'show']);

// Route::get('/stable/all', function (){
//     return view('stable/all', [
//         'title'=> 'Stable',
//         'horses'=> [
//             [
//                 'no'=> '1',
//                 'name'=> 'The Count',
//                 'breed'=> 'Arabian',
//                 'speed'=> '60',
//                 'colour'=> 'Golden Brown',
//                 'buyyed'=> '',
//             ],
//             [
//                 'no'=> '2',
//                 'name'=> 'Reverse Dapple Black',
//                 'breed'=> 'Thoroughbred',
//                 'speed'=> '68',
//                 'colour'=> 'Brown',
//                 'buyyed'=> '',
//             ],
//             [
//                 'no'=> '3',
//                 'name'=> 'Silver Dollar',
//                 'breed'=> 'Turkoman',
//                 'speed'=> '56',
//                 'colour'=> 'Black',
//                 'buyyed'=> '',
//             ],
//             [
//                 'no'=> '4',
//                 'name'=> 'Old Boy',
//                 'breed'=> 'Belgian Draught',
//                 'speed'=> '40',
//                 'colour'=> 'Grey Black',
//                 'buyyed'=> '',
//             ],
//             [
//                 'no'=> '5',
//                 'name'=> 'Heavy Morgan',
//                 'breed'=> 'Andalusian',
//                 'speed'=> '70',
//                 'colour'=> 'Silver Black',
//                 'buyyed'=> '',
//             ],
//             [
//                 'no'=> '6',
//                 'name'=> 'White Russian',
//                 'breed'=> 'Orlov Trotter',
//                 'speed'=> '64',
//                 'colour'=> 'White Black',
//                 'buyyed'=> '',
//             ],
//         ]
//     ]);
// });
