<?php

use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminPodcastController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicArticleController;
use App\Http\Controllers\PublicPodcastController;
use App\Http\Controllers\SpotifyPlaylistController;
use App\Http\Livewire\CategorisationHandler;
use App\Models\Article;
use App\Models\Categorisation;
use App\Models\Podcast;
use App\Services\ArticleCategorisationService;
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

/**
 * Default route
 */
Route::get('/', [HomeController::class, 'index']);

/**
 * Routers that require user authentication
 */
Route::middleware(['auth', 'verified'])->group(function () {
    
    /**
     * The dashboard
     */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /**
     * CKEditor Image Upload
     */
    Route::post('/ckeditor/uploadImage', [CkeditorController::class, 'uploadImage'])->name('ckeditor.image-upload');
    
    /**
     * Administration of resources
     */
    Route::resource('admin-article', AdminArticleController::class);
    Route::resource('admin-podcast', AdminPodcastController::class);
    Route::resource('spotify-playlist', SpotifyPlaylistController::class);

    /**
     * Profile Management
     */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
/**
 * Fetch article or podcast or category by slug
 */

Route::middleware(['log.article.visit'])->group(function () {
    Route::get('/{slug}', function ($slug) {
        $article = Article::where('slug', $slug)->first();

        if ($article) {
            return (new PublicArticleController)->show($slug);
        }

        $podcast = Podcast::where('slug', $slug)->first();

        if ($podcast) {
            return (new PublicPodcastController)->show($slug);
        }

        $categorisation = Categorisation::where('slug', $slug)->firstOrFail();

        if ($categorisation) {
            return view('public.categorisation.show', [
                'categorisation' => $categorisation,
                'slug' => $slug
            ]);
        }
    });
});
