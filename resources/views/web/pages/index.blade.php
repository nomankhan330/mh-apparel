@extends('web.layouts.master')

@section('content')

    <!--=========== START BANNER AREA =====================-->
    <section class="banner-area home-page-4">
        <div class="banner-item-wrap">
            <span class="line-bg line-bg1"></span>
            <span class="line-bg line-bg2"></span>
            <span class="line-bg line-bg3"></span>
            <span class="line-bg line-bg4"></span>
            <span class="line-bg line-bg5"></span>
            <span class="line-bg line-bg6"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="banner-content">
                            <div class="section-heading">
                                <h2 class="section__title" style="font-family: Times new Roman" >Manufacturing Relationships. Distributing Quality.</h2>
                            </div><!-- section-heading -->
                            <div class="section-description">
                                <p class="section__desc">
                                    We exhibit proficiency an expertise in the following apparel Garments,<br>
                                    such as: Polo Shirt, Sweatshirt, Pullover, T-Shirts, Jog pant, Ladies top and Dresses Etc.
                                </p>
                            </div><!-- section-description -->
                        </div><!-- banner-content -->
                    </div><!-- col-lg-8 -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- end banner-item-wrap -->
    </section><!-- end slider-area -->
    <!--======== END BANNER AREA =====================-->

    <!--======================================
            START ABOUT AREA
     ======================================-->
    <section class="about-area about-area3 section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-heading section-heading about-right">
                            <h5 class="section__meta rounded-radius">#Who we are?</h5> <br><br>
                            <h1 style="font-family: Sans-serif" >MH APPAREL</h1>
                        </div><!-- end section-heading -->
                        <div class="section-description">
                            <p class="section__desc">
                                MH APPAREL is one of the leading and fast growing fabric & apparel manufacturers from Pakistan We are engaged in manufacturing of high—end fashion of Knitted garments.It not only made us specialized in the manufacturing of all kinds of knitted fabrics & garments but also keeping us closer to our esteemed customers, which is self—expression of our continuous efforts and driving us wade through better quality as well as quantity.Of course it's a great honor and success for all of us, but the true reason behind the accomplishment is our 200 very skilled and dedicated work forces...
                            </p>
                        </div>
                        <a href="about-us" class="theme-btn">Read more <span class="la la-caret-right"></span></a>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="image-box-wrap">
                        <div class="image-box">
                            <img src="{{ asset('assets/web/images/about/about-img1.png') }}" alt="about-img" class="img__item">
                            <img src="{{ asset('assets/web/images/about/about-img2.png') }}" alt="about-img" class="img__item">
                            <img src="{{ asset('assets/web/images/about/img-about01.png') }}" alt="about-img" class="img__item">
                            <img src="{{ asset('assets/web/images/about/about-img04.jpg') }}" alt="about-img" class="img__item">
                        </div><!-- end about-img-box -->
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end about-area -->
    <!--======================================
            END ABOUT AREA
    ======================================-->

    <div class="section-block"></div>

    <!--========== EXPORT RANGE AREA START =====================-->
    <section class="team-area team-area2 section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-divider mx-auto"></div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->

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
                                <h3 class="team__title"><a href="product/{{ $category->slug }}">{{ $category->name }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--<div class="col-lg-4 col-sm-6">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/catalogue/thumbnail/polo.png') }}" alt="Polo Shirt">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title"><a href="polo-shirts.php">POLO SHIRTS</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/catalogue/thumbnail/t-shirts.png') }}" alt="">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title"><a href="t-shirts.php">T-SHIRTS</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset(('assets/web/images/catalogue/thumbnail/pullover.png')) }}" alt="">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title"><a href="pull-over.php">PULL OVER</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/catalogue/thumbnail/jogpants.png') }}" alt="Jog Pants">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title"><a href="jog-pants.php">JOG PANTS</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/catalogue/thumbnail/ladies-top.png') }}" alt="Ladies Stop">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title"><a href="ladies-top.php">LADIES TOP</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/catalogue/thumbnail/shorts.png') }}" alt="">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title"><a href="shorts.php">SHORTS</a></h3>
                        </div>
                    </div>
                </div>--}}

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end team-area -->
    <!--============ EXPORT RANGE AREA END ===========================-->

    <div class="section-block"></div>

    <!--============ EXPERTISE AREA START =====================-->
    <section class="team-area team-area2 section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-heading text-center">
                                <h5 class="section__meta">#Expertise</h5>
                                <h2 class="section__title">Things We're Good At!</h2><br>
                            </div><!-- end section-heading -->
                        </div><!-- end col-lg-8 -->
                    </div><!-- end row -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->

            <div class="row team-content-wrap">
                <div class="col-lg-4 col-sm-8">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/process/img-cutting.png') }}" alt="">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title">CUTTING</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-8">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/process/img-stitching.jpg') }}" alt="">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title">STITCHING</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-8">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="images/process/img-checking.png" alt="">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title">CHECKING</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-8">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/process/img-boilerpress.png') }}" alt="Steam Press">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title">BOILER PRESS</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-8">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/process/img-packing.png') }}" alt="Packing">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title">PACKING</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-4 col-sm-6 -->


                <div class="col-lg-4 col-sm-8">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <img src="{{ asset('assets/web/images/process/img-delivery.png') }}" alt="Delivery">
                        </div>
                        <div class="team-titles">
                            <h3 class="team__title">DELIVERY</a></h3>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-4 col-sm-6 -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end team-area -->
    <!--======================================
            EXPERTISE AREA END
    ======================================-->


    <div class="section-block"></div>

@endsection
