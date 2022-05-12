@extends('layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between shape-dashboard">
        <h1 class="h3 mb-0 text-black-800 ml-3">Input Pengeluaran</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Container Card -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <div class="card-pesanan1 shadow">
                <div class="row ml-3">
                    <form class="col-6" action="#">
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Input Nominal Pengeluaran:</div>
                        <div class="form-group col-pelanggan">
                            <input type="number" class="form-control" id="exampleInputNominal" aria-describedby="textNominal" placeholder="Masukkan Nominal Pengeluaran" required>
                        </div>
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Masukkan Tanggal:</div>
                        <div class="form-group col-pelanggan">
                            <input type="date" class="form-control" id="exampleInputDate2" aria-describedby="date2Help" placeholder="dd/mm/yy" required>
                        </div>
                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Keterangan:</div>
                        <div class="form-group col-pelanggan">
                            <textarea class="form-control col-pelanggan" id="exampleFormControlTextarea2" rows="3" required></textarea>
                        </div>
                        <div class="row col-pelanggan d-flex justify-content-between align-item-center">
                            <div class="form-group col-5">
                                <a href="laporan-keuangan.html"><input value="Batal" class="btn btn-danger col-6"></a>
                            </div>
                            <div class="form-group col-5 text-right mr-n4">
                                <input type="submit" value="Input" class="btn btn-success">
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