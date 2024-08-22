<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Software ERP Indonesia - IDMETAFORA ERP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
    .custom-border {
        background-color: #e0f7ff;
        padding: 20px;
        border-radius: 100px;
        border: 2px solid black;
        /* position: relative; */
    }

    .custom-card {
        border-radius: 80px;
        border: 2px solid #e74c3c;
        padding: 50px;
    }



    .rocket {
        position: absolute;
        top: -30px;
        left: -50px;
        width: 100px;
    }

    .circle {
        position: absolute;
        bottom: -40px;
        left: -60px;
        width: 150px;
        height: 150px;
        background-color: white;
        border-radius: 50%;
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
    }

    .circle1 {
        position: absolute;
        bottom: 240px;
        right: -300px;
        width: 300px;
        height: 300px;
        background-color: white;
        border-radius: 50%;
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
    }

    .circle2 {
        position: absolute;
        bottom: 150px;
        right: 350px;
        width: 50px;
        height: 50px;
        background-color: red;
        border-radius: 50px 0 0 5px;
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
    }

    .glow {
        position: absolute;
        top: -20px;
        right: -40px;
        width: 50px;
        height: 50px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        filter: blur(20px);
    }

    /* Ubah warna tombol prev dan next */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
        /* Ubah warna sesuai keinginan, ini adalah warna biru */
        border-radius: 50%;
        border: 2px solid black;
        width: 40px;
        height: 40px;
    }

    /* Ubah warna latar belakang area di sekitar ikon */
    .carousel-control-prev,
    .carousel-control-next {
        background-color: rgba(255, 255, 255, 0.5);
        /* Ubah warna background tombol */
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }
    </style>
</head>

<body>
    <!-- Navbar -->

    <nav
        class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow border-bottom animate__animated animate__fadeIn">
        <!-- Logo -->
        <a class="navbar-brand" href="/"><img src="logo.png" width="100%" height="50" alt=""></a>

        <!-- Tombol Toggle untuk tampilan mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navbar dan Tombol Demo -->
        <div class="collapse navbar-collapse" id="navbarNav">


            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ERP System
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/purchasing_system">Purchasing System</a>
                        <a class="dropdown-item" href="/warehouse_management">Warehouse Management System</a>
                        <a class="dropdown-item" href="/point_of_sales">Point Of Sale System</a>
                        <a class="dropdown-item" href="/finance_and_budgeting">Finance & Budgeting System</a>
                        <a class="dropdown-item" href="/accounting_system">Accounting System</a>
                        <a class="dropdown-item" href="/legal_and_administration">Legal & Administration System </a>
                        <a class="dropdown-item" href="/audit_system">Audit System</a>
                        <a class="dropdown-item" href="/tax_system">Tax System</a>
                        <a class="dropdown-item" href="/bussiness_intelligence">Bussines inteligence</a>
                        <a class="dropdown-item" href="/pharmacy_system">Pharmacy System</a>
                        <a class="dropdown-item" href="/architect_management">Architect Management System</a>
                        <a class="dropdown-item" href="/project_management_system">Project Management System</a>
                        <a class="dropdown-item" href="/frequently_asked_questions">Frequently Asked Questions</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portfolio">Portfolio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Web Development
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/web_development_services">Web Development Service</a>
                        <a class="dropdown-item" href="/web_development_pricelist">Web Development Pricelist</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/iot">Internet Of Things</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tech_news">Tech News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Company</a>
                </li>
                <!-- Tambahkan margin pada tombol untuk memberikan jarak dari menu -->
                <li class="nav-item">
                    <a class="nav-link"
                        style="color: black;border-radius: 20px; background-color: #F0C932;padding: 10px 20px;"
                        href="#">Demo
                        Gratis</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- End Navbar -->

    <header class="py-3"
        style="background-image: url('bgHeader.png'); background-size: cover; background-position: center;">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <h1 class="font-weight-bold">
                        <span class="text-danger">Software</span> ERP <span class="text-primary">IDMETAFORA</span>
                    </h1>
                    <h6 class="font-weight-light py-3" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        Kami adalah pusat profesional teknologi di Jogja, menawarkan jasa pembuatan software, website,
                        dan aplikasi IoT. Bersama kami, kembangkan potensi Anda dalam bisnis ERP & IoT.

                    </h6>
                    <a href="#"><button type="button"
                            style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Hubungi
                            Kami</button></a>

                    <a href="#"> <button type="button"
                            style="color: #007bff; background-color: white; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Lihat
                            Detail</button></a>

                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="imgheader.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <section class="py-5 border-bottom">
        <div class="container">
            <div class="d-flex justify-content-center" style="gap: 30px">
                <img src="company/pertamina.png" width="10%" alt="" class="img-fluid">
                <img src="company/mubadala.png" width="10%" alt="" class="img-fluid">
                <img src="company/candra.png" width="10%" alt="" class="img-fluid">
                <img src="company/molindo.png" width="10%" alt="" class="img-fluid">
                <img src=" company/indonesia_power.png" width="10%" alt="" class="img-fluid">
                <img src="company/pesona.png" width="5%" alt="" class="img-fluid">
                <img src="company/brin.png" width="5%" alt="" class="img-fluid">
                <img src="company/batan.png" width="5%" alt="" class="img-fluid">
                <img src="company/semen.png" width="5%" alt="" class="img-fluid">
            </div>
        </div>
    </section>


    <section class="py-5 bg-light border-bottom" data-aos="fade-up">
        <div class="container col-md-8">
            <img src="imgAcc1.png" alt="" class="position-absolute" style="bottom: 300px; left: -100px; width: 20%;">

            <img src="imgAcc.png" alt="" class="position-absolute" style="bottom: 10px; left: -20px; width: 80px;">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h2 class="text-center font-weight-bold">Pencapaian Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="d-flex justify-content-center align-items-center">
                                <h5 class="p-2"><b>200</b></h5>
                                <img src="img1.png" alt="">
                            </div>
                            <div class="text-center">
                                <p><b>PERUSAHAAN</b> </p>
                                <h6 class="text-center">
                                    Lebih dari <b>200 bisnis perusahaan</b> menggunakan solusi perangkat lunak ERP kami.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="d-flex justify-content-center align-items-center">
                                <h5 class="p-2"><b>10 Tahun</b></h5>
                                <img src="img3.png" alt="">
                            </div>
                            <div class="text-center">
                                <p><b>IMPLEMENTASI</b></p>
                                <h6 class="text-center">
                                    Lebih dari <b>satu dekade</b>, kami mengimplementasi perangkat lunak ERP di
                                    Indonesia dan
                                    secara global. </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="d-flex justify-content-center align-items-center">
                                <h5 class="p-2"><b>1 Juta</b></h5>
                                <img src="img2.png" alt="">
                            </div>
                            <div class="text-center">
                                <p class="py-2"><b>PENGGUNA</b></p>
                                <h6 class="text-center">
                                    Kami telah membantu lebih dari <b>1.000.000</b> pengguna di ekosistem kami dengan
                                    teknologi
                                    kami. </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 border-bottom">
        <div class="container col-md-12">
            <div class="row">
                <div class="col-md-12 text-center py-5">
                    <h2 class=" font-weight-bold">Ekosistem ERP perangkat lunak kami</h2>
                    <img src="imgEkosistem.png" width="50%" alt="" class="img-fluid mx-auto d-block py-5"
                        data-aos="zoom-in">

                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>

    <section class="py-5 mb-5 border-bottom"
        style="background-image: url('bgProduct.png'); background-size: cover; background-position: center">

        <h2 class="text-center mb-5 font-weight-bold">Program Kami</h2>
        <div class="container col-md-8">

            <img src="imgAcc3.png" alt="" class="position-absolute" style="bottom: 500px; left: -230px; width: 10%;">
            <div class="col-md-12"
                style="background-color: #EFF4F6;border-radius: 200px; border: 1px solid black; padding: 50px">
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="product/img1.png" class="img-fluid mb-4" width="50%" alt="Purchasing System">
                            <p class="" style="font-size: 14px;font-weight: bold">Purchasing System</p>
                            <p class="" style="font-size: 12px">Alat yang membantu Anda mengelola penganggaran keuangan
                                & mengontrol
                                penganggaran.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="product/img2.png" class="img-fluid mb-4" width="50%" alt="Accounting System">
                            <p class="" style="font-size: 14px;font-weight: bold">Accounting System</p>
                            <p class="" style="font-size: 12px">Sistem ini memberikan wawasan penting yang membantu tim
                                manajemen
                                perusahaan mengambil banyak keputusan.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="Product/img3.png" class="img-fluid mb-4" width="50%" alt="Business Intelligence">
                            <p class="" style="font-size: 14px;font-weight: bold">Business Intelligence</p>
                            <p class="" style="font-size: 12px">Bantu perusahaan membuat keputusan yang lebih baik
                                dengan menampilkan
                                data
                                terkini dan historis dalam konteks bisnis mereka.</p>
                        </div>
                    </div>
                </div>
                <img src="imgAcc1.png" class="rocket" alt="Rocket" width="100%">
                <div class="circle"></div>
                <div class="glow"></div>
                <!-- <div class="circle1"></div> -->
            </div>

            <div class="row">
            </div>
        </div>
    </section>

    <section class="py-5" style="background-image: url('bgWhy.png'); background-size: cover;">
        <div class="container col-md-9">
            <div class="row">
                <div class="col-md-12 text-center py-5">
                    <h2 class="font-weight-bold">Mengapa Memilih Kami sebagai Konsultan ERP Anda?</h2>
                </div>

                <!-- Carousel Start -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-md-4 mb-4">
                                    <div class="p-4" style="background-color: #EFF4F6;border-radius: 20px">
                                        <div class="d-flex flex-row justify-content-right align-items-center">
                                            <img src="services/img3.png" class="img-fluid mb-2 mr-2" width="20%"
                                                alt="Terpercaya">
                                            <p class="font-weight-bold">Terpercaya</p>
                                        </div>
                                        <p>Alat yang membantu Anda mengelola penganggaran keuangan & mengontrol
                                            penganggaran.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="p-4" style="background-color: #EFF4F6;border-radius: 20px">
                                        <div class="d-flex flex-row justify-content-right align-items-center">
                                            <img src="services/img2.png" class="img-fluid mb-2 mr-2" width="20%"
                                                alt="Garansi Pemeliharaan">
                                            <p class="font-weight-bold">Garansi Pemeliharaan</p>
                                        </div>
                                        <p>Sistem ini memberikan wawasan penting yang membantu tim manajemen perusahaan
                                            mengambil banyak keputusan.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="p-4" style="background-color: #EFF4F6;border-radius: 20px">
                                        <div class="d-flex flex-row justify-content-right align-items-center">
                                            <img src="services/img1.png" class="img-fluid mb-2 mr-2" width="20%"
                                                alt="Pengguna Tanpa Batas">
                                            <p class="font-weight-bold">Pengguna Tanpa Batas</p>
                                        </div>
                                        <p>Bantu perusahaan membuat keputusan yang lebih baik dengan menampilkan data
                                            terkini dan historis dalam konteks bisnis mereka.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <!-- Isi dengan item lain jika diperlukan -->
                            <div class="row justify-content-center">
                                <div class="col-md-4 mb-4">
                                    <div class="p-4" style="background-color: #EFF4F6;border-radius: 20px">
                                        <div class="d-flex flex-row justify-content-right align-items-center">
                                            <img src="services/img3.png" class="img-fluid mb-2 mr-2" width="20%"
                                                alt="Terpercaya">
                                            <p class="font-weight-bold">Terpercaya</p>
                                        </div>
                                        <p>Alat yang membantu Anda mengelola penganggaran keuangan & mengontrol
                                            penganggaran.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="p-4" style="background-color: #EFF4F6;border-radius: 20px">
                                        <div class="d-flex flex-row justify-content-right align-items-center">
                                            <img src="services/img2.png" class="img-fluid mb-2 mr-2" width="20%"
                                                alt="Garansi Pemeliharaan">
                                            <p class="font-weight-bold">Garansi Pemeliharaan</p>
                                        </div>
                                        <p>Sistem ini memberikan wawasan penting yang membantu tim manajemen perusahaan
                                            mengambil banyak keputusan.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="p-4" style="background-color: #EFF4F6;border-radius: 20px">
                                        <div class="d-flex flex-row justify-content-right align-items-center">
                                            <img src="services/img1.png" class="img-fluid mb-2 mr-2" width="20%"
                                                alt="Pengguna Tanpa Batas">
                                            <p class="font-weight-bold">Pengguna Tanpa Batas</p>
                                        </div>
                                        <p>Bantu perusahaan membuat keputusan yang lebih baik dengan menampilkan data
                                            terkini dan historis dalam konteks bisnis mereka.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigasi Carousel -->
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"
                        style="top: 30%; transform: translateY(-50%); transform: translateX(-50%);">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"
                        style="top: 30%; transform: translateY(-50%); transform: translateX(50%); ">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- Carousel End -->
            </div>
        </div>
    </section>

    <section class="py-5"
        style="background-image: url('bgFlow.png'); background-size: cover; background-position: start;">
        <div class="container col-md-10">
            <img src="imgAccF3.png" alt="" class="position-absolute" style="bottom: 130px; left: 330px; width: 70%;">

            <div class="row align-items-center">
                <!-- Bagian Kiri -->
                <div class="col-md-4 mb-4">
                    <h3 class="text-primary">Bagaimana Perjalanan Bekerja Bersama Kami?</h3>
                    <p>Perjalanan bersama kami dimulai dengan memahami kebutuhan Anda, diikuti oleh desain,
                        implementasi, dan dukungan ERP untuk kesuksesan bisnis Anda.</p>
                </div>

                <!-- Bagian Tengah -->
                <div class="col-md-4">
                    <div class="row">
                        <!-- Card Konsultasi -->
                        <div class="col-md-12 mb-4">
                            <div class="card shadow bg-white" style="border-radius: 20px">
                                <div class="card-body text-center">
                                    <img src="flow/img1.png" alt="Konsultasi" class="img-fluid mb-3">
                                    <h4 class="card-title font-weight-bold">Konsultasi</h4>
                                    <p class="card-text" style="font-size: 12px;">
                                        Perencanaan dan briefing dengan tim kami untuk membuat web custom sesuai
                                        keinginan Anda dengan kualitas terbaik dan harga tepat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <!-- Card Proyek Kontrak -->
                    <div class="col-md-12 mb-4">
                        <div class="card shadow bg-white " style="border-radius: 20px">
                            <div class="card-body text-center">
                                <img src="flow/img2.png" alt="Proyek Kontrak" class="img-fluid mb-3">
                                <h5 class="card-title font-weight-bold">Proyek Kontrak</h5>
                                <p class="card-text" style="font-size: 12px;">
                                    Membuat MoU dengan Anda dan kemudian tim kami akan mengembangkan proyek khusus
                                    seperti permintaan Anda.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card Layanan Pemeliharaan -->
                    <div class="col-md-12">
                        <div class="card shadow bg-white " style="border-radius: 20px">
                            <div class="card-body text-center">
                                <img src="flow/img3.png" alt="Layanan Pemeliharaan" class="img-fluid mb-3">
                                <h4 class="card-title font-weight-bold">Layanan Pemeliharaan</h4>
                                <p class="card-text" style="font-size: 12px;">
                                    Setelah proyek selesai, kami akan memelihara web Anda agar tetap berfungsi dan
                                    minim kesalahan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="py-5 border-bottom"
        style="background-image: url('bgTesti.png'); background-size: cover; background-position: center;">
        <div class="container col-md-6">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="text-center">Apa kata Mereka?</h1>

                    <!-- Carousel Start -->
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
                                    <p class="m-0" style="max-width: 600px;">Pelayanan dari tim IDMETAFORA sangat
                                        responsif, cepat
                                        dan sangat membantu. Kami banyak terbantu dari proses awal pemesanan hingga
                                        selesai.
                                        Penjelasan dari tim IDMETAFORA sangat membantu kami dan hasil pekerjaannya juga
                                        sangat
                                        memuaskan.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!-- Isi dengan item lain jika diperlukan -->
                                <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
                                    <p class="m-0" style="max-width: 600px;">Pelayanan dari tim IDMETAFORA sangat
                                        responsif, cepat
                                        dan sangat membantu. Kami banyak terbantu dari proses awal pemesanan hingga
                                        selesai.
                                        Penjelasan dari tim IDMETAFORA sangat membantu kami dan hasil pekerjaannya
                                        juga
                                        sangat
                                        memuaskan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev"
                        style="top: 15%; transform: translateY(-50%); transform: translateX(-80%);">
                        <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>


                    <!-- Tombol Next -->
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next"
                        style="top: 15%; transform: translateY(-50%); transform: translateX(80%);">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <div class="d-flex flex-column justify-content-center align-items-center mt-3 mb-3">
                        <img src="imgPeople.png" alt="" width="50%">
                        <img src=" imgStar.png" alt="">
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #E7F4FA">
        <div class="container col-md-8">
            <img src="imgAccF.png" alt="" class="position-absolute" style="bottom: -20px; left: -100px; width: 120%;">
            <img src="imgAccF1.png" alt="" class="position-absolute" style="bottom: -20px; left: 150px; width: 100%;">

            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-end">
                    <p class="" style="color: white; font-size: 18px;"><b>IDMETAFORA</b></p>
                    <p class="" style="color: white; font-size: 16px;"><b>IDMETAFORA</b> adalah Perusahaan Solusi TI,
                        bisnis utama kami adalah Pengembangan
                        ERP. Kami
                        juga mendukung klien kami dalam bidang Internet of Things, dan Desain & Pengembangan Web.</p>
                </div>
                <div class="col-md-6">
                    <div class="p-3"
                        style="background-color: #FFFFFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">

                        <div class="mt-3 mb-3">
                            <div class="m-3">
                                <input type="text" class="form-control" id="name" placeholder="Namaa Lengkap">
                            </div>

                            <div class="m-3">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>

                            <div class="m-3">
                                <input type="text" class="form-control" id="telepon" placeholder="No. Telepon">
                            </div>

                            <div class="m-3">
                                <textarea class="form-control" id="pesan" placeholder="Pesan" rows="3"></textarea>
                            </div>

                            <div class="form-check m-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Saya telah membaca dan menerima kebijakan privasi.
                                </label>
                            </div>

                            <div class="m-3">
                                <button type="button" class="btn btn-primary">Kirim</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-3" style="background-color: #E7F4FA">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <img src="logo.png" alt="Logo" width="50%" class="img-fluid mb-3">
                </div>
                <div class="col-md-4 text-center">
                    <h6>© 2014-2024 PT Metafora Indonesia Teknologi</h6>
                </div>

                <div class="col-md-4 text-right">
                    <div class="mx-4">
                        <a href="#"><i class="bi bi-instagram mx-2 "></i></a>
                        <a href="#"><i class="bi bi-facebook mx-2"></i></a>
                        <a href="#"> <i class="bi bi-linkedin mx-2"></i></a>
                        <a href="#"><i class="bi bi-twitter mx-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<!-- Bootstrap scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
// Inisialisasi AOS
AOS.init();
</script>
