@extends('admin.master')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
          <div class="x_title">
              <h2>Add Category</h2>
              <div class="clearfix"></div>
          </div>
          <div class="x_content">

            @if ($message = Session::get('error'))
            <div class="alert alert-warning alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button>
             <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button>
             <strong>{{ $message }}</strong>
            </div>
            @endif
         
            @if (count($errors) > 0)
             <div class="alert alert-danger">
              <ul>
              @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
              @endforeach
              </ul>
             </div>
            @endif

              <br>
              <form action="{{url('/save-category')}}" method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" >
                    @csrf
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="category_name" name="category_name" required="required" class="form-control">
                      </div>
                  </div>

                  <div class="ln_solid"></div>
                  <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" name="btn" class="btn btn-success">Submit</button>
                      </div>
                  </div>

              </form>
          </div>
      </div>
  </div>
</div>
@endsection