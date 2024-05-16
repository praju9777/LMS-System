<?php

use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\courseController;
use App\Http\Controllers\admin\studentController;
use App\Http\Controllers\admin\meetingController;
use App\Http\Controllers\admin\teacherController;
use App\Http\Controllers\admin\assignmentController;
use App\Http\Controllers\admin\classolController;
use App\Http\Controllers\admin\notesController;
use App\Http\Controllers\admin\notificationsController;
use App\Http\Controllers\admin\registerController;
use App\Http\Controllers\admin\scholarshipController;
use App\Http\Controllers\admin\testController;
use App\Http\Controllers\admin\videoController;

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


// admin panel Route.....


// Route::get('/', function () {
//     return view('admin.dashboard');
// });

Route::get('/',[registerController::class,'index'] );


Route::get('/',[registerController::class,'loginview'] );
Route::post('/login',[registerController::class,'login'] );

Route::get('/logout', function () {
    Session::forget('register');
    return redirect('/');
});
Route::get('admin.dashboard',[registerController::class,'index'] );

Route::get('/register',[registerController::class,'viewregister'] );
Route::post('/register',[registerController::class,'reg'] );

//course Route...
Route::post('/addcourse',[courseController::class,'addcourse'])->name("addcourse");
Route::view('/addcourse','admin.Course.addcourse');
Route::get('/listcourse',[courseController::class,'showcourse'])->name('listcourse');
Route::get('/deletecourse/{_id}',[courseController::class,'deletecourse'])->name('deletecourse');
Route::get('/editcourse/{_id}',[courseController::class,'showdata']);
Route::post('/updatecourse',[courseController::class,'updatecourse']);
Route::get('/showcourse/{_id}',[courseController::class,'show']);
Route::get('/backcou',[courseController::class,'backcou'])->name('backcou');

//Student


Route::post('/addstudent',[studentController::class,'addstudent'])->name('addstudent');
Route::view('/addstudent','admin.Student.addstudent');
Route::get('/liststud',[studentController::class,'showstud'])->name('liststud');
Route::get('/deletestud/{_id}',[studentController::class,'deletestud'])->name('deletestud');
Route::get('/editstud/{_id}',[studentController::class,'showdatas']);
Route::post('/updatestud',[studentController::class,'updatestud']);
Route::get('/showstud/{_id}',[studentController::class,'shows']);
Route::get('/backstud',[studentController::class,'backstud'])->name('backstud');


//Meeting
Route::post('/addm',[meetingController::class,'addm'])->name('addm');
Route::view('/addm','admin.Meeting.addm');
Route::get('/listm',[meetingController::class,'showmeeting'])->name('listm');
Route::get('/deletem/{m_id}',[meetingController::class,'deletem'])->name('deletem');
Route::get('/editm/{m_id}',[meetingController::class,'showdata']);
Route::post('/updatem',[meetingController::class,'update']);
Route::get('/showm/{m_id}',[meetingController::class,'show']);
Route::get('/backm',[meetingController::class,'backm'])->name('backm');

//Teacher

Route::post('/addtech',[teacherController::class,'addtech'])->name('addtech');
Route::view('/addtech','admin.Teacher.addtech');
Route::get('/listtech',[teacherController::class,'showtech'])->name('listtech');
Route::get('/deletetech/{_id}',[teacherController::class,'deletetech'])->name('deletetech');
Route::get('/edittech/{_id}',[teacherController::class,'showdatas']);
Route::post('/updatetech',[teacherController::class,'updatetech']);
Route::get('/showtech/{_id}',[teacherController::class,'shows']);
Route::get('/backtech',[teacherController::class,'backtech'])->name('backtech');

//assignment

Route::post('/addass',[assignmentController::class,'addass'])->name('addass');
Route::view('/addass','admin.Assignment.addass');
Route::get('/listass',[assignmentController::class,'showass'])->name('listass');
Route::get('/deleteass/{_id}',[assignmentController::class,'deleteass'])->name('deleteass');
Route::get('/editass/{_id}',[assignmentController::class,'showdata']);
Route::post('/updateass',[assignmentController::class,'updateass']);
Route::get('/showass/{_id}',[assignmentController::class,'shows']);
Route::get('/backass',[assignmentController::class,'backass'])->name('backass');

//
//scholarship Route...
Route::post('/addscholarship',[scholarshipController::class,'addscholarship'])->name("addscholarship");
Route::view('/addscholarship','admin.scholarship.addscholarship');
Route::get('/listscholarship',[scholarshipController::class,'showscholarship'])->name('listscholarship');
Route::get('/deletescholarship/{_id}',[scholarshipController::class,'deletescholarship'])->name('deletescholarship');
Route::get('/editscholarship/{_id}',[scholarshipController::class,'showdata']);
Route::post('/updatescholarship',[scholarshipController::class,'updatescholarship']);
Route::get('/showscholarship/{_id}',[scholarshipController::class,'show']);
Route::get('/backcou',[scholarshipController::class,'backcou'])->name('backcou');

//class online Route...
Route::post('/addclassol',[classolController::class,'addclassol'])->name("addclassol");
Route::view('/addclassol','admin.Classol.addclassol');
Route::get('/listclassol',[classolController::class,'showclassol'])->name('listclassol');
Route::get('/deleteclassol/{_id}',[classolController::class,'deleteclassol'])->name('deleteclassol');
Route::get('/editclassol/{_id}',[classolController::class,'showdata']);
Route::post('/updateclassol',[classolController::class,'updateclassol']);
Route::get('/showclassol/{_id}',[classolController::class,'show']);
Route::get('/backclassol',[classolController::class,'backclassol'])->name('backclassol');



//test Route...
Route::post('/addtest',[testController::class,'addtest'])->name("addtest");
Route::view('/addtest','admin.testol.addtest');
Route::get('/listtest',[testController::class,'showtest'])->name('listtest');
Route::get('/deletetest/{_id}',[testController::class,'deletetest'])->name('deletetest');
Route::get('/edittest/{_id}',[testController::class,'showdata']);
Route::post('/updatetest',[testController::class,'updatetest']);
Route::get('/showtest/{_id}',[testController::class,'show']);
Route::get('/backtest',[testController::class,'backtest'])->name('backtest');


//notes

Route::post('/addnotes',[notesController::class,'addnotes'])->name('addnotes');
Route::view('/addnotes','admin.Library_Notes.addnotes');
Route::get('/listnotes',[notesController::class,'shownotes'])->name('listnotes');
Route::get('/deletenotes/{_id}',[notesController::class,'deletenotes'])->name('deletenotes');
Route::get('/editnotes/{_id}',[notesController::class,'showdata']);
Route::post('/updatenotes',[notesController::class,'updatenotes']);
Route::get('/shownotes/{_id}',[notesController::class,'shows']);
Route::get('/backnotes',[notesController::class,'backnotes'])->name('backnotes');
  ///notes view and download
Route::get('/download{file}',[notesController::class,'download'])->name('download');
Route::get('/view/{_id}',[notesController::class,'view']);



//Video Route...
Route::post('/addvideo',[videoController::class,'addvideo'])->name("addvideo");
Route::view('/addvideo','admin.Video_feeds.addvideo');
Route::get('/listvideo',[videoController::class,'showvideo'])->name('listvideo');
Route::get('/deletevideo/{_id}',[videoController::class,'deletevideo'])->name('deletevideo');
Route::get('/editvideo/{_id}',[videoController::class,'showdata']);
Route::post('/updatevideo',[videoController::class,'updatevideo']);
Route::get('/showvideo/{_id}',[videoController::class,'show']);
 //
 Route::get('/dashboard', [notificationsController::class, 'index']);
