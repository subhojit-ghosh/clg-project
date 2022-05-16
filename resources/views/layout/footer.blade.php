<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="{{url('/')}}">
                                <img style="width: 150px; height:50px" src="{{asset('img/easydocloog.png')}}" alt="">
                            </a>
                        </div>
                        <p>
                            we provide best services
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/contact')}}"> Contact</a></li>
                            <li><a href="{{url('/doctors')}}">Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Address
                        </h3>
                        <p>
                            Bara Kanthalia, Barackpore, North 24 Parganas <br>
                            +91 9382139976 <br>
                            easydoc@contact.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This website is in Made by <a href="https://www.rerf.in/" target="_blank"> GROUP 12</a> ,4th year, CSE
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->
<!-- link that opens popup -->

<!-- appointment form itself end-->
<form id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Make an Appointment</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-6">
                        <input id="datepicker" placeholder="Pick date">
                    </div>
                    <div class="col-xl-6">
                        <input id="datepicker2" type="time" placeholder="Suitable time">
                    </div>
                    <div class="col-xl-6">
                        <select class="form-select wide" id="default-select" class="">
                            <option data-display="Select Department">Department</option>
                            <option value="1">Eye Care</option>
                            <option value="2">Physical Therapy</option>
                            <option value="3">Dental Care</option>
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <select class="form-select wide" id="default-select" class="">
                            <option data-display="Doctors">Doctors</option>
                            <option value="1">Mirazul Alom</option>
                            <option value="2">Monzul Alom</option>
                            <option value="3">Azizul Isalm</option>
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="col-xl-6">
                        <input type="text" placeholder="Phone no.">
                    </div>
                    <div class="col-xl-12">
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed-btn3">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- appointment form itself end -->
<!-- login form itself end-->
<x-error-alert></x-error-alert>
<form id="login-form" class="white-popup-block mfp-hide" action="{{ route('patient.login') }}" method="POST">
    @csrf
    <div class="popup_box" id="login-modal">
        <div class="popup_inner">
            <h3>Log In</h3>
            <div id="add-error-message"></div>
            <div class="row">
                <div class="col-xl-6">
                    <input type="email" placeholder="Email" aria-describedby="emailHelp" name="email" autocomplete="email" value="{{ old('email') }}">
                </div>
                <div class="col-xl-6">
                    <input type="password" placeholder="Password" name="password" autocomplete="current-password" value="{{ old('password') }}">
                </div>

                <div class="col-xl-12">
                    <button type="submit" class="boxed-btn3">Login</button>
                </div>
                <div class="col-xl-12">
                    <p>Don't have an account? <a href="#signin-form" class="popup-with-form" style="color: blue;"> Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- login form itself end -->

<!--sign in  form itself end-->
<form id="signin-form" class="white-popup-block mfp-hide" action="{{ route('patient.signup') }}" method="POST">
    @csrf
<div class="popup_box" id="signup-model">
    <div class="popup_inner">
        <h3>Sign Up</h3>
            <!-- SignUp form -->
            <div class="row">
                <div class="col-xl-12">
                    <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="col-xl-6">
                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="col-xl-6">
                    <input type="text" placeholder="Phone no." name="mobile" value="{{ old('mobile') }}" required>
                </div>
                <div class="col-xl-6">
                    <select name="gender" class="form-control" placeholder="Gender" required>
                        <option value="" {{ !old('gender') ? 'selected' : '' }} disabled>Choose your Gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                        </option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                        </option>
                    </select>
                </div>
                <div class="col-xl-6">
                    <input type="text" placeholder="Age" name="age" value="{{ old('age') }}" required>
                </div>
                <div class="col-xl-12">
                    <input type="text" placeholder="Address" name="address" value="{{ old('address') }}" required>
                </div>
                <div class="col-xl-6">
                    <input type="password" placeholder="New Password" name="password" value="{{ old('password') }}" autocomplete="new-password" required>
                </div>
                <div class="col-xl-6">
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="new-password" required>
                </div>
                <div class="col-xl-12">
                    <button type="submit" class="boxed-btn3">Sign Up</button>
                </div>
                <div class="col-xl-12">
                    <p>Already have an account go to  <a href="#login-form" class="popup-with-form" style="color: blue;">login</a></p>
                </div>
                <div class="col-xl-12">
                    <p>Go to home <a href="{{ url('/') }}" class="popup-with-form" style="color: blue;">Home</a></p>
                </div>
            </div>
            <!-- sign up form -->
        </div>
    </div>
</form>
<!--sign in form itself end -->