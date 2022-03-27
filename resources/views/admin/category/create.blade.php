@extends('admin.layouts.app')

@section('main-section')
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Category
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="">
                        Category Title
                    </label>
                    <input name="name" type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
