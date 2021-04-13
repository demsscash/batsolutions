@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4>service Page </h4>
    <a href="{{ route('add.service') }}"> <button class="btn btn-info"> Add service</button>  </a>
<br><br>


    <div class="col-md-12">
     <div class="card">


     @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>
   @endif


          <div class="card-header"> All service Data </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">SL </th>
      <th scope="col" width="20%">service name</th>
      <th scope="col" width="35%">service description</th>
      
      <th scope="col" width="15%">Action</th>
    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($services as $ser) 
    <tr>
      <th scope="row"> {{ $i++  }} </th>
      <td> {{ $ser->name }} </td>
      <td> {{ $ser->description }} </td>
      
       
       <td> 
       <a href="{{ url('service/edit/'.$ser->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ url('contact/delete/'.$ser->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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
 @endsection
