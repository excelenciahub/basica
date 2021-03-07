@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $product->name }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <!-- Product Image & Available Colors -->
            <div class="col-sm-6">
                <div class="product-image-large">
                    <img src="{{ $product->image_url }}" alt="Item Name">
                </div>
                <div class="colors">
                    <span class="color-white"></span>
                    <span class="color-black"></span>
                    <span class="color-blue"></span>
                    <span class="color-orange"></span>
                    <span class="color-green"></span>
                </div>
            </div>
            <!-- End Product Image & Available Colors -->
            <!-- Product Summary & Options -->
            <div class="col-sm-6 product-details">
                <h2>{{ $product->name }}</h2>
                <h3>Quick Overview</h3>
                {!! $product->detail !!}
            </div>
            <!-- End Product Summary & Options -->
        </div>
    </div>
</div>
<hr>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
            <h1>Similar Products</h1>
        </div>				
        <ul class="grid cs-style-2">
            @foreach($related_products as $product)
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="{{ $product->image_url }}" alt="img04">
                        <figcaption>
                            <h3>{{ $product->name }}</h3>
                            <a href="{{ route('product', $product->slug) }}">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        </ul>
    </div>
</div>
@endsection
