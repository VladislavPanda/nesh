<!DOCTYPE html>
<html lang="en">
<head>
	<title>Вход в систему</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
    <div class="bg-contact3" style="background-image: url('{{ asset('images/nesh.jpg') }}');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" action=" {{ route('admin.signin') }} " method="post">
					@csrf
					<span class="contact3-form-title">
						Вход в систему
					</span>

					<div class="wrap-input3 validate-input" data-validate="Name is required" style="padding-top: 0px">
						<input class="input3" type="text" name="name" placeholder="Введите логин">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<input class="input3" type="text" name="phone" id="phone" placeholder="Введите пароль">
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn">
							Войти
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
