<!DOCTYPE html>
<html lang="en">
<head>
	<title>Заявка Nesh</title>
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
				<form class="contact3-form validate-form" action=" {{ route('appointments.store') }} " method="post">
					@csrf
					<span class="contact3-form-title">
						Рассрочка
					</span>

					<div class="wrap-input3 validate-input" data-validate="Name is required" style="padding-top: 0px">
						<input class="input3" type="text" name="name" placeholder="Ваше имя">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<input class="input3" type="text" name="phone" id="phone" placeholder="Ваш номер телефона">
						<span class="focus-input3"></span>
					</div>

					<!--<div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="service">
								<option>Needed appointmentProcedures</option>
								<option>eCommerce Bussiness</option>
								<option>UI/UX Design</option>
								<option>Online appointmentProcedures</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="budget">
								<option>Budget</option>
								<option>1500 $</option>
								<option>2000 $</option>
								<option>3000 $</option>
							</select>
						</div>
						<span class="focus-input3"></span>
                    </div>-->
                    
                    <span class="text-label" style="padding-bottom: 20px;">Выберите услуги:</span>
                    <div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="checkbox" name="appointmentProcedures[]" value="Перманентный макияж бровей в технике «Пудровое напыление»">
							<label class="label-radio3" for="radio1">
								Перманентный макияж бровей в технике «Пудровое напыление» - 270 рублей
							</label>
						</div>

                        <div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio2" type="checkbox" name="appointmentProcedures[]" value="Перманентный макияж бровей в технике «Волоски»">
							<label class="label-radio3" for="radio2">
								Перманентный макияж бровей в технике «Волоски» - 320 рублей
							</label>
                        </div>
                        
                        <div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio3" type="checkbox" name="appointmentProcedures[]" value="Перманентный макияж губ">
							<label class="label-radio3" for="radio3">
								Перманентный макияж губ - 270 рублей
							</label>
                        </div>
                        
                        <div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio4" type="checkbox" name="appointmentProcedures[]" value="Перманентный макияж межреснички">
							<label class="label-radio3" for="radio4">
								Перманентный макияж межреснички - 220 рублей
							</label>
                        </div>
                        
                        <div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio5" type="checkbox" name="appointmentProcedures[]" value="Перманентный макияж стрелок">
							<label class="label-radio3" for="radio5">
								Перманентный макияж стрелок - 300 рублей
							</label>
                        </div>
                        
                        <div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio6" type="checkbox" name="appointmentProcedures[]" value="Коррекция одной зоны">
							<label class="label-radio3" for="radio6">
								Коррекция одной зоны - 100 рублей
							</label>
                        </div>

                        <div class="wrap-input3 validate-input" id="corrections_block">
                            <input class="input3" type="number" min="1" name="corrections_num" id="corrections_num" placeholder="Количество процедур коррекции">
                            <span class="focus-input3"></span>
                        </div>
                        
                        <div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio7" type="checkbox" name="appointmentProcedures[]" value="Обновление одной зоны">
							<label class="label-radio3" for="radio7">
								Обновление одной зоны - 160 рублей
							</label>
                        </div>

                        <div class="wrap-input3 validate-input" id="renews_block">
                            <input class="input3" type="number" min="1" type="text" name="renews_num" id="renews_num" placeholder="Количество процедур обновления">
                            <span class="focus-input3"></span>
                        </div>
                    </div>

                    <div class="contact3-form-radio m-r-42" style="padding-bottom: 30px;">
                        <span class="text-label">Желаемая дата визита</span>
                        <input type="date" name="visit_date" id="date" class="date" required>
                    </div>
                    
					<!--<div class="wrap-input3 validate-input" data-validate = "Message is required">
						<textarea class="input3" name="message" placeholder="Your Message"></textarea>
						<span class="focus-input3"></span>
					</div>-->

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn">
							Рассчитать
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/select2.min.js') }}"></script>
	<script>
		$(".selection-7").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>

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
