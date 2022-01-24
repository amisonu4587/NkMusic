<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\userViewController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Test\testController;
use App\Http\Controllers\Font\userController;

use App\Http\Middleware\Test;

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



Route::middleware([Test::class])->group(function () {

    Route::get('ttt', [testController::class, 'test']);
});

Route::group(['domain' =>  env("USER_APP_URL")], function () {
    Route::get('/', [userViewController::class, 'index']);
    Route::get('/about', [userViewController::class, 'about']);
    Route::get('/album', [userViewController::class, 'album']);
    Route::get('/user_profile', [userViewController::class, 'user_profile']);
    Route::get('/revenue_repoart', [userViewController::class, 'revenue_repoart']);
    Route::get('/payout_partner', [userViewController::class, 'payout_partner']);
    Route::get('/truck_url', [userViewController::class, 'truck_url']);
    Route::get('/crbt', [userViewController::class, 'crbt']);
    Route::get('/partners', [userViewController::class, 'partners']);
    Route::get('/contact', [userViewController::class, 'contact']);
    Route::get('/register_now', [userViewController::class, 'register_now']);
    Route::get('/login_now', [userViewController::class, 'login_now'])->name('login_now');
    Route::post('/add_register_action', [userViewController::class, 'add_register_action'])->name('add_register');
    Route::post('/login_now_action', [userViewController::class, 'userLogin'])->name('login_now_action');
    Route::get('/release', [userViewController::class, 'release']);
    Route::get('/track', [userViewController::class, 'truck'])->name('track');;
    Route::get('/store', [userViewController::class, 'store'])->name('store');;
    Route::post('/add_release_action', [userViewController::class, 'add_release_action'])->name('add_release');
    Route::post('/add_song_action', [userViewController::class, 'add_song_action'])->name('add_song');
    Route::post('/add_film_action', [userViewController::class, 'add_film_action'])->name('add_film');
    Route::post('/edit_film_action', [userViewController::class, 'edit_film_action'])->name('edit_film');
    Route::post('/edit_song_action', [userViewController::class, 'edit_song_action'])->name('edit_song');
    Route::post('/sand_otp', [userViewController::class, 'sand_otp']);
    Route::get('/view_release', [userViewController::class, 'view_release'])->name('view_release');
    Route::get('/view_movie', [userViewController::class, 'view_movie'])->name('view_movie');


    Route::post('/edit_track_action', [userViewController::class, 'edit_track_action'])->name('edit_track');
    Route::post('/edit_store_action', [userViewController::class, 'edit_store_action'])->name('edit_store');
    Route::get('/add_film', [userViewController::class, 'add_film']);

    Route::post('/add_contact_action', [userViewController::class, 'add_contact_action'])->name('add_contact_action');

    Route::get('/deletealbam', [userViewController::class, 'deletealbam'])->name('deletealbam');
    Route::get('/deletefilm', [userViewController::class, 'deletefilm'])->name('deletefilm');

    Route::get('/view_film', [userViewController::class, 'view_film'])->name('view_film');
    Route::get('/view_album', [userViewController::class, 'view_album'])->name('view_album');
    Route::get('/our_service', [userViewController::class, 'our_service'])->name('our_service');
    Route::post('/show_subcategory', [userViewController::class, 'show_subcategory']);
    Route::post('/show_description', [userViewController::class, 'show_description']);
    Route::post('/show_religion_details', [userViewController::class, 'show_religion_details']);
    Route::post('/show_religion_subcategory', [userViewController::class, 'show_religion_subcategory']);
    Route::get('/user_logout', [userViewController::class, 'user_logout'])->name('user_logout');

    Route::get('/abcd', [userViewController::class, 'abcd']);
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });
});


Route::group(['domain' =>  env("FONT_APP_URL"), 'middleware' => 'userAuth'], function () {
    Route::get('/', [userController::class, 'index1']);
    Route::get('/u_logout', [userController::class, 'u_logout'])->name('u_logout');
    Route::get('/profile', [userController::class, 'profile'])->name('profile');
    Route::get('/userDashboard', [userController::class, 'index'])->name('userDashboard');
    Route::get('/content_status', [userController::class, 'content_status'])->name('contect_status');
    Route::get('/all_payout', [userController::class, 'all_payout'])->name('all_payout');
    Route::get('/all_revenue', [userController::class, 'all_revenue'])->name('all_revenue');
});






Route::group(['domain' =>  env("ADMIN_APP_URL"), 'middleware' => 'adminAuth'], function () {
    Route::get('ttt', [testController::class, 'test'])->middleware('Test');
    Route::get('/', [adminController::class, 'index1']);
    Route::get('/add_user', [adminController::class, 'add_user'])->name('add_user');
    Route::post('/add_user_action', [adminController::class, 'add_user_action'])->name('add_user_action');
    Route::get('/edit_password', [adminController::class, 'edit_password'])->name('edit_password');
    Route::post('/edit_password_action', [adminController::class, 'edit_password_action'])->name('edit_password_action');
    Route::get('/adminDashboard', [adminController::class, 'index'])->name('adminDashboard');
    Route::get('/adminCategory', [adminController::class, 'add_category'])->name('adminCategory');
    Route::get('/viewcategory', [adminController::class, 'view_category'])->name('viewcategory');
    Route::get('/viewregister', [adminController::class, 'view_register'])->name('viewregister');
    Route::get('/add_subcategory', [adminController::class, 'add_subcategory'])->name('add_subcategory');
    Route::get('/view_subcategory', [adminController::class, 'view_subcategory'])->name('view_subcategory');
    Route::get('/add_details', [adminController::class, 'add_details'])->name('add_details');
    Route::get('/view_details', [adminController::class, 'view_details'])->name('view_details');
    Route::get('/viewmessage', [adminController::class, 'view_message'])->name('viewmessage');
    Route::get('/edit_register', [adminController::class, 'edit_register'])->name('edit_register');
    Route::post('/edit_register_action', [adminController::class, 'edit_register_action'])->name('edit_register_action');
    Route::get('/add_partners', [adminController::class, 'add_partners'])->name('add_partners');
    Route::post('/add_partner_action', [adminController::class, 'add_partner_action'])->name('add_partner_action');
    Route::get('/viewpartner', [adminController::class, 'viewpartner'])->name('viewpartner');
    Route::get('/deletepartner', [adminController::class, 'deletepartner'])->name('deletepartner');
    Route::get('/admin_logout', [adminController::class, 'admin_logout'])->name('admin_logout');
    Route::get('/view_releases', [adminController::class, 'view_releases'])->name('view_releases');
    Route::get('/deletealbam', [adminController::class, 'deletealbams'])->name('deletealbams');
    Route::post('/add_category_action', [adminController::class, 'add_category_action'])->name('add_category_action');
    Route::post('/add_subcategory_action', [adminController::class, 'add_subcategory_action'])->name('add_subcategory_action');
    Route::post('/add_details_action', [adminController::class, 'add_details_action'])->name('add_details_action');
    Route::get('/album_details', [adminController::class, 'album_details'])->name('album_details');
    Route::get('/add_isre', [adminController::class, 'add_isre'])->name('add_isre');
    Route::get('/album_status', [adminController::class, 'album_status'])->name('album_status');
    Route::get('/view_films', [adminController::class, 'view_film'])->name('view_films');;
    Route::get('/film_details', [adminController::class, 'film_details'])->name('film_details');
    Route::get('/film_isre', [adminController::class, 'film_isre'])->name('film_isre');
    Route::get('/movie_status', [adminController::class, 'movie_status'])->name('movie_status');
    Route::post('/edit_status_action', [adminController::class, 'edit_status_action'])->name('edit_status_action');
    Route::post('/edit_fisre_action', [adminController::class, 'edit_fisre_action'])->name('edit_fisre_action');
    Route::post('/edit_astatus_action', [adminController::class, 'edit_astatus_action'])->name('edit_astatus_action');
    Route::post('/edit_isre_action', [adminController::class, 'edit_isre_action'])->name('edit_isre_action');
    Route::get('/form_approval', [adminController::class, 'form_approval'])->name('form_approval');
    Route::get('/form_approval2', [adminController::class, 'form_approval2'])->name('form_approval2');
    Route::get('/music_revenue', [adminController::class, 'music_revenue'])->name('music_revenue');
    Route::post('/add_music_distribution_action', [adminController::class, 'add_music_distribution_action'])->name('add_music_distribution_action');
    Route::get('/youtube_revenue', [adminController::class, 'youtube_revenue'])->name('youtube_revenue');
    Route::post('/add_youtube_distribution_action', [adminController::class, 'add_youtube_distribution_action'])->name('add_youtube_distribution_action');
    Route::get('/view_youtube', [adminController::class, 'view_youtube'])->name('view_youtube');
    Route::get('/view_music_distribution', [adminController::class, 'view_music_distribution'])->name('view_music_distribution');
    Route::get('/payout_partners', [adminController::class, 'payout_partners'])->name('payout_partners');
    Route::post('/add_payout_partner_action', [adminController::class, 'add_payout_partner_action'])->name('add_payout_partner_action');
    Route::get('/payout_partners', [adminController::class, 'payout_partners'])->name('payout_partners');
    Route::get('/add_url', [adminController::class, 'add_url'])->name('add_url');
    Route::post('/add_url_action', [adminController::class, 'add_url_action'])->name('add_url_action');
    Route::get('/view_url', [adminController::class, 'view_url'])->name('view_url');
    Route::get('/add_crbt', [adminController::class, 'add_crbt'])->name('add_crbt');
    Route::post('/add_crbt_action', [adminController::class, 'add_crbt_action'])->name('add_crbt_action');
    Route::get('/view_crbt', [adminController::class, 'view_crbt'])->name('view_crbt');
    Route::get('/add_additional', [adminController::class, 'add_additional'])->name('add_additional');
    Route::post('/add_additional_action', [adminController::class, 'add_additional_action'])->name('add_additional_action');
    Route::get('/view_additional', [adminController::class, 'view_additional'])->name('view_additional');
    Route::get('/add_religion_category', [adminController::class, 'add_religion_category'])->name('add_religion_category');
    Route::post('/add_religion_category_action', [adminController::class, 'add_religion_category_action'])->name('add_religion_category_action');
    Route::get('/view_religion_category', [adminController::class, 'view_religion_category'])->name('view_religion_category');
    Route::get('/add_religion_subcategory', [adminController::class, 'add_religion_subcategory'])->name('add_religion_subcategory');
    Route::post('/add_religion_subcategory_action', [adminController::class, 'add_religion_subcategory_action'])->name('add_religion_subcategory_action');
    Route::get('/view_religion_subcategory', [adminController::class, 'view_religion_subcategory'])->name('view_religion_subcategory');
    Route::get('/deletefilms', [adminController::class, 'deletefilms'])->name('deletefilms');
    Route::get('/add_religion_details', [adminController::class, 'add_religion_details'])->name('add_religion_details');
    Route::post('/add_religion_details_action', [adminController::class, 'add_religion_details_action'])->name('add_religion_details_action');
    Route::get('/view_religion_details', [adminController::class, 'view_religion_details'])->name('view_religion_details');
    Route::get('/user_approval', [adminController::class, 'user_approval'])->name('user_approval');
    Route::get('/add_ppartners', [adminController::class, 'add_ppartners'])->name('add_ppartners');
    Route::post('/add_prime_partner_action', [adminController::class, 'add_prime_partner_action'])->name('add_prime_partner_action');
    Route::get('/view_prime_partner', [adminController::class, 'view_prime_partner'])->name('view_prime_partner');
    Route::get('/delete_prime_partner', [adminController::class, 'delete_prime_partner'])->name('delete_prime_partner');
    Route::get('/edit_details', [adminController::class, 'edit_details'])->name('edit_details');
    Route::post('/edit_details_action', [adminController::class, 'edit_details_action'])->name('edit_details_action');
    Route::get('/edit_category', [adminController::class, 'edit_category'])->name('edit_category');
    Route::post('/edit_category_action', [adminController::class, 'edit_category_action'])->name('edit_category_action');
    Route::get('/edit_subcategory', [adminController::class, 'edit_subcategory'])->name('edit_subcategory');
    Route::post('/edit_subcategory_action', [adminController::class, 'edit_subcategory_action'])->name('edit_subcategory_action');
    Route::get('/delete_details', [adminController::class, 'delete_details'])->name('delete_details');
    Route::get('/edit_religion_category', [adminController::class, 'edit_religion_category'])->name('edit_religion_category');
    Route::post('/edit_religion_category_action', [adminController::class, 'edit_religion_category_action'])->name('edit_religion_category_action');
    Route::get('/edit_religion_subcategory', [adminController::class, 'edit_religion_subcategory'])->name('edit_religion_subcategory');
    Route::post('/edit_religion_subcategory_action', [adminController::class, 'edit_religion_subcategory_action'])->name('edit_religion_subcategory_action');
    Route::get('/delete_religion_details', [adminController::class, 'delete_religion_details'])->name('delete_religion_details');
    Route::get('/delete_additional_info', [adminController::class, 'delete_additional_info'])->name('delete_additional_info');
    Route::get('/add_service', [adminController::class, 'add_service'])->name('add_service ');
    Route::post('/add_service_action', [adminController::class, 'add_service_action'])->name('add_service_action');
    Route::get('/view_service', [adminController::class, 'view_service'])->name('view_service');
    Route::get('/delete_service', [adminController::class, 'delete_service'])->name('delete_service');
    Route::get('/deletealbumimage', [adminController::class, 'deletealbumimage'])->name('deletealbumimage');
    Route::get('/deletesong', [adminController::class, 'deletesong'])->name('deletesong');
    Route::get('/deletealbummp3', [adminController::class, 'deletealbummp3'])->name('deletealbummp3');
    Route::get('/deletefilmmp3', [adminController::class, 'deletefilmmp3'])->name('deletefilmmp3');
    Route::get('/add_content_status', [adminController::class, 'add_content_status'])->name('add_content_status');
    Route::get('/edit_content_status', [adminController::class, 'edit_content_status'])->name('edit_content_status');
    Route::post('/add_content_status_action', [adminController::class, 'add_content_status_action'])->name('add_content_status_action');
    Route::get('/view_content_status', [adminController::class, 'view_content_status'])->name('view_content_status');
    Route::get('/add_payout', [adminController::class, 'add_payout'])->name('add_payout');
    Route::get('/edit_payout', [adminController::class, 'edit_payout'])->name('edit_payout');
    Route::post('/add_payout_action', [adminController::class, 'add_payout_action'])->name('add_payout_action');
    Route::get('/view_payout_partner', [adminController::class, 'view_payout_partner'])->name('view_payout_partner');
    Route::get('/content_details', [adminController::class, 'content_details'])->name('content_details');
});
Route::group(['domain' =>  env("VENDOR_APP_URL")], function () {
});

require __DIR__ . '/auth.php';
