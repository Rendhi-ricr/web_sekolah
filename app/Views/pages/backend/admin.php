<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="content-header">
        <h1>Dashboard</h1>

        <ol class="breadcrumb content-header-breadcrumb my-sm-auto">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>

    </div>
    <div class="main-content">
        <div class="row ">
            <div class="col-md-4">
                <div class="shadow p-3 bg-white rounded ">
                    <div class="row px-3 align-items-center">
                        <i class="bx bx-user-circle bx-lg"></i>
                        <div class="col-sm-auto">
                            <h5 class="card-title">Jumlah Guru</h5>
                            <p class="card-text">Terdapat <strong>50</strong> guru di sekolah kami.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow p-3 bg-white rounded ">
                    <div class="row px-3 align-items-center">
                        <i class="bx bx-user-circle bx-lg"></i>
                        <div class="col-sm-auto">
                            <h5 class="card-title">Jumlah Guru</h5>
                            <p class="card-text">Terdapat <strong>50</strong> guru di sekolah kami.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow p-3 bg-white rounded ">
                    <div class="row px-3 align-items-center">
                        <i class="bx bx-user-circle bx-lg"></i>
                        <div class="col-sm-auto">
                            <h5 class="card-title">Jumlah Guru</h5>
                            <p class="card-text">Terdapat <strong>50</strong> guru di sekolah kami.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="block">
            <a href="" class="btn btn-primary btn-sm my-4"><i class="bx bx-plus"></i> Tambah Data</a>
            <div class="card">
                <div class="card-header">
                    <h6>Table</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cupita</td>
                                    <td>Indramayu</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tia</td>
                                    <td>Subang</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rendi</td>
                                    <td>Subang</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Gan gan</td>
                                    <td>Subang</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>