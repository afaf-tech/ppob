@extends('layouts.app')
@section('asset')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets')}}/vendors/css/forms/select/select2.min.css">
@endsection
@section('title', 'Customer')
@section('content')
<div class="row" id="show_add" style="display: none;">
    <div class="col-xl-12">
        <section class="multiple-validation">
            <div class="card mb-3">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal"  id="form_add">@csrf
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Customer</label>
                                        <input type="text" class="form-control required" name="name"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No Meteran</label>
                                        <input type="number" class="form-control required" name="meteran"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ID Pelanggan</label>
                                        <input type="number" class="form-control required" name="id_pelanggan"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Batas Daya</label>
                                        <input type="text" class="form-control required" name="daya"  required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    <button type="button" class="btn btn-danger mr-2 float-right" id="batalkan">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <!--begin::List Widget 9-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-2">
                <h5 class="text-dark font-weight-bold ml-3">List Customer</h5>
                <a class="btn btn-primary font-weight-bolder mr-3" id="tambah">Add Customer</a>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4 class="card-title">List Admin</h4>
                                </div> -->
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>No Meteran</th>
                                                        <th>ID Pelanggan</th>
                                                        <th>Batas Daya</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--end: Card Body-->
        </div>
    </div>
</div>
@endsection
@section('js')
    <!-- scipt js -->
    <script src="{{URL::asset('assets')}}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{URL::asset('assets')}}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{URL::asset('assets')}}/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{URL::asset('assets')}}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{URL::asset('assets')}}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="{{URL::asset('assets')}}/js/scripts/datatables/datatable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{URL::asset('assets')}}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{URL::asset('assets')}}/js/scripts/forms/select/form-select2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script type="text/javascript">

        $(function() {
            $(".select2-container--default").css('width','100%');
            var xin_table = $('#myTable').DataTable({
            "bDestroy": true,
            "ajax": {
                url : "/data_customer",
                type : 'GET'
            }
            });

        });

        $("#form_add").validate({
            submitHandler: function(form) {
                $.ajax({ //line 28
                    type: 'POST',
                    url: '/post_customer',
                    dataType: 'json',
                    data: new FormData($("#form_add")[0]),
                    processData: false,
                    contentType: false,
                    success: function(data) {

                        if (data.code == 200) {
                            document.getElementById("form_add").reset();
                            $("#hide_add").css('display', '');
                            $("#show_add").css('display', 'none');
                            $("#message").remove();
                            show_toast(data.message, 1);
                            var xin_table = $('#myTable').dataTable({
                                "bDestroy": true,
                                "ajax": {
                                    url: "/data_customer",
                                    type: 'GET'
                                }
                            });
                        } else {
                            alert("maaf ada yang salah!!!");
                        }
                    }
                });
            }
        });

        $('#tambah').on("click", function() {
            $("#hide_add").css('display','none');
            $("#show_add").css('display','');
            $("#batalkan").css('display','');
        });
        $('#batalkan').on("click", function() {
            $("#hide_add").css('display','');
            $("#show_add").css('display','none');
            $("#batalkan").css('display','none');
        });


        $(document).off('click', '#kirim_edit').on('click', '#kirim_edit', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({ //line 28
                type: 'POST',
                url: '/update/category_product',
                dataType: 'json',
                data: new FormData($("#form_edit")[0]),
                processData: false,
                contentType: false,
                success: function(data) {
                    //$("#modal_loading").modal('hide');
                    //$(".modal-backdrop").remove();
                    $(".edit-modal-data").modal('hide');
                    if (data.code == 200) {
                        document.getElementById("form_edit").reset();
                        $("#message").remove();
                        show_toast(data.message, 1);
                        $("#titel_head").remove();
                        $("#head_modul").append('<span id="titel_head">Add Banner</span>');
                        $("#hide_add").css('display', '');
                        $("#show_edit").css('display', 'none');
                        //alert("okey");
                        var xin_table = $('#myTable').DataTable({
                            "bDestroy": true,
                            "ajax": {
                                url: "/data_customer",
                                type: 'GET'
                            }
                        });
                    }
                }
            });
        });
         // btn edit clicked
         $(document).off('click', '.edit_data').on('click', '.edit_data', function() {
            var id = $(this).attr('id');

            $("#detail_edit").remove();
            //alert("sini kan")
            $("#hide_add").css('display', 'none');
            $("#show_add").css('display', 'none');
            $("#titel_head").remove();
            $("#head_modul").append('<span id="titel_head">Edit Data Banner</span>');
            $.ajax({
                url: '/detail/category_product/' + id,
                type: "GET",
                success: function(response) {
                    // console.log(response);
                    $(window).scrollTop(0);

                    if (response) {
                        $("#show_edit").html(response);
                        $("#show_edit").css('display', '');
                    }
                    $('.select2').select2();
                    $(".select2-container--default").css('width', '100%');
                }
            });
        });


        // batalkan edit
        $(document).off('click','#batalkan3').on('click','#batalkan3', function (){

            $("#titel_head").remove();
            $("#head_modul").append('<span id="titel_head">Tambah Data Banner</span>');
            $("#hide_add").css('display','');
            $("#show_edit").css('display','none');
        });
    </script>
    <!-- END: Page JS-->
@endsection
