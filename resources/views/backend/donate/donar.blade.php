@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Donar</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">List All Donar</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="productTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Amount (MMK)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mg Mg</td>
                            <td>mg@gmail.com</td>
                            <td>091234567</td>
                            <td>45000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Mg Mg</td>
                            <td>mg@gmail.com</td>
                            <td>091234567</td>
                            <td>45000</td> 
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mg Mg</td>
                            <td>mg@gmail.com</td>
                            <td>091234567</td>
                            <td>45000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mg Mg</td>
                            <td>mg@gmail.com</td>
                            <td>091234567</td>
                            <td>45000</td>
                        </tr>                 
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
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