@extends('layouts.app')
@section('asset')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets')}}/css/select2.min.css">
    <style>
        .btn-slider{
            color: rgb(238, 230, 198);
            background-color: rgb(233, 231, 223);
        }
    </style>
@endsection
@section('title', 'Dashboard')
@section('content')
<div class="row">

    <div class="col-md-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('images')}}/slider1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('images')}}/slider2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('images')}}/slider3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev btn-slider" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next btn-slider" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>




@endsection


@section('js')

@endsection
