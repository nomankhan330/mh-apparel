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
                        <h2 class="breadcrumb__title">Production</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__list-active"><a href="/">Home</a></li>
                        <li>Production</li>
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

<!--================================
        EXPORT RANGE AREA START
=================================-->
<section class="team-area team-area2 section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-heading text-center">
                            <h5 class="section__meta">#Production</h5>
                            <h2 class="section__title">Our Production Capacity & Working Process</h2><br>
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
                        <h3 class="team__title">STITCHING</h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->

            <div class="col-lg-4 col-sm-8">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/process/img-checking.png') }}" alt="">
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
                        <h3 class="team__title">BOILER PRESS</h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->

            <div class="col-lg-4 col-sm-8">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/process/img-packing.png') }}" alt="Packing">
                    </div>
                    <div class="team-titles">
                        <h3 class="team__title">PACKING</h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->


            <div class="col-lg-4 col-sm-8">
                <div class="team-item team-item-2">
                    <div class="team-img-box">
                        <img src="{{ asset('assets/web/images/process/img-delivery.png') }}" alt="Delivery">
                    </div>
                    <div class="team-titles">
                        <h3 class="team__title">DELIVERY</h3>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 col-sm-6 -->

        </div><!-- end row -->

        <div class="section-block"></div> <br>

        <div class="container">
            <div class="row team-content-wrap">
                <div class="col-lg-6 mx-auto">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <div class="section-heading text-center">
                                <h2> MACHINE DETAILS <br> AND COVERED AREA </h2> <br>
                                <h4> <b> Total Covered Area </b></h4> <br>
                                <h4 class="section__title"> 25,000 SQ.FT </h4> <br>
                            </div><!-- end section-heading -->
                        </div>
                    </div>
                </div><!-- end col-lg-8 -->

                <div class="col-lg-6 mx-auto">
                    <div class="team-item team-item-2">
                        <div class="team-img-box">
                            <div class="section-heading text-center">
                                <h2>PRODUCTION LEAD TIME <br> WOULD BE 60 TO 90 DAYS</h2> <br>
                                <h4> <b> Total Covered Area </b></h4> <br>
                                <h5> BASIC ITEM : 200,000 PCS / MONTH</h5>
                                <h5> FANCY ITEMS : 125,000 PCS / MONTH</h5> <br>
                            </div><!-- end section-heading -->
                        </div>
                    </div>
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->

        <br> <div class="section-block"></div> <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="section__title">Machines, We Have!</h2><br>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="tooltip-wrap">

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="top" title="">
                            SINGLE NEEDLE - 80 NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="right" title="">
                            DOUBLE NEEDLE - 05 NOS
                        </button>

                    </div><!-- end tooltip-wrap -->
                </div><!-- end col-lg-12 -->
            </div> <br> <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="tooltip-wrap">

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="bottom" title="">
                            FLAT LOCK - 40 NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="top" title="">
                            STEAM BOILER PRESS - 08 NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                            DIESEL GENERATOR - 02 NOS
                        </button>

                    </div><!-- end tooltip-wrap -->
                </div><!-- end col-lg-12 -->
            </div> <br> <!-- end row -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="tooltip-wrap">

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="top" title="">
                            4 THREAD OVER LOCK - 110 NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                            KANSAI / WAIST BAND - 01 NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                            KAJ MACHINE - 01 NOS
                        </button>



                    </div><!-- end tooltip-wrap -->
                </div><!-- end col-lg-12 -->
            </div> <br>  <!-- end row -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="tooltip-wrap">

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="top" title="">
                            FABRIC CUTTING MACHINE - 02-NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                            TAPE CUTTING MACHINE - 01 NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                            STEAM BOILER - 01 NOS
                        </button>


                    </div><!-- end tooltip-wrap -->
                </div><!-- end col-lg-12 -->
            </div> <br> <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="tooltip-wrap">

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="top" title="">
                            BARTACK MACHINE - 01 NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                            2/4 HOLE BUTTON MACHINE - 01 NOS
                        </button>

                        <button type="button" class="theme-btn" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                            SNAP BUTTON MACHINE - 01 NOS
                        </button>



                    </div><!-- end tooltip-wrap -->
                </div><!-- end col-lg-12 -->
            </div> <br> <!-- end row -->


        </div><!-- end container -->
</section><!-- end team-area -->
<!--======================================
        EXPORT RANGE AREA END
======================================-->
<!-- ================================
       START TIMELINE AREA
================================= -->
<section class="timeline-area section--padding bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta"># Founding Values</h5>
                    <h2 class="section__title">Things we do value!</h2>
                    <div class="section-divider mx-auto"></div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="timeline-wrap">
                    <ul class="road-map">
                        <li class="happening">
                            <div class="happening-period">
                                <p class="happening__desc">TRANSPERANCY</p>
                            </div>
                            <div class="happening-detail">
                                <h3 class="happening__title">Our whole philosophy is one of transparency.</h3>
                                <p class="happening__desc">
                                    We hide nothing from our stakeholders and except our gestures are reciprocated in the same manner.
                                </p>
                            </div>
                        </li>
                        <li class="happening">
                            <div class="happening-period">
                                <p class="happening__desc">RESPECT</p>
                            </div>
                            <div class="happening-detail">
                                <h3 class="happening__title">Self-respect is the cornerstone of all virtue.</h3>
                                <p class="happening__desc">
                                    Respect your clients, Respect your colleagues and respect your subordinates for respect breeds respect.
                                </p>
                            </div>
                        </li>
                        <li class="happening">
                            <div class="happening-period">
                                <p class="happening__desc">INNOVATION</p>
                            </div>
                            <div class="happening-detail">
                                <h3 class="happening__title">The value of an idea lies in the using of it.</h3>
                                <p class="happening__desc">
                                    Every aspect of our organization is driver by innovation, there's always better way to do everything. We remain in a constant state of development.
                                </p>
                            </div>
                        </li>
                        <li class="happening">
                            <div class="happening-period">
                                <p class="happening__desc">PROACTIVE APPROACH</p>
                            </div>
                            <div class="happening-detail">
                                <h3 class="happening__title">Knowing is not enough. We must apply. Willing is not enough. We must do.</h3>
                                <p class="happening__desc">
                                    We continually seek to put forth new initiatives in order to improve upon current processes.
                                </p>
                            </div>
                        </li>
                        <li class="happening">
                            <div class="happening-period">
                                <p class="happening__desc">OWNERSHIP</p>
                            </div>
                            <div class="happening-detail">
                                <h3 class="happening__title">The quality of ownership is not what it was in yesteryear.</h3>
                                <p class="happening__desc">
                                    We hire people who take ownership of their work and treat business as if it were their own.
                                </p>
                            </div>
                        </li>
                        <li class="happening">
                            <div class="happening-period">
                                <p class="happening__desc">TEAMWORK</p>
                            </div>
                            <div class="happening-detail">
                                <h3 class="happening__title">Alone we can do so little; together we can do so much.</h3>
                                <p class="happening__desc">
                                    We are in this together, leave no man behind.
                                </p>
                            </div>
                        </li>
                        <li class="happening">
                            <div class="happening-period">
                                <p class="happening__desc">AUTONOMY</p>
                            </div>
                            <div class="happening-detail">
                                <h3 class="happening__title">Control leads to compliance; autonomy leads to engagement.</h3>
                                <p class="happening__desc">
                                    Our culture encourages employees to work with maximum autonomy.
                                </p>
                            </div>
                        </li>
                        <li class="happening">
                            <div class="happening-period">
                                <p class="happening__desc">ENVIRONMENTAL COMMITMENT</p>
                            </div>
                            <div class="happening-detail">
                                <h3 class="happening__title">Conservation is a state of harmony between men and land. </h3>
                                <p class="happening__desc">
                                    We act as role model with regards to environmental care; and sustainability efforts will always be part of our business strategy and relevant decisions.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div><!-- end timeline-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end timeline-area -->
<!-- ================================
       START TIMELINE AREA
================================= -->

<div class="section-block"></div>

@endsection
