@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Categories</h1>
            </div>
        </div>
    </div>
</div>
<div class="section section-white">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>Our Recent Products</h1>
            </div>
            <ul class="grid cs-style-3">
                @foreach($categories as $category)
                    <div class="col-md-4 col-sm-6">
                        <figure>
                            <img src="{{ $category->image_url }}" alt="img04">
                            <figcaption>
                                <h3>{{ $category->name }}</h3>
                                <a href="{{ route('category', $category->slug) }}">Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
