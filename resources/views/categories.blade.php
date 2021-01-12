@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Categories') }}</div>
                <div class="card-body">
                    @foreach($categories as $category)
                        <p>{{ $category->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
