@extends('layouts.app')

@section('content')
    @include('includes.navbar')

    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title">
                            Program dan Kegiatan Pusat Kebudayaan Jambi
                        </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item">
                                <a href="index.html" class="breadcrumb-contents-list-item-link">
                                    Beranda
                                </a>
                            </li>
                            <li class="breadcrumb-contents-list-item">Program dan Kegiatan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-area section-bg-1 pat-100 pab-100">
        <div class="container">
            <div class="row gy-5">
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg" alt="">
                            </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="single-blog-thumbs">
                            <a href="{{ route('detailOaseEsai', 1) }}"> <img class="lazyloads" src="/front/assets/img/blog/blog1.jpg"
                                    alt=""> </a>
                        </div>
                        <div class="single-blog-contents mt-3">
                            <div class="single-blog-contents-tags mt-3">
                                <span class="single-blog-contents-tags-item">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i> [Tanggal] </a>
                                </span>
                                <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> [Penulis] </a>
                                </span>
                            </div>
                            <h4 class="single-blog-contents-title mt-3"> <a href="{{ route('detailOaseEsai', 1) }}"> [Judul] </a> </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="pagination-wrapper">
                        <ul class="pagination-list list-style-none">
                            <li class="pagination-list-item-prev">
                                <a href="javascript:void(0)" class="pagination-list-item-button"> Prev </a>
                            </li>
                            <li class="pagination-list-item">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 1 </a>
                            </li>
                            <li class="pagination-list-item active">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 2 </a>
                            </li>
                            <li class="pagination-list-item">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 3 </a>
                            </li>
                            <li class="pagination-list-item">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 4 </a>
                            </li>
                            <li class="pagination-list-item">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 5 </a>
                            </li>
                            <li class="pagination-list-item-next">
                                <a href="javascript:void(0)" class="pagination-list-item-button"> Next </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
