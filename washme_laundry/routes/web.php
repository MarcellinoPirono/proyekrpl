    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Livewire\Home;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\AdminCategoryController;
    use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\DataKasirController;
    use App\Http\Controllers\LayananKiloanController;
    use App\Http\Controllers\LayananSatuanController;

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

    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::resource('/dashboard', AdminCategoryController::class)->middleware('admin');
    Route::resource('/pesanan', AdminCategoryController::class);
    Route::resource('/layanan', AdminCategoryController::class)->middleware('admin');

    Route::get('/tambah', [LayananKiloanController::class, 'index'])->middleware('admin');
    Route::post('/tambah', [LayananKiloanController::class, 'store'])->middleware('admin');

    Route::get('/tambah1', [LayananSatuanController::class, 'index'])->middleware('admin');
    Route::post('/tambah1', [LayananSatuanController::class, 'store'])->middleware('admin');

    Route::get('/register', [RegisterController::class, 'index'])->middleware('admin');
    Route::post('/register', [RegisterController::class, 'store'])->middleware('admin');
    // Route::resource('/riwayat_transaksi', AdminCategoryController::class);

    Route::resource('/data_kasir', DataKasirController::class)->middleware('admin');
    Route::get('delete/{id}', [DataKasirController::class, 'destroy'])->middleware('admin');
    Route::get('put/{id}', [DataKasirController::class, 'edit'])->middleware('admin');
    Route::put('put', [DataKasirController::class, 'update']);

    // Route::delete('/data_kasir/{id}', [DataKasirController::class, 'destroy'])->middleware('admin');


    Route::get('/pesanan', function () {
        return view('pesanan', [
            "title" => "Pesanan"
        ]);
    })->middleware('auth');

    Route::get('/layanan', function () {
        return view('layanan', [
            "title" => "Layanan"
        ]);
    })->middleware('admin');

    Route::get('/riwayat_transaksi', function () {
        return view('riwayat_transaksi', [
            "title" => "Riwayat Transaksi"
        ]);
    })->middleware('auth');

    Route::get('/laporan_keuangan', function () {
        return view('laporan_keuangan', [
            "title" => "Laporan Keuangan"
        ]);
    })->middleware('admin');

    Route::get('/input_pengeluaran', function () {
        return view('input_pengeluaran', [
            "title" => "Input Pengeluaran"
        ]);
    })->middleware('auth');

    // Route::get('/data_kasir', function() {
    //     return view('data_kasir', [
    //         "title" => "Data Kasir"
    //     ]);
    // })->middleware('admin');

    Route::get('/pengaturan', function () {
        return view('pengaturan', [
            "title" => "Pengaturan"
        ]);
    })->middleware('auth');
