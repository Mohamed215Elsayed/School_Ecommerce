<?php
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SampleController;

use  App\Http\Controllers\Sections;
use App\Http\Controllers\SectionController;
use App\Models\Section;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;

use App\Http\Controllers\Grades;
use App\Http\Controllers\GradeController;
use App\Models\Grade;
use App\Http\Controllers\Teachers;
use App\Models\Student;
use App\Http\Controllers\Students;
use App\Http\Livewire\Calendar;
use App\Models\Event;
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
//Auth::routes();

Route::get('/', 'HomeController@index')->name('selection');


Route::group(['namespace' => 'Auth'], function () {

Route::get('/login/{type}','LoginController@loginForm')->middleware('guest')->name('login.show');

Route::post('/login','LoginController@login')->name('login');

Route::get('/logout/{type?}', 'LoginController@logout')->name('logout');


});
 //==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

     //==============================dashboard============================
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

   //==============================dashboard============================
    Route::group(['namespace' => 'Grades'], function () {
        Route::resource('Grades', 'GradeController');
    });

    //==============================Classrooms============================
    Route::group(['namespace' => 'Classrooms'], function () {
        Route::resource('Classrooms', 'ClassroomController');
        Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');

        Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');

    });


    //==============================Sections============================

    Route::group(['namespace' => 'Sections'], function () {

        Route::resource('Sections', 'SectionController');

        Route::get('/classes/{id}', 'SectionController@getclasses');

    });

    //==============================parents============================

         Route::view('add_parent','livewire.show_Form')->name('add_parent');

    //==============================Teachers============================
    Route::group(['namespace' => 'Teachers'], function () {
        Route::resource('Teachers', 'TeacherController');
    });


      //==============================Students============================
    Route::group(['namespace' => 'Students'], function () {
        Route::resource('Students', 'StudentController');
        Route::resource('online_classes', 'OnlineClasseController');
        Route::get('indirect_admin', 'OnlineClasseController@indirectCreate')->name('indirect.create.admin');
        Route::post('indirect_admin', 'OnlineClasseController@storeIndirect')->name('indirect.store.admin');
        Route::resource('Graduated', 'GraduatedController');
        Route::resource('Promotion', 'PromotionController');
        Route::resource('Fees_Invoices', 'FeesInvoicesController');
        Route::resource('Fees', 'FeesController');
        Route::resource('receipt_students', 'ReceiptStudentsController');
        Route::resource('ProcessingFee', 'ProcessingFeeController');
        Route::resource('Payment_students', 'PaymentController');
        Route::resource('Attendance', 'AttendanceController');
        Route::get('download_file/{filename}', 'LibraryController@downloadAttachment')->name('downloadAttachment');
        Route::resource('library', 'LibraryController');
        Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
        Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
        Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
    });
    //==============================subjects============================
    Route::group(['namespace' => 'Subjects'], function () {
        Route::resource('subjects', 'SubjectController');
    });
    //==============================Quizzes============================
    Route::group(['namespace' => 'Quizzes'], function () {
        Route::resource('Quizzes', 'QuizzController');
    });
    //==============================questions============================
    Route::group(['namespace' => 'questions'], function () {
        Route::resource('questions', 'QuestionController');
    });
    //==============================Setting============================
    Route::resource('settings', 'SettingController');
});
    //==========================================================
//Auth::routes();

// Route::get('/', 'HomeController@index')->name('selection');


// Route::group(['namespace' => 'Auth'], function () {

// Route::get('/login/{type}','LoginController@loginForm')->middleware('guest')->name('login.show');

// Route::post('/login','LoginController@login')->name('login');

// Route::get('/logout/{type}', 'LoginController@logout')->name('logout');
// });
//  //==============================Translate all pages============================
// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
//     ], function () {

//      //==============================dashboard============================
//     Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

//    //==============================dashboard============================
//     Route::group(['namespace' => 'Grades'], function () {
//         Route::resource('Grades', 'GradeController');
//     });

//     //==============================Classrooms============================
//     Route::group(['namespace' => 'Classrooms'], function () {
//         Route::resource('Classrooms', 'ClassroomController');
//         Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');

//         Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');

//     });


//     //==============================Sections============================

//     Route::group(['namespace' => 'Sections'], function () {

//         Route::resource('Sections', 'SectionController');

//         Route::get('/classes/{id}', 'SectionController@getclasses');

//     });

//     //==============================parents============================

//         Route::view('add_parent','livewire.show_Form')->name('add_parent');

//         // Route::view('/', 'home');

//         // Livewire::component('calendar', Calendar::class);

//     //==============================Teachers============================
//     Route::group(['namespace' => 'Teachers'], function () {
//         Route::resource('Teachers', 'TeacherController');
//     });

//     //==============================Students============================
//     Route::group(['namespace' => 'Students'], function () {
//         Route::resource('Students', 'StudentController');
//         Route::get('/indirect', 'OnlineClasseController@indirectCreate')->name('indirect.create');
//         Route::post('/indirect', 'OnlineClasseController@storeIndirect')->name('indirect.store');
//         Route::resource('online_classes', 'OnlineClasseController');
//         Route::resource('Graduated', 'GraduatedController');
//         Route::resource('Promotion', 'PromotionController');
//         Route::resource('Fees_Invoices', 'FeesInvoicesController');
//         Route::resource('Fees', 'FeesController');
//         Route::resource('receipt_students', 'ReceiptStudentsController');
//         Route::resource('ProcessingFee', 'ProcessingFeeController');
//         Route::resource('Payment_students', 'PaymentController');
//         Route::resource('Attendance', 'AttendanceController');
//         Route::get('download_file/{filename}', 'LibraryController@downloadAttachment')->name('downloadAttachment');
//         Route::resource('library', 'LibraryController');
//         Route::get('/Get_classrooms/{id}', 'StudentController@Get_classrooms');
//         Route::get('/Get_Sections/{id}', 'StudentController@Get_Sections');
//         Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
//         Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
//         Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
//     });

//     //==============================subjects============================
//     Route::group(['namespace' => 'Subjects'], function () {
//         Route::resource('subjects', 'SubjectController');
//     });

//     //==============================Quizzes============================
//     Route::group(['namespace' => 'Quizzes'], function () {
//         Route::resource('Quizzes', 'QuizzController');
//     });

//     //==============================questions============================
//     Route::group(['namespace' => 'questions'], function () {
//         Route::resource('questions', 'QuestionController');
//     });

//     //==============================Setting============================
//     Route::resource('settings', 'SettingController');
// });
