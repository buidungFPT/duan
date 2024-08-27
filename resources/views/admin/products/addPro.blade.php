@extends('admin.layouts.defaul')



@section('title')
@parent

@endsection

@push('style')
@endpush

@section('content')
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

input[type=text],
select,
textarea {
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
    <h3> Them Moi SAN PHAM <span class="bread-ntd"></span></h3>

</div>



<div class="container">
    <form action="{{route('admin.products.postaddPro')}}" method="post" enctype="multipart/form-data">

        @csrf

        <label for="NameSp">NameSp</label>
        <input type="text" id="NameSp" name="NameSp" class="from-control">
        @error('NameSp')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="category_id">category</label>
        <select type="text" id="category_id" name="category_id" >
            @foreach ( $listCategory as $cate)


            <option value="{{$cate->id}}"> {{$cate->name}}</option>

            @endforeach
        </select>

        <label for="PriceSP">PriceSP</label>
        <input type="text" id="PriceSP" name="PriceSP"  class="from-control">
        @error('PriceSP')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="imageSP">ẢNHSP</label>
        <input type="file" id="imageSP"  name="imageSP" class="from-control" ><br>
        @error('imageSP')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="imageCT">ANHCT</label>
        <input type="file" id="imageCT" multiple name="imageCT[]" class="from-control" ><br>
        @error('imageCT')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="description">Description</label>
        <input type="text" id="description" name="description" style="height:200px" class="from-control mt-2">

        <button type="submit" class="btn btn-success">THEM MOI </button>
        <a href="{{route('admin.products.listPro')}}" class="btn btn-danger">Quay lai</a>
    </form>
    
</div>

@endsection
@push('script')
@endpush