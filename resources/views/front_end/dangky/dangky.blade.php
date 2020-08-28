@extends('front_end.dangky.layout')
@section('body1')
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Đăng Ký</h2>
                        <form method="POST" class="register-form" id="register-form">
                        @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Ten" placeholder="Họ Và Tên"/>
                            </div>
                            <div class="form-group">
                                <label for=""><i class="zmdi zmdi-email"></i></label>
                                <input type="number" name="SoDienThoai" placeholder="Số Điện Thoại"/>
                            </div>
                            <div class="form-group">
                                <label for=""><i class="zmdi zmdi-email"></i></label>
                                <input type="date" name="NgaySinh" placeholder="Ngày Sinh"/>
                            </div>
                                                     
                            <div class="form-group">
                                <label for=""><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="DiaChi" id="DiaChi" placeholder="Địa Chỉ"/>
                            </div>
                            <div class="form-group">
                                <label for=""><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" id="Email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="MatKhau" id="MatKhau" placeholder="Mật Khẩu"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="nhaplai" id="nhaplai" placeholder="Nhập Lại Mật Khẩu"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng Ký"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{URL::asset('frontend/thuVienDK/images/signup-image.jpg')}}" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
@endsection