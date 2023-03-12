<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\GenerateReportsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\TestMachineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\DrumSurfaceController;
use App\Http\Controllers\GenerateReportsAISController;
use App\Http\Controllers\PDFViewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
  return view('auth.login');
});

Auth::routes();

// pdf view

Route::get('ece/view/pdf/{id}', [PDFViewController::class, 'pdf_view_ece'])->name('pdf_view_ece');
Route::get('asi/view/pdf/{id}', [PDFViewController::class, 'pdf_view_asi'])->name('pdf_view_asi');


Route::middleware('is_admin', 'login_status')->prefix('admin')->group(function () {

  Route::get('dashboard', [HomeController::class, 'adminHome'])->name('admin_home');

  // User
  Route::get('users', [UserController::class, 'index'])->name('all_users');
  Route::get('users/add', [UserController::class, 'add'])->name('add_user');
  Route::post('users/store', [UserController::class, 'store'])->name('store_user');
  Route::get('users/edit/{user}', [UserController::class, 'edit'])->name('edit_user');
  Route::post('users/update/{user}', [UserController::class, 'update'])->name('update_user');
  Route::get('users/delete/{user}', [UserController::class, 'delete'])->name('delete_user');
  Route::post('users/status/{user}', [UserController::class, 'status'])->name('status_user');

  // Test Machine
  Route::get('test-machine', [TestMachineController::class, 'index'])->name('all_test_machine');
  Route::get('test-machine/add', [TestMachineController::class, 'add'])->name('add_test_machine');
  Route::post('test-machine/store', [TestMachineController::class, 'store'])->name('store_test_machine');
  Route::get('test-machine/edit/{machine}', [TestMachineController::class, 'edit'])->name('edit_test_machine');
  Route::post('test-machine/update/{machine}', [TestMachineController::class, 'update'])->name('update_test_machine');
  Route::get('test-machine/delete/{machine}', [TestMachineController::class, 'delete'])->name('delete_test_machine');

  // Applicant
  Route::get('applicant', [ApplicantController::class, 'index'])->name('all_applicant');
  Route::get('applicant/add', [ApplicantController::class, 'add'])->name('add_applicant');
  Route::post('applicant/store', [ApplicantController::class, 'store'])->name('store_applicant');
  Route::get('applicant/edit/{applicant}', [ApplicantController::class, 'edit'])->name('edit_applicant');
  Route::post('applicant/update/{applicant}', [ApplicantController::class, 'update'])->name('update_applicant');
  Route::get('applicant/delete/{applicant}', [ApplicantController::class, 'delete'])->name('delete_applicant');

  // Generate Reports
  Route::get('generate-reports', [GenerateReportsController::class, 'index'])->name('all_reports');
  Route::get('generate-reports/add', [GenerateReportsController::class, 'add'])->name('add_reports');
  Route::post('generate-reports/store', [GenerateReportsController::class, 'store'])->name('store_reports');
  Route::get('generate-reports/edit/{id}', [GenerateReportsController::class, 'edit'])->name('edit_reports');
  Route::post('generate-reports/update/{id}', [GenerateReportsController::class, 'update'])->name('update_reports');
  Route::get('generate-reports/delete/{id}', [GenerateReportsController::class, 'delete'])->name('delete_reports');

  // PDF Download
  Route::get('download/pdf/{id}', [PDFController::class, 'pdfdownload'])->name('pdf1');
});

Route::prefix('user')->group(function () {

  Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('is_user', 'login_status');


  // Test Machine
  Route::get('test-machine', [TestMachineController::class, 'index'])->name('all_test_machine');
  Route::get('test-machine/add', [TestMachineController::class, 'add'])->name('add_test_machine');
  Route::post('test-machine/store', [TestMachineController::class, 'store'])->name('store_test_machine');
  Route::get('test-machine/edit/{machine}', [TestMachineController::class, 'edit'])->name('edit_test_machine');
  Route::post('test-machine/update/{machine}', [TestMachineController::class, 'update'])->name('update_test_machine');
  Route::get('test-machine/delete/{machine}', [TestMachineController::class, 'delete'])->name('delete_test_machine');

  // Applicant
  Route::get('applicant', [ApplicantController::class, 'index'])->name('all_applicant');
  Route::get('applicant/add', [ApplicantController::class, 'add'])->name('add_applicant');
  Route::post('applicant/store', [ApplicantController::class, 'store'])->name('store_applicant');
  Route::get('applicant/edit/{applicant}', [ApplicantController::class, 'edit'])->name('edit_applicant');
  Route::post('applicant/update/{applicant}', [ApplicantController::class, 'update'])->name('update_applicant');
  Route::get('applicant/delete/{applicant}', [ApplicantController::class, 'delete'])->name('delete_applicant');

  // Generate Reports ECE
  Route::get('generate-reports', [GenerateReportsController::class, 'index'])->name('all_reports');
  Route::get('generate-reports/add', [GenerateReportsController::class, 'add'])->name('add_reports');
  Route::post('generate-reports/store', [GenerateReportsController::class, 'store'])->name('store_reports');
  Route::get('generate-reports/edit/{id}', [GenerateReportsController::class, 'edit'])->name('edit_reports');
  Route::post('generate-reports/update/{id}', [GenerateReportsController::class, 'update'])->name('update_reports');
  Route::get('generate-reports/delete/{id}', [GenerateReportsController::class, 'delete'])->name('delete_reports');


  // PDF Download ECE
  Route::get('download/pdf/{id}', [PDFController::class, 'pdfdownload'])->name('pdf1');


  // Generate Reports AIS 142
  Route::get('generate-reports/AIS', [GenerateReportsAISController::class, 'index'])->name('all_reports_AIS');
  Route::get('generate-reports/AIS/add', [GenerateReportsAISController::class, 'add'])->name('add_reports_ais');
  Route::post('generate-reports/AIS/store', [GenerateReportsAISController::class, 'store'])->name('store_reports_ais');
  Route::get('generate-reports/AIS/edit/{id}', [GenerateReportsAISController::class, 'edit'])->name('edit_reports_ais');
  Route::post('generate-reports/AIS/update/{id}', [GenerateReportsAISController::class, 'update'])->name('update_reports_ais');
  Route::get('generate-reports/AIS/delete/{id}', [GenerateReportsAISController::class, 'delete'])->name('delete_reports_ais');


  // PDF Download AIS
  Route::get('download/pdf/ais/{id}', [PDFController::class, 'pdfdownloadais'])->name('pdf_ais');



  // Signature
  Route::get('signature', [SignatureController::class, 'index'])->name('all_signature');
  Route::get('signature/add', [SignatureController::class, 'add'])->name('add_signature');
  Route::post('signature/store', [SignatureController::class, 'store'])->name('store_signature');
  Route::get('signature/delete/{id}', [SignatureController::class, 'delete'])->name('delete_signature');
  // Profile
  Route::get('/profile/{user}/edit', function (App\Models\User $user) {
  })->name('profile_edit');

  Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile_update');
  Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile');
  Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile_edit');
  Route::post('/profile/{user}/change-password', [ProfileController::class, 'ChangePassword'])->name('postChangePassword');


});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// forget password

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
