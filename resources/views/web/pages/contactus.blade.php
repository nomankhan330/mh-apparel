@extends('web.layouts.master')


@section('content')

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="section__meta">#get in touch</p>
                    <h2 class="section__title">Need Any Help? Contact us</h2>
                </div><!-- end section-heading -->
                <div class="contact-form-action contact-form-item">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-user form-icon"></i>
                                    <input class="form-control" type="text" name="text" placeholder="Name">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-envelope-o form-icon"></i>
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-phone form-icon"></i>
                                    <input class="form-control" type="text" name="text" placeholder="Number">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="la la-pencil-square form-icon"></i>
                                    <input class="form-control" type="text" name="text" placeholder="Subject">
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group message-group">
                                    <i class="la la-pencil form-icon"></i>
                                    <textarea class="form-control message-control" placeholder="Message"></textarea>
                                </div><!-- end form-group -->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <button class="theme-btn" type="button">send message <span class="la la-caret-right"></span></button>
                                </div><!-- end form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end col-lg-7 -->
            <div class="col-lg-4 ml-auto">
                <div class="contact-img contact-tilt">
                    <img src="{{ asset('assets/web/images/contact-img.png') }}" alt="">
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
        <div class="row contact-address">
            <div class="col-lg-3 col-sm-6">
                <div class="contact-card">
                    <h5 class="contact__subheding">Location</h5>
                    <p class="contact__text">
                        <span><i class="la la-map-marker"></i> D-227/B, S.I.T.E, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Karachi, Pakistan</span>
                    </p>
                </div>
            </div><!-- end col-lg-4 col-sm-6 -->
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <h5 class="contact__subheding">Call</h5>
                    <p class="contact__text">
                        <span><i class="la la-phone"></i> +92 321-2703596,</span>
                        <span><i class="la la-phone"></i> +92 300-0867172 </span>
                        <span><i class="la la-phone"></i> +92 21-32588880 </span>

                    </p>
                </div>
            </div><!-- end col-lg-4 col-sm-6 -->
            <div class="col-lg-5 col-sm-6">
                <div class="contact-card">
                    <h5 class="contact__subheding">Email</h5>
                    <p class="contact__text">
                        <span><i class="la la-envelope-o"></i> <a href="mailto:info123@prizon.com">info@mh-apparel.com</a></span>
                        <span><i class="la la-envelope-o"></i> <a href="mailto:info123@prizon.com">support@mh-apparel.com</a></span>
                        <span><i class="la la-envelope-o"></i> <a href="mailto:mohsin.mhapparel@gmail.com">mohsin.mhapparel@gmail.com</a></span>
                    </p>
                </div>
            </div><!-- end col-lg-4 col-sm-6 -->

        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
       END CONTACT AREA
================================= -->

@endsection
