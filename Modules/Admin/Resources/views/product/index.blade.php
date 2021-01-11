@extends('admin::layouts.master')
@section('title', 'Product')
@section('breadcrumb', 'Product')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="header-title">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#product-modal"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
                <table class="data-datatable table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">#No</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th width="100px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($records as $key=>$val)
                            <tr>
                                <td class="text-center">{!! $key + 1 !!}</td>
                                <td>{!! $val->category->name !!}</td>
                                <td>{!! $val->name !!}</td>
                                <td>{!! $val->title !!}</td>
                                <td><span class="status-{{ $val->status }}">{!! $val->status !!}</span></td>
                                <td class="text-center">
                                    <a href="{{ route('admin.product.edit', $val->id) }}" data-modal="#product-edit-modal" class="edit"><i class="fas fa-edit text-info"></i></a>&nbsp;
                                    <a href="{{ route('admin.product.destroy', $val->id) }}" class="delete"><i class="fas fa-trash-alt text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
<!-- Modal -->
<div class="modal fade" id="product-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'admin.product.store', 'files'=>true, 'novalidate' => 'novalidate', 'class'=>'validation']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                {{ Form::select('status', status(), old('status'), ['class'=>'form-control', 'required'=>true]) }}
                                <div class="invalid-feedback">
                                    Please provide valid status.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category <span class="text-danger">*</span></label>
                                {{ Form::select('category_id', [''=>'']+$categories, old('category_id'), ['class'=>'form-control', 'id'=>'category_id', 'required'=>true]) }}
                                <div class="invalid-feedback">
                                    Please provide valid category.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                {{ Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter name', 'id'=>'name', 'required'=>true]) }}
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
                                <label for="image">Image <span class="text-danger">*</span></label>
                                {{ Form::file('image', ['data-plugins'=>'dropify']) }}
                                <div class="invalid-feedback">
                                    Please provide valid image.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="detail">Detail <span class="text-danger">*</span></label>
                                {{ Form::textarea('detail', old('detail'), ['class'=>'form-control detail', 'placeholder'=>'Enter detail', 'required'=>true]) }}
                                <div class="invalid-feedback">
                                    Please provide valid status.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>SEO</label>
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        {{ Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter title', 'id'=>'title', 'required'=>true]) }}
                        <div class="invalid-feedback">
                            Please provide valid title.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="keyword">Keyword</label>
                                {{ Form::textarea('keyword', old('keyword'), ['class'=>'form-control', 'placeholder'=>'Enter keyword', 'id'=>'keyword', 'rows'=>'3']) }}
                                <div class="invalid-feedback">
                                    Please provide valid keyword.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                {{ Form::textarea('description', old('description'), ['class'=>'form-control', 'placeholder'=>'Enter description', 'id'=>'description', 'rows'=>'3']) }}
                                <div class="invalid-feedback">
                                    Please provide valid description.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light">
                            <span class="btn-label"><i class="mdi mdi-check-all"></i></span> Save
                        </button>
                        <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">
                            <span class="btn-label"><i class="mdi mdi-close-circle-outline"></i></span> Cancel
                        </button>
                    </div>
                {{ Form::close() }}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->
<div class="modal fade" id="product-edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('styles')
<link href="{{ admin_plugin('dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ admin_plugin('summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('scripts')
<script src="{{ admin_plugin('dropzone/dropzone.min.js') }}"></script>
<script src="{{ admin_plugin('dropify/dropify.min.js') }}"></script>
<script src="{{ admin_js('form-fileuploads.init.js') }}"></script>
<script src="{{ admin_plugin('summernote/summernote.min.js') }}"></script>
<script type="text/javascript">
    function summernote_init(){
        $('.detail').summernote({
            height: 250,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    }
    $(document).ready(function(){
        summernote_init();
        $( "#product-edit-modal" ).on('shown.bs.modal', function(){
            summernote_init();
            $('.dropify').dropify();
        });
    });
</script>
@endsection
