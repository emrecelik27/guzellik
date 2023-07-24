<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AltEducationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteDataController;
use App\Http\Controllers\UserController;
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

Route::get('/', [IndexController::class, "indexScreen"])->name("index");

Route::get('/kurumsal', [IndexController::class, "kurumsalScreen"])->name("kurumsal");

Route::get('/hizmetlerimiz', [IndexController::class, "hizmetlerimizScreen"])->name("hizmetlerimiz");

Route::get('/galeri', [IndexController::class, "galeriScreen"])->name("galeri");

Route::get('/blog', [IndexController::class, "blogScreen"])->name("blogIndexScreen");

Route::get('/b/{code}', [IndexController::class, "singleBlogScreen"])->name("singleBlogScreen");

Route::get('/education/{code}', [IndexController::class, "educationScreen"])->name("educationIndexScreen");

Route::get('/e/{code}', [IndexController::class, "singleEducationScreen"])->name("singleEducationScreen");

Route::get('/iletisim', [IndexController::class, "contactScreen"])->name("iletisim");

Route::get('/randevu', [IndexController::class, "randevuScreen"])->name("randevuScreen");

Route::post('/contactus', [IndexController::class, "contactus"])->name("contactus");

Route::post('/randevuAl', [IndexController::class, "randevuAl"])->name("randevuAl");

Route::middleware('adminLogin')->group(function () {

    Route::get('/admin', [AdminController::class, "indexScreen"])->name("adminScreen");

    Route::get('/admin/service', [ServiceController::class, "serviceScreen"])->name("serviceScreen");

    Route::get('/admin/service/create', [ServiceController::class, "createServiceScreen"])->name("createServiceScreen");

    Route::post('/admin/service/create', [ServiceController::class, "createService"])->name("createService");

    Route::get('/admin/service/delete', [ServiceController::class, "deleteService"])->name("deleteService");


    Route::get('/admin/user', [UserController::class, "userScreen"])->name("userScreen");

    Route::get('/admin/user/create', [UserController::class, "createUserScreen"])->name("createUserScreen");

    Route::post('/admin/user/create', [UserController::class, "createUser"])->name("createUser");

    Route::get('/admin/user/delete', [UserController::class, "deleteUser"])->name("deleteUser");

    Route::post('/admin/user/chnagePassword', [UserController::class, "changePassword"])->name("changePassword");




    Route::get('/admin/faq', [FaqController::class, "faqScreen"])->name("faqScreen");

    Route::get('/admin/faq/create', [FaqController::class, "createFaqScreen"])->name("createFaqScreen");

    Route::post('/admin/faq/create', [FaqController::class, "createFaq"])->name("createFaq");

    Route::get('/admin/faq/delete', [FaqController::class, "deleteFaq"])->name("deleteFaq");


    Route::get('/admin/education', [EducationController::class, "educationScreen"])->name("educationScreen");

    Route::get('/admin/education/create', [EducationController::class, "creatEducationScreen"])->name("creatEducationScreen");

    Route::post('/admin/education/create', [EducationController::class, "createEducation"])->name("createEducation");

    Route::get('/admin/education/delete', [EducationController::class, "deleteEducation"])->name("deleteEducation");



    Route::get('/admin/altEducation', [AltEducationController::class, "altEducationScreen"])->name("altEducationScreen");

    Route::get('/admin/altEducation/create', [AltEducationController::class, "createAltEducationScreen"])->name("createAltEducationScreen");

    Route::post('/admin/altEducation/create', [AltEducationController::class, "createAltEducation"])->name("createAltEducation");

    Route::get('/admin/altEducation/delete', [AltEducationController::class, "deleteAltEducation"])->name("deleteAltEducation");


    Route::get('/admin/blog', [BlogController::class, "blogScreen"])->name("blogScreen");

    Route::get('/admin/blog/create', [BlogController::class, "createBlogScreen"])->name("createBlogScreen");

    Route::post('/admin/blog/create', [BlogController::class, "createBlog"])->name("createBlog");

    Route::get('/admin/blog/delete', [BlogController::class, "deleteBlog"])->name("deleteBlog");


    Route::get('/admin/contact', [ContactController::class, "contactScreen"])->name("contactScreen");

    Route::get('/admin/randevu', [RandevuController::class, "randevuScreen"])->name("randevuAdminScreen");


    Route::get('/admin/kurumsal', [DataController::class, "kurumsalScreen"])->name("kurumsalScreen");

    Route::post('/admin/kurumsal', [DataController::class, "kurumsalUpdate"])->name("kurumsalUpdate");

    Route::get('/admin/contactData', [DataController::class, "contactDataScreen"])->name("contactDataScreen");

    Route::post('/admin/contactData', [DataController::class, "contactDataUpdate"])->name("contactDataUpdate");

    Route::get('/admin/galeri', [OtherController::class, "galeriScreen"])->name("galeriScreen");

    Route::get('/admin/galeri/create', [OtherController::class, "galeriCreateScreen"])->name("galeriCreateScreen");

    Route::post('/admin/galeri/create', [OtherController::class, "galeriAdd"])->name("galeriAdd");

    Route::get('/admin/galeri/delete', [OtherController::class, "galeriRemove"])->name("galeriRemove");


    Route::get('/admin/logo', [SiteDataController::class, "logoScreen"])->name("logoScreen");

    Route::post('/admin/logo', [SiteDataController::class, "changeLogo"])->name("changeLogo");

    Route::get('/admin/footer', [SiteDataController::class, "footerScreen"])->name("footerScreen");

    Route::post('/admin/footer', [SiteDataController::class, "changeFooter"])->name("changeFooter");

    Route::get('/admin/socialMedia', [SiteDataController::class, "socialMediaScreen"])->name("socialMediaScreen");

    Route::post('/admin/socialMedia', [SiteDataController::class, "changeSocialMedia"])->name("changeSocialMedia");

    Route::get('/admin/workTimeScreen', [SiteDataController::class, "workTimeScreen"])->name("workTimeScreen");

    Route::post('/admin/workTimeScreen', [SiteDataController::class, "changeWorkTime"])->name("changeWorkTime");

    Route::get('/admin/slider', [SiteDataController::class, "sliderScreen"])->name("sliderScreen");

    Route::post('/admin/slider', [SiteDataController::class, "changeSlider"])->name("changeSlider");

    Route::get('/admin/video', [SiteDataController::class, "videoScreen"])->name("videoScreen");

    Route::post('/admin/video', [SiteDataController::class, "changeVideo"])->name("changeVideo");


    Route::get('/admin/logout', [AdminController::class, "logout"])->name("logout");
});



Route::get('/login', [AdminController::class, "loginScreen"])->name("loginScreen");

Route::post('/login', [AdminController::class, "login"])->name("adminLogin");
