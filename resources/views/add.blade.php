<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:gray;">

<div class="container" style="background-color:white;margin-top:50px;color:white;border-radius:5px;">
  @if(Session::get('success'))
  <div class="alert alert-success">
   {{Session::get('success')}}

  </div>
  @endif
  @if(Session::get('fail'))
  <div class="alert alert-danger">
   {{Session::get('fail')}}

  </div>
  @endif
  <div class="row">
  <div class="col-md-12" align="right"><a href="/sh"><button class="btn btn-primary" style="margin-top:30px;">View Student List</button></a></div>
  </div>
  <form action="add" method="POST">
      @csrf
      <div class="row">
      
          <div class="col-md-12"><h1 style="color:black;text-align:center;margin-top:10px;">Add Student Details</h1></div>
    <div class="col-md-12">
    
    <input type="text" class="form-control" name="fnm" id="" placeholder="Enter First Name" style="margin-top:15px;" value="{{ old('fnm') }}">
   <span style="color:red;">@error('fnm'){{ $message }}@enderror</span>
    </div>
    <div class="col-md-12">
    
    <input type="text" class="form-control"  name="f" id="" placeholder="Enter Father Name" style="margin-top:15px;" value="{{ old('f') }}">
    <span style="color:red;">@error('f'){{ $message }}@enderror</span>
    </div>
    <div class="col-md-12">
    
    <input type="text" class="form-control"  name="adr" id="" placeholder="Enter Your Address" style="margin-top:15px;" value="{{ old('adr') }}">
    <span style="color:red;">@error('adr'){{ $message }}@enderror</span>
    </div>
    <div class="col-md-12">
    
    <input type="text" class="form-control"  name="phn" id="" placeholder="Enter Guardian Phone Number" style="margin-top:15px;" value="{{ old('phn') }}">
    <span style="color:red;">@error('phn'){{ $message }}@enderror</span>
    </div>
    <div class="col-md-12">
    
    <input type="text" class="form-control"  name="cls" id="" placeholder="Enter Class Name" style="margin-top:15px;" value="{{ old('cls') }}">
    <span style="color:red;">@error('cls'){{ $message }}@enderror</span>
    </div>
    <div class="col-md-12" align="right">
    
    <input type="submit" class="btn btn-primary"   id="" style="margin-top:15px;margin-bottom:5px;border-radius:5px;" value="Submit">

    </div>
    </div>
  </form>
</div>

</body>
</html>