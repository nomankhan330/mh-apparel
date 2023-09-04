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
                        <h2 class="breadcrumb__title">Export</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__list-active"><a href="/">Home</a></li>
                        <li>Export</li>
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
                            <h5 class="section__meta">#Catalogue</h5>
                            <h2 class="section__title">EXPORT RANGE</h2><br>
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
            <div class="col-lg-4 col-sm-6">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/catalogue/thumbnail/polo.png') }}" alt="Polo Shirt">
                    </div>
                    <div class="team-titles">
                        <h3 class="team__title"><a href="polo-shirts.php">POLO SHIRTS</a></h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->

            <div class="col-lg-4 col-sm-6">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/catalogue/thumbnail/t-shirts.png') }}" alt="">
                    </div>
                    <div class="team-titles">
                        <h3 class="team__title"><a href="t-shirts.php">T-SHIRTS</a></h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->


            <div class="col-lg-4 col-sm-6">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/catalogue/thumbnail/pullover.png') }}" alt="">
                    </div>
                    <div class="team-titles">
                        <h3 class="team__title"><a href="pull-over.php">PULL OVER</a></h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->

            <div class="col-lg-4 col-sm-6">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/catalogue/thumbnail/jogpants.png') }}" alt="Jog Pants">
                    </div>
                    <div class="team-titles">
                        <h3 class="team__title"><a href="jog-pants.php">JOG PANTS</a></h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->

            <div class="col-lg-4 col-sm-6">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/catalogue/thumbnail/ladies-top.png') }}" alt="Ladies Stop">
                    </div>
                    <div class="team-titles">
                        <h3 class="team__title"><a href="ladies-top.php">LADIES TOP</a></h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->


            <div class="col-lg-4 col-sm-6">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/catalogue/thumbnail/shorts.png') }}" alt="">
                    </div>
                    <div class="team-titles">
                        <h3 class="team__title"><a href="shorts.php">Shorts</a></h3>
                    </div>
                </div><!-- end team-item -->

            </div><!-- end col-lg-4 col-sm-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end team-area -->
<!--============ EXPORT RANGE AREA END ===========================-->


<div class="section-block"></div>

@endsection
