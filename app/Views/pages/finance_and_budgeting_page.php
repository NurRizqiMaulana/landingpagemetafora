<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Finance & Budgeting - IDMETAFORA ERP</title>
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
    <header class="py-3 border-bottom border-top">
        <div class="container ">
            <div class="row align-items-center ">
                <div class="col-md-6">
                    <h1 class="font-weight-bold">
                        <span class="text-center" style="color: #38567F; font-weight: bold">Finance & Budgeting
                            System</span>
                    </h1>
                    <h6 class="">Jasa Finance dan Budgeting merupakan salah satu layanan yang ditawarkan oleh Tim
                        IDMETAFORA.

                    </h6>
                    <a href="#"><button type="button"
                            style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Hubungi
                            Kami</button></a>

                    <img src="fab_img/acc/1.png" class="position-absolute" style="top: -150px; right: -280px;" alt=""
                        width="60%">
                </div>
                <div class="col-md-6">
                    <img src="fab_img/acc/0.png" class="position-absolute" style="top: -50px; right: -60px;" alt=""
                        width="80%">
                    <img src="fab_img/imgHeader.png" alt="" class="img-fluid">

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

    <section class="py-5">
        <div class="container col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <img src="fab_img/img1.png" alt="" width="100%">
                </div>

                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h3 class="font-weight-bold">Core <span class="text-danger">Erp</span></h3>
                    <p class="" style="font-size: 16px;">ERP (Enterprise Resource Planning) adalah
                        sebuah model system informasi yang memberikan kemungkinan bagi sebuah organisasi atau perusahaan
                        untuk mengotomisasi dan mengintegrasikan proses-proses dalam bisnis utamanya. Sistem ini
                        membantu perusahaan atau organisasi dalam mengatur proses bisnisnya agar menjadi satu kesatuan
                        yang terintegrasi seperti purchasing, warehouse,
                        finance, audit, sales, dan lain sebagainya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container col-md-10">
            <div class="row">
                <img src="fab_img/acc/3.png" alt="" class="position-absolute" style="top: 0px; left: -110px;"
                    width="50%">
                <div class="col-md-6">
                    <img src="fab_img/img2.png" alt="" width="85%">
                </div>
                <div class="col-md-6">

                    <h3 class="font-weight-bold">Manfaat Finance & Budgeting <span class="text-danger">IDMETAFORA</span>
                    </h3>
                    <p class="" style="font-size: 16px;">ERP Finance & Budgeting System membantu pemilik usaha untuk
                        mengontrol semuanya.
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="fab_img/icon/1.png" alt="" width="20%">
                            <p class="font-weight-bold" style="font-size: 16px;">Menghemat Biaya</p>
                            <p style="font-size: 14px;">Dengan menggunakan software ERP bisa mengontrol bisnis dan
                                mendapatkan informasi
                                sekaligus secara real time tanpa harus melakukan banyak kegiatan yang menimbulkan biaya
                                lainnya. Sehingga dapat memberikan keputusan dengan cepat dan tepat.</p>
                        </div>

                        <div class="col-md-6">
                            <img src="fab_img/icon/2.png" alt="" width="20%">
                            <p class="font-weight-bold" style="font-size: 16px;">Keamanan Data Terjamin</p>
                            <p style="font-size: 14px;">Software ERP membantu keamanan data karena adanya kontrol dalam
                                hal wewenang pengelolaan data digital di mana hanya pihak-pihak yang ditunjuk yang bisa
                                mengakses bagian tertentu. Selain itu bisa meminimalkan risiko dalam perdagangan.</p>
                        </div>

                        <div class="col-md-6">
                            <img src="fab_img/icon/3.png" alt="" width="20%">
                            <p class="font-weight-bold" style="font-size: 16px;">Efisien</p>
                            <p style="font-size: 14px;">Dengan adanya manajemen keuangan maka semua data tersedia dengan
                                cepat sehingga dapat mengoptimalisasi modal kerja yang ada sehingga lebih efektif.
                                Selain itu bisa meningkatkan produktifitas pelanggan dan produk.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container col-md-8">
            <div class="row py-5">
                <div class="col-md-12">
                    <h1 class="text-center font-weight-bold">Fitur - Fitur Finance & Budgeting <br> <span
                            class="text-danger">IDMETAFORA</span></h1>
                </div>

            </div>

            <div class="row">
                <img src="fab_img/bgScreen.png" alt="" class="position-absolute" style=" left: -40px;bottom: -30px"
                    width="110%">
                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="fab_img/icon/4.png" alt="">
                            <p class="font-weight-bold mb-0 ms-2">Data Kas Keluar</p>
                        </div>
                        <div>
                            <p class="">Mempermudah anda dalam mengelolal data bukti kas keluar.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="fab_img/icon/5.png" alt="">
                            <p class="font-weight-bold mb-0 ms-2">Data Kas Masuk</p>
                        </div>
                        <div>
                            <p class="">Mempermudah anda dalam mengelolal data bukti kas masuk.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="fab_img/icon/6.png" alt="">
                            <p class="font-weight-bold mb-0 ms-2">Verifikasi BKK</p>
                        </div>
                        <div>
                            <p class="">Mempermudah anda dalam merverifikasi bukti BKK yang ada di ERP anda..</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="fab_img/icon/7.png" alt="">
                            <p class="font-weight-bold mb-0 ms-2">Verifikasi BKM</p>
                        </div>
                        <div>
                            <p class="">Mempermudah anda dalam merverifikasi bukti BKM yang ada di ERP anda.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="fab_img/icon/8.png" alt="">
                            <p class="font-weight-bold mb-0 ms-2">Budgeting Akun CoA</p>
                        </div>
                        <div>
                            <p class="">Mempermudah anda dalam mengelola budgeting akun CoA anda.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow mb-4 p-3" style="border-radius: 20px; background-color: #EFF4F6">
                        <div class="d-flex align-items-center">
                            <img src="fab_img/icon/9.png" alt="">
                            <p class="font-weight-bold mb-0 ms-2">Realisasi CoA</p>
                        </div>
                        <div>
                            <p class="">Mempermudah anda dalam merealisasikan CoA yang sudah ada di ERP.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container col-md-8">
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
                    <img src="fab_img/acc/2.png" alt="" class="position-absolute" style="top: -100px; right: -225px;"
                        width="55%">
                    <div class="col-md-4">
                        <img src="fab_img/img3.png" alt="" width="120%">
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
                        Pertanyaan Seputar Jasa Finance dan Budgeting
                    </p>
                    <p class="font-weight-light h6">
                        Hal yang sering ditanyakan oleh user yang ingin menggunakan Finance & Budgeting System.
                    </p>
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
                                            Finance & Budgeting Yang Kami Tawarkan?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body ">
                                        Finance & Budgeting di bidang perdagangan/ distributor
                                        <ul>
                                            <li>Menu ini bisa diisi dengan list member, dan salah satu filter jenis
                                                member yang
                                                dapat digunakan oleh admin adalah untuk mengelompokkan sesuai jenis
                                                member pada
                                                user.</li>
                                            <li>Data list customer yang berfungsi apabila admin akan mengakses data
                                                customer.
                                                Sistem store juga menampilkan halaman uang muka/deposit yang digunakan
                                                sebagai
                                                uang simpanan user.</li>
                                            <li>Halaman action Nota digunakan untuk menampilkan detail data serta
                                                mengunduh nota
                                                transaksi.</li>
                                            <li>Halaman FPB (Inbound).</li>
                                            <li>Halaman FPB (Outbound).</li>
                                        </ul>
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