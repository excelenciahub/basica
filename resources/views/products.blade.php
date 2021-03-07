@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Products</h1>
            </div>
        </div>
    </div>
</div>
<!-- Our Portfolio -->	
<div class="section section-white">
    <div class="container">
        <div class="row">
            <ul class="grid cs-style-3">
                @foreach($products as $product)
                    <div class="col-md-4 col-sm-6">
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
</div>
<!-- Our Portfolio -->
@endsection
