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
                  <?php $i = 1;?>
                 @foreach ($categories as $category )
                 <tr>
                  <td>{{$i++}}</td>
                  <td>{{$category->category_name}}</td>
                  <td>
                      <a href="{{url('edit-category',$category->id)}}"> <i class="fa fa-edit btn btn-warning"></i></a>
                      <a href="{{url('delete-category',$category->id)}}" onclick="isconfirm()"<i class="fa fa-trash btn btn-danger"></i></a>
                  </td>
                </tr>
                 @endforeach
                 
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

if(!confirm('Are you sure delete this category?')){
event.preventDefault();
return;
}
return true;
}
</script>
@endsection
