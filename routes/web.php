<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FatherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ChatController;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Father;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
    return redirect('/dashboard');
});





Route::get('/register', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    
    Route::middleware('language-middleware')->group(function() {
        
        Route::post('/submitform',[ChatController::class,'submitform'])->name('submitform');
        Route::post('/uploadFile',[ChatController::class,'uploadFile'])->name('uploadFile');
        // dashboard route
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        // trash route
        Route::get('/trash' , [UserController::class , 'getSoftDeleteRows']);


        
        
        // resource controllers 
        Route::resource('fathers', FatherController::class);
        Route::resource('users', UserController::class);
        Route::resource('sections', SectionController::class);
        Route::resource('subjects', SubjectController::class);
        Route::resource('teachers', TeacherController::class);
        Route::resource('attendance', AttendanceController::class);
        Route::resource('classes', ClassController::class);
        Route::resource('students', StudentController::class);
        Route::resource('chats', ChatController::class);
    
        //  trash clear route
        Route::get('/trash-clear', function () {
            Father::onlyTrashed()->forceDelete();
            Teacher::onlyTrashed()->forceDelete();
            Student::onlyTrashed()->forceDelete();
        
            return redirect()->back()->with('success', 'All soft-deleted rows have been permanently deleted.');
        })->name('trash.clear');

    });
    



    // localization route
    Route::post('/language', function (Request $request) {
        $locale = $request->locale;
        session()->put('locale', $locale);
        return redirect('dashboard');
    })->name('language');

    
    
    


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
