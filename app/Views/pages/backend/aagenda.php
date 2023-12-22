<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Data Agenda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="content">
            <div class="main-content">
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
