/*=========================================================================================
    File Name: wizard-steps.js
    Description: wizard steps page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Wizard tabs with numbers setup
$(".number-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Wizard tabs with icons setup
$(".icons-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Validate steps wizard

// Show form
//submit form wizard
    var form = $(".steps-validation").show();

    $(".steps-validation").steps({
        headerTag: "h6",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: 'Submit'
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }

            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            alert("Submitted! mas");
            var id_bank = $("#id_bank_soal").val();
            alert(id_bank);
            if (typeof id_bank === "undefined") {
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
                $.ajax({ //line 28
                    type: 'POST',
                    url : '/postbank_soal',
                    dataType: 'json',
                    data: new FormData($("#form_bank_soal")[0]),
                    processData: false,
                    contentType: false,
                    success: function(data)
                    {
                        
                        if (data.code == 200) {
                        document.getElementById("form_bank_soal").reset();
                        $("#hide_add").css('display','');
                        $("#show_add").css('display','none');
                            $("#message").remove();
                            $(".toast-body").append('<label style="color:white;font-size:12px;font-weight:bold;" id="message">'+data.message+'</label>')
                            $('.toast').toast('show');
                            var xin_table = $('#myTable').dataTable({
                            "bDestroy": true,
                            "ajax": {
                                url : "/data_bank_soal",
                                type : 'GET'
                            }
                            });
                        } else {
                            alert("maaf ada yang salah!!!");
                        }
                    }
                });
            } else {
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
                $.ajax({ //line 28
                    type: 'POST',
                    url : '/update/bank_soal',
                    dataType: 'json',
                    data: new FormData($("#form_edit_bank_soal")[0]),
                    processData: false,
                    contentType: false,
                    success: function(data)
                    {
                        
                        if (data.code == 200) {
                        $(".select2-container--default").css('width','100%');
                            $("#message").remove();
                            $(".toast-body").append('<label style="color:white;font-size:12px;font-weight:bold;" id="message">'+data.message+'</label>')
                            $('.toast').toast('show');
                            location.assign('/list_bank_soal');
                        } else {
                            alert("maaf ada yang salah!!!");
                        }
                    }
                });
            }
        }
    });
   

// Initialize validation
$(".steps-validation").validate({
    ignore: 'input[type=hidden]', // ignore hidden fields
    errorClass: 'danger',
    successClass: 'success',
    highlight: function (element, errorClass) {
        $(element).removeClass(errorClass);
    },
    unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass);
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    rules: {
        email: {
            email: true
        }
    }
});
