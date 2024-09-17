<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MamberController;

// تمكين روتات الويب
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| هنا يمكنك تسجيل الروتات الخاصة بتطبيقك.
| يتم تحميل هذه الروتات بواسطة RouteServiceProvider ضمن مجموعة تحتوي على
| مجموعة middleware "web". الآن أنشئ شيئًا رائعًا!
|
*/

// الصفحة الرئيسية
Route::get('/', function () {
    return view('home');
})->name('home');

// صفحة المتجر
Route::get('/ourshop', function () {
    return view('ourshop');
})->name('ourshop');

// صفحة المنتجات
Route::get('/prodact', function () {
    return view('prodact');
})->name('prodact');
Route::get('/conactus', function () {
    return view('conactus');
})->name('conactus');

// روتات المصادقة
\Illuminate\Support\Facades\Auth::routes();

// صفحة المنزل بعد تسجيل الدخول
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/store', [MamberController::class, 'store'])->name('contact_us');




