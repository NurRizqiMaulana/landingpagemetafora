<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Internet of Things - IDMETAFORA ERP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
        style="background-image: url('bgHeader1.png'); background-size: cover; background-position: center;">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>
                        <span class="" style="color: #181E4B; font-weight: bold; font-size: 60px">Industrial IoT
                            Developer Jakarta
                            Indonesia</span>
                    </h1>
                    <h6 class="my-4 text-justify font-weight-light">
                        Mengembangkan solusi IoT untuk kebutuhan perusahaan dan industri. Meningkatkan efisiensi dan
                        produktifitas menggunakan teknologi yang dapat di custom sesuai kebutuhan.
                    </h6>
                    <p></p>

                    <a href="#"><button type="button"
                            style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Hubungi
                            Kami</button></a>

                </div>
                <div class="col-md-6">
                    <img src="imgHeader1.png" alt="" class="img-fluid">
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
    <section class="py-5 bg-light border-bottom">
        <div class="container col-md-8">
            <img src="imgAcc1.png" alt="" class="position-absolute"
                style="bottom: 300px; left: 600px; width: 20%;rotate: -120deg;">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h2 class="text-center font-weight-bold">Penawaran Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="p-3">
                        <img src="iot_img/service/icon-1.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6><b>Lingkungan Cerdas</b></h6>
                            <p class="text-muted">Meningkatnya jumlah perangkat yang terhubung memengaruhi setiap area
                                kehidupan kita
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <div class="p-3">
                        <img src="iot_img/service/icon.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6><b>Industri 4.0</b></h6>
                            <p class="text-muted">IDMETAFORA menawarkan teknologi canggih untuk memenuhi kebutuhan
                                manufaktur Anda,
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <div class="p-3">
                        <img src="iot_img/service/icon-3.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6><b>DeviceHive</b></h6>
                            <p class="text-muted">DeviceHive adalah platform data IoT open source dengan berbagai
                                pilihan integrasi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <div class="p-3">
                        <img src="iot_img/service/icon-2.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6><b>Sistem Tertanam</b></h6>
                            <p class="text-muted">Kami memfasilitasi pembuatan prototipe, evaluasi, dan pengembangan
                                perangkat yang terhubung menggunakan alat dan standar canggih.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="py-5 border-bottom">
        <div class="container col-md-8">
            <!-- <img src="imgAcc2.png" alt="" class="position-absolute" style="align-items: right; width: 4%;"> -->
            <div class="row">
                <div class="col-md-12 text-center py-5">
                    <h2 class="font-weight-bold">Kenapa IoT menjadi Solusi?</h2>
                </div>
            </div>
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                                    <div class="">
                                        <div class="text-center">
                                            <img src="iot_img/why/img.png" alt="" width="80%">
                                        </div>
                                        <div class="text-center">
                                            <p class="font-weight-bold text-danger">Skalabilitas</p>
                                            <h6 class="text-center font-weight-light">
                                                Kemampuan suatu sistem, jaringan, atau proses untuk menangani
                                                peningkatan beban
                                                kerja atau jumlah pengguna secara efisien tanpa mengurangi kinerja.
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                                    <div class="">
                                        <div class="text-center">
                                            <img src="iot_img/why/img1.jpg" alt="" width="75%">
                                        </div>
                                        <div class="text-center">
                                            <p class="font-weight-bold text-success">Keandalan</p>
                                            <h6 class="font-weight-light text-center">
                                                Kemampuan sistem untuk terus beroperasi meskipun terjadi gangguan atau
                                                kegagalan.
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                                    <div class="">
                                        <div class="text-center mb-4">
                                            <img src="iot_img/why/img2.png" alt="" width="80%">
                                        </div>
                                        <div class="text-center">
                                            <p class="font-weight-bold text-warning">Integrasi</p>
                                            <h6 class="font-weight-light text-center">
                                                Melibatkan penyatuan perangkat IoT dengan sistem, aplikasi, atau
                                                jaringan yang ada
                                                untuk menciptakan solusi yang lebih cerdas, otomatis, dan terhubung.
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- Isi dengan item lain jika diperlukan -->
                        <div class="row">

                            <div class="col-md-4">
                                <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                                    <div class="">
                                        <div class="text-center">
                                            <img src="iot_img/why/img.png" alt="" width="80%">
                                        </div>
                                        <div class="text-center">
                                            <p class="font-weight-bold text-danger">Skalabilitas</p>
                                            <h6 class="text-center font-weight-light">
                                                Kemampuan suatu sistem, jaringan, atau proses untuk menangani
                                                peningkatan beban
                                                kerja atau jumlah pengguna secara efisien tanpa mengurangi kinerja.
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                                    <div class="">
                                        <div class="text-center">
                                            <img src="iot_img/why/img1.jpg" alt="" width="75%">
                                        </div>
                                        <div class="text-center">
                                            <p class="font-weight-bold text-success">Keandalan</p>
                                            <h6 class="font-weight-light text-center">
                                                Kemampuan sistem untuk terus beroperasi meskipun terjadi gangguan atau
                                                kegagalan.
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="p-4 card shadow mb-5 bg-white" style="border-radius: 20px">
                                    <div class="">
                                        <div class="text-center mb-4">
                                            <img src="iot_img/why/img2.png" alt="" width="80%">
                                        </div>
                                        <div class="text-center">
                                            <p class="font-weight-bold text-warning">Integrasi</p>
                                            <h6 class="font-weight-light text-center">
                                                Melibatkan penyatuan perangkat IoT dengan sistem, aplikasi, atau
                                                jaringan yang ada
                                                untuk menciptakan solusi yang lebih cerdas, otomatis, dan terhubung.
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev"
                    style="top: 25%; transform: translateY(-50%); transform: translateX(-80%);">
                    <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <!-- Tombol Next -->
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next"
                    style="top: 25%; transform: translateY(-50%); transform: translateX(80%);">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom"
        style="background-image: url('iot_img/value/bgValue.png'); background-size: cover; background-position: center">

        <h2 class="text-center mb-5 font-weight-bold py-5">NIlai-Nilai Perusahaan Kami</h2>
        <div class="container col-md-8">

            <img src="imgAcc3.png" alt="" class="position-absolute" style="bottom: 500px; left: -230px; width: 10%;">


            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="text-center p-3">
                            <img src="imgValue.png" class="img-fluid mb-4" width="100%" alt="image nilai">

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
                                        <p class="font-weight-light">Meningkatnya jumlah perangkat yang terhubung
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
                                        <p class="font-weight-light">Memberikan pekerjaan dan pelayanan terbaik.
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
                                        <p class="font-weight-light">Bagi kami, Inovasi adalah suatu keharusan untuk
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
                                        <p class="font-weight-light">Memberikan pekerjaan dan layanan terbaik.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <img src="imgAcc1.png" class="rocket" alt="Rocket" width="100%">
                <div class="circle"></div>
                <!-- <div class="glow"></div> -->
                <!-- <div class="circle1"></div> -->
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom"
        style="background-image: url('iot_img/bgAsk.png'); background-size: cover; background-position: start;">
        <div class="container col-md-8">
            <div class="">
                <p class="py-5 font-weight-bold" style="font-size: 30px;">
                    Pertanyaan Seputar Internet of Things (IoT)
                </p>

                <div class="shadow-lg p-3 mb-5 bg-white" style="border-radius: 20px; padding: 20px;">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Apa Manfaat Internet of Things (IoT) ?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <b>Efisiensi</b>
                                    IoT menjadi penunjang efisiensi kerja dan aktivitas sehari-hari, karena semakin
                                    banyaknya jenis koneksi yang diciptakan, semakin kecil jumlah waktu Anda dalam
                                    meneyelesaikan tugas. Dengan demikian, efisiensi kegiatan Anda akan terjaga dengan
                                    IoT.<br>

                                    <b>Monitor Kegiatan Secara Praktis</b>
                                    IoT Dapat membantu Anda mengontrol dan memonitor seluruh kegiatan lebih mudah,
                                    bahkan
                                    dapat merekomendasikan alternatif kegiatan
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Apa Saja Unsur-Unsur Internet of Things (IoT) ?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
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
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- <div class="row">
                <div class="col-md-6">
                    <img src="imgAcc.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <p class="text-white" style="font-size: 18px;"><b>IDMETAFORA</b></p>
                    <p class="text-white" style="font-size: 16px;"><b>IDMETAFORA</b> adalah Perusahaan Solusi TI,
                        bisnis utama kami adalah Pengembangan
                        ERP. Kami
                        juga mendukung klien kami dalam bidang Internet of Things, dan Desain & Pengembangan Web.</p>
                </div>
            </div> -->
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