<?php

use \App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\admin_controller;
use App\Http\Controllers\admin\Anouncement_controller;
use App\Http\Controllers\admin\Event_controller;
use App\Http\Controllers\admin\Request_Service_Controller;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ManagmentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WebpageController;
use App\Livewire\Admin\PressRelease;
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

Route::group(['middleware' => ['auth','role:super-admin|admin']], function() {

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissionsedit/{permissionId}', [App\Http\Controllers\PermissionController::class, 'edit']);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);


    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('rolesedit/{roleId}', [App\Http\Controllers\RoleController::class, 'edit']);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('give-permissionsToRoles/{roleId}', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('useredit/{userId}', [App\Http\Controllers\UserController::class, 'edit']);
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);

    Route::get('contacts', [App\Http\Controllers\ContactUsController::class, 'index']);

});
Route::get('logout', [LoginController::class,'logout']);

Route::get('/', [WebpageController::class,'index']);
Route::get('/contact_mail', function () {
    return view('mails.contactMail');
});
Route::get('/login', function () {
    return view('livewire.login-live');
});
Route::get('/background', [WebpageController::class,'background']);
Route::get('/board_members', [WebpageController::class,'board']);
Route::get('/menagement', [WebpageController::class,'management']);
Route::get('/mission', [WebpageController::class,'mission']);
Route::get('/orgStru', [WebpageController::class,'orgStru']);
Route::get('/babati', [WebpageController::class,'babati']);
Route::get('/bashnet', [WebpageController::class,'bashnet']);
Route::get('/dareda', [WebpageController::class,'dareda']);
Route::get('/gallapo', [WebpageController::class,'gallapo']);
Route::get('/kateshi', [WebpageController::class,'kateshi']);
Route::get('/magugu', [WebpageController::class,'magugu']);
Route::get('/contact_us', [WebpageController::class,'contact_us']);
Route::get('/faqs', [WebpageController::class,'faqs']);
Route::get('/photo_web', [WebpageController::class,'photo']);
Route::get('/video', [WebpageController::class,'video']);
Route::get('/pressrelease', [WebpageController::class,'press']);
Route::get('/uploads/pressrelease/{file}',[PressRelease::class,'showPdf']);
Route::get('/speech', [WebpageController::class,'speech']);
Route::get('/current', [WebpageController::class,'current']);
Route::get('/excuted', [WebpageController::class,'excuted']);
Route::get('/planned', [WebpageController::class,'planned']);
Route::get('/acts', [WebpageController::class,'acts']);
Route::get('/flyers', [WebpageController::class,'flyers']);
Route::get('/guidlines', [WebpageController::class,'guidlines']);
Route::get('/newsletters', [WebpageController::class,'newsletters']);
Route::get('/polices', [WebpageController::class,'polices']);
Route::get('/regulation', [WebpageController::class,'regulation']);
Route::get('/requestservice', [WebpageController::class,'requestservice']);
Route::get('/clean_water', [WebpageController::class,'clean_water']);
Route::get('/sanitation', [WebpageController::class,'sanitation']);
Route::get('/tenders', [WebpageController::class,'tenders']);
Route::get('/vacancies', [WebpageController::class,'vacancies']);
Route::get('/anouncements', [WebpageController::class,'anouncemetall']);
Route::get('/anouncements/{id}', [WebpageController::class,'anouncemetById']);
Route::get('/news', [WebpageController::class,'newsall']);
Route::get('/news/{id}', [WebpageController::class,'newsById']);
Route::get('/our_service', [WebpageController::class,'our_service']);
Route::get('/report_issue', [WebpageController::class,'report_issue']);
Route::get('/remove_sewage', [WebpageController::class,'remove_sewage']);

Route::post('/contact_store', [ContactUsController::class,'store']);
Route::get('/markAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
});

Route::get('/markAsRead/{notificationId}', [admin_controller::class, 'markAsread']);
Route::delete('/delete_not/{notificationId}', [admin_controller::class, 'deleteNotification']);







Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[admin_controller::class, 'index']);
    Route::get('/user', [admin_controller::class,'registered'])->name('users');
    Route::get('/notification', [admin_controller::class,'Notifications']);
    Route::get('/notification2', [admin_controller::class,'Notifications2']);

    Route::get('/anouncement',[Anouncement_controller::class,'index'])->name('anouncement');
    Route::get('/view-anouncement', function () {
        return view('admin.anouncement.anouncements');
    });
    Route::get('/create_anouncement',[Anouncement_controller::class,'store']);
    Route::get('/anouncement/{id}',[Anouncement_controller::class,'edit']);
    Route::post('/update_anouncement/{id}',[Anouncement_controller::class,'update']);
    Route::delete('/delete_anouncement/{id}',[Anouncement_controller::class,'destroy']);

    Route::get('/events',[Event_controller::class,'index']);
    Route::post('/add_event',[Event_controller::class,'store']);
    Route::put('/update_event/{id}',[Event_controller::class,'update']);
    Route::delete('/event_delete/{id}',[Event_controller::class,'destroy']);

    Route::get('/press',function (){
        return view('admin.press.press_release');
    });
    Route::post('/upload',[PressRelease::class,'upload']);
    Route::get('/showPdf',[PressRelease::class,'showPdf']);

    Route::get('/request_service',[Request_Service_Controller::class,'index']);
    Route::post('/request_service/{id}',[Request_Service_Controller::class,'update']);
    Route::get('/request_view/{id}',[Request_Service_Controller::class,'show']);
    Route::get('/editOnprocess/{id}',[Request_Service_Controller::class,'editOnprocess']);
    Route::get('/rollbackOnprocess/{id}',[Request_Service_Controller::class,'rollback']);

    Route::resource('managments', ManagmentController::class);
    Route::get('/administration',[ManagmentController::class,'index']);

    Route::resource('boards', BoardController::class);
    Route::get('/board',[BoardController::class,'index']);

    Route::resource('photos', PhotoController::class);
    Route::get('/photo',[PhotoController::class,'index']);



});


Route::get('/lang/{lang}' , [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







