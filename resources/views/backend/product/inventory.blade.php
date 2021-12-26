@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Product</a></li>
<li class="breadcrumb-item"><a href="#">Product Inventory</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">Product Inventory</h3>   
                  <div class="float-right">
                    <a href="" data-toggle="modal" data-toggle="modal" data-target="#inventory" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Inventory</a>
                 </div>           
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>HP Laptop</td>
                            <td>5</td>
                            <td>
                                <a href="" data-toggle="modal" data-toggle="modal" data-target="#inventory" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>  
                        <tr>
                            <td>2</td>
                            <td>Lenevo</td>
                            <td>1</td>
                            <td>
                                <a href="" data-toggle="modal" data-toggle="modal" data-target="#inventory" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr> 
                        <tr>
                            <td>3</td>
                            <td>ASUS</td>
                            <td>2</td>
                            <td>
                                <a data-toggle="modal" data-toggle="modal" data-target="#inventory" class="btn btn-sm btn-warning show-role" id="">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>            
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="inventory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Product Inventory Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" id="name" placeholder="Product name" value="HP laptop" class="form-control">
              </div>
              <div class="form-group">
                <label for="productQty">Roles</label>
                <input type="number" id="productQty" class="form-control" placeholder="Product quantity" value="5">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>


  @endsection
  @section('scripts')
   <script>
    //     
   </script>
  @endsection