@extends('admin.master')

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage Category</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>SL NO</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                 
                  <tr>
                    <td>1</td>
                    <td>Lifestyle</td>
                    <td>
                        <a href="#"> <i class="fa fa-edit btn btn-warning"></i></a>
                        <a href="#" onclick="isconfirm();"><i class="fa fa-trash btn btn-danger"></i></a>
                    </td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>Food</td>
                    <td>
                        <a href="#"> <i class="fa fa-edit btn btn-warning"></i></a>
                        <a href="#" onclick="isconfirm();"><i class="fa fa-trash btn btn-danger"></i></a>
                    </td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>Adventure</td>
                    <td>
                        <a href="#"> <i class="fa fa-edit btn btn-warning"></i></a>
                        <a href="#" onclick="isconfirm();"><i class="fa fa-trash btn btn-danger"></i></a>
                    </td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Traveller</td>
                    <td>
                        <a href="#"> <i class="fa fa-edit btn btn-warning"></i></a>
                        <a href="#" onclick="isconfirm();"><i class="fa fa-trash btn btn-danger"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Bussiness</td>
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
