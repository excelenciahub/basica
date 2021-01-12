@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>
                <div class="card-body">
                    <p>{{ $product->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
