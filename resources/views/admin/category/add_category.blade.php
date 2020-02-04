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
              <br>
              <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="" method="post">

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
                          <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                  </div>

              </form>
          </div>
      </div>
  </div>
</div>
@endsection