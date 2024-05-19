@extends('admin.layout.app')

@section('title')
    Categories
@endsection

@section('mainTitle')
    Category
@endsection

@section('Content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Add BulkUpload File</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action="{{route('bulkuploadasset')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-6 row">
                        <label> File </label>
                        <input type="file" name="file" class="form-control" value="old{{'file'}}"/>
                    </div>
                    <div class="mb-3">
                    @if ($errors->has('file'))
                        <span style="color:red"> {{ $errors->first('file') }} </span>
                    @endif
                    </div>
                    <div class="form-group col-3 row">
                        <input type="submit" value="add" class="btn btn-success"/>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection