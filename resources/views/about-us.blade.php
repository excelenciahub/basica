@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
        <div class="col-sm-4">
            <img class="img-responsive" src="{{ front_image('about-us.jpg') }}" alt="About Us">
            </div>
            <div class="col-sm-8">
                <h2>We are a Graphic Design company</h2>
                <h3>Specializing in Wordpress Theme Development</h3>
                <p>
                    Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
                </p>
                <p>
                    Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
                </p>						
                <h3>Wide range of services</h3>
                <p>
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.
                </p>
                <div class="clients-logo-wrapper text-center row">
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="{{ front_image('logos/logo-1.jpg') }}" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="{{ front_image('logos/logo-2.jpg') }}" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="{{ front_image('logos/logo-3.jpg') }}" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="{{ front_image('logos/logo-4.jpg') }}" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="{{ front_image('logos/logo-5.jpg') }}" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="{{ front_image('logos/logo-6.jpg') }}" alt="Client Name"></a></div>
                </div>						
            </div>
        </div>
    </div>
</div>
@endsection
