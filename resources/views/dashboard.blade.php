@extends('layouts.template_defaulte')
@section('title', 'Gudangku')
@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <!-- Footer -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Selamat Datang di Gudangku</h4>
                                <p>Situs web untuk mengelola dan memantau inventaris barang di gudang Anda dengan efisien.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards -->
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Kunjungan Web</h6>
                                        <h6 class="font-extrabold mb-0">500</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Pemakai</h6>
                                        <h6 class="font-extrabold mb-0">470</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Target Pemakai</h6>
                                        <h6 class="font-extrabold mb-0">80.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Tanggapan</h6>
                                        <h6 class="font-extrabold mb-0">264</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Gudangku</h1>
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('template/assets/images/bg/bg3.jpeg') }}" style="width: 100%; height: auto;" alt="Gudangku"><br><br>
                                <h3>"Gudangku" Solusi Manajemen Barang Anda</h3>
                                <p>Gudangku adalah sebuah website yang dirancang untuk membantu Anda dalam mengelola dan memantau inventaris barang di gudang dengan efisien.<br> 
                                    Dengan antarmuka yang ramah pengguna dan fitur yang lengkap, Gudangku memberikan solusi terbaik untuk manajemen gudang Anda.</p><br><br>
                                <p>Fitur utama dari "Gudangku" mencakup kemampuan untuk menambahkan entri baru untuk setiap barang yang masuk ke gudang, dengan menyertakan informasi detail seperti <br> 
                                nama barang (seperti "Monitor LCD"), jenis barang (seperti "Elektronik"), dan jumlah barang yang tersedia. Selain itu, platform ini juga menyediakan opsi untuk menghapus <br> 
                                barang dari daftar inventaris, memungkinkan pengguna untuk mengelola perubahan stok dengan cepat dan efisien. Dengan demikian,<br> 
                                "Gudangku" tidak hanya mempermudah pengelolaan inventaris barang, tetapi juga membantu dalam menjaga keteraturan dan akurasi informasi mengenai persediaan di gudang.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <!-- Sidebar -->
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('template/assets/images/faces/1.jpg') }}" alt="Face 1">
                            </div>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span style="margin-left: 10px">{{ auth()->user()->name }}</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('barang.index') }}">Barang Saya</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger">Logout</button>
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Lokasi Kami</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507697.4376209546!2d106.71125787676903!3d-6.212685264552858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f383714e8b23%3A0x12745e5240b0d044!2sMaman%20Salon!5e0!3m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <p>Temukan kami di peta untuk mengunjungi Gudangku secara langsung!</p>
                    </div>
                </div>

                <!-- Galeri Gambar dengan Slick Carousel -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Galeri</h4>
                        <div class="slick-carousel">
                            <div class="slide"><img src="{{ asset('template/assets/images/image2.jpeg') }}" style="width: 100%; height: auto;" alt="Image 1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
