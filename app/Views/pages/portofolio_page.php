<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Portofolio - IDMETAFORA ERP</title>
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

    <header class="border-bottom" style="background-color: #E6F7FF">
        <div class="container ">
            <div class="col-md-12">
                <img src="porto_img/header/img1.png" alt="" class="position-absolute"
                    style="bottom: 50px; left: 150px; width: 8%;">
                <img src="porto_img/header/img0.png" alt="" class="position-absolute"
                    style="bottom: 0px; right: -75px; width: 5%;">

                <img src="porto_img/header/img2.png" alt="" class="position-absolute"
                    style="top: 250px; right: 250px; width: 8%;">

                <img src="porto_img/header/img3.png" alt="" class="position-absolute"
                    style="bottom: 150px; right: 150px; width: 8%;">
                <div class="col-md-4 position-absolute" style="bottom: 200px;font-weight: bold; left: 0px;">
                    Setiap proyek yang kami kerjakan menghasilkan pengalaman. Mari kita lihat portofolio kami sebagai
                    referensi kualitas kerja kami.
                </div>

                <img src="porto_img/header/img.png" alt="" class="position-absolute"
                    style="top: 20px; right: 270px; width: 8%;">

                <img src="porto_img/header/img.png" alt="" class="position-absolute"
                    style="bottom: 300px; left: -30px; width: 8%;">
                <div class="col-md-12">
                    <img src="porto_img/imgHeader.png" alt="" width="100%">
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


    <section class="py-5 border-bottom" style="background-color: #E6F7FF">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center py-3">
                    <h1><Span class="font-weight-bold">Our
                        </Span><span class="text-danger font-weight-bold">Portfolio</span></h3>

                </div>
                <img src="porto_img/porto/imgACC.png" alt="" class="position-absolute"
                    style="top: 200%; right: 0px; width: 100%;">

            </div>
            <div class="row align-items-center ">

                <div class="col-md-6 text-center">
                    <img src="porto_img/porto/bgPortoL.png" alt="" class="position-absolute"
                        style=" top: -30%; left: 100%;" width="100%">
                    <img src="porto_img/porto/bgPortoR.png" alt="" class="position-absolute"
                        style=" top: 170%; right: 0%;" width="100%">


                    <h3 class="font-weight-bold py-3">
                        Chandra Asri
                    </h3>
                    <img src="company/candra.png" alt="" class="py-3">
                    <p><a href="https://idmetafora.com/chandra_asri/">careers.capcx.com</a></p>
                    <p class="font-weight-bold">Use service: Web Design.</p>
                </div>
                <div class="col-md-6 p-5">
                    <img src="porto_img/porto/img3C.png" alt="" width="90%">

                </div>

            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="porto_img/porto/img0M.png" alt="" width="90%">
                </div>

                <div class="col-md-6 text-center">
                    <h4 class="font-weight-bold py-3">
                        MOLINDO Group (PT Madusari Murni Indah Tbk)
                    </h4>
                    <h6 class="font-weight-light py-3">MOLINDO Group (PT Madusari Murni Indah Tbk) is a producer of food
                        grade ethanol and CO2.

                    </h6>
                    <img src="company/molindo.png" alt="">
                    <p><a href="https://molindo.co.id/">molindo.co.id</a></p>
                    <p class="font-weight-bold">Use service: Web Design.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-6 text-center">
                    <img src="porto_img/porto/bgPortoL.png" alt="" class="position-absolute"
                        style=" top: -10%; left: 100%;" width="100%">
                    <img src="porto_img/porto/bgPortoR.png" alt="" class="position-absolute"
                        style=" top: 130%; right: 10%;" width="90%">

                    <img src="porto_img/porto/imgAcc2.png" alt="" class="position-absolute"
                        style=" top: -150px; left: -70px;" width="20%">
                    <h3 class="font-weight-bold py-3">
                        Glueck Manamart
                    </h3>
                    <img src="company/gluck.png" alt="" class="py-3">
                    <p><a href="https://glueckmanamart.com/">glueckmanamart.com</a></p>
                    <p class="font-weight-bold">Use service: Web Design.</p>
                </div>
                <div class="col-md-6 p-5">
                    <img src="porto_img/porto/img4G.png" alt="" width="90%">

                </div>

            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="porto_img/porto/imgAcc3.png" alt="" class="position-absolute"
                        style=" bottom: -50px; left: -80px;" width="30%">
                    <img src="porto_img/porto/img5A.png" alt="" width="90%">
                </div>

                <div class="col-md-6 text-center">
                    <img src="porto_img/porto/imgAcc4.png" alt="" class="position-absolute"
                        style=" bottom: -350px; right: -60px;" width="30%">
                    <h1>
                        PT KIYA SINERGI ASIA
                    </h1>
                    <h6>
                        An innovative prefabricated building solution. For more people, more houses, & less money.

                    </h6>
                    <img src="company/arsifab.png" alt="">
                    <p><a
                            href="https://idmetafora.com/works/arsifab/home.aspx">idmetafora.com/works/arsifab/home.aspx</a>
                    </p>
                    <p>Use service: Web Development & System Information.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 border-bottom" style="background-color: #E6F7FF">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-6 text-center">
                    <img src="porto_img/porto/bgPortoL.png" alt="" class="position-absolute"
                        style=" top: -30%; left: 100%;" width="100%">
                    <img src="porto_img/porto/bgPortoR.png" alt="" class="position-absolute"
                        style=" top: 150%; right: 0%;" width="100%">
                    <h3 class="font-weight-bold py-3">
                        PT. Bhinneka Citra Prima
                    </h3>
                    <img src="porto_img//porto/img1.png" alt="" class="py-3">
                    <p><a href="https://bcpkontraktor.com/">bcpkontraktor.com</a></p>
                    <p class="font-weight-bold">Use service: Web Design.</p>
                </div>
                <div class="col-md-6 p-5">
                    <img src="porto_img/porto/img1B.png" alt="" width="90%">

                </div>

            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="porto_img/porto/img2U.png" alt="" width="90%">
                </div>

                <div class="col-md-6 text-center">
                    <h1>
                        Unison Healthcare
                    </h1>
                    <img src="porto_img//porto/img2.png" alt="">
                    <p><a href="https://registration.unison-healthcare.com/">registration.unison-healthcare.com</a></p>
                    <p>Use service: Web Design.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-6 text-center">
                    <img src="porto_img/porto/bgPortoL.png" alt="" class="position-absolute"
                        style=" top: -10%; left: 100%;" width="100%">
                    <img src="porto_img/porto/bgPortoR.png" alt="" class="position-absolute"
                        style=" top: 130%; right: 0%;" width="100%">
                    <h3 class="font-weight-bold py-3">
                        PT Piranha Multi Talenta
                    </h3>
                    <h6>
                        PT Piranha Multi Talenta is an Accounting and Taxation Training and Course service.
                    </h6>
                    <img src="company/piranha.png" alt="" class="py-3">
                    <p><a href="https://piranhasmartcenter.com/">piranhasmartcenter.com</a></p>
                    <p class="font-weight-bold">Use service: Web Design.</p>
                </div>
                <div class="col-md-6 p-5">
                    <img src="porto_img/porto/img6P.png" alt="" width="90%">

                </div>

            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="porto_img/porto/img7A.png" alt="" width="90%">
                </div>

                <div class="col-md-6 text-center">
                    <h1>
                        PT Albasia Batang Sejahtera
                    </h1>
                    <h6>
                        PT Albasia Batang Sejahtera is one of the companies engaged in the Wood Industry in Batang,
                        Central Java Province.
                    </h6>
                    <img src="company/abs.png" alt="">
                    <p><a href="https://albasiabatang.com/">albasiabatang.com</a></p>
                    <p>Use service: Web Design.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom"
        style="background-image: url('porto_img/bgPorto1.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img src="porto_img/porto/bgPortoL.png" alt="" class="position-absolute"
                        style=" top: -10%; left: 100%;" width="100%">
                    <img src="porto_img/porto/bgPortoR.png" alt="" class="position-absolute"
                        style=" top: 115%; right: 0%;" width="100%">
                    <h3 class="font-weight-bold py-3">
                        PT Migas Mandiri Pratama MMP Kaltim
                    </h3>
                    <h6>
                        Regional-Owned Enterprises are engaged in the oil and gas sector which is 100% owned by the East
                        Kalimantan Provincial Government.
                    </h6>
                    <img src="company/migas.png" alt="" class="py-3">
                    <p><a href="https://mmpkaltim.co.id/">mmpkaltim.co.id</a></p>
                    <p class="font-weight-bold">Use service: Web Design.</p>
                </div>
                <div class="col-md-6 p-5">
                    <img src="porto_img/porto/img8M.png" alt="" width="90%">

                </div>

            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="porto_img/porto/img9S.png" alt="" width="90%">
                </div>

                <div class="col-md-6 text-center">
                    <h1>
                        SpeeQual Sdn.Bhd Malaysia
                    </h1>
                    <h6>
                        One of Language Services Company from Malaysia.
                    </h6>
                    <img src="company/speequal.png" alt="">
                    <p><a href="https://speequal.com/">www.speequal.com</a></p>
                    <p>Use service: Web Design & Web Development.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom"
        style="background-image: url('porto_img/bgPorto2.png'); background-size: cover; background-position: start;">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-6 text-center">
                    <img src="porto_img/porto/bgPortoL.png" alt="" class="position-absolute"
                        style=" top: -50%; left: 100%;" width="100%">
                    <img src="porto_img/porto/bgPortoR.png" alt="" class="position-absolute"
                        style=" top: 150%; right: 0%;" width="100%">
                    <h3 class="font-weight-bold py-3">
                        Photobylocal.com
                    </h3>
                    <h6>
                        Professional Pre Wedding Photographer Specialist based in Yogyakarta, Indonesia.

                    </h6>
                    <!-- <img src="company/migas.png" alt="" class="py-3"> -->
                    <p><a href="https://photobylocal.com/">photobylocal.com</a></p>
                    <p class="font-weight-bold">Use service: Web Development.</p>
                </div>
                <div class="col-md-6 p-5">
                    <img src="porto_img/porto/img10P.png" alt="" width="90%">

                </div>

            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="porto_img/porto/img11S.png" alt="" width="90%">
                </div>

                <div class="col-md-6 text-center">
                    <h1>
                        PT Star Software Indonesia
                    </h1>
                    <h6>
                        One of Global Company from Switzerland which has a branch in Indonesia.
                    </h6>
                    <img src="company/star.png" alt="">
                    <p><a href="https://star-indonesia.id/">www.star-indonesia.id</a></p>
                    <p>Use service: Web Design & Development.</p>
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