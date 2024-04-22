@extends('main')
@section('content')
<div>    
 <div class="container mt-5">
    <h2 class="my-4" style="text-align: center">Add Product</h2>
    <hr>    
    <form action="{{route('prodcut.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label for="price">price</label>
        <input type="number" min="0" class="form-control" name="price" id="price" placeholder="Price">
      </div>
     
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>   
</div>

@endsection
