<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accounting System - IDMETAFORA ERP</title>
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

    <header class=" border-bottom border-top pt-5" style="background-color: #D8EAFE">
        <div class="container col-md-9 pt-5">
            <div class="row align-items-center ">
                <img src="accounting_img/bgHeader.png" alt="" class="position-absolute" width="90%"
                    style="bottom: 0px;">
                <div class="col-md-6">
                    <p class="font-weight-bold" style="font-size: 20px">
                        Jasa Pembuatan Sistem
                        Accounting
                    </p>
                    <p class="font-weight-light h6 py-3">Jasa Pembuatan Sistem Accounting merupakan salah satu layanan
                        yang
                        ditawarkan oleh Tim
                        IDMETAFORA.

                    </p>
                    <a href="#"><button type="button"
                            style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Hubungi
                            Kami</button></a>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <!-- <img src="accounting_img/acc/0.png" class="position-absolute" style="top: -50px; right: -60px;"
                        alt="" width="80%"> -->
                    <img src="accounting_img/imgHeader.png" alt="" class="img-fluid" width="100%">

                </div>
                <img src="accounting_img/acc/5.png" alt="" class="position-absolute" style="top: -130px; right: -155px;"
                    width="25%">

            </div>
        </div>
    </header>

    <section class="py-5 border-bottom">
        <div class="container col-md-10">
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

    <section class="pb-5 border-bottom" style="background-color: #D8EAFE">
        <img src="accounting_img/acc/1.png" alt="" width="100%" class="position-absolute">
        <div class="container col-md-8">
            <div class="row">
                <div class="col-md-12 py-3">
                    <h1 class="text-center font-weight-bold">Core <span class="text-danger">Erp</span></h2>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-12 text-justify p-5">
                    <h4 class="text-center" style="font-size: 20px">
                        <span class="font-weight-bold pb-5">"ERP (Enterprise Resource Planning)</span> adalah
                        sebuah model system informasi yang memberikan
                        kemungkinan bagi sebuah organisasi atau perusahaan untuk mengotomisasi dan mengintegrasikan
                        proses-proses dalam bisnis utamanya. Sistem ini membantu perusahaan atau organisasi dalam
                        mengatur proses bisnisnya agar menjadi satu kesatuan yang terintegrasi seperti purchasing,
                        warehouse,
                        finance, audit, sales, dan lain sebagainya."
                    </h4>
                </div>
            </div>
    </section>

    <section class="py-5 border-bottom">
        <img src="accounting_img/acc/6.png" alt="" class="position-absolute" style="" width="8%">


        <div class="container col-md-8">
            <div class="row py-5">
                <div class="col-md-12">
                    <p class="text-center font-weight-bold h3">
                        Manfaat Sistem Accounting <br>
                        <span class="text-primary">IDMETAFORA</span>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="accounting_img/img1.png" alt="" width="100%">
                    <p class="font-weight-bold ">Menghemat biaya</p>
                    <p class="text-justify" style="font-size: 12px">Dengan menggunakan software ERP bisa mengontrol
                        bisnis dan mendapatkan
                        informasi sekaligus secara
                        real time tanpa harus melakukan banyak kegiatan yang menimbulkan biaya lainnya. Sehingga dapat
                        memberikan keputusan dengan cepat dan tepat.</p>
                </div>

                <div class="col-md-4 text-center">
                    <img src="accounting_img/img2.png" alt="" width="100%">
                    <p class="font-weight-bold ">Efisien</p>
                    <p class="text-justify" style="font-size: 12px">Dengan adanya manajemen keuangan maka semua data
                        tersedia dengan cepat sehingga dapat mengoptimalisasi modal kerja yang ada sehingga lebih
                        efektif. Selain itu bisa meningkatkan produktifitas pelanggan dan produk.</p>
                </div>

                <div class="col-md-4 text-center">
                    <img src="accounting_img/img3.png" alt="" width="100%">
                    <p class="font-weight-bold ">Keamanan data terjamin</p>
                    <p class="text-justify" style="font-size: 12px">Software ERP membantu keamanan data karena adanya
                        kontrol dalam hal wewenang pengelolaan data digital di mana hanya pihak-pihak yang ditunjuk yang
                        bisa mengakses bagian tertentu.</p>
                </div>


            </div>
            <img src="accounting_img/acc/8.png" alt="" class="position-absolute" style="right: -210px; bottom: 0px"
                width="10%">

        </div>

    </section>

    <section class="py-5 mb-5 border-bottom ">
        <h2 class="text-center mb-5 font-weight-bold"> <span class=text-danger>Fitur-Fitur <br></span>
            Sistem Akuntansi<span class=text-primary> IDMETAFORA</span>
        </h2>
        <div class="container col-md-8">
            <img src="accounting_img/acc/2.png" alt="" class="position-absolute" style="top: -100px; left: -230px;"
                width="50%">
            <img src="accounting_img/acc/3.png" alt="" class="position-absolute" style="top: -140px; right: -200px;"
                width="20%">
            <div class="col-md-12"
                style="background-color: #EFF4F6;border-radius: 200px; border: 1px solid black; padding: 50px">
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="accounting_img/icon/1.png" class="img-fluid mb-4" width="50%"
                                alt="Purchasing System">
                            <p class="" style="font-size: 14px;font-weight: bold">Halaman Bukti Kas Keluar (BKK)</p>

                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="accounting_img/icon/2.png" class="img-fluid mb-4" width="50%"
                                alt="Accounting System">
                            <p class="" style="font-size: 14px;font-weight: bold">Halaman Bukti Kas
                                Masuk (BKM)
                            </p>

                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="accounting_img/icon/3.png" class="img-fluid mb-4" width="50%"
                                alt="Business Intelligence">
                            <p class="" style="font-size: 14px;font-weight: bold">Halaman Verifikasi BKK dan BKM</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5 border-bottom"
        style="background-image: url('pos_img/bgPos2.png'); background-size: cover; background-position: center">
        <h2 class="text-center mb-5 font-weight-bold py-2">NIlai-Nilai Perusahaan Kami</h2>
        <div class="container col-md-8">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="text-center p-3">
                            <img src="accounting_img/acc/4.png" alt="" class="position-absolute"
                                style="bottom: 50px; left: -5px;" width="30%">
                            <img src="pos_img/img4.png" class="img-fluid mb-4" width="100%" alt="image nilai">

                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="">
                                    <img src="iot_img/value/img.png" alt="" width="80px">
                                </div>
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <h5><b>Cepat</b></h5>
                                        <p class="font-weight-light">Meningkatnya jumlah perangkat yang
                                            terhubung
                                            memengaruhi
                                            setiap area
                                            kehidupan kita
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="">
                                    <img src="iot_img/value/img1.png" alt="" width="80px">
                                </div>
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <h5><b>Spirit</b></h5>
                                        <p class="font-weight-light">Memberikan pekerjaan dan pelayanan
                                            terbaik.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">

                                <div class="">

                                    <img src="iot_img/value/img3.png" alt="" width="80px">
                                </div>
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <h5><b>Otomatisasi</b></h5>
                                        <p class="font-weight-light">Bagi kami, Inovasi adalah suatu
                                            keharusan untuk
                                            membuat bisnis tetap
                                            relevan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="">
                                    <img src="iot_img/value/img4.png" alt="" width="80px">
                                </div>
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <h5><b>Terpercaya</b></h5>
                                        <p class="font-weight-light">Memberikan pekerjaan dan layanan
                                            terbaik.
                                        </p>
                                    </div>
                                </div>
                            </div>
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