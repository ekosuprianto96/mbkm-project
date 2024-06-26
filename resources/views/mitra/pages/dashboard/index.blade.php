@extends('mitra.layouts.main')
<style>
    .bullet-line-list-ol {
        list-style: none;
        padding-left: 18px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .bullet-line-list-ol li {
        position: relative;
        padding: 10px;
        display: flex;
        align-items: center;
    }
    .bullet-line-list-ol li::before {
        content: attr(data-content);
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: rgb(36, 109, 247);
        position: absolute;
        left: -4.5%;
        color: white;
    }
    .bullet-line-list-ol::before {
        content: '';
        display: block;
        justify-content: center;
        align-items: center;
        border-left: 3px solid rgb(36, 109, 247);
        border-style: dashed;
        width: 0;
        height: 90%;
        position: absolute;
        left: 0;
        color: white;
    }
</style>
@section('content')
@php
    $mitra = Auth::user()->mitra;
@endphp
<div class="row">
    <div class="col-md-12">
        <span class="d-block mb-4"
            style="font-weight: bold;font-size: 1em"
        ><i class="ri-calendar-todo-line me-2"></i> {{ date('Y M d') }}</span>
        <ul class="navbar-nav">
            <li class="nav-item fw-semibold ms-0">
                <h1 class="welcome-text" style="font-size: 2.4em"><strong>Selamat Datang, <span class="text-black fw-bold">{{ $mitra->nama_lengkap }}</span></strong></h1>
                <p class="welcome-sub-text" style="font-size: 1.3em;font-weight: normal">Di halaman ini Anda dapat mengakses berbagai informasi penting terkait persiapan & pelaksanaan program. </p>
            </li>
        </ul>
    </div>
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="p-4">
                    <h2 style="font-size: 2em;font-weight: bold">Pengumpulan Proposal Telah Ditutup</h2>
                    <p style="font-size: 1.1em">Proposal yang telah diajukan kini sedang diproses oleh tim terkait</p>
                    <a href="" class="btn btn-primary mt-4" style="font-size: 1.2em;font-weight: bold">Cek Status Proposal <i class="ri-arrow-right-line ms-2" style="font-size: 1.2em"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-rounded">
                    <div class="card-body px-lg-5">
                      <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="card-title card-title-dash" style="font-size: 1.5em">Linimasa Program</h4>
                        <p class="lead text-truncate m-0" style="font-size: 1.1em">Terakhir diperbarui: 11 Juni 2024</p>
                      </div>
                      <ul class="bullet-line-list-ol">
                        @for($i = 1; $i <= 7; $i++)
                        <li data-content="{{ $i }}">
                            <div class="d-flex py-2 h-100 align-items-center flex-nowrap justify-content-between w-100">
                              <p class="lead text-truncate m-0" style="font-size: 1.2em">Pengumpulan Proposal Mitra SI Angkatan 7</p>
                              <p class="lead text-truncate m-0" style="font-size: 1.2em">26 Februari 2024 - 19 April 2024</p>
                            </div>
                          </li>
                        @endfor
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-rounded">
                    <div class="card-body px-lg-5">
                      <div class="d-flex flex-column mb-4">
                        <h4 class="card-title card-title-dash mb-2" style="font-size: 1.5em">Pojok Pedoman & Artikel</h4>
                        <p class="text-truncate m-0" style="font-size: 1em">Yuk, baca artikel berikut agar Anda siap menjadi mitra Kampus Merdeka!</p>
                      </div>
                      <ul>
                        <li
                            class="d-flex border border-2 mb-3 p-3 rounded justify-content-between align-items-center"
                            style=""
                        >
                            <div>
                                <h5 style="font-weight: bold">Ketentuan Mitra dan Kegiatan Program</h5>
                                <p class="m-0">Informasi lengkap mengenai syarat, ketentuan & kewajiban mitra tiap program.</p>
                            </div>
                            <a href="" class="text-primary" style="font-size: 1.2em;font-weight: bold">Baca Artikel</a>
                        </li>
                        <li
                            class="d-flex border border-2 mb-3 p-3 rounded justify-content-between align-items-center"
                            style=""
                        >
                            <div>
                                <h5 style="font-weight: bold">Ketentuan Mitra dan Kegiatan Program</h5>
                                <p class="m-0">Informasi lengkap mengenai syarat, ketentuan & kewajiban mitra tiap program.</p>
                            </div>
                            <a href="" class="text-primary" style="font-size: 1.2em;font-weight: bold">Baca Artikel</a>
                        </li>
                        <li
                            class="d-flex border border-2 mb-3 p-3 rounded justify-content-between align-items-center"
                            style=""
                        >
                            <div>
                                <h5 style="font-weight: bold">Ketentuan Mitra dan Kegiatan Program</h5>
                                <p class="m-0">Informasi lengkap mengenai syarat, ketentuan & kewajiban mitra tiap program.</p>
                            </div>
                            <a href="" class="text-primary" style="font-size: 1.2em;font-weight: bold">Baca Artikel</a>
                        </li>
                        <li
                            class="d-flex border border-2 mb-3 p-3 rounded justify-content-between align-items-center"
                            style=""
                        >
                            <div>
                                <h5 style="font-weight: bold">Ketentuan Mitra dan Kegiatan Program</h5>
                                <p class="m-0">Informasi lengkap mengenai syarat, ketentuan & kewajiban mitra tiap program.</p>
                            </div>
                            <a href="" class="text-primary" style="font-size: 1.2em;font-weight: bold">Baca Artikel</a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#meta_keywords').select2({
        tags: true
    });

    $(function() {
        'use strict';
    })
</script>
@endsection