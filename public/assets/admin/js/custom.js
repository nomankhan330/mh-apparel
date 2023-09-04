function toastrAll(status, message) {

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 100,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    if (status === "success") {
        toastr.success(message);
    } else if (status === "warning") {
        toastr.warning(message);
    } else if (status === "info") {
        toastr.info(message);
    } else if (status === "error") {
        toastr.error(message);
    }
}

$(document).ajaxError(function myErrorHandler(
    event,
    xhr,
    ajaxOptions,
    thrownError
) {

    if (xhr.status == 401) {
        alert("Your Session Expire Please Login Again");
        window.location.reload();
    }
    if (xhr.status == 422) {
        // when status code is 422, it's a validation issue
        for (var ii=0; ii < event.target.forms.length; ii++)
        {
            event.target.forms[ii].id != '' ? $("#" + event.target.forms[ii].id)
                .find("span.myClass")
                .remove() : '';

        }


        $.each(xhr.responseJSON.errors, function (i, error) {
            var el = $(document).find('[name="' + i + '"]');
            if (el.length === 0) {
                var el = $(document).find('[name="' + i + '[]"]');
            }
            if (el[0].type == "select-multiple") {
                spanerror = $(
                    '<span class="myClass" style="color: red;">' +
                    error[0] +
                    "</span>"
                );
                el[0].parentElement.children[2].after(spanerror[0]);
            } else if (el[0].type == "select-one") {
                spanerror = $(
                    '<span class="myClass" style="color: red;">' +
                    error[0] +
                    "</span>"
                );
                el[0].parentElement.children[1].after(spanerror[0]);
            } else {
                el.after(
                    $(
                        '<span class="myClass" style="color: red;">' +
                        error[0] +
                        "</span>"
                    )
                );
            }
        });
    } else if (xhr.status == 500) {
        alert("Something went wrong call the admin");
    }
});


$('.js-thead-colors a').on('click', function () {
    var theadColor = $(this).attr("data-bg");
    console.log(theadColor);
    $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
});

$('.js-tbody-colors a').on('click', function () {
    var theadColor = $(this).attr("data-bg");
    console.log(theadColor);
    $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
});
