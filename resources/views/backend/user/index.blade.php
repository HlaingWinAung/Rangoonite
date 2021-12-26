@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">User</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">List All Users</h3>
                  <div class="float-right">
                    <a href="{{url('users/create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add user</a>
                 </div>  
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>DOB</th>
                      <th>Role</th>
                      <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kyaw Kyaw</td>
                            <td>kyaw@gmail.com</td>
                            <td>959-123456</td>
                            <td>Male</td>
                            <td>17-08-1999</td>
                            <td>Admin</td>
                            <td class="text-center">
                                    <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                        <i class="fas fa-info-circle"></i>
=======
                                        <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                    </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mg Kyaw</td>
                            <td>mgkyaw@gmail.com</td>
                            <td>959-5789556</td>
                            <td>Male</td>
                            <td>17-08-2000</td>
                            <td>Staff</td>
                            <td class="text-center">
                                    <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                        <i class="fas fa-info-circle"></i>
=======
                                        <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                    </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Su Su</td>
                            <td>su@gmail.com</td>
                            <td>959-123456</td>
                            <td>Female</td>
                            <td>20-08-1999</td>
                            <td>Admin</td>
                            <td class="text-center">
                                    <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                        <i class="fas fa-info-circle"></i>
=======
                                        <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                    </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Aye Myat</td>
                            <td>ayemyat@gmail.com</td>
                            <td>959-123456</td>
                            <td>Female</td>
                            <td>17-08-2000</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>  
                        <tr>
                            <td>Kyaw Kyaw</td>
                            <td>kyaw@gmail.com</td>
                            <td>959-123456</td>
                            <td>Male</td>
                            <td>17-08-1999</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mg Kyaw</td>
                            <td>mgkyaw@gmail.com</td>
                            <td>959-5789556</td>
                            <td>Male</td>
                            <td>17-08-2000</td>
                            <td>Staff</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Su Su</td>
                            <td>su@gmail.com</td>
                            <td>959-123456</td>
                            <td>Female</td>
                            <td>20-08-1999</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Aye Myat</td>
                            <td>ayemyat@gmail.com</td>
                            <td>959-123456</td>
                            <td>Female</td>
                            <td>17-08-2000</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>  
                        <tr>
                            <td>Kyaw Kyaw</td>
                            <td>kyaw@gmail.com</td>
                            <td>959-123456</td>
                            <td>Male</td>
                            <td>17-08-1999</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mg Kyaw</td>
                            <td>mgkyaw@gmail.com</td>
                            <td>959-5789556</td>
                            <td>Male</td>
                            <td>17-08-2000</td>
                            <td>Staff</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Su Su</td>
                            <td>su@gmail.com</td>
                            <td>959-123456</td>
                            <td>Female</td>
                            <td>20-08-1999</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Aye Myat</td>
                            <td>ayemyat@gmail.com</td>
                            <td>959-123456</td>
                            <td>Female</td>
                            <td>17-08-2000</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>  
                        <tr>
                            <td>Kyaw Kyaw</td>
                            <td>kyaw@gmail.com</td>
                            <td>959-123456</td>
                            <td>Male</td>
                            <td>17-08-1999</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mg Kyaw</td>
                            <td>mgkyaw@gmail.com</td>
                            <td>959-5789556</td>
                            <td>Male</td>
                            <td>17-08-2000</td>
                            <td>Staff</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Su Su</td>
                            <td>su@gmail.com</td>
                            <td>959-123456</td>
                            <td>Female</td>
                            <td>20-08-1999</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Aye Myat</td>
                            <td>ayemyat@gmail.com</td>
                            <td>959-123456</td>
                            <td>Female</td>
                            <td>17-08-2000</td>
                            <td>Admin</td>
                            <td class="text-center">
                                <a href="{{url('users/edit')}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="" class="btn ml-1 btn-sm btn-info">
<<<<<<< HEAD
                                    <i class="fas fa-info-circle"></i>
=======
                                    <i class="fas fa-eye"></i>
>>>>>>> f6d5fcf (frontend customize)
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

  @endsection
  @section('scripts')
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
  @endsection