@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Contact Us') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                {{ Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter name', 'id'=>'name', 'required'=>true]) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                {{ Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Enter phone', 'id'=>'phone', 'required'=>true]) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                {{ Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter email', 'id'=>'email', 'required'=>true]) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Message <span class="text-danger">*</span></label>
                                {{ Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter message', 'id'=>'message', 'required'=>true]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
