@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> VERIFICATION REQUEST TABLE </h1>
        <p>Table to display analytical data effectively</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active"><a href="#">Verify User Table</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>User name</th>
                    <th>Document type</th>
                    <th>picture</th>
                    <th>link</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($data as $user)
                    <tr>
                        
                        <td>{{$user->username}}</td>
                        <td>{{$user->document_type}}</td>
                        <td>
                            <img src="{{asset($user->document_picture)}}" alt="" style="width: 50px;height: 50px;">
                        </td>
                        <td>
                          <a href="{{ url($user->social_link) }}" target="_blank">{{$user->link_type}}</a>
                        </td>
                        <td>{{$user->phone}}</td>
                        <td>
                            <a href="{{ URL::to('admin/view/veriry/request/'.$user->id) }}" class="btn btn-sm btn-info" title="View"> <i class="fa fa-eye"></i> </a>
                            
                            @if($user->verify == 0)
                            <a href="{{URL::to('admin/verify/user/'.$user->user_id)}}" id="verifyUser" class="btn btn-sm btn-danger" > <i class="fa fa-ban" aria-hidden="true"></i> </a>
                            @else 
                            <a href="{{URL::to('admin/unverify/user/'.$user->user_id)}}" id="unverifyUser" class="btn btn-sm btn-info" > <i class="fa fa-thumbs-up"></i> </a>
                            @endif

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
