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
                            <h2 class="breadcrumb__title">About Us</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-active"><a href="/">Home</a></li>
                            <li>About Us</li>
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
            START ABOUT AREA
     ======================================-->
    <section class="about-area about-area3 section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-heading section-heading about-right">
                            <h5 class="section__meta rounded-radius">about us</h5>
                            <h2 class="section__title">MH APPAREL</h2>
                        </div><!-- end section-heading -->
                        <div class="section-description">
                            <p class="section__desc">
                                is one of the leading and fast growing fabric & apparel manufacturers from Pakistan We are engaged in manufacturing of high—end fashion of Knitted garments. It not only made us specialized in the manufacturing of all kinds of knitted fabrics & garments but also keeping us closer to our esteemed customers, which is self—expression of our continuous efforts and driving us wade through better quality as well as quantity.Of course it's a great honor and success for all of us, but the true reason behind the accomplishment is our 200 very skilled and dedicated work forces without which this would not be possible to achieve. For which we are remain thankful to you all.
                            </p>
                        </div>

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

            <br> <div class="section-block"></div> <br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="about-item">
                        <div class="about-heading section-heading about-right">
                            <h2 class="section__title">MARKET & QUALITY STRATEGY</h2>
                        </div><!-- end section-heading -->
                        <div class="section-description">
                            <p class="section__desc">
                                The company has adopted the strategy of on time delivery and competitive price for the maximum satisfaction of it's customers. Our quality policy is fully implemented at all level of the organization.We ensure that the product manufactured according to the customer's requirement and expectation within the time limit period given by the buyers. </p> <br>

                            <p class="section__desc">
                                We pledge to satisfy our client / buyer by providing quality product through a dynamic team of Innovated and qualified people. We believe that you will be looking for a reliable source we can meet your requirement and will be glad if you make the fight choice by giving us an opportunity to render our services to you, An experience and highly professional team of expert is carrying out the merchandising / quality and ensure the latest trend and techniques available in the market.</p> <br>

                            <p class="section__desc">
                                We are here to serve you and fulfill of your requirements, all efforts will be made to provide you a prompt response. We are keen interest in doing business with you and believe in long lasting business through mutual understanding with better quality product at competitive price </p>
                        </div>

                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->

        </div><!-- end container -->
    </section><!-- end about-area -->
    <!--======================================
            END ABOUT AREA
    ======================================-->

    <div class="section-block"></div>

    <!-- ================================
           VALUES AREA
    ================================= -->
    <section class="timeline-area section--padding bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">#Founding Values</h5>
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
           VALUES AREA
    ================================= -->



    <div class="section-block"></div>

@endsection
