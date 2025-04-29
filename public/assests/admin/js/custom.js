"use strict";

//Delete Record From DB
$(".delete-record")
    .off("click")
    .on("click", function (event) {
        event.stopPropagation();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success",
            cancelButtonClass: "btn btn-danger m-l-10",
            buttonsStyling: false,
        }).then(
            function () {
                let btnDelete = event.target;
                var delete_action = $(btnDelete).data("delete-action");
                let _token = $('meta[name="csrf-token"]').attr("content");
                $.ajax({
                    url: delete_action,
                    method: "DELETE",
                    data: {
                        _token: _token,
                    },
                    success: function (response) {
                        // console.log(response);
                        iziToast.success({
                            title: "Data Deleted Successfully!",
                            position: "topRight",
                        });
                        location.reload();
                    },
                    error: function (error) {
                        console.log(error);
                        // alert(error);
                    },
                });
            },
            function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === "cancel") {
                    swal(
                        "Cancelled",
                        "Your imaginary file is safe :)",
                        "error"
                    );
                }
            }
        );
    });

function validate(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === "paste") {
        key = event.clipboardData.getData("text/plain");
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}

function allowOnlyNumericValue(input) {
    input.value = input.value
        .replace(/[^0-9]/g, "")
        .replace(/(\..*?)\..*/g, "$1");
}

function validatePrice(el) {
    return (el.value = el.value
        .replace(/[^0-9.]/g, "")
        .replace(/(\..*?)\..*/g, "$1"));
}
