 @extends('welcome')

   @section('content')
   <!--
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('User List') }}</div>
        <div class="card-body">
   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email</th>
     </tr>
  </thead>
  <tbody>
       @foreach($Data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->father_name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->contact}}</td>
      <td>{{$item->email}}</td>
      <form action="{{route('user.destroy',$item->id)}}" method="POST">
      
     @csrf
     @method('DELETE')
     <td><button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this user?')">Delete Record</button></td>
</form> 
    </tr>
    @endforeach
       </tbody>
</table>
@endsection -->

kjsdflsdk;