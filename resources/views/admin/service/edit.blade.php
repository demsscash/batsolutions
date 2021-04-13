@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Edit services</h2>
     </div>
     <div class="card-body">
     <form action="{{ url('update/service/'.$services->id) }}" method="POST">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">services name </label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $services->name }}" >
                    
               </div>
                
               
                
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">
                    {{ $services->description }}
                    </textarea>
               </div>

               
                



               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection
