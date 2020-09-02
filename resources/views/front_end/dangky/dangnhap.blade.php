@extends('front_end.dangky.layout')
@section('body1')
<style>
    .container {
        font-family: times;
    }
</style>
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="frontend/thuVienDK/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="{{route('DangKy')}}" class="signup-image-link" style="font-family: times; font-size:25px">Tạo tài khoản</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title" style="font-family: times; font-size:40px;">Đăng Nhập</h2>
                        <form method="POST" class="register-form" id="login-form">
                        @csrf
                            <div class="form-group">
                                <label for=""><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" style="font-family: times; font-size:15px" name="Email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" style="font-family: times; font-size:15px" name="MatKhau" placeholder="Mật Khẩu"/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" style="font-family: times; font-size:23px" name="signin" class="form-submit" value="Đăng Nhập"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
@endsection