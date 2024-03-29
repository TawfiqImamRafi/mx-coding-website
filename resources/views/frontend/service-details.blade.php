@extends('frontend.layouts.layout')

@section('main_content')


<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-3 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">{{ $service->title }}</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('services') }}">Services</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Service Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Full Screen Search Start -->
{{-- <div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Full Screen Search End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Service Details</h6>
                    <h2 class="mt-2">{{ $service?$service->title:'' }}</h2>
                </div>
                <div class="mb-4">{!! $service?$service->description:'' !!}</div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ $service?asset($service->image):'' }}">
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection
