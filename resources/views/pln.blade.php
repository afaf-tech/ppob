@extends('layouts.app')
@section('asset')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets')}}/css/select2.min.css">
    <style>
        #badge{
            background-color: rgb(243, 215, 103)
        }
    </style>
@endsection
@section('title', 'PLN')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center border-0 mt-2">
                    <h5 class="text-dark font-weight-bold display-4">Beli PLN prabayar</h5>
                </div>
                <form class="form" id="form_purchase">@csrf
                    <div class="card-body">

                    <div class="form-group row m-0">
                    <div class="col-lg-10">
                        <div class="row">

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="control-label" for="provider">No Meteran / Id Pelanggan</label>
                                    <select class="select2 form-control country" required  name="customer" id="customer">
                                        <option value="">Select ..</option>
                                        @foreach($customers as $v)
                                        <option value="{{$v->id}}">{{$v->nama}}&nbsp|&nbsp no: {{$v->no_meteran}}&nbsp|&nbsp id: {{$v->id_pelanggan}}&nbsp
                                            |&nbsp&nbsp&nbspbatas daya : {{$v->batas_daya}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-primary float-right" id="tambah" href="/customer">Tambah Customer</a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_telp">Masukkan Informasi!</label>
                                    <input type="text" id="informasi" class="form-control required" name="informasi" required>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-dark font-weight-bold display-5">Transaksi Terakhir</h5><br>
                        <div class="row">
                            @foreach ($last_transaction as $each)
                            <div class="col-sm-4">
                                <label class="option bg-secondary">
                                    <span class="option-label">
                                        <span class="option-head">
                                        <span class="option-title">
                                            {{ $each->nama }}
                                        </span>
                                        <span class="option-focus">
                                            {{$each->batas_daya}}

                                        </span>
                                        </span>
                                        <span class="option-body">
                                            Rp {{number_format($each->price, 0) }} &nbsp| id:  {{$each->id_pelanggan}}
                                        </span>
                                    </span>
                                </label>
                            </div>
                            @endforeach

                        </div>
                        <hr>
                        <h5 class="text-dark font-weight-bold display-5">Pilih Paket PLN</h5><br>
                        <div class="row">
                            @foreach ($paket_pln as $each)
                            <div class="col-lg-4">
                                <label class="option" id="badge">
                                    <span class="option-control">
                                        <span class="radio radio-bold radio-brand"></span>
                                        <input type="radio" name="paket" value="{{ $each->id }}" required/>
                                        <span></span>
                                        </span>
                                    </span>
                                    <span class="option-label">
                                        <span class="option-head">
                                        <span class="option-title">
                                            {{ $each->paket_pln }}
                                        </span>
                                        {{-- <span class="option-focus">
                                        Free
                                        </span> --}}
                                        </span>
                                        <span class="option-body">
                                            Harga : Rp {{ number_format($each->fixed_price, 0) }}
                                        </span>
                                    </span>
                                </label>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    </div>

                    <div class="card-footer">
                        <div class="container">
                            <div class="d-none d-lg-flex align-items-center">
                                <div class="topbar-item">
                                    <button type="submit" id="btn_purchase" class="btn btn-success mr-2 float-right">Beli Sekarang!</button>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#form_purchase").submit(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                Swal.fire({
                    title: "Apakah Kamu yakin Untuk Meembeli Paket PLN?",
                    text: "",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Yes, Beli Sekarang!"
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({ //line 28
                            type: 'POST',
                            url: '/pln-post',
                            dataType: 'json',
                            data: new FormData($("#form_purchase")[0]),
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                document.getElementById("form_purchase").reset();
                                if (data.code == 200) {
                                    Swal.fire(
                                        "Berhasil!",
                                        `${data.message}`,
                                        "success"
                                    ).then(function(){
                                        window.location.reload();

                                    });
                                } else {
                                    Swal.fire(
                                        "Gagal!",
                                        `${data.message}`,
                                        "error"
                                    )
                                }
                            }
                        });

                    }
                });

            });
        });
    </script>
@endsection
