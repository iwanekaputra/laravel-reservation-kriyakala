<?php

use App\Http\Livewire\Background\BackgroundCreate;
use App\Http\Livewire\Background\BackgroundEdit;
use App\Http\Livewire\Background\BackgroundIndex;
use App\Http\Livewire\Booking\BookingEdit;
use App\Http\Livewire\Booking\BookingIndex;
use App\Http\Livewire\Booking\BookingShow;
use App\Http\Livewire\Booking\Index;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\FormBooking;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Product;
use App\Http\Livewire\ProductShow;
use App\Http\Livewire\Reschedule;
use App\Http\Livewire\Reservation;
use App\Http\Livewire\Service\ServiceCreate;
use App\Http\Livewire\Service\ServiceEdit;
use App\Http\Livewire\Service\ServiceIndex;
use App\Http\Livewire\Service\ServiceShow;
use App\Http\Livewire\ServiceAdditional\ServiceAdditionalCreate;
use App\Http\Livewire\ServiceAdditional\ServiceAdditionalEdit;
use App\Http\Livewire\ServiceAdditional\ServiceAdditionalIndex;
use App\Http\Livewire\ServicePackage\ServicePackageCreate;
use App\Http\Livewire\ServicePackage\ServicePackageEdit;
use App\Http\Livewire\ServicePackage\ServicePackageIndex;
use App\Http\Livewire\Studio\StudioCreate;
use App\Http\Livewire\Studio\StudioEdit;
use App\Http\Livewire\Studio\StudioIndex;
use App\Http\Livewire\TransactionSuccess;
use App\Models\ServiceAdditional;
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

Route::get('/', Home::class)->name('/');
Route::get('/about-us', function () {
    return view('pages.about');
});
Route::get('/service', function () {
    return view('pages.service');
});
Route::get('/portfolio', function () {
    return view('pages.portfolio');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/price-list', function () {
    return view('pages.price-list');
});
Route::get('/tes', function () {

});



Route::get('/form-booking', FormBooking::class)->name('form-booking');
Route::get('/product/{id}', ProductShow::class)->name('product.show');
Route::get('/products', Product::class)->name('product');
Route::get('/transaction-success', TransactionSuccess::class);
Route::get('/reschedule', Reschedule::class)->name('reschedule');
// Route::get('/checkout/{orderId}', Checkout::class)->name('checkout');
Route::get('/reservation/{orderId}', Reservation::class)->name('reservation');
Route::get('/admin', Login::class)->name('login');

Route::get('/admin', Login::class)->name('login');

Route::get('/admin/bookings', BookingIndex::class)->name('admin.booking.index')->middleware('auth');
Route::get('/admin/bookings/{id}', BookingShow::class)->name('admin.booking.show')->middleware('auth');
Route::get('/admin/bookings/{id}/edit', BookingEdit::class)->name('admin.booking.edit')->middleware('auth');

Route::get('/admin/services', ServiceIndex::class)->name('admin.service.index')->middleware('auth');
Route::get('/admin/services/create', ServiceCreate::class)->name('admin.service.create')->middleware('auth');
Route::get('/admin/services/{id}/edit', ServiceEdit::class)->name('admin.service.edit')->middleware('auth');

Route::get('/admin/studios', StudioIndex::class)->name('admin.studio.index')->middleware('auth');
Route::get('/admin/studios/create', StudioCreate::class)->name('admin.studio.create')->middleware('auth');
Route::get('/admin/studios/{id}/edit', StudioEdit::class)->name('admin.studio.edit')->middleware('auth');

Route::get('/admin/packages', ServicePackageIndex::class)->name('admin.package.index')->middleware('auth');
Route::get('/admin/packages/create', ServicePackageCreate::class)->name('admin.package.create')->middleware('auth');
Route::get('/admin/packages/{id}/edit', ServicePackageEdit::class)->name('admin.package.edit')->middleware('auth');

Route::get('/admin/additionals', ServiceAdditionalIndex::class)->name('admin.additional.index')->middleware('auth');
Route::get('/admin/additionals/create', ServiceAdditionalCreate::class)->name('admin.additional.create')->middleware('auth');
Route::get('/admin/additionals/{id}/edit', ServiceAdditionalEdit::class)->name('admin.additional.edit')->middleware('auth');

Route::get('/admin/backgrounds', BackgroundIndex::class)->name('admin.background.index')->middleware('auth');
Route::get('/admin/backgrounds/create', BackgroundCreate::class)->name('admin.background.create')->middleware('auth');
Route::get('/admin/backgrounds/{id}/edit', BackgroundEdit::class)->name('admin.background.edit')->middleware('auth');


