@extends('plantilla')
@section('contenedor')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

<link rel="stylesheet" href="{{('css/form.css')}}">
<link rel="stylesheet" href="{{('js/form.js')}}">

</head>
<body>
<body>

<section class="form_wrap">

	<section class="cantact_info">
		<section class="info_title">
			<span class="fa fa-user-circle"></span>
			<h2>INFORMACION<br>DE CONTACTO</h2>
		</section>
		<section class="info_items">
			<p><span class="fa fa-envelope"></span> jobs@talentscode.com</p>
			<p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
		</section>
	</section>

	<form action="POST" class="form_contact">
		<h2>Envia un mensaje</h2>
		<div class="user_info">
			<label for="names">Nombres *</label>
			<input type="text" id="names">

			<label for="phone">Telefono / Celular</label>
			<input type="text" id="phone">

			<label for="email">Correo electronico *</label>
			<input type="text" id="email">

			<label for="mensaje">Mensaje *</label>
			<textarea id="mensaje"></textarea>

			<input type="button" value="Enviar Mensaje" id="btnSend">
		</div>
	</form>

</section>

</body>
</body>
</html>

@endsection