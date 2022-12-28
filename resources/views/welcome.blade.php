<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>Database</title>
  </head>
  <body>
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('User List') }}</div>
        <div class="card-body">
            
    <!-- <h3>User List</h3> -->
    <form class="row g-2" action="{{route('user.store')}}"  method="post" enctype="multipart/form-data">
        @csrf
        <label  class="visually-hidden">Excel Files only </label>
        <!-- <div class="row mb-3"> -->
    
    <div class="col-md-4">
     <input type="file" class="form-control" name="excel_file"/> 
 </div>
 @error('excel_file')
 <span class="text-danger">{{$message}}</span>
@enderror
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-2">Upload File</button>
    
      </div>
</form>
<div class="row mb-5">
    <table class="table">
    
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email</th>
      <th scope="col"> Action </th>
     </tr>
  </thead>
  <tbody>
    @if(count($Data))
    @foreach($Data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->father_name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->contact}}</td>
      <td>{{$item->email}}</td>
      <td><a href="{{route('user.show',$item->id)}}"><button type="submit" class="btn btn-information"> Show information </button></a> </td>
    </tr>
    @endforeach
    @else
    <td colspan="3">No User Data Found</td>
    @endif
    
  </tbody>
</table>

@yield('content')

</body>
</html>