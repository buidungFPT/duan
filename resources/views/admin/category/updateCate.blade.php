@extends('admin.layouts.defaul')



@section('title')
@parent

@endsection

@push('style')
@endpush

@section('content')
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: whitesmoke;
  padding: 20px;
}
</style>


<div class="breadcomb-ctn text-center">
    <h2>Chào Mừng TDD</h2>
    <h3> Update Danh Muc <span class="bread-ntd"></span></h3>
  
</div>
   

 
<div class="container">
  <form action="{{route('admin.category.updateCategory' ,$listCategory->id)}}" method="post" >
  @method('patch')
    @csrf
   
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Ten Danh Muc " value="{{$listCategory->name}}" >

    
    <button type="submit" class="btn btn-success">THEM MOI </button>
    <a href="{{route('admin.category.listCate')}}" class="btn btn-danger">Quay lai</a>
  </form>
</div>

@endsection
    @push('script')
    @endpush

    