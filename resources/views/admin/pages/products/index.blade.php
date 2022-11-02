@extends('layouts.admin.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="javascript:void(0)" style="float:right;" class="btn btn-success my-2 my-sm-0" id="btn-new"><span class="fa fa-plus"></span></a>
        <h6 class="m-0 font-weight-bold text-primary">Meals List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="table-main"></tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.pages.products.modal')
@endsection

@section('javascript')
    <script type="module" src="{{ asset('js/products/index.js') }}"></script>
@endsection