{!! Form::model($record, ['route' => ['admin.category.update', $record->id], 'method' => 'PATCH', 'novalidate' => 'novalidate', 'class'=>'validation']) !!}
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
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Image <span class="text-danger">*</span></label>
                {{ Form::file('image', ['class'=>'dropify', 'data-default-file'=>$record->image_url]) }}
                <div class="invalid-feedback">
                    Please provide valid image.
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