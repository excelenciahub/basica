@extends('layouts.app')

@section('content')
<div>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{ front_image('slides/1.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Welcome to BalGopal!</h2>
                                    <p class="animation animated-item-2">We are one of the leading manufacture and treaders in seeds, oil, and Powder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url({{ front_image('slides/2.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Production of nucleus and breeder seeds of improved variety</h2>
                                    <p class="animation animated-item-2"></p>
                                    <br>
                                    <!-- <a class="btn btn-md animation animated-item-3" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url({{ front_image('slides/3.png') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Food processing grow natural</h2>
                                    <p class="animation animated-item-2"></p>
                                    <br>
                                    <!-- <a class="btn btn-md animation animated-item-3" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->
    <!-- Call to Action Bar -->
    <div class="section section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="calltoaction-wrapper">
                        <h3>Why BalGopal?</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action Bar -->
    <!-- Services -->
    <div class="section section-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <i class="icon-home"></i>
                        <h3>Superior Quality</h3>
                        <p>High standard of production technique with fully automated plant and high quality of product delivered customer.</p>
                        <!-- <a href="#" class="btn">Read more</a> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <i class="icon-briefcase"></i>
                        <h3>High Nutritional Value</h3>
                        <p>Foods preserve far more natural vitamins and minerals.</p>
                        <!-- <a href="#" class="btn">Read more</a> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <i class="icon-calendar"></i>
                        <h3>Preserves the Environment</h3>
                        <p>Food growing process naturally and environment friendly and reduced air pollution.</p>
                        <!-- <a href="#" class="btn">Read more</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <hr>
    <!-- Our Portfolio -->	
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
    <!-- Our Portfolio -->
</div>
@endsection
