<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Your Acount </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('img/logo.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jkl/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jkl/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jkl/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jkl/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="jkl/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jkl/vendor/animsition/css/animsition.min.css">
<!--==============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jkl/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="jkl/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jkl/css/util.css">
	<link rel="stylesheet" type="text/css" href="jkl/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(jkl/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
					<span class="text-white">Sistem Laporan Kegiatan Siswa</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}"  >
                @csrf
					<div class="wrap-input100 validate-input m-b-26">
						<span for="name" class="label-input100 text-white">Name</span>
						<input id="name" type="text" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Your Name *" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
						
					</div>

					<div class="wrap-input100 validate-input m-b-26">
						<span for="alamat" class="label-input100 text-white">Alamat</span>
						<input id="alamat" type="text" class="input100{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" placeholder="ALAMAT *" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26">
						<span for="email" class="label-input100 text-white">Email</span>
						<input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address *" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						
                    </div>
                    
					<div class="wrap-input100 validate-input m-b-26">
						<span for="password" class="label-input100 text-white">Password</span>
						<input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password *" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						
					</div>
					<div class="wrap-input100 validate-input m-b-26">
						<span for="password-confirm" class="label-input100 text-white">Password</span>
						<input id="password-confirm" type="password" class="input100" name="password_confirmation"  placeholder="Password Confirmation *" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100 text-white">Group id</span>
						<div class="">
                                <select id="grup"  class="input100{{ $errors->has('Grup Id') ? ' is-invalid' : '' }}" name="group_id" value="{{ old('group_id') }}" required autofocus>
                                    @foreach ($group as $grp)
                                    <option value="{{$grp->id}}">{{$grp->group_code}}</option>
                                        @endforeach
                                </select>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
						<span class="focus-input100"></span>
					</div>
                           
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<p class="text-white">Sudah punya akun ? <a class="text-white" href="{{url('login')}}"><u>Login</u></a></p>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="jkl/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="jkl/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="jkl/vendor/bootstrap/js/popper.js"></script>
	<script src="jkl/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="jkl/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="jkl/vendor/daterangepicker/moment.min.js"></script>
	<script src="jkl/vendor/daterangepicker/daterangepicker.js"></script>
<!--==============================================================================================-->
	<script src="jkl/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jkl/js/main.js"></script>

</body>
</html>