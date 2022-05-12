@extends('layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between shape-dashboard">
        <h1 class="h3 mb-0 text-black-800 ml-3">Riwayat Transaksi</h1>
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
                                    No. Invoice
                                </div>
                            </th>
                            <th>
                                <div style="width: 100px;">
                                    Nama
                                </div>
                            </th>
                            <th>
                                <div style="width: 200px;">
                                    Layanan
                                </div>
                            </th>
                            <th>
                                <div style="width: 100px;">
                                    Total Biaya
                                </div>
                            </th>
                            <th>
                                <div style="width: 120px;">
                                    Pembayaran
                                </div>
                            </th>
                            <th>
                                <div style="width: 120px;">
                                    Pengambilan
                                </div>
                            </th>
                            <th>
                                <div style="width: 120px;">
                                    Proses
                                </div>
                            </th>
                            <th>
                                <div style="width: 120px;">
                                    Aksi
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12/02/2022</td>
                            <td>C02123</td>
                            <td>Muh Rajab</td>
                            <td>Cuci + Setrika (Express)</td>
                            <td>Rp. 270.000</td>
                            <td>
                                <div class="bg-danger border-table text-white">
                                    Belum Lunas
                                </div>
                            </td>
                            <td>
                                <div class="bg-danger border-table text-white">
                                    Belum Diambil
                                </div>
                            </td>
                            <td>
                                <div class="bg-danger border-table text-white">
                                    Pencucian
                                </div>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#editDataKiloan"><img class="btn-table gambar-table" src="assets/img/image/edit.png" style="width: 35px;"></a>
                                <a href="detail-transaksi-kiloan.html"><img class="btn-table gambar-table" src="assets/img/image/detail.png" style="width: 35px;"></a>
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
<!-- End of Main Content -->

@include('partials.delete')

<!-- Edit Data PopUp Kiloan -->
<div class="modal fade" id="editDataKiloan" tabindex="-1" role="dialog" aria-labelledby="editDataKiloan" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary1">
                <h5 class="col-8 modal-title h3 mb-0 text-black-800 ml-3" id="editDataKiloan">Edit Data</h5>
                <h5 class="modal-title h3 mb-0 text-black-800 text-right">No. Invoice C02123</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Card Transaksi -->
                        <div class="col-xl-5 col-md-6 col-sm-6 col-lg-6">
                            <!-- Card Header -->
                            <div class=" text-black-600 card-header">
                                Data Pelanggan
                            </div>
                            <!-- Card Body -->
                            <div class="card-pesanan1 shadow">
                                <div class="text-black-100 ml-3 mt-3 mb-1 small">Pelanggan:</div>
                                <div class="dropdown col-pelanggan">
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">Marcell</option>
                                            <option value="2">Rezaldi</option>
                                            <option value="3">Rajab</option>
                                        </select>
                                    </div>
                                </div>
                                <form action="#">
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Nama:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Masukkan nama" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">No. Telp:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="tel" class="form-control" id="exampleInputTelp1" aria-describedby="telpHelp" placeholder="Masukkan no.telp" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Email:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Alamat:</div>
                                    <div class="form-group col-pelanggan">
                                        <textarea class="form-control col-pelanggan" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group col-pelanggan d-flex justify-content-between align-item-center">
                                        <input type="submit" value="Hapus" class="btn btn-danger">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Card Transaksi -->
                        <div class="col-xl-7 col-md-6 col-sm-6 col-lg-6 mb-4">
                            <!-- Card Header -->
                            <div class=" text-black-600 card-header">
                                Data Pesanan
                            </div>
                            <!-- Card Body -->
                            <div class="card-pesanan1 shadow">
                                <div class="dropdown col-pelanggan mt-3 row">
                                    <div class="input-group mb-3 col-5">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Pilih Layanan...</option>
                                            <option value="1">Cuci + Setrika</option>
                                            <option value="2">Cuci</option>
                                            <option value="3">Setrika</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3 col-5">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Pilih Jenis...</option>
                                            <option value="1">Express</option>
                                            <option value="2">Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-pelanggan scroll-table">
                                    <table class="table table-bordered table-light text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Layanan</th>
                                                <th scope="col">Jenis</th>
                                                <th scope="col">Estimasi Waktu</th>
                                                <th scope="col">Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Cuci + Setrika</td>
                                                <td>Normal</td>
                                                <td>3 Hari</td>
                                                <td>Rp. 9.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <form action="#">
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Berat (KG):</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="number" class="form-control" id="exampleInputNumber1" aria-describedby="numberHelp" placeholder="Masukkan Berat" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Tanggal Masuk:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="date" class="form-control" id="exampleInputDate1" aria-describedby="date1Help" placeholder="dd/mm/yy" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Tanggal Keluar:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="date" class="form-control" id="exampleInputDate2" aria-describedby="date2Help" placeholder="dd/mm/yy" readonly>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Keterangan:</div>
                                    <div class="form-group col-pelanggan">
                                        <textarea class="form-control col-pelanggan" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                    </div>
                                    <div class="row col-pelanggan">
                                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Via Pembayaran:</div>
                                        <div class="input-group mb-3 col-4">
                                            <select class="custom-select" id="inputGroupSelect01" required>
                                                <option selected>Choose...</option>
                                                <option value="1">Tunai</option>
                                                <option value="2">Debit</option>
                                                <option value="3">Ovo</option>
                                                <option value="4">Gopay</option>
                                                <option value="5">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h1 class="h2 text-black-800 ml-3 mb-2">Rp. 270.000</h1>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="text-black-100 ml-3 mb-2 small">Pembayaran Saat Ini:</div>
                                            <div class="col-10 input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Input Payment" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-check-circle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-black-100 ml-3 mb-2 small">Sisa Pembayaran:</div>
                                            <div class="col-12 input-group mb-3">
                                                <input type="text" class="form-control" placeholder="remaining payment" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Status Pengambilan:</div>
                                    <div class="col-pelanggan d-flex mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" checked>
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault1">
                                                Belum Diambil
                                            </label>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2">
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault2">
                                                Sudah Diambil
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Proses:</div>
                                    <div class="col-pelanggan d-flex mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault3" checked>
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault3">
                                                Pencucian
                                            </label>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault4">
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault4">
                                                Pengeringan
                                            </label>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault5">
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault5">
                                                Selesai
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-pelanggan d-flex justify-content-between align-item-center">
                                        <input type="submit" value="Edit Transaksi" class="btn btn-warning">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Data PopUp Satuan -->
<div class="modal fade" id="editDataSatuan" tabindex="-1" role="dialog" aria-labelledby="editDataSatuan" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary1">
                <h5 class="col-8 modal-title h3 mb-0 text-black-800 ml-3" id="editDataSatuan">Edit Data</h5>
                <h5 class="modal-title h3 mb-0 text-black-800 text-right">No. Invoice C02123</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Card Transaksi -->
                        <div class="col-xl-5 col-md-6 col-sm-6 col-lg-6">
                            <!-- Card Header -->
                            <div class=" text-black-600 card-header">
                                Data Pelanggan
                            </div>
                            <!-- Card Body -->
                            <div class="card-pesanan1 shadow">
                                <div class="text-black-100 ml-3 mt-3 mb-1 small">Pelanggan:</div>
                                <div class="dropdown col-pelanggan">
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">Marcell</option>
                                            <option value="2">Rezaldi</option>
                                            <option value="3">Rajab</option>
                                        </select>
                                    </div>
                                </div>
                                <form action="#">
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Nama:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Masukkan nama" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">No. Telp:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="tel" class="form-control" id="exampleInputTelp1" aria-describedby="telpHelp" placeholder="Masukkan no.telp" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Email:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Alamat:</div>
                                    <div class="form-group col-pelanggan">
                                        <textarea class="form-control col-pelanggan" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group col-pelanggan d-flex justify-content-between align-item-center">
                                        <input type="submit" value="Hapus" class="btn btn-danger">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Card Transaksi -->
                        <div class="col-xl-7 col-md-6 col-sm-6 col-lg-6 mb-4">
                            <!-- Card Header -->
                            <div class=" text-black-600 card-header">
                                Data Pesanan
                            </div>
                            <!-- Card Body -->
                            <div class="card-pesanan1 shadow">
                                <div class="dropdown col-pelanggan mt-3 row">
                                    <div class="input-group mb-3 col-4">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Pilih Item...</option>
                                            <option value="1">Bed Cover</option>
                                            <option value="2">Bantal</option>
                                            <option value="3">Boneka</option>
                                            <option value="4">Sprei</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3 col-4">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Pilih Size...</option>
                                            <option value="1">Besar</option>
                                            <option value="2">Kecil</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3 col-4">
                                        <input type="number" class="form-control" id="exampleInputName1" aria-describedby="jumlahHelp" placeholder="Jumlah" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-check-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-pelanggan scroll-table">
                                    <table class="table table-bordered table-light text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Layanan</th>
                                                <th scope="col">Item</th>
                                                <th scope="col">Size</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Estimasi Waktu</th>
                                                <th scope="col">Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Satuan</td>
                                                <td>Boneka</td>
                                                <td>Kecil</td>
                                                <td>1</td>
                                                <td>5 hari</td>
                                                <td>Rp. 15.000</td>
                                            </tr>
                                            <tr>
                                                <td>Satuan</td>
                                                <td>Bed Cover</td>
                                                <td>-</td>
                                                <td>2</td>
                                                <td>3 hari</td>
                                                <td>Rp. 50.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row col-pelanggan d-flex justify-content-between align-items-center">
                                    <div class="form-group col-5">
                                        <button type="submit" class="btn btn-orange "><i class="fas fa-plus mr-2"></i>Tambah</button>
                                    </div>
                                    <div class="form-group col-5 text-right mr-n4">
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt mr-2"></i>Hapus</button>
                                    </div>
                                </div>
                                <form action="#">
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Tanggal Masuk:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="date" class="form-control" id="exampleInputDate1" aria-describedby="date1Help" placeholder="dd/mm/yy" required>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Tanggal Keluar:</div>
                                    <div class="form-group col-pelanggan">
                                        <input type="date" class="form-control" id="exampleInputDate2" aria-describedby="date2Help" placeholder="dd/mm/yy" readonly>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Keterangan:</div>
                                    <div class="form-group col-pelanggan">
                                        <textarea class="form-control col-pelanggan" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                    </div>
                                    <div class="row col-pelanggan">
                                        <div class="text-black-100 ml-3 mt-2 mb-1 small">Via Pembayaran:</div>
                                        <div class="input-group mb-3 col-4">
                                            <select class="custom-select" id="inputGroupSelect01" required>
                                                <option selected>Choose...</option>
                                                <option value="1">Tunai</option>
                                                <option value="2">Debit</option>
                                                <option value="3">Ovo</option>
                                                <option value="4">Gopay</option>
                                                <option value="5">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h1 class="h2 text-black-800 ml-3 mb-2">Rp. 65.000</h1>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="text-black-100 ml-3 mb-2 small">Pembayaran Saat Ini:</div>
                                            <div class="col-10 input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Input Payment" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-check-circle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-black-100 ml-3 mb-2 small">Sisa Pembayaran:</div>
                                            <div class="col-12 input-group mb-3">
                                                <input type="text" class="form-control" placeholder="remaining payment" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Status Pengambilan:</div>
                                    <div class="col-pelanggan d-flex mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" checked>
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault1">
                                                Belum Diambil
                                            </label>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2">
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault2">
                                                Sudah Diambil
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-black-100 ml-3 mt-2 mb-1 small">Proses:</div>
                                    <div class="col-pelanggan d-flex mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault3" checked>
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault3">
                                                Pencucian
                                            </label>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault4">
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault4">
                                                Pengeringan
                                            </label>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault5">
                                            <label class="form-check-label text-black-100 small" for="flexRadioDefault5">
                                                Selesai
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-pelanggan d-flex justify-content-between align-item-center">
                                        <input type="submit" value="Edit Transaksi" class="btn btn-warning">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection