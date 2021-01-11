@extends('admin::layouts.master')
@section('title', 'Contact Us')
@section('breadcrumb', 'Contact Us')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="data-datatable table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">#No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>IP Address</th>
                            <th width="100px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($records as $key=>$val)
                            <tr>
                                <td class="text-center">{!! $key + 1 !!}</td>
                                <td>{!! $val->name !!}</td>
                                <td>{!! $val->email !!}</td>
                                <td>{!! $val->phone !!}</td>
                                <td>{!! $val->ip_address !!}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.contact-us.show', $val->id) }}" data-modal="#contact-us-edit-modal" class="edit"><i class="fas fa-eye text-info"></i></a>&nbsp;
                                    <a href="{{ route('admin.contact-us.destroy', $val->id) }}" class="delete"><i class="fas fa-trash-alt text-danger"></i></a>
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
<div class="modal fade" id="contact-us-edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Message</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
