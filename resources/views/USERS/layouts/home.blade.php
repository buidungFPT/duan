 <!-- Categories Start -->
  
 <!-- <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
    
        <div class="row px-xl-5 pb-3">
           
            @foreach ($category as  $cate) 
                        <div class="flex-fill pl-2">
                          <button class="btn btn-warring"><a href="{{route('client.user.Cateid',['id' =>$cate->id])}}"class="btn btn-primary">{{$cate->name }}</a>  </button> 
                        </div>
            @endforeach
            
            <a href="{{route('client.user.home')}} "class="btn btn-primary">Tat Ca</a>
            </div> -->
    <!-- Categories End -->


    <!-- Products Start -->


   
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">SAN PHAM</span></h2>
        <div class="row px-xl-5">
                  @foreach ($products as $pro )
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                     
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('/')}}{{$pro -> image}}" height="100px" width="100px" alt="" >
                        <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{route('client.user.detail',['id'=>$pro->id])}}"><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{$pro->name}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                          <h5>{{$pro->price}}</h5><br>
                         
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                  
                </div>
               
            </div>
            
            @endforeach
           