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
.tab-content{
    margin-left: 50px;
}
</style>


<div class="breadcomb-ctn text-center">
    <h2>Chào Mừng TDD</h2>
    <h3> Chi Tiet San Pham <span class="bread-ntd"></span></h3>
  
</div>
   


 


<div class="tab-content ">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="table-responsive">
                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                    <thead>
                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                           
                            <th class="p-0 pb-3 min-w-100px pe-13">
                                Name
                            </th>
                            <th class="p-0 pb-3 w-150px pe-7">
                            Category
                            </th>
                            <th class="p-0 pb-3 w-150px pe-7">
                            Price
                            </th>
                            <th class="p-0 pb-3 w-150px pe-7">
                            Description
                            </th>
                            <th class="p-0 pb-3 w-150px pe-7">
                            Image
                            </th>
                           
                            <th class="p-0 pb-3 w-150px pe-7">
                            ImageCT
                            </th>
                           
                            <th class="p-0 pb-3 w-150px pe-7">
                            <a href="{{route('admin.products.listPro')}}">Quay lai</a>
                            </th>
                           
                         

                        </tr>
                    </thead>
                    <tbody>
                  
                        <tr>
                            
                            <td>{{ $product -> name  }}</td>
                            <td>{{ $product -> category -> name }}</td>
                            <td> {{ $product -> price }}</td>
                            <td> {{ $product -> description }}</td>
                            <td>
                            <img src="{{asset('/')}}{{$product -> image}}" height="100px" width="100px" alt="">
                            </td>
                            <td>
                            @foreach ($product -> ProductsImage as $image)
                                <img src="{{asset($image->image_url)}}" height="70px" width="70px" alt="">
                                @endforeach
                               
                            </td>

                        
                           
                        </tr>
                    
                    </tbody>
                </table>
         
            </div>
        </div>
    </div>
@endsection
    @push('script')
    @endpush