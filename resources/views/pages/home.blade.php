@extends('layouts.app')

@section('content')
    @include('includes.navbar_home')
    <!-- Banner area Starts -->
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(/front/assets/banner/images/slider-1.png)"></div>

        <div class="slider-item js-fullheight" style="background-image: url(/front/assets/banner/images/slider_2.JPG)"></div>

        <div class="slider-item js-fullheight" style="background-image: url(/front/assets/banner/images/slider-3.png)"></div>
    </div>
    <!-- Banner area end -->
    <!-- Booking Two area end -->
    <div style="background-image: url('/front/assets/img/border_batik.png')">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <section class="blog-area pat-50 pab-50">
                        <div class="container">
                            <div class="section-title center-text">
                                <h2 class="title">Berita Terbaru</h2>
                                <div class="section-title-shapes"></div>
                            </div>
                            <div class="row gy-4 mt-4">
                                @foreach ($beritaTerbaru as $berita)
                                <div class="col-xxl-4 col-lg-4 col-md-6">
                                    <div class="single-blog">
                                        <div class="single-blog-thumbs">
                                            <a href="{{route('detailEvent',$berita->slug)}}">
                                                <img class="lazyloads img-berita-custom" src="{{asset($berita->gambar)}}"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="single-blog-contents mt-3">
                                            <div class="single-blog-contents-tags mt-3">
                                                <span class="single-blog-contents-tags-item">
                                                    <a href="javascript:void(0)">
                                                        <i class="las la-tag"></i> {{readAgo($berita->created_at)}}
                                                    </a>
                                                </span>
                                                <span class="single-blog-contents-tags-item">
                                                    <a href="javascript:void(0)"> {{ucwords(strtolower($berita->penulis))}} </a>
                                                </span>
                                            </div>
                                            <h4 class="single-blog-contents-title mt-3">
                                                <a href="{{route('detailEvent',$berita->slug)}}"> {{ucwords(strtolower($berita->judul))}} </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </section>
                    <section class="blog-area pat-50 pab-50">
                        <div class="container">
                            <div class="section-title center-text">
                                <h2 class="title">Oase Terbaru</h2>
                                <div class="section-title-shapes"></div>
                            </div>
                            <div class="row gy-4 mt-4">
                                <div class="col-xxl-4 col-lg-4 col-md-6">
                                    <div class="single-blog">
                                        <div class="single-blog-thumbs">
                                            <a href="blog_details.html">
                                                <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="single-blog-contents mt-3">
                                            <div class="single-blog-contents-tags mt-3">
                                                <span class="single-blog-contents-tags-item">
                                                    <a href="javascript:void(0)">
                                                        <i class="las la-tag"></i> 28/03/2024
                                                    </a>
                                                </span>
                                                <span class="single-blog-contents-tags-item">
                                                    <a href="javascript:void(0)"> Jumardi Putra </a>
                                                </span>
                                            </div>
                                            <h4 class="single-blog-contents-title mt-3">
                                                <a href="blog_details_opini1.html">
                                                    Di Balik Polemik Gelar Adat Melayu Jambi
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-4 col-md-6">
                                    <div class="single-blog">
                                        <div class="single-blog-thumbs">
                                            <a href="blog_details.html">
                                                <img class="lazyloads" src="/front/assets/img/blog/blog2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="single-blog-contents mt-3">
                                            <div class="single-blog-contents-tags mt-3">
                                                <span class="single-blog-contents-tags-item">
                                                    <a href="javascript:void(0)">
                                                        <i class="las la-tag"></i> [Tanggal]
                                                    </a>
                                                </span>
                                                <span class="single-blog-contents-tags-item">
                                                    <a href="javascript:void(0)"> [Penulis] </a>
                                                </span>
                                            </div>
                                            <h4 class="single-blog-contents-title mt-3">
                                                <a href="blog_details.html"> [Judul] </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-4 col-md-6">
                                    <div class="single-blog">
                                        <div class="single-blog-thumbs">
                                            <a href="blog_details.html">
                                                <img class="lazyloads" src="/front/assets/img/blog/blog3.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="single-blog-contents mt-3">
                                            <div class="single-blog-contents-tags mt-3">
                                                <span class="single-blog-contents-tags-item">
                                                    <a href="javascript:void(0)">
                                                        <i class="las la-tag"></i> [Tanggal]
                                                    </a>
                                                </span>
                                                <span class="single-blog-contents-tags-item">
                                                    <a href="javascript:void(0)"> [Penulis] </a>
                                                </span>
                                            </div>
                                            <h4 class="single-blog-contents-title mt-3">
                                                <a href="blog_details.html"> [Judul] </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Guest area Two starts -->
                <section class="guest-area pat-50 pab-50">
                    <div class="container">
                        <div class="section-title-three append-flex ml-5">
                            <h2 class="title">Galeri Foto</h2>
                            <div class="append-attraction append-color-two"></div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="global-slick-init guest-two-slider nav-style-one slider-inner-margin"
                                    data-appendArrows=".append-attraction" data-infinite="true" data-arrows="true"
                                    data-dots="false" data-slidesToShow="3" data-swipeToSlide="true"
                                    data-autoplay="true" data-autoplaySpeed="2500"
                                    data-prevArrow='<div class="prev-icon radius-parcent-50"><i class="las la-angle-left"></i></div>'
                                    data-nextArrow='<div class="next-icon radius-parcent-50"><i class="las la-angle-right"></i></div>'
                                    data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 3}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 576, "settings": {"slidesToShow": 1} }]'>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto1.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto1.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto2.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto3.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto3.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto4.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto4.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto5.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto5.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto6.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto6.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto7.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto7.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto8.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto8.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto9.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto9.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto10.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto10.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto11.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto11.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto12.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto12.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto13.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto13.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto14.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto14.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto15.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto15.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto16.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto16.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto17.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto17.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto18.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto18.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto19.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto19.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto20.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto20.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto21.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto21.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto22.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto22.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto23.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto23.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto24.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto24.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto25.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto25.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto26.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto26.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto27.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto27.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto28.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto28.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto29.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto29.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto30.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto30.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto31.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto31.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto32.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto32.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto33.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto33.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto34.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto34.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto35.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto35.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto36.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto36.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto37.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto37.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto38.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto38.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto39.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto39.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto40.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto40.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto41.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto41.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto42.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto42.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto43.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto43.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto44.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto44.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <a href="/front/assets/img/blog/foto45.jpg">
                                                        <img class="lazyloads" src="/front/assets/img/blog/foto45.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Guest area Two end -->
                <!-- Guest area Two starts -->
                <section class="guest-area pat-50 pab-50">
                    <div class="container">
                        <div class="section-title-three append-flex ml-5">
                            <h2 class="title">Galeri Video</h2>
                            <div class="append-attraction2 append-color-two"></div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="global-slick-init guest-two-slider nav-style-one slider-inner-margin"
                                    data-appendArrows=".append-attraction2" data-infinite="true" data-arrows="true"
                                    data-dots="false" data-slidesToShow="3" data-swipeToSlide="true"
                                    data-autoplay="true" data-autoplaySpeed="2500"
                                    data-prevArrow='<div class="prev-icon radius-parcent-50"><i class="las la-angle-left"></i></div>'
                                    data-nextArrow='<div class="next-icon radius-parcent-50"><i class="las la-angle-right"></i></div>'
                                    data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 3}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 576, "settings": {"slidesToShow": 1} }]'>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <iframe width="100%" height="200"
                                                        src="https://www.youtube.com/embed/t5eWB3BJrLQ?si=3HVTDbAB0cn6dmUm"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="single-blog-contents mt-3">
                                                    <div class="single-blog-contents-tags mt-3">
                                                        <span class="single-blog-contents-tags-item">
                                                            <a href="javascript:void(0)">
                                                                <i class="las la-tag"></i> 4 Maret 2024
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <h4 class="single-blog-contents-title mt-3">
                                                        Kesan dan Pesan Peserta Residensi Penulis Muda
                                                        Jambi dalam Panel Kegiatan Bepekat Beselang
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <iframe width="100%" height="200"
                                                        src="https://www.youtube.com/embed/g_hbFrImqq4?si=EMNThXjstI04A3Jo"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="single-blog-contents mt-3">
                                                    <div class="single-blog-contents-tags mt-3">
                                                        <span class="single-blog-contents-tags-item">
                                                            <a href="javascript:void(0)">
                                                                <i class="las la-tag"></i> 4 Maret 2024
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <h4 class="single-blog-contents-title mt-3">
                                                        Sambutan Hangat Ketut Suardana untuk Kegiatan
                                                        Bepekat Berselang
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <iframe width="100%" height="200"
                                                        src="https://www.youtube.com/embed/hoq6Z25wGPk?si=GWPpg_Tzseb7g9-L"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="single-blog-contents mt-3">
                                                    <div class="single-blog-contents-tags mt-3">
                                                        <span class="single-blog-contents-tags-item">
                                                            <a href="javascript:void(0)">
                                                                <i class="las la-tag"></i> 4 Maret 2024
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <h4 class="single-blog-contents-title mt-3">
                                                        Kedatangan Edel Rodriguez dalam Panel Bepekat
                                                        Berselang
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <iframe width="100%" height="200"
                                                        src="https://youtube.com/embed/imKjljR0zvA?si=gVy98Cbm7p4MAVIp"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="single-blog-contents mt-3">
                                                    <div class="single-blog-contents-tags mt-3">
                                                        <span class="single-blog-contents-tags-item">
                                                            <a href="javascript:void(0)">
                                                                <i class="las la-tag"></i> 4 Maret 2024
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <h4 class="single-blog-contents-title mt-3">
                                                        Sambutan Hangat Laksmi Shari De-Neefe Suardana
                                                        Terhadap Satellite Event: Bepekat Berselang
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <iframe width="100%" height="200"
                                                        src="https://youtube.com/embed/Ub2hcwdRBFk?si=Vvd8K_gv7eP7nZoa"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="single-blog-contents mt-3">
                                                    <div class="single-blog-contents-tags mt-3">
                                                        <span class="single-blog-contents-tags-item">
                                                            <a href="javascript:void(0)">
                                                                <i class="las la-tag"></i> 4 Maret 2024
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <h4 class="single-blog-contents-title mt-3">
                                                        Sambutan Hangat Janet De-Neefe Terhadap Kegiatan
                                                        Satellite Event: Bepekat Berselang
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-two-item">
                                        <div class="single-guest-two single-guest-two-border radius-20">
                                            <div class="single-blog">
                                                <div class="single-blog-thumbs">
                                                    <iframe width="100%" height="200"
                                                        src="https://youtube.com/embed/S9ZzhX6zfnI?si=zFApCrlPUP4lSM92"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="single-blog-contents mt-3">
                                                    <div class="single-blog-contents-tags mt-3">
                                                        <span class="single-blog-contents-tags-item">
                                                            <a href="javascript:void(0)">
                                                                <i class="las la-tag"></i> 19 Oktober 2023
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <h4 class="single-blog-contents-title mt-3">
                                                        Pesan Goenawan Mohamad
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Guest area Two end -->
            </div>
        </div>
    </div>
@endsection
