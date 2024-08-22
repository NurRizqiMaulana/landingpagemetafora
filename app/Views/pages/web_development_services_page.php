<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Web Development Services - IDMETAFORA ERP</title>
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

    <header class="py-3 border-bottom"
        style="background-image: url('bgHeader.png'); background-size: cover; background-position: center;">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <h1 class="font-weight-bold">
                        <span class="text-danger">Web Development</span> Services <span
                            class="text-primary">IDMETAFORA</span>
                    </h1>
                    <h6 class="font-weight-light py-3" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        Web Design & Web Developer Indonesia. Kantor kami berlokasi di Yogyakarta dan Jakarta.

                    </h6>
                    <a href="#"><button type="button"
                            style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Hubungi
                            Kami</button></a>

                    <a href="#"> <button type="button"
                            style="color: #007bff; background-color: white; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Lihat
                            Detail</button></a>

                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="webds_img/imgHeader.png" alt="" class="img-fluid">
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
                    <h2 class="text-center font-weight-bold">Pencapaian Kami dalam Angka</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="d-flex justify-content-center align-items-center">
                                <h5 class="p-2"><b>10</b></h5>
                                <img src="webds_img/icon/1.png" alt="">
                            </div>
                            <div class="text-center">
                                <p><b>10 TAHUN BERJALAN</b> </p>
                                <h6 class="text-center">
                                    Kami menjalankan bisnis dan pertumbuhan dengan dukungan dari semua mitra
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="d-flex justify-content-center align-items-center">
                                <h5 class="p-2"><b>100+</b></h5>
                                <img src="webds_img/icon/2.png" alt="">
                            </div>
                            <div class="text-center">
                                <p><b>100+ PROYEK SELESAI</b></p>
                                <h6 class="text-center">
                                    Untuk mendukung setiap klien kami dan menyelesaikan setiap masalah dengan teknologi
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="d-flex justify-content-center align-items-center">
                                <h5 class="p-2"><b>85%+</b></h5>
                                <img src="webds_img/icon/3.png" alt="">
                            </div>
                            <div class="text-center">
                                <p class="py-2"><b>85%+ PESANAN BERULANG</b></p>
                                <h6 class="text-center">
                                    Lebih dari 85% klien kami kembali kepada kami dan meminta proyek lain.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom" style="background-color: #E7F4FA">
        <div class="container col-md-10 py-5">
            <div class="row pb-5">
                <div class="col-md-6 py-5 align-self-center">
                    <img src="webds_img/acc/3.png" alt="" class="position-absolute" style="bottom: -100px; left: -110px"
                        width="10%">


                    <p class="font-weight-bold h3">
                        Pengalaman Kami
                    </p>

                    <p class="font-weight-light h6 py-3">
                        Setiap pengalaman membuat kami lebih berani dan tahu apa yang dibutuhkan pasar untuk setiap
                        klien.
                    </p>

                    <a href="/portfolio" class="btn btn-primary">See portfolio <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <img src="webds_img/acc/0.png" alt="" class="position-absolute" style="left: -100px" width="100%">

                <div class="col-md-6">
                    <div class="row">
                        <img src="webds_img/acc/1.png" alt="" class="position-absolute"
                            style="top: -20px; right: -100px" width="120%">

                        <img src="webds_img/acc/2.png" alt="" class="position-absolute"
                            style="top: -50px; right: -100px" width="10%">
                        <div class="col-md-4">
                            <img src="webds_img/porto/1.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="webds_img/porto/2.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="webds_img/porto/3.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="webds_img/porto/4.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="webds_img/porto/5.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="webds_img/porto/6.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom">
        <div class="container col-md-9">
            <img src="webds_img/acc/4.png" alt="" class="position-absolute" style="bottom: -280px; left: -160px"
                width="25%">
            <div class="row">
                <div class="col-md-12 text-center py-5">
                    <h2 class="font-weight-bold">Apa yang Bisa Anda Minta?</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="text-center">
                                <img src="webds_img/img1.png" alt="" width="80%">
                            </div>
                            <div class="text-center">
                                <p class="font-weight-bold">DESAIN WEBSITE YANG MENAKJUBKAN</p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="text-center">
                                <img src="webds_img/img2.jpg" alt="" width="80%">
                            </div>
                            <div class="text-center">
                                <p class="font-weight-bold">MENGEMBANGKAN SISTEM INFORMASI</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="text-center">
                                <img src="webds_img/img3.png" alt="" width="80%">
                            </div>
                            <div class="text-center">
                                <p class="font-weight-bold">MENGEMBANGKAN APLIKASI INTERNET OF THINGS</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-5 border-bottom" style="background-color: #E7F4FA">
        <div class="container col-md-10">
            <img src="webds_img/acc/6.png" alt="" class="position-absolute" width="110%"
                style="bottom: -50px; left: -180px">
            <img src="imgAccF3.png" alt="" class="position-absolute" style="bottom: 130px; left: 330px; width: 70%;">
            <div class="row align-items-center">
                <!-- Bagian Kiri -->
                <div class="col-md-4 mb-4">
                    <img src="webds_img/acc/5.png" alt="" class="position-absolute" style="bottom: -50px; left: -110px"
                        width="30%">
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
    </section>

    <section class="py-5" style="background-color: #E7F4FA">
        <div class="container col-md-8 py-5">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="text-justify font-weight-bold" style="font-size: 24px;">The purpose of life is to live it,
                        to taste experience to
                        the utmost, to reach out eagerly and without fear for newer and richer experience.</p>
                    <p class="font-weight-light py-3 text-left"> - Eleanor Roosevelt
                    </p>
                    <a href="/portfolio"><button class=" btn btn-primary ">Looks Our Portfolio </button>
                    </a>
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
                    <p class="" style="color: white; font-size: 16px;"><b>IDMETAFORA</b> adalah Perusahaan Solusi
                        TI,
                        bisnis utama kami adalah Pengembangan
                        ERP. Kami
                        juga mendukung klien kami dalam bidang Internet of Things, dan Desain & Pengembangan Web.
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

<script src="https://kit.fontawesome.com/f606adbcd6.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
// Inisialisasi AOS
AOS.init();
</script>
