@extends('layouts.app')

@section('content')
    @include('includes.navbar')
    <!-- Breadcrumb area Starts -->
    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title"> Blog Details </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                    class="breadcrumb-contents-list-item-link"> Home </a> </li>
                            <li class="breadcrumb-contents-list-item"> <a href="blog.html"
                                    class="breadcrumb-contents-list-item-link"> Blog </a> </li>
                            <li class="breadcrumb-contents-list-item"> Blog Details </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->
    <!-- Blog Details starts -->
    <section class="blog-details-area pat-100 pab-100">
        <div class="container">
            <div class="shop-contents-wrapper">
                <div class="row gy-5">
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog-details-wrapper">
                            <div class="single-blog-details">
                                <div class="single-blog-details-content pt-0">
                                    <h2 class="single-blog-details-content-title fw-500"> [Judul] </h2>
                                    <div class="single-blog-details-content-tags mt-3">
                                        <span class="single-blog-details-content-tags-item"> <a href="javascript:void(0)">
                                                [Penulis] </a> </span>
                                        <span class="single-blog-details-content-tags-item"> [Tanggal] </span>
                                    </div>
                                    <div class="single-blog-details-thumb mt-4">
                                        <img class="radius-5" src="/front/assets/img/blog/blog_details.jpg" alt="">
                                    </div>
                                    <p class="single-blog-details-content-para mt-4"> [Ini adalah bagian detail keterangan]
                                        [Ini adalah bagian detail keterangan] [Ini adalah bagian detail keterangan]</p>
                                    <blockquote class="section-bg-1 mt-4">
                                        <div class="blockquote-contents">
                                            <h3 class="blockquote-contents-title color-heading fw-500"> [Ini adalah bagian
                                                Kutipan] [Ini adalah bagian kutipan] </h3>
                                        </div>
                                    </blockquote>
                                    <p class="single-blog-details-content-para mt-4"> [Ini adalah bagian detail keterangan]
                                        [Ini adalah bagian detail keterangan] [Ini adalah bagian detail keterangan]. </p>
                                </div>
                            </div>
                            <!-- Details Tag area starts -->
                            <div class="details-tag-area color-two pat-25 pab-50">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 mt-4">
                                        <div class="blog-details-share-content">
                                            <h4 class="blog-details-share-content-title"> Share: </h4>
                                            <ul class="blog-details-share-social list-style-none">
                                                <li class="blog-details-share-social-list">
                                                    <a class="blog-details-share-social-list-icon"
                                                        href="javascript:void(0)"> <i class="lab la-facebook-f"></i> </a>
                                                </li>
                                                <li class="blog-details-share-social-list">
                                                    <a class="blog-details-share-social-list-icon"
                                                        href="javascript:void(0)"> <i class="lab la-twitter"></i> </a>
                                                </li>
                                                <li class="blog-details-share-social-list">
                                                    <a class="blog-details-share-social-list-icon"
                                                        href="javascript:void(0)"> <i class="lab la-pinterest-p"></i> </a>
                                                </li>
                                                <li class="blog-details-share-social-list">
                                                    <a class="blog-details-share-social-list-icon"
                                                        href="javascript:void(0)"> <i class="lab la-youtube"></i> </a>
                                                </li>
                                                <li class="blog-details-share-social-list">
                                                    <a class="blog-details-share-social-list-icon"
                                                        href="javascript:void(0)"> <i class="lab la-instagram"></i> </a>
                                                </li>
                                                <li class="blog-details-share-social-list">
                                                    <a class="blog-details-share-social-list-icon"
                                                        href="javascript:void(0)"> <i class="lab la-whatsapp"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Details Tag area end -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog-details-side">
                            <div class="blog-details-side-item radius-10">
                                <div class="blog-details-side-title open">
                                    <h5 class="title"> Rubrik Terbaru </h5>
                                    <div class="blog-details-side-inner">
                                        <ul class="recent-list list-style-none">
                                            <li class="recent-list-item">
                                                <div class="recent-list-thumb">
                                                    <a href="#0"> <img class="lazyloads radius-5"
                                                            src="/front/assets/img/blog/recent-post1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="recent-list-contents">
                                                    <h6 class="recent-list-title fs-16"> <a href="#0"> [Judul] </a>
                                                    </h6>
                                                    <span class="recent-list-dates light-color fs-14 mt-2"> [Tanggal]
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="recent-list-item">
                                                <div class="recent-list-thumb">
                                                    <a href="#0"> <img class="lazyloads radius-5"
                                                            src="/front/assets/img/blog/recent-post2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="recent-list-contents">
                                                    <h6 class="recent-list-title fs-16"> <a href="#0"> [Judul] </a>
                                                    </h6>
                                                    <span class="recent-list-dates light-color fs-14 mt-2"> [Tanggal]
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="recent-list-item">
                                                <div class="recent-list-thumb">
                                                    <a href="#0"> <img class="lazyloads radius-5"
                                                            src="/front/assets/img/blog/recent-post3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="recent-list-contents">
                                                    <h6 class="recent-list-title fs-16"> <a href="#0"> [Judul] </a>
                                                    </h6>
                                                    <span class="recent-list-dates light-color fs-14 mt-2"> [Tanggal]
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details-side-item radius-10">
                                <div class="blog-details-side-title open">
                                    <h5 class="title"> Infografis Terbaru </h5>
                                    <div class="blog-details-side-inner">
                                        <ul class="recent-list list-style-none">
                                            <li class="recent-list-item">
                                                <div class="recent-list-thumb">
                                                    <a href="#0"> <img class="lazyloads radius-5"
                                                            src="/front/assets/img/blog/recent-post1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="recent-list-contents">
                                                    <h6 class="recent-list-title fs-16"> <a href="#0"> [Judul] </a>
                                                    </h6>
                                                    <span class="recent-list-dates light-color fs-14 mt-2"> [Tanggal]
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="recent-list-item">
                                                <div class="recent-list-thumb">
                                                    <a href="#0"> <img class="lazyloads radius-5"
                                                            src="/front/assets/img/blog/recent-post2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="recent-list-contents">
                                                    <h6 class="recent-list-title fs-16"> <a href="#0"> [Judul] </a>
                                                    </h6>
                                                    <span class="recent-list-dates light-color fs-14 mt-2"> [Tanggal]
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="recent-list-item">
                                                <div class="recent-list-thumb">
                                                    <a href="#0"> <img class="lazyloads radius-5"
                                                            src="/front/assets/img/blog/recent-post3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="recent-list-contents">
                                                    <h6 class="recent-list-title fs-16"> <a href="#0"> [Judul] </a>
                                                    </h6>
                                                    <span class="recent-list-dates light-color fs-14 mt-2"> [Tanggal]
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details area end -->
@endsection
