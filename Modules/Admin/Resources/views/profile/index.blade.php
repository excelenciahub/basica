@extends('admin::layouts.master')
@section('title', 'Profile')
@section('breadcrumb', 'Profile')
@section('content')
<div class="row">
    <div class="col-12">
        {{ Form::model($admin, ['route'=>['admin.profile.update', $admin->id], 'method' => 'PATCH', 'novalidate' => 'novalidate', 'class'=>'validation']) }}
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                {{ Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter first name', 'id'=>'name', 'required'=>true]) }}
                                <div class="invalid-feedback">
                                    Please provide valid name.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                {{ Form::email('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter email', 'id'=>'email', 'required'=>true]) }}
                                <div class="invalid-feedback">
                                    Please provide valid email.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        {{ Form::close() }}
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection
