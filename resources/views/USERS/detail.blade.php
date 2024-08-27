 @extends('USERS.layouts.default')

 @section('content')


 <!-- Shop Detail Start -->


 
 <div class="container-fluid pb-5">
     <div class="row px-xl-5">
     @foreach ($listPro->ProductsImage as $proS )
         <div class="col-lg-5 mb-30">
             <div id="product-carousel" class="carousel slide" data-ride="carousel">
            
                 <div class="carousel-inner bg-light">
                
                     <div class="carousel-item active">
                         <img class=" w-100 h-100" src="{{asset($proS->image_url)}}" alt="Image"  >
                     </div>
                     
                 </div>
               
                
                 <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                     <i class="fa fa-2x fa-angle-left text-dark"></i>
                 </a>
                 <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                     <i class="fa fa-2x fa-angle-right text-dark"></i>
                 </a>
                
             </div>
          
         </div>
         @endforeach
        
      
         <div class="col-lg-7 h-auto mb-30">
             <div class="h-100 bg-light p-30">
                 <h3>{{$listPro->name}}</h3>
                 <div class="d-flex mb-3">
                     <div class="text-primary mr-2">
                         <small class="fas fa-star"></small>
                         <small class="fas fa-star"></small>
                         <small class="fas fa-star"></small>
                         <small class="fas fa-star-half-alt"></small>
                         <small class="far fa-star"></small>
                     </div>
                     <small class="pt-1">(99 Reviews)</small>
                 </div>
                 <h3 class="font-weight-semi-bold mb-4">{{number_format($listPro->price)}}</h3>
                 <p class="mb-4">{{$listPro->description}}</p>
                   
                 <div class="d-flex mb-3">
                     <strong class="text-dark mr-3">Sizes:</strong>
                     <form>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-1" name="size">
                             <label class="custom-control-label" for="size-1">XS</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-2" name="size">
                             <label class="custom-control-label" for="size-2">S</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-3" name="size">
                             <label class="custom-control-label" for="size-3">M</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-4" name="size">
                             <label class="custom-control-label" for="size-4">L</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-5" name="size">
                             <label class="custom-control-label" for="size-5">XL</label>
                         </div>
                     </form>
                 </div>
                 <div class="d-flex mb-4">
                     <strong class="text-dark mr-3">Colors:</strong>
                     <form>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-1" name="color">
                             <label class="custom-control-label" for="color-1">Black</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-2" name="color">
                             <label class="custom-control-label" for="color-2">White</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-3" name="color">
                             <label class="custom-control-label" for="color-3">Red</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-4" name="color">
                             <label class="custom-control-label" for="color-4">Blue</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-5" name="color">
                             <label class="custom-control-label" for="color-5">Green</label>
                         </div>
                     </form>
                 </div>
                 <div class="d-flex align-items-center mb-4 pt-2">
                     <!-- <div class="input-group quantity mr-3" style="width: 130px;">
                         <div class="input-group-btn">
                             <button class="btn btn-primary btn-minus">
                                 <i class="fa fa-minus"></i>
                             </button>
                         </div>
                         <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                         <div class="input-group-btn">
                             <button class="btn btn-primary btn-plus">
                                 <i class="fa fa-plus"></i>
                             </button>
                         </div> -->
                     </div>
                     <form action="{{route('client.user.addToCart')}}" method="post">
                        @csrf
                        <input type="hidden" name="products_id" id="" value="{{$listPro->id}}">
                        <input type="number" name="quantity" value="1" method="post" >
                     <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                         Cart</button>
                         </form>
                 </div>
                 <div class="d-flex pt-2">
                     <strong class="text-dark mr-2">Share on:</strong>
                     <div class="d-inline-flex">
                         <a class="text-dark px-2" href="">
                             <i class="fab fa-facebook-f"></i>
                         </a>
                         <a class="text-dark px-2" href="">
                             <i class="fab fa-twitter"></i>
                         </a>
                         <a class="text-dark px-2" href="">
                             <i class="fab fa-linkedin-in"></i>
                         </a>
                         <a class="text-dark px-2" href="">
                             <i class="fab fa-pinterest"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     @endsection