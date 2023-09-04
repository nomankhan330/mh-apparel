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
                        <h2 class="breadcrumb__title">Clients</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__list-active"><a href="/">Home</a></li>
                        <li>Clients</li>
                    </ul>
                </div><!-- breadcrumb-content -->
            </div><!-- col-lg-12 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- end breadcrumb-area -->
<!--================================
        END BREADCRUMB AREA
=================================-->
<!--================================
         START CLIENT AREA
=================================-->
<section class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-heading text-center">
                    <h5 class="section__meta">#Clients</h5>
                    <h2 class="section__title">Our Valuable Clients</h2>
                    <div class="section-divider mx-auto"></div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-item-wrap-7 testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/web/images/clients/client-01.jpg') }}" alt="testimonial-image">
                                </div><!-- end testimonial__img -->
                            </div><!-- end col-lg-5 -->
                            <div class="col-lg-9">
                                <div class="testimonial-content">
                                    <div class="testimonial-desc">
                                        <span class="la la-quote-left"></span>
                                        <p class="testimonial__desc">
                                            Colortone is the leader of in-stock same-day-ship tie-dye apparel. We pride ourselves on having the highest quality and the brightest colors in the industry.<br>
                                            Established in 1988 in South Florida, They've grown to become the largest tie-dye company in the United States. Thier Fall 2021 expansion to a new distribution center in Plantation, FL increases our warehouse footprint to over 200,000 sq. ft. across the U.S. and the Dominican Republic. This next evolution of the company brings faster warehouse order-picking and improved efficiencies to better serve their growing customer base.
                                        </p>
                                    </div><!-- end testimonial-desc -->
                                    <div class="testimonial-author">
                                        <h3 class="author__title">Colortone,</h3>
                                        <span class="author__meta">An American Celebration</span>
                                    </div><!-- end testimonial-author -->
                                </div><!-- end testimonial-content -->
                            </div><!-- end col-lg-7 -->
                        </div><!-- end row -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->

    <br> <div class="section-block"></div> <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-item-wrap-7 testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/web/images/clients/client-02.jpg') }}" alt="testimonial-image">
                                </div><!-- end testimonial__img -->
                            </div><!-- end col-lg-5 -->
                            <div class="col-lg-9">
                                <div class="testimonial-content">
                                    <div class="testimonial-desc">
                                        <span class="la la-quote-left"></span>
                                        <p class="testimonial__desc">
                                            Surf Style is a story of enduring friendship. From five separate paths that converged over twenty years ago, grew a new brand rooted in family, loyalty, legacy and good waves. <br>
                                            Surf Style truly began in the trunk of a car, selling the now famous windbreakers in the parking lot of a flea market in South Florida. A wholesale business to start, retailers became enamored with the shiny fabric, neon colors, and Surf Style’s “Interplanetary Body Gear” logo.<br>
                                            Fast forward 20 years and Surf Style now runs the beach. With the Corporate Office located in South Florida, and stores spanning, Tampa Bay, the Florida panhandle, Alabama and Mississippi, Surf Style is the leading beachwear and souvenir shopping destination.
                                        </p>
                                    </div><!-- end testimonial-desc -->
                                    <div class="testimonial-author">
                                        <h3 class="author__title">Surf Style,</h3>
                                        <span class="author__meta">As Sweet as (Cotton) Candy</span>
                                    </div><!-- end testimonial-author -->
                                </div><!-- end testimonial-content -->
                            </div><!-- end col-lg-7 -->
                        </div><!-- end row -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->

    <br> <div class="section-block"></div> <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-item-wrap-7 testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="testimonial-content">
                                    <div class="testimonial-desc">
                                        <span class="la la-quote-left"></span>
                                        <p class="testimonial__desc">
                                            Austin's Inc, is a full service in-house screenprinting and embroidery company. Since 1984, they've provided quality printed clothing for retail outlets, local business, schools, organizations and events.<br>
                                            They offer faster turnarounds and more customization option than any of their competition.
                                        </p>
                                    </div><!-- end testimonial-desc -->
                                    <div class="testimonial-author">
                                        <h3 class="author__title">Austins Inc,</h3>
                                        <span class="author__meta">Screen Printing, Embroidery & Design</span>
                                    </div><!-- end testimonial-author -->
                                </div><!-- end testimonial-content -->
                            </div><!-- end col-lg-7 -->
                            <div class="col-lg-3">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/web/images/clients/client-03.jpg') }}" alt="testimonial-image">
                                </div><!-- end testimonial__img -->
                            </div><!-- end col-lg-5 -->

                        </div><!-- end row -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->

    <br> <div class="section-block"></div> <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-item-wrap-7 testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/web/images/clients/client-04.jpg') }}" alt="testimonial-image">
                                </div><!-- end testimonial__img -->
                            </div><!-- end col-lg-5 -->
                            <div class="col-lg-9">
                                <div class="testimonial-content">
                                    <div class="testimonial-desc">
                                        <span class="la la-quote-left"></span>
                                        <p class="testimonial__desc">
                                            US Apparel is a Lahore, Pakistan-based company supplying fashion industry companies that need absolutely reliable quality and delivery. <br>
                                            US Apparel constantly improves to remain state-of-the-art in all its processes and as a product innovator, so that customers can be confident in partnering with us to achieve fashion leadership.
                                        </p>
                                    </div><!-- end testimonial-desc -->
                                    <div class="testimonial-author">
                                        <h3 class="author__title">U. S. Apparel,</h3>
                                        <span class="author__meta">Doing well by giving back.</span>
                                    </div><!-- end testimonial-author -->
                                </div><!-- end testimonial-content -->
                            </div><!-- end col-lg-7 -->
                        </div><!-- end row -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->

    <br> <div class="section-block"></div> <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-item-wrap-7 testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/web/images/clients/client-05.jpg') }}" alt="testimonial-image">
                                </div><!-- end testimonial__img -->
                            </div><!-- end col-lg-5 -->
                            <div class="col-lg-9">
                                <div class="testimonial-content">
                                    <div class="testimonial-desc">
                                        <span class="la la-quote-left"></span>
                                        <p class="testimonial__desc">
                                            Top Image USA is a leading manufacturer of custom decorated apparel, supplier & manufacturer since 1997. We define our success by achieving the highest level of customer satisfaction possible. <br>
                                            Top Image's garments set the standard in quality, innovation, and design. With a huge variety of colors, sizes, and styles to choose from all featuring a stylish and flattering fit you'll find exactly what you need at price points that will drive your business to success. We offer garments for the entire family from toddlers to adults, unisex & juniors, you name it we have it. Top Image USA is a leading source for all your apparel needs.
                                        </p>
                                    </div><!-- end testimonial-desc -->
                                    <div class="testimonial-author">
                                        <h3 class="author__title">Top Image USA,</h3>
                                        <span class="author__meta">In House Custom Decoration</span>
                                    </div><!-- end testimonial-author -->
                                </div><!-- end testimonial-content -->
                            </div><!-- end col-lg-7 -->
                        </div><!-- end row -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->

    <br> <div class="section-block"></div> <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-item-wrap-7 testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/web/images/clients/client-07.jpg') }}" alt="testimonial-image">
                                </div><!-- end testimonial__img -->
                            </div><!-- end col-lg-5 -->
                            <div class="col-lg-9">
                                <div class="testimonial-content">
                                    <div class="testimonial-desc">
                                        <span class="la la-quote-left"></span>
                                        <p class="testimonial__desc">
                                            It all started in 1980 after college, on top of mom’s car on Route 28 in West Dennis. I purchased 300 misprint t-shirts for $1.00 and sold them for $2.00. The car would evolve to constructing our own building in 1984. The contractor promised completion by Memorial Day, but all I had was a foundation. <br>
                                            With inventory already purchased for the selling season, I had no choice but to sell from the parking lot. These pictures are my memories of the experience, and what the building would eventually become. After 35 years we’ve gone through many changes, this website is, the latest evolution of the dream. I hope you’ve enjoyed the journey, and I look forward to bringing you new changes yet to come.
                                        </p>
                                    </div><!-- end testimonial-desc -->
                                    <div class="testimonial-author">
                                        <h3 class="author__title">Cuffy's,</h3>
                                        <span class="author__meta">Of Cap Cod</span>
                                    </div><!-- end testimonial-author -->
                                </div><!-- end testimonial-content -->
                            </div><!-- end col-lg-7 -->
                        </div><!-- end row -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->

    <br> <div class="section-block"></div> <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-item-wrap-7 testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/web/images/clients/client-06.jpg') }}" alt="testimonial-image">
                                </div><!-- end testimonial__img -->
                            </div><!-- end col-lg-5 -->
                            <div class="col-lg-9">
                                <div class="testimonial-content">
                                    <div class="testimonial-desc">
                                        <span class="la la-quote-left"></span>
                                        <p class="testimonial__desc">
                                            Exist Clothing, Wear the world you live in.
                                        </p>
                                    </div><!-- end testimonial-desc -->
                                    <div class="testimonial-author">
                                        <h3 class="author__title">Exist Clothing,</h3>
                                        <span class="author__meta">Wear the world you live in.</span>
                                    </div><!-- end testimonial-author -->
                                </div><!-- end testimonial-content -->
                            </div><!-- end col-lg-7 -->
                        </div><!-- end row -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonial-area -->
<!--================================
        END CLIENT AREA
=================================-->

<div class="section-block"></div>

@endsection
