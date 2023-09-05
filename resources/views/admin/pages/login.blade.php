<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Login - MH Apparel
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('assets/admin/css/vendors.bundle.css') }}">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('assets/admin/css/app.bundle.css') }}">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('assets/admin/css/skins/skin-master.css') }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/admin/img/favicon/favicon-32x32.png') }}">
    <link rel="mask-icon" href="{{ asset('assets/admin/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="{{ asset('assets/admin/css/fa-brands.css') }}">
</head>

<!-- BEGIN Body -->

<body>
<!-- DOC: script to save and load page settings -->
<script>
    /**
     *	This script should be placed right after the body tag for fast execution
     *	Note: the script is written in pure javascript and does not depend on thirdparty library
     **/
    'use strict';

    var classHolder = document.getElementsByTagName("BODY")[0],
        /**
         * Load from localstorage
         **/
        themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {},
        themeURL = themeSettings.themeURL || '',
        themeOptions = themeSettings.themeOptions || '';
    /**
     * Load theme options
     **/
    if (themeSettings.themeOptions)
    {
        classHolder.className = themeSettings.themeOptions;
        console.log("%c✔ Theme settings loaded", "color: #148f32");
    }
    else
    {
        console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
    }
    if (themeSettings.themeURL && !document.getElementById('mytheme'))
    {
        var cssfile = document.createElement('link');
        cssfile.id = 'mytheme';
        cssfile.rel = 'stylesheet';
        cssfile.href = themeURL;
        document.getElementsByTagName('head')[0].appendChild(cssfile);

    }
    else if (themeSettings.themeURL && document.getElementById('mytheme'))
    {
        document.getElementById('mytheme').href = themeSettings.themeURL;
    }
    /**
     * Save to localstorage
     **/
    var saveSettings = function()
    {
        themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
        {
            return /^(nav|header|footer|mod|display)-/i.test(item);
        }).join(' ');
        if (document.getElementById('mytheme'))
        {
            themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
        };
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
    /**
     * Reset settings
     **/
    var resetSettings = function()
    {
        localStorage.setItem("themeSettings", "");
    }

</script>

<div class="page-wrapper auth">
    <div class="page-inner bg-brand-gradient">
        <div class="page-content-wrapper bg-transparent m-0">
            <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                <div class="d-flex align-items-center container p-0">
                    <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                        <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">

                            <span class="page-logo-text mr-1">MH Apparel Admin Panel</span>
                        </a>
                    </div>
                    <a href="#" class="btn-link text-white ml-auto" style="display: none;">
                        Create Account
                    </a>
                </div>
            </div>
            <div class="flex-1" style="background: url({{ asset('assets/admin/img/svg/pattern-1.svg') }}) no-repeat center bottom fixed; background-size: cover;">
                <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                    <div class="row">

                        <div class="col col-md-6 col-lg-7 hidden-sm-down" style="display: none;">
                            <h2 class="fs-xxl fw-500 mt-4 text-white">
                                The simplest UI toolkit for developers &amp; programmers
                                <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                                    Presenting you with the next level of innovative UX design and engineering. The most modular toolkit available with over 600+ layout permutations. Experience the simplicity of SmartAdmin, everywhere you go!
                                </small>
                            </h2>
                            <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                            <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                                <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                                    Find us on social media
                                </div>
                                <div class="d-flex flex-row opacity-70">
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-google-plus-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-5 col-lg-4 hidden-sm-down">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
                            <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                Secure login
                            </h1>

                            <img src="{{ asset('assets/web/images/logo-high.png') }}" alt="SmartAdmin WebApp" aria-roledescription="logo" style="width: 100%">
                            <div class="card p-4 rounded-plus bg-faded">

                                <form id="frmlogin" novalidate="" action="{{ route('login.post') }}" method="POST">

                                    @csrf
                                    <div id="errors-list"></div>

                                    <div class="form-group">
                                        <label class="form-label" for="email">Username</label>
                                        <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="your id or email" value="" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="password" value="" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                            <label class="custom-control-label" for="remember"> Remember me for the next 30 days</label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 pl-lg-1 my-2">
                                            <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">LOGIN</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                        @php echo date('Y') @endphp © <a href='#' class='text-white opacity-40 fw-500' title='MH Apparel' target='_blank'>MH Apparel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN Color profile -->


<script src="{{ asset('assets/admin/js/vendors.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/app.bundle.js') }}"></script>

<script type="text/javascript">

    $(function() {

        $(document).on("submit", "#frmlogin", function() {
            let e = this;

            $(this).find("[type='submit']").html("Processing...");

            $.ajax({
                url: $(this).attr('action'),
                data: $(this).serialize(),
                type: "POST",
                dataType: 'json',
                success: function (data) {

                    //alert(data);
                    $(e).find("[type='submit']").html("Login");

                    if (data.status) {
                        window.location = data.redirect;
                    }else{
                        $(".alert").remove();
                        $.each(data.errors, function (key, val) {
                            $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
                        });
                    }

                }
            });

            return false;
        });

    });

</script>

</body>
<!-- END Body -->
</html>

