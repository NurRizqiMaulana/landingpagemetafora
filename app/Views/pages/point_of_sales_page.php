<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Point of Sales - IDMETAFORA ERP</title>
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
    <!-- Content -->

    <header class="py-3 border-bottom border-top"
        style="background-image: url('pos_img/bgPos1.png'); background-size: cover; background-position: center">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="pos_img/imgAcc.png" alt="" class="position-absolute" style="top: 70px; left: 30;"
                        width="60%">
                    <h1 class="font-weight-bold">
                        <span class="text-center" style="color: #38567F; font-weight: bold; font-size: 60px">Point of
                            Sales</span>
                    </h1>
                    <h6 class="font-weight-bold py-3 col-md-9">
                        Jasa Pembuatan Sistem Point of Sales merupakan salah satu layanan yang ditawarkan oleh Tim
                        IDMETAFORA.

                    </h6>
                    <a href="#"><button type="button"
                            style="color: white; background-color: #007bff; border-color: #007bff; border-radius: 20px; padding: 5px 20px">Hubungi
                            Kami</button></a>

                </div>
                <div class="col-md-6">
                    <img src="pos_img/imgHeader.png" alt="" class="img-fluid">
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




    <section class="pb-5 border-bottom">
        <div class="container col-md-8">

            <div class="row">
                <div class="col-md-12 py-3">
                    <h1 class="text-center font-weight-bold">Core <span class="text-danger">Erp</span></h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 text-justify p-5">


                    <h4 class="text-center" style="font-size: 20px">
                        "<span class="font-weight-bold">ERP (Enterprise Resource Planning)</span> adalah
                        sebuah model system
                        informasi yang memberikan kemungkinan bagi sebuah organisasi atau perusahaan untuk
                        mengotomisasi dan
                        mengintegrasikan proses-proses dalam utamanya. Sistem ini membantu perusahaan atau
                        organisasi dalam
                        mengatur proses bisnisnya agar
                        menjadi satu kesatuan yang terintegrasi seperti purchasing, warehouse,
                        finance, audit, sales, dan lain sebagainya."
                    </h4>
                </div>
            </div>
    </section>

    <section class="pt-5 border-bottom">
        <div class="container">
            <img src="pos_img/bgPos3.png" alt="" class="position-absolute" style=" left: 0px;top: 190%" width="90%">
            <img src="pos_img/bgPos4.png" alt="" class="position-absolute" style=" right: 0px;top: 190%" width="24%">


            <div class="row">
                <div class="col-md-12 py-5">
                    <h2 class="text-center font-weight-bold"><span class="text-danger">Manfaat</span> <br>
                        Point of Sales
                        <span class="text-primary">IDMETAFORA</span>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="p-2 card shadow mb-2 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="text-center">
                                <img src="pos_img/img5.png" alt="">
                            </div>
                            <div class="">
                                <p><b>Transaksi Offline/Online</b> </p>
                                <h6 class="">
                                    Pencatatan transaksi dapat tetap berlangsung tanpa internet dan sistem akan
                                    menyingkronkan data ketika koneksi internet kembali.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-2 card shadow mb-2 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="text-center">
                                <img src="pos_img/img6.png" alt="">
                            </div>
                            <div class="">
                                <p><b>Semua Cabang Terkendali</b></p>
                                <h6 class="">
                                    Anda bisa mengelola pelanggan dan penjualan dari semua cabang, serta mengaskses
                                    informasi lainnya secara real-time.</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-2 card shadow mb-2 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="text-center">
                                <img src="pos_img/img7.png" alt="">
                            </div>
                            <div class="">
                                <p class=""><b>Sistem Berbasis Web</b></p>
                                <h6 class="">
                                    Software kasir ini dapat digunakan di perangkat apapun selama terkoneksi internet.
                                    Anda
                                    bisa memantau penjualan kapanpun dan di manapun.</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-2 card shadow mb-2 bg-white" style="border-radius: 20px">
                        <div class="">
                            <div class="text-center">
                                <img src="pos_img/img8.png" alt="">
                            </div>
                            <div class="">
                                <p class=""><b>Data Analitik Lengkap</b></p>
                                <h6 class="">
                                    Dengan data yang tersentralisasi, Anda bisa meninjau performa bisnis Anda melalui
                                    tampilan analitik yang lengkap. </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="py-5 mb-5 border-bottom"
        style="background-image: url('bgProduct.png'); background-size: cover; background-position: center">

        <h2 class="text-center mb-5 font-weight-bold"> <span class=text-secondary>Fitur Poin Of Sales</span> IDMETAFORA
        </h2>
        <div class="container col-md-8">

            <img src="pos_img/imgAcc2.png" alt="" class="position-absolute"
                style="bottom: 430px; left: -215px; width: 10%;">

            <div class="col-md-12"
                style="background-color: #EFF4F6;border-radius: 200px; border: 1px solid black; padding: 50px">
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="product/img1.png" class="img-fluid mb-4" width="50%" alt="Purchasing System">
                            <p class="" style="font-size: 14px;font-weight: bold">Varian Produk</p>
                            <p class="" style="font-size: 12px">Memudahkan Anda untuk mengkategorikan produk
                                Anda</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="pos_img/img2.png" class="img-fluid mb-4" width="50%" alt="Accounting System">
                            <p class="" style="font-size: 14px;font-weight: bold">Pencarian Produk</p>
                            <p class="" style="font-size: 12px">Fitur pencarian untuk memudahkan Anda</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="custom-card text-center p-3 bg-white">
                            <img src="pos_img/img3.png" class="img-fluid mb-4" width="50%" alt="Business Intelligence">
                            <p class="" style="font-size: 14px;font-weight: bold">Mutasi Barang</p>
                            <p class="" style="font-size: 12px">Mengelola data setiap barang yang masuk ke
                                gudang
                                penyimpanan</p>
                        </div>
                    </div>
                </div>
                <div class="circle"></div>
                <div class="glow"></div>
                <!-- <div class="circle1"></div> -->
            </div>

            <div class="row">
            </div>
        </div>
    </section>

    <section class="pb-5 border-bottom"
        style="background-image: url('pos_img/bgPos2.png'); background-size: cover; background-position: center">

        <h2 class="text-center mb-5 font-weight-bold py-2">NIlai-Nilai Perusahaan Kami</h2>
        <div class="container col-md-8">

            <img src="imgAcc3.png" alt="" class="position-absolute" style="bottom: 500px; left: -230px; width: 10%;">


            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="text-center p-3">
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


                <img src="imgAcc1.png" class="rocket" alt="Rocket" width="100%">
                <div class="circle"></div>
                <!-- <div class="glow"></div> -->
                <!-- <div class="circle1"></div> -->
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