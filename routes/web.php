<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AddonController; 
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Admin\PreRegisterController;
use App\Http\Controllers\Admin\DesignationsController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\VisitorReportController;
use App\Http\Controllers\Admin\WebNotificationController;
use App\Http\Controllers\Admin\AttendanceReportController;
use App\Http\Controllers\Admin\PreRegistersReportController;
use Illuminate\Support\Facades\Artisan;
 

Route::get('/clear-cache', function () {
   Artisan::call('cache:clear');
   Artisan::call('route:clear');
   Artisan::call('optimize:clear');

   return "Cache cleared successfully";
});

Route::group(['middleware' => ['installed']], function () {
    Auth::routes(['verify' => false]);
}); 

Route::redirect('/', '/admin/dashboard')->middleware('backend_permission');
Route::redirect('/admin', '/DashboardControllermin/dashboard')->middleware('backend_permission');

Route::group(['prefix' => 'admin', 'middleware' => ['installed'],
 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login'); 
});

Route::get('admin/lang/{locale}', [LocalizationController::class, 'index'])->middleware(['installed'])->name('admin.lang.index');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'installed', 'backend_permission'], 'as' => 'admin.'], function () {

    
    Route::resource('posts', PostController::class);
    Route::get('get-posts', [PostController::class, 'getPosts'])->name('posts.get-posts');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile/update/{profile}', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/change', [ProfileController::class, 'change'])->name('profile.change');
    Route::resource('adminusers', AdminUserController::class);
    Route::get('get-adminusers', [AdminUserController::class, 'getAdminUsers'])->name('adminusers.get-adminusers');
    Route::resource('role', RoleController::class);
    Route::post('role/save-permission/{id}', [RoleController::class, 'savePermission'])->name('role.save-permission');

    //designations
    Route::resource('designations', DesignationsController::class);
    Route::get('get-designations', [DesignationsController::class, 'getDesignations'])->name('designations.get-designations');

    //departments
    Route::resource('departments', DepartmentsController::class);
    Route::get('get-departments', [DepartmentsController::class, 'getDepartments'])->name('departments.get-departments');

    //web-token
    Route::post('store-token', [WebNotificationController::class, 'store'])->name('store.token');

    //employee route
    Route::resource('employees', EmployeeController::class);
    Route::get('get-employees', [EmployeeController::class, 'getEmployees'])->name('employees.get-employees');
    Route::get('employees/get-pre-registers/{id}', [EmployeeController::class, 'getPreRegister'])->name('employees.get-pre-registers');
    Route::get('employees/get-visitors/{id}', [EmployeeController::class, 'getVisitor'])->name('employees.get-visitors');
    Route::put('employees/check/{id}', [EmployeeController::class, 'checkEmployee'])->name('employees.check');

    //pre-registers
    Route::resource('pre-registers', PreRegisterController::class);
    Route::get('get-pre-registers', [PreRegisterController::class, 'getPreRegister'])->name('pre-registers.get-pre-registers');


    //visitors
    Route::resource('visitors', VisitorController::class);
    Route::post('visitor/search', [VisitorController::class, 'search'])->name('visitor.search');
    Route::get('visitor/check-out/{visitingDetail}', [VisitorController::class, 'checkout'])->name('visitors.checkout');
    Route::get('visitor/change-status/{id}/{status}/{dashboard}',  [VisitorController::class, 'changeStatus'])->name('visitor.change-status');
    Route::get('get-visitors', [VisitorController::class, 'getVisitor'])->name('visitors.get-visitors');
    Route::get('visitor/disable/{id}',  [VisitorController::class, 'visitorDisable'])->name('visitors.disable');

    //report
    Route::get('admin-visitor-report', [VisitorReportController::class, 'index'])->name('admin-visitor-report.index');
    Route::post('admin-visitor-report', [VisitorReportController::class, 'index'])->name('admin-visitor-report.post');

    Route::get('admin-pre-registers-report', [PreRegistersReportController::class, 'index'])->name('admin-pre-registers-report.index');
    Route::post('admin-pre-registers-report', [PreRegistersReportController::class, 'index'])->name('admin-pre-registers-report.post');

    Route::get('attendance-report', [AttendanceReportController::class, 'index'])->name('attendance-report.index');
    Route::post('attendance-report', [AttendanceReportController::class, 'index'])->name('attendance-report.post');

    Route::post('admin-attendance/clockin', [AttendanceController::class, 'clockIn'])->name('attendance.clockin');
    Route::post('admin-attendance/clockout', [AttendanceController::class, 'clockOut'])->name('attendance.clockout');

    Route::resource('attendance', AttendanceController::class);
    Route::get('get-attendance', [AttendanceController::class, 'getAttendance'])->name('attendance.get-attendance');
    //language
    Route::resource('language', LanguageController::class);
    Route::get('get-language', [LanguageController::class, 'getLanguage'])->name('language.get-language');
    Route::get('language/change-status/{id}/{status}', [LanguageController::class, 'changeStatus'])->name('language.change-status');

    //Addons
    Route::resource('addons', AddonController::class);
    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::post('/', [SettingController::class, 'siteSettingUpdate'])->name('site-update');
        Route::get('sms', [SettingController::class, 'smsSetting'])->name('sms');
        Route::post('sms', [SettingController::class, 'smsSettingUpdate'])->name('sms-update');
        Route::get('fcm-notification', [SettingController::class, 'fcmSetting'])->name('fcm');
        Route::post('fcm-notification', [SettingController::class, 'fcmSettingUpdate'])->name('fcm-update');
        Route::get('email', [SettingController::class, 'emailSetting'])->name('email');
        Route::post('email', [SettingController::class, 'emailSettingUpdate'])->name('email-update');
        Route::get('notification', [SettingController::class, 'notificationSetting'])->name('notification');
        Route::post('notification', [SettingController::class, 'notificationSettingUpdate'])->name('notification-update');
        Route::get('emailtemplate', [SettingController::class, 'emailTemplateSetting'])->name('email-template');
        Route::post('emailtemplate', [SettingController::class, 'mailTemplateSettingUpdate'])->name('email-template-update');
        Route::get('homepage', [SettingController::class, 'homepageSetting'])->name('homepage');
        Route::post('homepage', [SettingController::class, 'homepageSettingUpdate'])->name('homepage-update');
        Route::get('whatsapp', [SettingController::class, 'whatsappSetting'])->name('whatsapp-message');
        Route::post('whatsapp', [SettingController::class, 'whatsappSettingupdate'])->name('whatsapp-message-update');
    });
});

/*Multi step form*/

Route::group(['middleware' => ['installed']], function () {
    Route::group(['middleware' => ['frontend']], function () {
        Route::get('/', [FrontendController::class, 'index'])->name('/');
        Route::get('/publications', [FrontendController::class, 'publications'])->name('publications');
        Route::get('/events', [FrontendController::class, 'events'])->name('events');
        Route::get('/about', [FrontendController::class, 'about'])->name('about');
        Route::get('/partners', [FrontendController::class, 'partners'])->name('partners');
        Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
        Route::get('/post-detail/{id}', [FrontendController::class, 'show'])->name('post-detail');
    });
}); 
