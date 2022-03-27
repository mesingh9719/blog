@extends('admin.layouts.app')

@section('main-section')
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Titles
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="">
                        Title
                    </label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">
                        Sub Title
                    </label>
                    <input name="sub_title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Write Post Body Here
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <div class="form-group">
                <textarea name="body" id="summernote">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                  </textarea>
               </div>
              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Publish</label>
              </div>
            </div>
        </div>

        <div class="form-group text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
