
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/')}}assets/css1/style.css">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
</head>
<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Sign In
                    </h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul> 
                        </div>
                     <p class="auth-sgt">or sign in with:</p>
                    </div>
                    @if (session('error'))
                        <span class="text-danger">{{session('error')}}</span>
                        @endif
                    <form action="{{route('loginLogin')}}" method="post">
                    @csrf
               
                    <div class="mb-3">  
                                <label for="email" class="form-label"></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email ">
                                @error( 'email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"></label>
                                <input type="password" class="form-control" id="password"  name="password" placeholder="Enter password">
                                @error( 'password')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            
                            </div>
                            <label for="remember">
                            <input type="checkbox" name='remember' id="remember" >
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i> 
                            <span> Remember password.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="login" class="auth-submit">
                            <a href="{{route('dangki')}}" class="auth-btn-direct">register</a>
                        </div>
                       
                    </form>
                    <div class="auth-forgot-password">
                        <a href="#">Forfot Password</a>
                    </div>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image">
                    <img src="{{asset('/')}}assets/assets1/vector.jpg" alt="login">
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/')}}assets/js1/common.js"></script>
   
</body>
</html>