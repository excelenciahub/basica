@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>
                <div class="card-body">
                    @foreach($products as $product)
                        <p>{{ $product->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
