@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Order</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">List All Orders</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="productTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Quantity</th>
                            <th>Order Status</th>
                            <th>User</th>
                            <th>Product</th>
                            <th>Deliver Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>As u like</td>
                            <td>Mg Mg</td>
                            <td>Acer</td>
                            <td class="bg-warning">No aviable</td>
                            <td>
                                <div class="d-flex">
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr> 
                        <tr>
                            <td>1</td>
                            <td>As u like</td>
                            <td>John Doe</td>
                            <td>Lenevo</td>
                            <td class="bg-success">On Going</td>
                            <td>
                                <div class="d-flex">
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>               
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

  @endsection
  @section('scripts')
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#productTable').DataTable();
} );
</script>
  @endsection