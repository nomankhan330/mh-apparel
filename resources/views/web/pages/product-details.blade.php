@extends('web.layouts.master')

@section('content')

    <!--================================
         START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-shape breadcrumb-shape1"></div>
        <div class="breadcrumb-shape breadcrumb-shape2"></div>
        <div class="breadcrumb-shape breadcrumb-shape3"></div>
        <div class="breadcrumb-shape breadcrumb-shape4"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb__titles">
                            <h2 class="breadcrumb__title">Product Details</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-active"><a href="/">Home</a></li>
                            <li class="breadcrumb__list-active">{{ $products->name }}</li>
                        </ul>
                    </div><!-- breadcrumb-content -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- end breadcrumb-area -->
    <!--================================
            END BREADCRUMB AREA
    =================================-->

    <!--======================================
            START PRODUCT SINGLE AREA
    ======================================-->
    <section class="product-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="pro-tab-content">
                        <div class="tab-content" id="nav-tabContent">


                            @foreach ($products->images as $key => $images)

                                <div class="tab-pane fade show {{ $key == 0 ? "active" : ""}}" id="img-nav-tab{{ $key }}" role="tabpanel" aria-labelledby="img-tab{{ $key }}">
                                    <div class="pro-tab-img">
                                        <img src="{{ asset($images->image_url) }}" alt="">
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        <nav>
                            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">

                                @foreach ($products->images as $key => $images)

                                    <a class="nav-item nav-link {{ $key == 0 ? "active" : ""}}" id="img-tab{{ $key }}" data-toggle="tab" href="#img-nav-tab{{ $key }}" role="tab" aria-controls="img-nav-tab"
                                       aria-selected="{{ $key == 0 ? "true" : "false"}}">
                                        <img src="{{ asset($images->image_url) }}" alt="">
                                    </a>

                                @endforeach

                            </div>
                        </nav>
                    </div><!-- end pro-tab-content -->
                </div><!-- end col-lg-5 -->
                <div class="col-lg-7">
                    <div class="product-description-wrapper">
                        <div class="pro-detail-cat-box">
                            <div class="pro-detail-cat">
                                <a href="product/{{ $products->category->slug }}">{{ $products->category->name }}</a>
                            </div><!-- end pro-detail-cat -->
                        </div><!-- end pro-detail-cat-box -->
                        <div class="pro-detail-title-box">
                            <h2 class="description__title">{{ $products->name }}</h2>
                        </div><!-- end pro-detail-desc-title -->
                        <div class="pro-detail-rating">
                            <ul class="prodetail__rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div><!-- end pro-detail-rating -->
                        <div class="pro-detail-desc">
                            <p class="prodetail__desc">
                                {{ $products->description }}
                            </p>
                        </div><!-- end pro-detail-desc -->
                    </div><!-- end product-description-wrapper -->
                </div><!-- end col-lg-7 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end product-single -->
    <!--======================================
            END PRODUCT SINGLE AREA
    ======================================-->

    <!--======================================
            START PRODUCT AREA
    ======================================-->
    <section class="product-area related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">Great Collection For You</h5>
                        <h2 class="section__title">You May Also Interested</h2>
                        <div class="section-divider mx-auto"></div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-7 -->
            </div><!-- end row -->
            <div class="row product-wrap">



                {{--<div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-img">
                            <img src="images/catalogue/polo-shirts/product-1.png" alt="product image" class="product__img">
                        </div><!-- end product-img -->
                    </div><!-- end product-item -->
                </div><!-- end col-lg-3 -->--}}

                {{--<div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-img">
                            <span class="price-off">-10%</span>
                            <img src="images/catalogue/polo-shirts/product-2.png" alt="product image" class="product__img">
                        </div><!-- end product-img -->
                    </div><!-- end product-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-img">
                            <img src="images/catalogue/polo-shirts/product-3.png" alt="product image" class="product__img">
                        </div><!-- end product-img -->
                    </div><!-- end product-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-img">
                            <img src="images/catalogue/polo-shirts/product-4.png" alt="product image" class="product__img">
                        </div><!-- end product-img -->
                    </div><!-- end product-item -->
                </div><!-- end col-lg-3 -->--}}

            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!--======================================
            END PRODUCT AREA
    ======================================-->

@endsection
