<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Введите капчу</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
		body {
			background-color: red;
			text-align: center;
			color: white;
			text-shadow: 0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000,0 0 1px #000;
			}

			img {
			border: 2px solid #000;
			height: 130px;
			width: 400px;
			margin: 0 auto;
			}

			input {
			margin: 20px 0 !imporatnt;
			}

			.code {
				padding: 7px;
				font-size: 23px;
				text-transform: uppercase;
				margin: 20px 0;
			}

			.clickmoi {
				border: 0px;
				padding: 10px;
				font-size: 23px;
				color: white;
				background: blue;
				cursor: pointer;
				border-radius: 15px;
			} 
	</style>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-xs-12">
        <br><br><br>
        <h3>AntiDDOS система активирована.</h3><br>
        <form method="post" class="form text-center" name="<?=$nom_form; ?>">
          <div class="form-group">
          <input type="hidden" name="<?=$_SESSION['variable_du_form']; ?>" value="JnYHSNp"> 
          <div class="text-center"><img  class="img-responsive"  src="/templates/common/new2/php/anti_ddos/securitecode.php"></div><br>
          <input type="text" name="valCAPTCHA" class="code form-control" placeholder="Капча *" autocomplete="off" required>
		  <br>
		  <p>* Вводить капчу нужно большими буквами</p>
          <input type="button" class="btn btn-default clickmoi" onclick="go()" value="Я не робот! "> 
          </div>
        </form> 
      </div>
    </div>
  </div>
<script type="text/javascript">function go(){ document.<?=$nom_form; ?>.submit(); }</script>
</body>
</html>