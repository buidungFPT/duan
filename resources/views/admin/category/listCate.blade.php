@extends('admin.layouts.defaul')



@section('title')
@parent

@endsection

@push('style')
@endpush

@section('content')



<div class="breadcomb-ctn text-center">
    <h2>Chào Mừng TDD</h2>
    <h3> DANH DACH DANH MUC  <span class="bread-ntd"></span></h3>
    <a href="{{route('admin.category.addCate')}}" class="btn btn-sm fw-bold btn-primary" >Thêm Mới</a>
</div>

<div class="card-body pt-2">

    @if (session('message'))
    <div class="alert alert-primary" role="alert">

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
                               Ten Danh  Muc 
                            </th>
                          
                           
                            <th class="p-0 pb-3 w-100px">ACTIONS</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($listCate as $key => $value )
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{ $value -> name  }}</td>                        
                            <td> 
                               <a href="{{route('admin.category.deleteCate',$value -> id)}}" onclick="return confirm('ARE YOU SURE DETELE ')"> <button class=" btn btn-danger ">Xoa</button></a> 
                               <a href="{{route('admin.category.updateCate',$value -> id)}}"  class=" btn btn-info">Sua</a>
                            
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