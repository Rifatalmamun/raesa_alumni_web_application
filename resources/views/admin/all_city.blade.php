@extends('admin.master')

@section('content')



<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> City Table</h1>
        <p>Table to display analytical data effectively</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active"><a href="#">City Table</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col">
            
            <a href="#" data-toggle="modal" data-target="#addCityModal" class="btn btn-success mb-2">Add New City</a>
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
                    <th>Id</th>
                    <th>City name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                
                    @foreach ($data as $city)
                    <tr>
                        <th>{{$city->id}}</th>
                        <th>{{$city->city_name}}</th>
                        <td>
                        
                            <a href="" id="{{ $city->id }}" data-toggle="modal" data-target="#editCityModal" class="btn btn-sm btn-warning" title="Edit" onclick="productview(this.id)"> <i class="fa fa-edit"></i> </a>

                            <a href="{{URL::to('admin/delete/city/'.$city->id)}}" id="delete" class="btn btn-sm btn-danger" title="Delte"> <i class="fa fa-trash"></i> </a>

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



  <!--add city modal-->

  <div class="modal fade" id="addCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New City</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

          <form action="{{route('admin.store.city')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">City:</label>
              <input type="text" class="form-control" id="recipient-name" name="city_name" required>
            </div>
           
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
          <input type="submit" class="btn btn-success" value="Add City">
        </div>
    </form>
      </div>
    </div>
  </div>


      <!--edit city modal-->

  <div class="modal fade" id="editCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit City</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              
              <form action="{{route('admin.update.city')}}" method="POST">
                @csrf  

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">City:</label>
              <input type="text" class="form-control" id="cname" value=""  name="city_name" required>
              <input type="hidden" class="form-control" id="cid" value=""  name="city_id">
            </div>
           
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
          <button type="submit" id="submit" value="update" class="btn btn-danger">Update</button>
        </div>
    </form>
      </div>
    </div>
  </div>
      

      <!--Ajax cdn link-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
      <script type="text/javascript">
      
      function productview(id){

            $.ajax({
                       url: "{{  url('/admin/edit/city/') }}/"+id,
                       type:"GET",
                       dataType:"json",
                       success:function(data) {
                        $('#cname').val(data.city_name);
                        $('#cid').val(data.id);
               }
        })
      }

      </script>


@endsection
