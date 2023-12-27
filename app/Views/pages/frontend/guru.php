<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?>Guru<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container mt-5">
        <h2 class="text-center mb-5">Data Guru</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="teacher-card">
                    <img src="img/guru1.jpg" alt="Teacher 1" class="teacher-image">
                    <div class="teacher-name">windi astuti</div>
                    <div class="teacher-subject">Matematika</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="teacher-card">
                    <img src="img/guru2.jfif" alt="Teacher 2" class="teacher-image">
                    <div class="teacher-name">Tia Saedin</div>
                    <div class="teacher-subject">Bahasa Indonesia</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="teacher-card">
                    <img src="img/guru3.jfif" alt="Teacher 2" class="teacher-image">
                    <div class="teacher-name">Cupita Sari</div>
                    <div class="teacher-subject">Teknik Jaringan</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="teacher-card">
                    <img src="img/guru4.jfif" alt="Teacher 2" class="teacher-image">
                    <div class="teacher-name">Rendhi Ricardo</div>
                    <div class="teacher-subject">Bahasa Arab</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="teacher-card">
                    <img src="img/guru5.jfif" alt="Teacher 2" class="teacher-image">
                    <div class="teacher-name">Nindia Oktapia</div>
                    <div class="teacher-subject">Seni Budaya</div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
