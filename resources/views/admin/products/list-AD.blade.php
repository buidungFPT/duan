@extends('admin.layouts.defaul')



@section('title')
@parent

@endsection

@push('style')
@endpush

@section('content')



<div class="breadcomb-ctn text-center">
    <h2>Chào Mừng TDD</h2>
    <h3> DANH DACH SAN PHAM <span class="bread-ntd"></span></h3>
    <a href="{{route('admin.products.addPro')}}" class="btn btn-sm fw-bold btn-primary" >Thêm Mới</a>
</div>

<div class="card-body pt-2">

    @if (session('message'))
    <div class="alert alert-success" >

        {{session('message')}}
    </div>
    @endif
    <div class="tab-content">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="table-responsive">
                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                    <thead>
                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                            <th class="p-0 pb-3 min-w-100px">
                                STT
                            </th>
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
                           
                            <th class="p-0 pb-3 w-100px">ACTIONS</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listPro as $key => $value )
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{ $value -> name  }}</td>
                            <td>{{ $value -> category -> name  }}</td>
                            <td> {{ $value -> price }}</td>
                            <td> {{ $value -> description }}</td>
                            <td>
                            <img src="{{asset('/')}}{{$value -> image}}" height="100px" width="100px" alt="">
                               
                            </td>
                        
                            <td> 
                               <a href="{{route('admin.products.detetePro',$value -> id)}}" onclick="return confirm('ARE YOU SURE DETELE ')"> <button class=" btn btn-danger ">Xoa</button></a>

                               <a href="{{route('admin.products.updatePro',$value -> id)}}"  class=" btn btn-info">Sua</a>
                               <a href="{{route('admin.products.detailPro' ,$value -> id)}}"  class="mt-2 btn btn-success ">CHI TIET</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              
            </div>
        </div>
    </div>
   

    
    @endsection
    @push('script')
    <script>
    
    </script>
    @endpush