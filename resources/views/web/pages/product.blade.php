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
                            <h2 class="breadcrumb__title">{{ $categories->name }}</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-active"><a href="/">Home</a></li>
                            <li>{{ $categories->name }}</li>
                        </ul>

                    </div><!-- breadcrumb-content -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- end breadcrumb-area -->
    <!--================================
            END BREADCRUMB AREA
    =================================-->
    <div class="section-block"></div>

    <!--======================================
            START PRODUCT AREA
    ======================================-->
    <section class="product-area related-product section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">Catalogue</h5>
                        <h2 class="section__title">Great Collection For {{ $categories->name }}</h2>
                        <div class="section-divider mx-auto"></div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-7 -->
            </div><!-- end row -->
            <div class="row product-wrap">

                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img">
                                    <a href="{{route('product-detail', ['slug' => "$product->slug"])}}">
                                    <img src="{{ asset($product->images[0]->image_url) }}" alt="{{ $product->name }}" class="product__img">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="pro__title">
                                    <h4>{{ $product->name }}</h4>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!--======================================
            END PRODUCT AREA
    ======================================-->


    <div class="section-block"></div>

@endsection
