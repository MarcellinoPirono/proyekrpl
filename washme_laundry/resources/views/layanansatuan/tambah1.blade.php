@extends('layouts.main')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between shape-dashboard">
        <h1 class="h3 mb-0 text-black-800 ml-3">Tambah Layanan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Container Card -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <div class="card-pesanan1 shadow">
                <div class="row ml-3">
                    <form class="col-6" method='post' action="/tambah1">
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Tipe Layanan:</div>
                        <div class="form-group col-pelanggan">
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="satuan" readonly>
                        </div>
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Item:</div>
                        <div class="form-group col-pelanggan">
                            <input type="text" class="form-control" id="exampleInputJenisLayanan1" aria-describedby="textHelp" placeholder="Masukkan Item" required>
                        </div>
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Gambar:</div>
                        <div class="mb-3 form-group col-pelanggan">
                            <input id="gambar2" name="gambar2" type="file" />
                            @error('gambar2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Estimasi Waktu:</div>
                        <div class="form-group col-pelanggan">
                            <input type="number" class="form-control" id="exampleInputEstimasi" aria-describedby="estimasiHelp" placeholder="Estimasi Waktu" required>
                        </div>
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Keterangan:</div>
                        <div class="form-group col-pelanggan">
                            <textarea class="form-control col-pelanggan" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="text-black-100 ml-3 mt-3 mb-1 small">Size:</div>
                        <div class="dropdown col-pelanggan">
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Tidak Ada</option>
                                    <option value="1">Ada</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Harga:</div>
                        <div class="form-group col-pelanggan">
                            <input type="number" class="form-control" id="exampleInputHargaNormal" aria-describedby="normalHelp" placeholder="Harga" required>
                        </div>
                        <div class="row col-pelanggan d-flex justify-content-between align-item-center">
                            <div class="form-group col-5">
                                <a href="layanan.html" class="btn btn-danger">Batal</a>
                            </div>
                            <div class="form-group col-5 text-right mr-n4">
                                <button class="btn btn-success">Input</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection