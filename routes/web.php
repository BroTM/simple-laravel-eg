<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/','student@index');

Route::get('/first', function () {
    $student = Student::find(1);
    echo $student->name;
});
Route::get('/create', function () {
    $count = Student::where('name', '=', 'Alice')->count();
    if (!$count)
        DB::table('students')->insert([
            [
                'name' => "Alice",
                'rno'  => "5CS - 7"
            ]
        ]);
    else
        echo "<h5>Already allocated!  Insert Unsuccessful!</h5>";

    echo "count is " . $count;
});
Route::get('/alice', function () {
    $alice = Student::where('name', '=', 'Alice')->first();
    echo $alice;
});

Route::get('/update', function () {

    $alice = Student::where('name', '=', 'Alice')->first();

    $alice->rno = '5CS-5';
    $alice->save();
    echo "successful";
});

Route::get('/delete', function () {
    $alice = Student::where('name', '=', 'Alice');
    $alice->delete();
    echo "successful";
});

Route::get('/destroy', function () {
    Student::destroy(1, 2);
});

// Route::get('/edit','student@edit')->name("student.edit");
// Route::get('/update','student@update')->name('student.update');

// Route::get('/update', function (Student $student) {
//     $student->save();
//     Route::redirect('/update', '/', 301);
// })->name("student-update");

Route::resource('students', 'App\Http\Controllers\StudentController');
Route::get('/', 'App\Http\Controllers\StudentController@store');
Route::get('/test', function () {
    return 'hello';
});

Route::get('openstreet-map', function () {
    return view('openstreetmap.index');
});

Route::get('css-eg', function () {
    return view('css_eg.index');
});

Route::get('css-eg/branch', function () {
    return view('css_eg.branch');
})->name('branch');

Route::get('semantic-ui', function () {
    return view('semantic-ui.search');
});

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});
