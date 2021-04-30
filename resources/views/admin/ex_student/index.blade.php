@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> All Ex-Student</h1>
        <p>Table to display ex-student data</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active"><a href="#">all ex-student</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{route('admin.create.ex.student')}}" class="btn btn-info mb-2">Add Ex-Student</a>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Student Name</th>
                    <th>SSC Batch</th>
                    <th>Phone</th>
                    <th>Email</th>
                    
                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($data as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->batch}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        
                 
                        <td>
                            <a href="{{ URL::to('admin/view-ex-student/'.$user->id) }}" class="btn btn-sm btn-info" title="View"> <i class="fa fa-eye"></i> </a>
        
                            <a href="{{URL::to('admin/edit-ex-student/'.$user->id)}}" class="btn btn-sm btn-warning" title="Edit"> <i class="fa fa-edit"></i> </a>
                              
                            <a href="{{URL::to('admin/delete-ex-student/'.$user->id)}}" id="delete" class="btn btn-sm btn-danger" title="Delte"> <i class="fa fa-trash"></i> </a>
                            
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
  </main>




@endsection
