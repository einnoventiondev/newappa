<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan; 
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SeasonController;
use App\Models\Country;
use App\Models\Nation;  

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

Route::group(['prefix' => 'artisan'], function () {
    Route::get('clear', function () {
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        return 'Successfully Cleared !';
    });

    Route::get('migrate/fresh', function () {

        Artisan::call('migrate:fresh --seed');

        return 'Successfully Migrated !';
    });
    Route::get('seed', function () {

        Artisan::call('db:seed');

        return 'Successfully seeded !';
    });
    Route::get('migrate', function () {

        Artisan::call('migrate');

        return 'Successfully Migrated !';
    });

    Route::get('link', function () {
        Artisan::call('storage:link');
        return 'Storage link successfully';
    });
});

Route::get('/', function () {
    return view('User.home');
})->name('/');
Route::get('second', function () { 
    $country = Country::all();
    $nation = Nation::all();
    return  view('User.participation2-form', compact('country', 'nation'));
})->name('second');
Route::get('secondb', function () {
    $country = Country::all();
    $nation = Nation::all();
    return  view('User.participation2-formb', compact('country', 'nation'));
})->name('secondb');
Route::get('third', function () {
    $country = Country::all();
    $nation = Nation::all();
    return  view('User.participation3-form', compact('country', 'nation'));
})->name('third');
Route::get('thirdb', function () {
    $country = Country::all();
    $nation = Nation::all();
    return  view('User.participation3-formb', compact('country', 'nation')); 
})->name('thirdb');
Route::get('five', function () {
    $country = Country::all();
    $nation = Nation::all();
    return  view('User.participation5-form', compact('country', 'nation'));
})->name('five');
Route::get('fiveb', function () { 
    $country = Country::all();
    $nation = Nation::all();
    return  view('User.participation5-formb', compact('country', 'nation'));
})->name('fiveb');
Route::get('six', function () {
    $country = Country::all(); 
    $nation = Nation::all();
    return  view('User.participation-form6', compact('country', 'nation'));
})->name('six');
Route::get('seven', function () {
    $country = Country::all();
    $nation = Nation::all();
    return  view('User.participation-form7', compact('country', 'nation'));
})->name('seven'); 
Route::get('eight', function () {
    $country = Country::all();
    $nation = Nation::all(); 
    return  view('User.participation-form8', compact('country', 'nation'));
})->name('eight');
Route::view('/award-win', 'User.award-winners-copy')->name('award');
//Route::view('/', 'User.home')->name('/');
Route::get('first/paricipation', [CompetitionController::class, 'index'])->name('first.paricipation'); 
Route::get('first/paricipationb', [CompetitionController::class, 'indexb'])->name('first.paricipationb');
Route::post('sendemail', [CompetitionController::class, 'sendemail'])->name('sendemail');
Route::get('form2', [CompetitionController::class, 'form2'])->name('form2');
Route::get('form3', [CompetitionController::class, 'form3'])->name('form3');
Route::get('form4', [CompetitionController::class, 'form4'])->name('form4');
Route::post('second/paricipation', [CompetitionController::class, 'index2'])->name('second.paricipation');
Route::post('university', [CompetitionController::class, 'university'])->name('university');
Route::post('third/participation', [CompetitionController::class, 'index3'])->name('third.participation');
Route::post('fourth/participation', [CompetitionController::class, 'index4'])->name('fourth.paricipation');
Route::get('first/dropdownCompetition', [CompetitionController::class, 'dropdownCompetition'])->name('university.students');
Route::get('second/dropdownCompetition', [CompetitionController::class, 'dropdownCompetition2'])->name('Prince.Abdullah.Al.Faisal.Competition');
Route::any('fifth/participation', [CompetitionController::class, 'indexnew'])->name('fifth.participation'); 
 

//corporation forms  
Route::post('first/corporation', [CompetitionController::class, 'corporation1'])->name('first.corporation.form');
Route::put('authenticity/{id}', [CompetitionController::class, 'authenticity']);
Route::put('behalf/{id}', [CompetitionController::class, 'behalf']);
Route::post('authenticity_single/{id}', [CompetitionController::class, 'authenticity_single']); //changed
Route::put('behalf_single/{id}', [CompetitionController::class, 'behalf_single']);
Route::post('second/corporation', [CompetitionController::class, 'corporation2'])->name('second.corporation.form');
Route::post('first/individual', [CompetitionController::class, 'individual1'])->name('first.individual2.form');
Route::post('second/individual', [CompetitionController::class, 'individual2'])->name('second.individual2.form');
Route::post('status/{id}', [CompetitionController::class, 'status']);
Route::put('unistatus/{id}', [CompetitionController::class, 'unistatus']);
Route::get('corporate/show/{id}', [HomeController::class, 'showcorporate'])->name('show.corporate');
Route::get('corporate/singing/{id}', [HomeController::class, 'showsinging'])->name('show.singing');
Route::get('corporate3/show/{id}', [HomeController::class, 'showcorporate3'])->name('show.corporate3');
Route::get('university/show/{id}', [HomeController::class, 'showuniversity'])->name('show.university');
Route::get('corporate1/show/{id}', [HomeController::class, 'showcorporate1'])->name('show.corporate1'); 
Route::get('corporate9/show/{id}', [HomeController::class, 'showcorporate9'])->name('show.corporate9'); 
Route::delete('corporate/delete/{id}',[HomeController::class, 'destroy_data'])->name('delete.corporate');
Route::delete('corporate9/delete/{id}',[HomeController::class, 'destroy_data9'])->name('delete.corporate9');
Route::delete('corporate10/delete/{id}',[HomeController::class, 'destroy_data10'])->name('delete.corporate10');
Route::get('individual/show/{id}', [HomeController::class, 'showindividual'])->name('show.individual');
Route::delete('individual/delete/{id}',[HomeController::class, 'destroy_data_individual'])->name('delete.individual');
Route::get('corporate2/show/{id}', [HomeController::class, 'showcorporate2'])->name('show.corporate2');
Route::delete('corporate2/delete/{id}',[HomeController::class, 'destroy_data2'])->name('delete.corporate2');
Route::get('individual2/show/{id}', [HomeController::class, 'showindividual2'])->name('show.individual2');
Route::get('individual3/show/{id}', [HomeController::class, 'showindividual3'])->name('show.individual3');
Route::delete('individual2/delete/{id}',[HomeController::class, 'destroy_data_individual2'])->name('delete.individual2');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/accept/{id}', [App\Http\Controllers\HomeController::class, 'accept'])->name('accept');

Route::get('/individuale', [App\Http\Controllers\HomeController::class, 'individuale'])->name('individuale');
Route::get('/institute', [App\Http\Controllers\HomeController::class, 'institute'])->name('institute');
Route::get('/theatrical', [App\Http\Controllers\HomeController::class, 'theatrical'])->name('theatrical');
//fprm 3
Route::get('/individuale2', [App\Http\Controllers\HomeController::class, 'individuale2'])->name('individuale2');
Route::get('/institute2', [App\Http\Controllers\HomeController::class, 'institute2'])->name('institute2');
// form 2
Route::get('/individuale3', [App\Http\Controllers\HomeController::class, 'individuale3'])->name('individuale3');
Route::get('/institute3', [App\Http\Controllers\HomeController::class, 'institute3'])->name('institute3');

Route::get('/individuale5', [App\Http\Controllers\HomeController::class, 'individuale5'])->name('individuale5');
Route::get('/institute5', [App\Http\Controllers\HomeController::class, 'institute5'])->name('institute5');


Route::get('/institute6', [App\Http\Controllers\HomeController::class, 'institute6'])->name('institute6');

Route::get('/university', [App\Http\Controllers\HomeController::class, 'university'])->name('university');

Route::get('/institute7', [App\Http\Controllers\HomeController::class, 'institute7'])->name('institute7');
Route::get('/institute8', [App\Http\Controllers\HomeController::class, 'institute8'])->name('institute8');
Route::get('/institute9', [App\Http\Controllers\HomeController::class, 'institute2'])->name('institute9');

Route::get('/index4', [App\Http\Controllers\HomeController::class, 'index4'])->name('index4');

Route::post('delete', [HomeController::class, 'destroy'])->name('delete');
Route::post('destroyindex', [HomeController::class, 'destroyindex'])->name('delete4');
Route::post('delete1', [HomeController::class, 'destroy1'])->name('delete1');
Route::post('delete2', [HomeController::class, 'destroy2'])->name('delete2');

Route::get('show/{id}', [HomeController::class, 'show'])->name('show');
Route::get('show1/{id}', [HomeController::class, 'show1'])->name('show1');
Route::get('show2/{id}', [HomeController::class, 'show2'])->name('show2');

// edit profile
Route::post('/profile_update', [HomeController::class, 'profileupdate'])->name('profile_update');
Route::post('/password_updates', [HomeController::class, 'editpassword'])->name('password_updates');

//contact us message from users

// ---------------------------------------USER---------------------------------------------------
Route::get('season19', [SeasonController::class, 'season19'])->name('user.season019');
Route::get('season20', [SeasonController::class, 'season20'])->name('user.season020'); 
Route::get('season21', [SeasonController::class, 'season21'])->name('user.season021');

Route::get('AboutPrince', [userController::class, 'AboutPrince'])->name('Prince.AboutPrinceCompetition');
Route::get('ArabicPoetry', [userController::class, 'ArabicPoetry'])->name('Prince.ArabicPoetry');
Route::get('advance', [userController::class, 'advance'])->name('Prince.advance');
Route::get('awardwinners', [userController::class, 'awardwinners'])->name('Prince.awardwinners');
Route::get('PoeticExperience', [userController::class, 'PoeticExperience'])->name('Prince.PoeticExperience');
Route::get('Theatricalpoetry', [userController::class, 'Theatricalpoetry'])->name('Prince.Theatricalpoetry');
Route::get('singingpoem', [userController::class, 'singingpoem'])->name('Prince.singingpoem');
Route::get('videocontent', [userController::class, 'videocontent'])->name('Prince.videocontent');
Route::get('diwan', [userController::class, 'diwan'])->name('Prince.diwan');
Route::get('contactus', [userController::class, 'contactus'])->name('Prince.contactus');

Route::get('show4/{id}', [HomeController::class, 'show4'])->name('show4');
Route::get('/user_profile', [HomeController::class, 'userprofile'])->name('user_profile');
Route::get('/edit_password', [HomeController::class, 'editpass'])->name('edit_password');

//contact us
Route::post('/ContactUs', [ContactController::class, 'store'])->name('store_contact');
// user portfolio
Route::post('/Portfolio', [PortfolioController::class, 'index'])->name('index_portfolio');
Route::post('/Portfoli', [PortfolioController::class, 'update'])->name('update_portfolio');
Route::post('/Portfolio/store', [PortfolioController::class, 'store'])->name('store_portfolio');

Route::get('/Contact/Index', [ContactController::class, 'index'])->name('index_contact');


Route::get('/faqs', function () {
    return view('User.faqs');
});
Route::get('/legal-policy', function () {
    return view('User.legal-policy');
});
Route::get('/privacy-policy', function () { 
    return view('User.privacy-policy');
});
Route::get('/terms-and-conditions', function () {
    return view('User.terms-and-conditions');
});
Route::get('/indivi',function(){
    return view('User.individual-form');
})->name('individual');
Route::get('/corpor',function(){
    return view('User.corporate-form');
})->name('corporate'); 


Route::get('generate-pdf/{id}', [CompetitionController::class, 'generatePDF']);

// Add Admin

Route::get('add_admin', [userController::class, 'add_admin'])->name('add_admin');
Route::post('add_admin_submit', [userController::class, 'add_admin_submit'])->name('add_admin_submit');

Route::get('register_new_form', [HomeController::class, 'register_new_form'])->name('register_new_form');

Route::post('register_new', [HomeController::class, 'register_new'])->name('register_new');

Route::get('delete_user/{id}', [HomeController::class, 'delete_user'])->name('delete_user');
Route::get('register_user', [HomeController::class, 'register_user'])->name('register_user');

Route::get('edit_admin/{id}', [HomeController::class, 'edit_admin'])->name('edit_admin');
Route::post('update_admin', [HomeController::class, 'update_admin'])->name('update_admin');

