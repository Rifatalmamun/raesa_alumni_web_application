
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2 class="mb-5 font-weight-bold">Send Account Verification Request </h2>
        <hr>
        <div class="col-md-12">
            <form  action="{{route('verify.user.account')}}" method="POST"   enctype="multipart/form-data">
                @csrf
                <p class="font-weight-bold">General Information------</p>
                <div class="row">

                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">USERNAME</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" value="{{$data->username}}" placeholder="username" aria-describedby="inputGroupPrepend" name="username" required>
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">EMAIL</label>
                      <input type="text" class="form-control" id="validationCustom01" value="{{$data->email}}" placeholder="email" required name="email">
                     
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">PHONE NUMBER</label>
                      <input type="number" class="form-control" value="{{$data->phone}}" name="phone" >
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group my-4">
                      
                      <div class="row">
                        <div class="col-3">
                          <input type="radio" id="skype" name="link_type"  value="skype" checked>
                          <label class="font-weight-bold" for="skype">SKYPE </label><br>
                        </div>
                        <div class="col-3">
                          <input type="radio" id="zoom" name="link_type"  value="zoom" >
                          <label class="font-weight-bold" for="zoom">ZOOM </label><br>
                        </div>
                      </div>

                      <input type="text" class="form-control" name="social_link" placeholder="Enter your selected social link">

                    </div>
                  </div>

                </div>

                <p class="font-weight-bold">------------------------</p>
                <div class="row bg-primary text-light">
                  <div class="col">
                    <div class="form-group">

                      <div class="row">
                        <div class="col-3 pt-3">
                          <input onclick="radioDocCheck(this.id)" type="radio" id="nid_card" name="document_type" value="nid_card" checked>
                         <label class="font-weight-bold" for="nid_card">NID CARD</label><br>
                        </div>
                        <div class="col-3 pt-3">
                          <input onclick="radioDocCheck(this.id)" type="radio" id="passport" name="document_type" value="passport" >
                          <label class="font-weight-bold" for="passport">PASSPORD</label><br>
                        </div>
                        <div class="col-3 pt-3">
                          <input onclick="radioDocCheck(this.id)" type="radio" id="student_card" name="document_type" value="student_card">
                          <label class="font-weight-bold" for="student_card">STUDENT CARD</label><br>
                        </div>
                        <div class="col-3 pt-3">
                          <input onclick="radioDocCheck(this.id)" type="radio" id="birthday_card" name="document_type" value="birthday_card">
                          <label class="font-weight-bold" for="birthday_card">BIRTHDAY CERTIFICATE</label><br>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>
                <div class="row" id="nid_card_row">
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">NID CARD PICTURE</label>
                     <input type="file" class="form-control" name="nid_picture" >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">NID NUMBER</label>
                      <input type="number" class="form-control" name="nid_card_number" >
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">NID CARD ISSUE DATE</label>
                      <input type="date" class="form-control" name="nid_issue_date" >
                    </div>
                  </div>

                </div>
                <div class="row" id="passport_row">
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">PASSPORT PICTURE</label>
                     <input type="file" class="form-control" name="passport_picture" >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">PASSPORT NUMBER</label>
                      <input type="number" class="form-control" name="passport_number"  >
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">PASSPORT ISSUE DATE</label>
                      <input type="date" class="form-control" name="passport_issue_date"  >
                    </div>
                  </div>

                </div>

                <div class="row" id="student_card_row">
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">STUDENT CARD PICTURE</label>
                     <input type="file" class="form-control" name="student_card_picture" >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">STUDENT CARD NUMBER</label>
                      <input type="number" class="form-control" name="student_card_number"  >
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">STUDENT CARD ISSUE DATE</label>
                      <input type="date" class="form-control" name="student_card_issue_date"  >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">INSTITUTE NAME</label>
                      <input type="text" class="form-control" name="student_institute"  >
                    </div>
                  </div>

                </div>
                <div class="row" id="birthday_card_row">
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">BIRTHDAY CARD PICTURE</label>
                     <input type="file" class="form-control" name="birthday_card_picture" >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group my-4">
                      <label class="font-weight-bold">BIRTHDAY CARD NUMBER</label>
                      <input type="number" class="form-control" name="birthday_card_number" >
                    </div>
                  </div>

                </div>

                <button class="btn btn-primary w-100" type="submit">Send Verify Request</button>
              </form>

              <a href="{{URL::to('/')}}" class="btn btn-success mt-3">Home</a>
        </div>
    </div>
</div>


<script>
  var passport_row       =   document.getElementById('passport_row');
  var nid_card_row       =   document.getElementById('nid_card_row');
  var student_card_row   =   document.getElementById('student_card_row');
  var birthday_card_row   =   document.getElementById('birthday_card_row');

  nid_card_row.style.display = 'block';
  passport_row.style.display = 'none';
  student_card_row.style.display = 'none';
  birthday_card_row.style.display = 'none';
  

  function radioDocCheck($id){

    if($id=='nid_card'){

      nid_card_row.style.display = 'block';
      passport_row.style.display = 'none';
      student_card_row.style.display = 'none';
      birthday_card_row.style.display = 'none';

    }else if($id== 'passport'){

      passport_row.style.display = 'block';
      nid_card_row.style.display = 'none';
      student_card_row.style.display = 'none';
      birthday_card_row.style.display = 'none';
    }
    else if($id== 'student_card'){

      student_card_row.style.display = 'block';
      nid_card_row.style.display = 'none';
      passport_row.style.display = 'none';
      birthday_card_row.style.display = 'none';

      }
    else if($id== 'birthday_card'){

      birthday_card_row.style.display = 'block';
      student_card_row.style.display = 'none';
      nid_card_row.style.display = 'none';
      passport_row.style.display = 'none';
      

}
  }

</script>

@endsection
