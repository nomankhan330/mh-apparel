{{--<script>
    (function(i, s, o, g, r, a, m)
    {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-141754477-1', 'auto');
    ga('send', 'pageview');

</script>--}}

<!-- base vendor bundle:
 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations
            + pace.js (recommended)
            + jquery.js (core)
            + jquery-ui-cust.js (core)
            + popper.js (core)
            + bootstrap.js (core)
            + slimscroll.js (extension)
            + app.navigation.js (core)
            + ba-throttle-debounce.js (core)
            + waves.js (extension)
            + smartpanels.js (extension)
            + src/../jquery-snippets.js (core)
-->


<script src="{{ asset('assets/admin/js/app.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/notifications/toastr/toastr.js') }}"></script>
<script src="{{ asset('assets/admin/js/notifications/sweetalert2/sweetalert2.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/formplugins/select2/select2.bundle.js') }}"></script>

<script src="{{ asset('assets/admin/js/custom.js') }}"></script>
