<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    <div class="container-fluid" style="margin-top:50px;">
    <div class="row"><div class="col-md-12" align="right" style="margin-bottom:10px;"><a href="/ad"><button class="btn btn-primary">Back</button></a></div></div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>ID</th>
<th>Name</th>
<th>Father Name</th>
<th>Address</th>
<th>Contact</th>
<th>Class</th>
<th>Action</th>

            </tr>
        </thead>
        <tbody>
          
@foreach($students as $members)
            <tr>
 <td>{{$members['id']}}</td>
 <td>{{$members['name']}}</td>   
 <td>{{$members['fname']}}</td>   
 <td>{{$members['address']}}</td>   
 <td>{{$members['phone']}}</td>
 <td>{{$members['classname']}}</td>   
 <td><button class="btn btn-primary">Edit</button></td>   



</tr>
@endforeach          
          
        </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
<th>Name</th>
<th>Father Name</th>
<th>Address</th>
<th>Contact</th>
<th>Class</th>
            </tr>
        </tfoot>
    </table>
    </div>
</body>
</html>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );    
</script>