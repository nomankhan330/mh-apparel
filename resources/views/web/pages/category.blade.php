@extends('web.layouts.master')

@section('content')

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
                        <h2 class="breadcrumb__title">Product</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__list-active"><a href="https://www.mh-apparel.com/">Home</a></li>
                        <li>Product</li>
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

<!--========== EXPORT RANGE AREA START =====================-->
<section class="team-area team-area2 section-padding text-center">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-heading text-center">
                            <h5 class="section__meta">#Category</h5>
                            <h2 class="section__title">PRODUCT RANGE</h2><br>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-8 -->
                </div><!-- end row -->
                <div class="section-description">
                    <p class="section__desc">
                        We exhibit proficiency an expertise in the following apparel Garments, such as:<br>
                        Polo Shirt, Sweatshirt, Pullover, T Shirts, Jog pant, Ladies top and Dresses Etc.
                    </p>
                </div>
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
        <div class="row team-content-wrap">

            @foreach ($categories as $category)
                <div class="col-lg-4 col-sm-6">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/categories/'.$category->image ) }}" alt="{{ $category->name }}">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title"><a href="{{route('product-detail',$category->slug )}}">{{ $category->name }}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end team-area -->
<!--============ EXPORT RANGE AREA END ===========================-->

<div class="section-block"></div>

@endsection

