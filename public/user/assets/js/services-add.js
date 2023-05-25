"use strict";

// Class definition
var KTUserServicesAdd = function () {
    var submitButton;
    var cancelButton;
    var closeButton;
    var validator;
    var form;
    var modal;

    // Init form inputs
    var handleForm = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'title': {
                        validators: {
                            notEmpty: {
                                message: 'Title is required'
                            }
                        }
                    },
                    // 'services_content': {
                    //     validators: {
                    //         notEmpty: {
                    //             message: 'Content is required'
                    //         }
                    //     }
                    // },
                    'home_status': {
                        validators: {
                            notEmpty: {
                                message: 'Home status is required'
                            }
                        }
                    },
                    'status': {
                        validators: {
                            notEmpty: {
                                message: 'Status is required'
                            }
                        }
                    },

                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );


        // $(form.querySelector('[name="country"]')).on('change', function() {
        //
        //     validator.revalidateField('country');
        // });

        // Action buttons
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validator.validate().then(function (status) {




                    if (status == 'Valid') {
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable submit button whilst loading
                        submitButton.disabled = true;

                        setTimeout(function() {
                            submitButton.removeAttribute('data-kt-indicator');

                            // Hide modal
                            modal.hide();

                            // Enable submit button after loading
                            submitButton.disabled = false;

                            // Redirect to customers list page
                           // window.location = form.getAttribute("data-kt-redirect-blog-category");
                            form.submit();




                            // Swal.fire({
                            //     text: "Form has been successfully submitted!",
                            //     icon: "success",
                            //     buttonsStyling: false,
                            //     confirmButtonText: "Ok, got it!",
                            //     customClass: {
                            //         confirmButton: "btn btn-primary"
                            //     }
                            // }).then(function (result) {
                            //     if (result.isConfirmed) {
                            //         // Hide modal
                            //         modal.hide();
                            //
                            //         // Enable submit button after loading
                            //         submitButton.disabled = false;
                            //
                            //         // Redirect to customers list page
                            //         window.location = form.getAttribute("data-kt-redirect");
                            //     }
                            // });
                        }, 2000);
                    } else {
                        // Swal.fire({
                        //     text: "Sorry, looks like there are some errors detected, please try again.",
                        //     icon: "error",
                        //     buttonsStyling: false,
                        //     confirmButtonText: "Ok, got it!",
                        //     customClass: {
                        //         confirmButton: "btn btn-primary"
                        //     }
                        // });
                    }
                });

        });

        cancelButton.addEventListener('click', function (e) {

            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        closeButton.addEventListener('click', function(e){

            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        })
    }

    return {
        // Public functions
        init: function () {
            // Elements
            modal = new bootstrap.Modal(document.querySelector('#kt_modal_add_services'));

            form = document.querySelector('#kt_modal_add_services_form');
            submitButton = form.querySelector('#kt_modal_add_services_submit');
            cancelButton = form.querySelector('#kt_modal_add_services_cancel');
            closeButton = form.querySelector('#kt_modal_add_services_close');

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUserServicesAdd.init();
});
