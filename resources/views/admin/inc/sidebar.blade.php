<!-- BEGIN Left Aside -->
<div class="modal fade default-example-modal-right-lg" id="modal_show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-right modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="modal_header">Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body" id="modal_body">

            </div>
        </div>
    </div>
</div>

<aside class="page-sidebar">
    <div class="page-logo"> {{--page-logo-link--}}
        <a href="#" class="press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <img src="{{ asset('assets/web/images/logo.gif') }}" alt="SmartAdmin WebApp" aria-roledescription="logo">
            {{--<span class="page-logo-text mr-1">MH Apparel</span>--}}
            {{--<span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>--}}
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="info-card">
            <img src="{{ asset('assets/admin/img/demo/avatars/avatar-admin.png') }}" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        {{ Auth::user()->name }}
                                    </span>
                </a>
                {{--<span class="d-inline-block text-truncate text-truncate-sm">Toronto, Canada</span>--}}
            </div>
            <img src="{{ asset('assets/admin/img/card-backgrounds/cover-2-lg.png') }}" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>
        <ul id="js-nav-menu" class="nav-menu">

            <li class="nav-title">Catalogue</li>
            <li class="{{ Illuminate\Support\Facades\Route::currentRouteName() === "categories" ? "active" : "" }}">
                <a href="{{ route('categories') }}" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard">
                    <i class="fal fa-book"></i>
                    <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Categories</span>
                </a>
            </li>

            <li class="{{ Illuminate\Support\Facades\Route::currentRouteName() === "product" ? "active" : "" }}">
                <a href="{{ route('product') }}" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard">
                    <i class="fal fa-credit-card-front"></i>
                    <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Products</span>
                </a>
            </li>
        </ul>
        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->

    <!-- NAV FOOTER -->
    <div class="nav-footer shadow-top" style="display: none;">
        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
            <i class="ni ni-chevron-right"></i>
            <i class="ni ni-chevron-right"></i>
        </a>
        <ul class="list-table m-auto nav-footer-buttons">
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                    <i class="fal fa-comments"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                    <i class="fal fa-life-ring"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                    <i class="fal fa-phone"></i>
                </a>
            </li>
        </ul>
    </div> <!-- END NAV FOOTER -->
</aside>
<!-- END Left Aside -->
