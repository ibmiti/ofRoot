<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\VideoController;
use App\Models\Articles;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/createAdmin',  [LoginController::class, 'create']); // shows create user form
Route::post('/storeAdmin',  [LoginController::class, 'store']);  // create form stores data

/*
|-----------------------------------------------------------------
|  User related Routes to their resources
|-----------------------------------------------------------------
*/

// create the article
Route::get('createArticle', [ArticlesController::class, 'createArticle']);

/*
|-----------------------------------------------------------------
|  User related Routes to their resources
|-----------------------------------------------------------------
*/
Route::get('/admin', [LoginController::class, 'showLogin']);
Route::post('/admin', [LoginController::class, 'login'])->name('login');

/*
|----------------------------------------------------------------
| Home | Welcome Route
|----------------------------------------------------------------
| // welcome route should have show all of the categories and then a list of latest articles
*/
Route::get('/', function () {
    // send all latest articles to bottom of welcome page, paginate by group of 10
    $articles = Articles::latest()->paginate(10);
    // associated images should be returned to view aswell.

    return view('welcome', ['articles' => $articles]);
});

/*
|-----------------------------------------------------------------
|   related routes
|-----------------------------------------------------------------
*/
Route::get('/capabilities', function(){
    return view('capabilities');
});

// return the mission view
Route::get('/ourmission', function(){return view('ourmission');});

// return the ourpromise view
Route::get('/ourpromise', function() { return view('ourpromise');});

// return the whyWeAreDifferent view
Route::get('/whyWeAreDifferent', function() { return view('whyWeAreDifferent');});




/*
|--------------------------------------------------------------------------
| Contact related routes
|--------------------------------------------------------------------------
*/
Route::get('/contact', [ContactController::class, 'show']);


/*
|------------------------------------------------------------------
| Article related routes
|------------------------------------------------------------------
*/
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
Route::post('/confirmArticle', [ArticlesController::class, 'confirmArticle'])->name('confirmArticle');
Route::post('/update/{articleId}', [ArticlesController::class, 'update'])->name('update');

Route::get('/editArticleSelection', [ArticlesController::class, 'editSelection'])->name('editArticleSelection'); // returns view which allows user to select article type
Route::get('/deleteArticle/{articleId}', [ArticlesController::class,'destroy'])->name('deleteArticle');

// Edit article route
Route::get('edit/{articleId}',[ArticlesController::class, 'edit']);

/*
|------------------------------------------------------------------
| Baby Article related routes
|------------------------------------------------------------------
| will need to change some of these routes
*/
Route::get('/babies', [ArticlesController::class,'indexBaby'])->name('babies');
Route::get('/babyArticle/{babyArticleId}', [ArticlesController::class,'show']);

// CRUD Related Routes
// Route::get('/createBabyArticle', [ArticlesController::class, 'createBaby']);
Route::get('/editBabyArticle/{babyArticleId}/edit', [ArticlesController::class, 'edit'])->name('editBaby');
Route::post('/updateBabyArticle', [ArticlesController::class, 'updateBaby'])->name('updateBabyArticle');
Route::get('/deleteBabyArticle/{babyArticleId}/delete', [ArticlesController::class, 'destroyBaby'])->name('deleteBabyArticle');

/*
|------------------------------------------------------------------
| Media related routes
|------------------------------------------------------------------
|
*/
Route::get('/upload', [MediaController::class, 'show']);
Route::post('/upload_media', [MediaController::class, 'upload'])->name('upload');

/*
|------------------------------------------------------------------
| Store related routes
|------------------------------------------------------------------
|
*/
Route::get('/shop', [ShopController::class, 'show']);


/*
|------------------------------------------------------------------
| video related routes
|------------------------------------------------------------------
|
*/
Route::get('/videos', [VideoController::class, 'show']);

