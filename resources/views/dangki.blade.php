<!-- 
                    <div class="text-center">
                      <h3> Đăng ký tài khoản</h3> 
                    </div>
                    <div class="card-body">
                        <form  action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="name" name="name" >
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" >
                            </div>
                            <div class="mb-3">
                                <label for="password"   class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-50">Đăng ký</button>
                                <a href="{{route('login')}}" class="btn btn-success w-50">DANG NHAP </a>
                        </form>  

                    </div>
                </div>
            </div>
        </div>
    </div> -->

   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css1/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
</head>
<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Create Account
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
                        <p class="auth-sgt">or use your email for registration:</p>
                    </div>
                    @if (session('error'))
                        <span class="text-danger">{{session('error')}}</span>
                        @endif
                    <form class="login-form" action="{{route('postdangki')}}" method="post">
                        @csrf
                        <input type="text" class="auth-form-input" name="name" id="name"placeholder="Name">
                        <input type="email" class="auth-form-input" name="email" id="email" placeholder="Email">
                        <div class="input-icon">
                            <input type="password" class="auth-form-input"  name="password" id="password" placeholder="Password">
                            <i class="fa fa-eye show-password"></i>
                        </div>
                  
                        
                        <div class="footer-action">
                            <input type="submit" value="Dang Ki" class="auth-submit">
                            <a href="{{route('login')}}" class="auth-btn-direct">Login</a>
                        </div>
                    </form>
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