<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project Management System - IDMETAFORA ERP</title>
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
    <!-- Content -->
    <header class="pt-3 border-bottom border-top" style="background-color: #EFF6FF">
        <div class="container ">
            <div class="row align-items-center ">
                <img src="pms_img/acc/2.png" alt="" class="position-absolute" style="top: 0; right: 0;" width="35%">

                <div class="col-md-6">
                    <h1 class="font-weight-bold">
                        <span class="" style="color: #38567F; font-weight: bold">Project Management <br>
                            System Development
                            <p
                                style="text-decoration: underline;text-decoration-thickness: 15px ;text-decoration-color: red; ">
                                Services</p>
                        </span>
                    </h1>
                    <h6 class="py-3">Layanan Pengembangan Sistem Manajemen Proyek adalah salah satu layanan yang
                        ditawarkan
                        oleh Tim IDMETAFORA.

                    </h6>
                    <a href="#"><button type="button"
                            style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Hubungi
                            Kami</button></a>
                </div>
                <div class="col-md-6">
                    <img src="pms_img/imgHeader.png" alt="" class="img-fluid">
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

    <section class="pt-5 border-bottom" style="background-color: #E7F4FA;">
        <div class="container col-md-10">
            <div class="row">
                <div class="col-md-6 py-3">
                    <img src="pms_img/img1.png" alt="" width="80%">
                </div>

                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h3 class="font-weight-bold">Core <span class="text-danger">Erp</span></h3>
                    <p class="" style="font-size: 16px;"><span class="font-weight-bold">ERP (Enterprise Resource
                            Planning) adalah </span>
                        model sistem informasi yang memungkinkan sebuah
                        organisasi atau perusahaan untuk mengotomatisasi dan mengintegrasikan proses-proses dalam bisnis
                        utama.
                    </p>
                    <img src="pms_img/acc/1.png" alt="" class="position-absolute" style="bottom: 0px; right: 0px;"
                        width="80%">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container col-md-10">
            <div class="row">
                <img src="pms_img/acc/3.png" alt="" class="position-absolute" style="top: 0px; left: -110px;"
                    width="40%">
                <div class="col-md-6">
                    <img src="pms_img/img2.png" alt="" width="70%">
                </div>
                <div class="col-md-6">

                    <h3 class="font-weight-bold">Manfaat Project <br> Management System <br> <span
                            class="text-danger">IDMETAFORA</span>
                    </h3>
                    <p class="" style="font-size: 16px;">ERP Finance & Budgeting System membantu pemilik usaha untuk
                        mengontrol semuanya.
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="fab_img/icon/1.png" alt="" width="20%">
                            <p class="font-weight-bold" style="font-size: 16px;">Manfaat Sistem Manajemen Proyek 1</p>
                            <p style="font-size: 14px;">Pencatatan transaksi tanpa internet dan sinkronisasi sistem
                                otomatis ketika terhubung kembali ke internet.</p>
                        </div>

                        <div class="col-md-6">
                            <img src="fab_img/icon/2.png" alt="" width="20%">
                            <p class="font-weight-bold" style="font-size: 16px;">Manfaat Sistem Manajemen Proyek 2</p>
                            <p style="font-size: 14px;">Dapat mengelola pelanggan dan penjualan dari seluruh cabang dan
                                mengakses informasi lainnya secara langsung.</p>
                        </div>

                        <div class="col-md-6">
                            <img src="fab_img/icon/3.png" alt="" width="20%">
                            <p class="font-weight-bold" style="font-size: 16px;">Manfaat Sistem Manajemen Proyek 3</p>
                            <p style="font-size: 14px;">Dapat digunakan di semua perangkat asalkan terhubung ke
                                internet. Anda dapat memantau penjualan kapan saja dan di mana saja.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <img src="fab_img/icon/3.png" alt="" width="20%">
                            <p class="font-weight-bold" style="font-size: 16px;">Manfaat Sistem Manajemen Proyek 4</p>
                            <p style="font-size: 14px;">Dapat meninjau kinerja bisnis melalui tampilan analitik lengkap
                                dengan data terpusat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom" style="background-color: #E7F4FA">
        <div class="container col-md-8 pb-5">
            <div class="row py-5">
                <div class="col-md-12 text-center">
                    <h1 class="font-weight-bold">Fitur-Fitur Project Management <br>
                        System <span class="text-danger">IDMETAFORA</span></h1>
                </div>

            </div>

            <div class="row align-items-center justify-content-center">

                <img src="architect_img/acc/4.png" alt="" class="position-absolute" width="40%"
                    style="top: 100px; left: -220px;">
                <img src="architect_img/acc/7.png" alt="" class="position-absolute" width="5%"
                    style="top: 200px; left: 0px;">

                <img src="architect_img/acc/9.png" alt="" class="position-absolute" width="10%"
                    style="top: 200px; left: 30px;">


                <img src="architect_img/acc/5.png" alt="" class="position-absolute" width="40%"
                    style="bottom: 50px; right: -210px;">
                <img src="architect_img/acc/6.png" alt="" class="position-absolute" width="15%"
                    style="bottom: 0px; right: -80px;">

                <img src="fab_img/bgScreen.png" alt="" class="position-absolute" style=" left: -20px;bottom: -30px"
                    width="105%">
                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="architect_img/icon/5.png" alt="" width="20%">
                            <p class="font-weight-bold mb-0 ms-2 px-2">Fitur Sistem Manajemen Proyek 1</p>
                        </div>
                        <div>
                            <p class="">Memudahkan Anda dalam mengkategorikan produk Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="architect_img/icon/6.png" alt="" width="20%">
                            <p class="font-weight-bold mb-0 ms-2 px-2">Fitur Sistem Manajemen Proyek 2</p>
                        </div>
                        <div>
                            <p class="">Fitur pencarian untuk memudahkan Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="architect_img/icon/7.png" alt="" width="20%">
                            <p class="font-weight-bold mb-0 ms-2 px-2">Fitur Sistem Manajemen Proyek 3</p>
                        </div>
                        <div>
                            <p class="">Kelola data setiap barang yang masuk gudang penyimpanan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="architect_img/icon/8.png" alt="" width="20%">
                            <p class="font-weight-bold mb-0 ms-2 px-2">Fitur Sistem Manajemen Proyek 4</p>
                        </div>
                        <div>
                            <p class="">Kelola data setiap barang yang masuk gudang penyimpanan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container col-md-10 pt-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="font-weight-bold">Nilai-Nilai Perusahan Kami!</h4>
                        <h5 class="font-weight-light py-3">Nilai yang kami miliki sebagai perusahaan ERP</h5>
                        <div class="row py-3">
                            <div class="col-md-6">
                                <img src="fab_img/icon/v1.png" alt="">
                                <p class="font-weight-bold">Cepat</p>
                                <p class="">Waktu adalah uang, kita membuatnya lebih cepat dan memperbaikinya menjadi
                                    lebih
                                    baik.</p>

                            </div>
                            <div class="col-md-6">
                                <img src="fab_img/icon/v2.png" alt="">
                                <p class="font-weight-bold">Spirit</p>
                                <p class="">Memberikan pekerjaan dan pelayanan terbaik.</p>
                            </div>

                            <div class="col-md-6">
                                <img src="fab_img/icon/v3.png" alt="">
                                <p class="font-weight-bold">Otomatisas</p>
                                <p class="">Bagi kami, Inovasi adalah suatu keharusan untuk membuat bisnis tetap
                                    relevan.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <img src="fab_img/icon/v4.png" alt="">
                                <p class="font-weight-bold">Terpercaya</p>
                                <p class="">Memberikan pekerjaan dan layanan terbaik.
                                </p>
                            </div>
                        </div>
                    </div>
                    <img src="fab_img/acc/2.png" alt="" class="position-absolute" style="top: -60px; right: -120px;"
                        width="42%">
                    <div class="col-md-4">
                        <img src="fab_img/img3.png" alt="" width="100%">
                    </div>
                </div>

            </div>

    </section>

    <section class="py-5"
        style="background-image: url('fab_img/bgFab.png'); background-size: cover; background-position: center">
        <div class="container col-md-10">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="font-weight-bold h2"
                        style="color: #1090CB; background-image: -webkit-linear-gradient(45deg, #1090CB 28%, #D31A1B 71%); background-clip: text; -webkit-background-clip: text; text-fill-color: transparent; -webkit-text-fill-color: transparent;">
                        Pertanyaan tentang Project Management System
                        Development Services
                    </p>
                    <p class="font-weight-light h6">
                        Hal yang sering ditanyakan oleh user yang ingin menggunakan Project Management System
                        Development Services</p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-12">
                    <div class="shadow-lg p-3 mb-5 bg-white" style="border-radius: 20px; padding: 20px;">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link font-weight-bold" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Project Management System Apa Yang Kami Tawarkan?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body ">
                                        Bidang Perdagangan/Distributor Sistem Manajemen Arsitek

                                        <ol type="1">
                                            <li>Halaman Data Pajak.</li>

                                            <li>Halaman Data dan Detail Kelompok Pengguna.</li>

                                            <li>Halaman Data Faktur Pajak</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Apa Saja Unsur-Unsur Internet of Things (IoT) ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad
                                        squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                        truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                        bird
                                        on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica,
                                        craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                        excepteur
                                        butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic
                                        synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Apa Saja Contoh Penerapan Internet of Things (IoT) di Berbagai Industri ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad
                                        squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                        truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                        bird
                                        on it
                                        squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica,
                                        craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                        excepteur
                                        butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic
                                        synth
                                        nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>

                </div>
            </div>
    </section>
    <!-- End Content -->

    <section class="py-5" style="background-color: #E7F4FA">
        <div class="container col-md-8">
            <img src="imgAccF.png" alt="" class="position-absolute" style="bottom: -20px; left: -100px; width: 120%;">
            <img src="imgAccF1.png" alt="" class="position-absolute" style="bottom: -20px; left: 150px; width: 100%;">

            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-end">
                    <p class="" style="color: white; font-size: 18px;"><b>IDMETAFORA</b></p>
                    <p class="" style="color: white; font-size: 16px;"><b>IDMETAFORA</b> adalah Perusahaan
                        Solusi
                        TI,
                        bisnis utama kami adalah Pengembangan
                        ERP. Kami
                        juga mendukung klien kami dalam bidang Internet of Things, dan Desain & Pengembangan
                        Web.
                    </p>
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