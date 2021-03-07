@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Us</h1>
            </div>
        </div>
        
    </div>
</div>
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
</div>
<div class="section section-map">
    <div class="col-sm-12" style="padding:0;">
        <!-- Map -->
        <div id="contact-us-map">
            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
            <br />
            <small>
                <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
            </small>
            </iframe>
        </div>
        <!-- End Map -->
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Get in Touch with Us</h3>
                </hr>
                <!-- Contact Info -->
                <p class="contact-us-details">
                    <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
                    <b>Phone:</b> +44 123 654321<br/>
                    <b>Fax:</b> +44 123 654321<br/>
                    <b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                </p>
                <!-- End Contact Info -->
            </div>
            <div class="col-sm-6">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        {{ Form::open(['route' => 'contact-us.store', 'novalidate' => 'novalidate', 'class'=>'validation']) }}
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name <span class="text-danger">*</span></label>
                                                {{ Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter name', 'id'=>'name', 'required'=>true]) }}
                                                @error('name')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                                {{ Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Enter phone', 'id'=>'phone', 'required'=>true]) }}
                                                @error('phone')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email <span class="text-danger">*</span></label>
                                                {{ Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter email', 'id'=>'email', 'required'=>true]) }}
                                                @error('email')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="message">Message <span class="text-danger">*</span></label>
                                                {{ Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter message', 'id'=>'message', 'required'=>true]) }}
                                                @error('message')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
