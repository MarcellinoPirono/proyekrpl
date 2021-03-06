@extends('layouts.main')

@section('container')
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 shape-dashboard">
            <h1 class="h3 mb-0 text-black-800 ml-3">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Transaksi Hari Ini -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Transaksi Hari Ini</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 0</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transaksi Bulan Ini -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Transaksi Bulan Ini</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 709.000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-orange shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-orange text-uppercase mb-1">
                                    Transaksi Tahun Ini
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp. 709.000
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Transaksi Selama Ini</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 709.000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-black-800">Grafik Bulan Maret</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-bar">
                            <div class="mt-0 text-right small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-biru-muda"></i> Pemasukan
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-danger"></i> Pengeluaran
                                </span>
                            </div>
                            <canvas id="myBarChart"></canvas>
                        </div>
                        <!-- Divider -->
                        <hr class="mt-5 sidebar-divider my-0">
                        <div class="mt-2 text-left small">
                            <h1 class="h3 mb-0 text-black-500 ml-3">Keuntungan: Rp. 680.000</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-black-800">Jumlah Transaksi</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Berdasarkan:</div>
                                <a class="dropdown-item" href="#">Keseluruhan</a>
                                <a class="dropdown-item" href="#">Cuci Kiloan</a>
                                <a class="dropdown-item" href="#">Cuci Satuan</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2 mt-4">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-6 text-center small">
                            <span class="mr-3">
                                <i class="fas fa-circle text-primary"></i> Cuci + Setrika
                            </span>
                            <span class="mr-3">
                                <i class="fas fa-circle text-success"></i> Cuci
                            </span>
                            <span class="mr-3">
                                <i class="fas fa-circle text-orange"></i> Setrika
                            </span>
                            <span class="mr-3">
                                <i class="fas fa-circle text-biru-muda"></i> Cuci Satuan
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cashier Activity -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-black-800"><i class="fas fa-history mr-2"></i>Aktivitas Kasir</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="activity-cashier">
                            <div class="tgl text-center d-flex mb-2 mt-2 ml-auto mr-auto">
                                <h6 class="m-auto align-self-center font-weight-bold text-black-200">21
                                    Maret 2022</h6>
                            </div>
                            <div class="mr-3 list-group text-black-200">
                                <span class="mr-3 mt-1">
                                    <i class="fas fa-circle"></i> Kasir A telah melakukan pelayanan kepada Marcell dengan total biaya Rp. 230.000
                                </span>
                                <span class="mr-3 mt-1">
                                    <i class="fas fa-circle"></i> Kasir B telah melakukan pelayanan kepada Rezaldi dengan total biaya Rp. 400.000
                                </span>
                            </div>
                            <div class="tgl text-center d-flex mb-2 mt-2 ml-auto mr-auto">
                                <h6 class="m-auto align-self-center font-weight-bold text-black-200">20
                                    Maret 2022</h6>
                            </div>
                            <div class="mr-3 list-group text-black-200">
                                <span class="mr-3 mt-1">
                                    <i class="fas fa-circle"></i> Kasir A telah melakukan pelayanan kepada Rajab dengan total biaya Rp. 150.000
                                </span>
                                <span class="mr-3 mt-1">
                                    <i class="fas fa-circle"></i> Kasir C telah melakukan pelayanan kepada Fadhil dengan total biaya Rp. 200.000
                                </span>
                                <span class="mr-3 mt-1">
                                    <i class="fas fa-circle"></i> Kasir B telah melakukan pelayanan kepada Arfandy dengan total biaya Rp. 250.000
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
@endsection