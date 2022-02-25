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
        <div class="container-fluid h-100" id="bg-contact3" style="background-image: url('{{ asset('images/nesh.jpg') }}')">
            <div class="row align-items-center h-100" style="background: rgba(255,255,255,0.8);">
                <div class="col-sm-12">
                    <div class="row justify-content-center">
                        <div class="col-5 text-center" style="margin-top: -200px;">     
                            <!--<span id="list-title">Детали заявки: </span>-->
                            <ol class="list-counter-square">
                                @foreach($appointment['appointmentProcedures'] as $key => $value)
                                    <li>{{ $value }}</li>
                                @endforeach
                            </ol>
                            <div id="info-block" style="margin-left: 0px;">
                                <p id="info-text" style="margin-bottom: 10px;">Общая сумма: {{ $appointment['total_price'] }} рублей</p>
                                <p id="info-text">Когда и сколько Вам нужно будет платить:</p>
                                <p id="info-text">Первоначальный взнос (в день процедуры):  Сумма =  {{ $appointment['initial_fee'] }} рублей</p>
                                <p id="info-text">Первый платёж по рассрочке: {{ $appointment['installment_payment_date1'] }}, Сумма =  {{ $appointment['installment_sum'] }} рублей</p>
                                <p id="info-text">Второй платёж по рассрочке: {{ $appointment['installment_payment_date2'] }}, Сумма =  {{ $appointment['installment_sum'] }} рублей</p>
                                <p id="info-text">Третий платёж по рассрочке: {{ $appointment['installment_payment_date3'] }}, Сумма =  {{ $appointment['installment_sum'] }} рублей</p>
                                @if(isset($appointment['installment_payment_date4'])) <p id="info-text">Четвёртый платёж по рассрочке: {{ $appointment['installment_payment_date4'] }}, Сумма =  {{ $appointment['installment_sum'] }} рублей</p>@endif
                                <a href="https://n139367.yclients.com/company:147450" class="btn">Записаться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--===============================================================================================-->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/select2.min.js') }}"></script>

</body>
</html>