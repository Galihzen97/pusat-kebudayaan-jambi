@extends('layouts.app')

@section('content')
    @include('includes.navbar')

    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title">
                            Tentang Pusat Kebudayaan Jambi
                        </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item">
                                <a href="index.html" class="breadcrumb-contents-list-item-link">
                                    Beranda
                                </a>
                            </li>
                            <li class="breadcrumb-contents-list-item">Tentang</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-area pat-100 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Yayasan Pusat Kebudayaan Jambi</h2>
                <div class="section-title-line"></div>
                <p class="section-para">
                    Yayasan Pusat Kebudayaan Jambi berdasarkan Keputusan Menteri Hukum
                    dan Hak Asasi Manusia Republik Indonesia Nomor
                    AHU-0017502.AH.01.04.Tahun 2023 adalah sebuah lembaga penelitian dan
                    dokumentasi yang memiliki visi menjadi pusat keunggulan khasanah
                    budaya Jambi. Fokus Pusat Kebudayaan Jambi adalah penelitian,
                    pengkajian, pusat informasi, dokumentasi, dan konsultasi serta
                    penyelenggaraan pelbagai event seni budaya.
                </p>
            </div>
        </div>
    </section>

    <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Pengurus</h2>
                <div class="section-title-line"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider nav-style-one nav-color-two slider-inner-margin"
                        data-infinite="true" data-arrows="true" data-dots="false" data-slidesToShow="4"
                        data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon radius-parcent-50"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon radius-parcent-50"><i class="las la-angle-right"></i></div>'
                        data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576, "settings": {"slidesToShow": 1} }]'>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/aris.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/aris.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Aris Munandar, S.IKom.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        Ketua Pembina
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/jumardi.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/jumardi.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Jumardi Putra, S.Pd.,M.Pd.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">Pembina</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/rudy.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/rudy.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Rudy, SE., S.Pd.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">Pembina</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/a5.jpg" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/mislan.jpg" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Mislan, M.Pd.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        Ketua Pengawas
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/roy.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/roy.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Roy Benjamin, SE.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">Pengawas</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/asmadi.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/asmadi.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Kasmadi, SH.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">Pengawas</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/sean.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/sean.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Sean Popo Hardi, S.Pd.,M.Hum.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        Ketua Pengurus
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/raja.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/raja.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Raja Nazwa Alydya Daydha, S.S.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">Pengurus</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/fevi.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/fevi.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Fevi Mawadhah Putri, M.Si.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">Pengurus</p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/a5.jpg" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/mhabid.jpg" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        MH. Abid
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        Koordinator Penelitian dan Penerbitan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/nafri.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/nafri.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Nafri Dwi Boy, S.Pd.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        Koordinator Advokasi dan Festival
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="/front/assets/img/attraction/af_idati.png" class="gallery-popup">
                                        <img src="/front/assets/img/attraction/af_idati.png" alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        Af Idati Nurul Ilmi, S.Pd.
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        Koordinator Edukasi dan Residensi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="history-area pat-50 pab-50">
        <div class="container">
            <div class="section-title-three text-left append-flex">
                <h2 class="title">Bidang Kegiatan</h2>
                <div class="append-history"></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="history-wrapper">
                        <div class="global-slick-init history-slider nav-style-one slider-inner-margin"
                            data-appendArrows=".append-history" data-infinite="true" data-arrows="true"
                            data-dots="false" data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="true"
                            data-autoplaySpeed="2500"
                            data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                            data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                            data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
                            <div class="guest-two-item">
                                <div class="single-guest-two single-guest-two-border radius-20">
                                    <div class="single-guest-two-flex">
                                        <div class="single-guest-two-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="/front/assets/img/icons/penelitian.png" alt="img" />
                                            </a>
                                        </div>
                                        <div class="single-guest-two-contents">
                                            <h4 class="single-guest-two-contents-title">
                                                <a href="javascript:void(0)"> Penelitian </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <p class="single-guest-two-para mt-3">
                                        Proses penelitian (lapangan maupun kepustakaan) yang
                                        dilakukan dengan sistematis dan bertujuan untuk menemukan,
                                        menginterpretasikan, dan merevisi atau menguatkan temuan
                                        penelitian sebelumnya. Kerja intelektual yang menghasilkan
                                        suatu pengetahuan secara mendalam mengenai suatu teori,
                                        peristiwa, gerakan, dan variabel terkait lainnya.
                                    </p>
                                </div>
                            </div>
                            <div class="guest-two-item">
                                <div class="single-guest-two single-guest-two-border radius-20">
                                    <div class="single-guest-two-flex">
                                        <div class="single-guest-two-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="/front/assets/img/icons/penerbitan.png" alt="img" />
                                            </a>
                                        </div>
                                        <div class="single-guest-two-contents">
                                            <h4 class="single-guest-two-contents-title">
                                                <a href="javascript:void(0)"> Penerbitan </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <p class="single-guest-two-para mt-3">
                                        Kegiatan pembuatan dan pendistribusian jurnal dan buku
                                        yang diadakan oleh industri yang berkonsentrasi
                                        memproduksi dan memperbanyak literatur dan informasi.
                                    </p>
                                </div>
                            </div>
                            <div class="guest-two-item">
                                <div class="single-guest-two single-guest-two-border radius-20">
                                    <div class="single-guest-two-flex">
                                        <div class="single-guest-two-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="/front/assets/img/icons/advokasi.png" alt="img" />
                                            </a>
                                        </div>
                                        <div class="single-guest-two-contents">
                                            <h4 class="single-guest-two-contents-title">
                                                <a href="javascript:void(0)"> Advokasi </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <p class="single-guest-two-para mt-3">
                                        Komunikasi aktif dengan tujuan menyampaikan hasil
                                        penelitian kepada pemangku kepentingan dalam pengambilan
                                        kebijakan. Proses advokasi ini sangat penting bagi para
                                        peneliti dalam mengkomunikasikan hasil kajian dan isu-isu
                                        penting, dilakukan dengan perencanaan matang dengan
                                        pengambil kebijakan maupun korporasi.
                                    </p>
                                </div>
                            </div>
                            <div class="guest-two-item">
                                <div class="single-guest-two single-guest-two-border radius-20">
                                    <div class="single-guest-two-flex">
                                        <div class="single-guest-two-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="/front/assets/img/icons/edukasi.png" alt="img" />
                                            </a>
                                        </div>
                                        <div class="single-guest-two-contents">
                                            <h4 class="single-guest-two-contents-title">
                                                <a href="javascript:void(0)"> Edukasi </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <p class="single-guest-two-para mt-3">
                                        Proses meningkatkan penguasaan teori dan keterampilan yang
                                        ditujukan kepada individu maupun komunitas dan lembaga
                                        senafas lainnya.
                                    </p>
                                </div>
                            </div>
                            <div class="guest-two-item">
                                <div class="single-guest-two single-guest-two-border radius-20">
                                    <div class="single-guest-two-flex">
                                        <div class="single-guest-two-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="/front/assets/img/icons/festival.png" alt="img" />
                                            </a>
                                        </div>
                                        <div class="single-guest-two-contents">
                                            <h4 class="single-guest-two-contents-title">
                                                <a href="javascript:void(0)"> Festival </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <p class="single-guest-two-para mt-3">
                                        Kegiatan yang bertujuan membangun komunikasi budaya dan
                                        literasi, pengenalan dan pengembangan seni baik modern
                                        maupun budaya modern kepada masyarakat, serta mengangkat
                                        potensi ekonomi berbasis budaya dan pariwisata lokal.
                                    </p>
                                </div>
                            </div>
                            <div class="guest-two-item">
                                <div class="single-guest-two single-guest-two-border radius-20">
                                    <div class="single-guest-two-flex">
                                        <div class="single-guest-two-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="/front/assets/img/icons/residensi.png" alt="img" />
                                            </a>
                                        </div>
                                        <div class="single-guest-two-contents">
                                            <h4 class="single-guest-two-contents-title">
                                                <a href="javascript:void(0)"> Residensi </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <p class="single-guest-two-para mt-3">
                                        Memberi kesempatan kepada para penulis terpilih untuk
                                        menyelesaikan tulisannya di sebuah tempat/daerah,
                                        membangun jejaring dengan sesama penulis dan pihak
                                        terkait, serta mengikuti program (diskusi, seminar,
                                        pembacaan karya, dst.) yang diadakan oleh penyelenggara.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
