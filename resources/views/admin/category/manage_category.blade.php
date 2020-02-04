@extends('admin.master')

@section('content')
<div class="x_content">
  <div class="row">
      <div class="col-sm-12">
          <div class="card-box table-responsive">
             
              <div class="x_title">
                  <h2 >Manage Category</h2>
                  <div class="clearfix"></div>
                </div>
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                          <th>SL NO</th>
                          <th>Category Name</th>
                          <th>Action</th>
                      </tr>
                  </thead>


                  <tbody>

                      <tr>
                          <td>01</td>
                          <td>NEW</td>
                          <td>
                              <a href="#"> <i class="fa fa-edit btn btn-warning"></i></a>
                              <a href="#" onclick="isconfirm();"><i class="fa fa-trash btn btn-danger"></i></a>
                          </td>
                      </tr>

                      <tr>
                        <td>02</td>
                        <td>TOP</td>
                        <td>
                            <a href="#"> <i class="fa fa-edit btn btn-warning"></i></a>
                            <a href="#" onclick="isconfirm();"><i class="fa fa-trash btn btn-danger"></i></a>
                        </td>
                    </tr>

                    <tr>
                      <td>03</td>
                      <td>FREE</td>
                      <td>
                          <a href="#"> <i class="fa fa-edit btn btn-warning"></i></a>
                          <a href="#" onclick="isconfirm();"><i class="fa fa-trash btn btn-danger"></i></a>
                      </td>
                  </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<script>
function isconfirm(){

if(!confirm('Are you sure ?')){
event.preventDefault();
return;
}
return true;
}
</script>
@endsection