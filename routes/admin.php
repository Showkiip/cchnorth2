<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::name('admin.')->group(function () {

Route::get('admin',function()
{
        return view('backend.index');
});
Route::get('package',function()
{
        return view('backend.packages.index');
})->name('package.index');

});


Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin', function () {
        return view('backend.index');
    })->name('admin');

    Route::get('status/{slug}/{id}', [HomeController::class, "changeStatus"]);
    Route::resource('sliders', SliderController::class);
    Route::resource('packagetypes', PackageTypeController::class);
    Route::resource('packageCategory', PackageCategoryController::class);
    Route::resource('packages', PackageController::class);
    Route::resource('packageItinerary', PackageItineraryController::class);
    Route::resource('recentTrips', RecentTripController::class);
    Route::get('add-package-itinerary/{id}', [PackageController::class, "addIntinerary"])->name('add.package.itinerary');
    Route::get('view-package-itinerary/{id}', [PackageController::class, "viewIntinerary"])->name('view.package.itinerary');
    Route::resource('blogs', BlogController::class);
    Route::get('add-single-blog/{id}', [BlogController::class, "addSingleBlog"])->name('add.single.blog');
    Route::post('single-blog-store', [BlogController::class, "storeSingleBlog"])->name('single.blog.store');
    Route::get('view-single-blog/{id}', [BlogController::class, "viewSingleBlog"])->name('view.single.blog');
    Route::post('update-single-blog/{id}', [BlogController::class, "updateSingleBlog"])->name('update.single.blog');
    Route::resource('userRatings', UserRatingController::class);
    // Route::get()

});
