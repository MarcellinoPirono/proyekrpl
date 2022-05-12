@extends('layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between shape-dashboard">
        <h1 class="h3 mb-0 text-black-800 ml-3">Laporan Keuangan</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">

                    <thead class="bg-primary1">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>
                                <div style="width: 100px;">
                                    Pemasukan
                                </div>
                            </th>
                            <th>
                                <div style="width: 120px;">
                                    Pengeluaran
                                </div>
                            </th>
                            <th>
                                <div style="width: 200px;">
                                    Keterangan
                                </div>
                            </th>
                            <th>
                                <div style="width: 70px;">
                                    Aksi
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12/02/2022</td>
                            <td>Rp. 350.000</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#editDataKiloan"><img class="btn-table gambar-table" src="assets/img/image/edit.png" style="width: 35px;"></a>
                                <a href="#" data-toggle="modal" data-target="#deleteModal"><img class="btn-table gambar-table" src="assets/img/image/delete.png" style="width: 35px;"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-3 btn btn-danger">
                <img class="mb-1" src="assets/img/image/pdf.png" style="width: 20px;">
                Export PDF
            </div>
            <div class="mt-3 btn btn-success">
                <img class="mb-1" src="assets/img/image/excel.png" style="width: 25.5px;">
                Export Excel
            </div>
        </div>
    </div>
</div>

@include('partials.delete')

<!-- Edit Data PopUp -->
<div class="modal fade" id="editDataKiloan" tabindex="-1" role="dialog" aria-labelledby="editDataKiloan" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary1">
                <h5 class="modal-title h3 mb-0 text-black-800 ml-3" id="editDataKiloan">Edit Pengeluaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Card Transaksi -->
                        <div class="col-xl-9 col-md-6 col-sm-6 col-lg-6 m-auto">
                            <form class="col-12" action="#">
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
                                <div class="form-group ml-3">
                                    <input type="submit" value="Edit" class="btn btn-warning">
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
    @endsection