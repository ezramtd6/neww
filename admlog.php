
<?php include('Server1.php');?>

<!DOCTYPE html>
<html>
<head>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			font-size: 120%;
			background: :#F8F8FF; 
		}
		.header{
			width: 30%;
			margin: 50px auto 0px;
			color: white;
			background: blue;
			text-align: center;
			border: 1px solid #B0C4DE;
			border-bottom:none;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;  
		}
		form{
			width:30%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #B0C4DE;
			background: white;
			border-radius:0px 0px 10px 10px;}
			.input-group{
				margin: 10px 0px 10px 0px;
			}
			.input-group label{
				display: block;
				text-align: left;
				margin: 3px;

			}
			.input-group input{
				height:30px;
				width:93%;
				padding:5px 10px;
				font-size: 16px;
				border-radius: 5px;
				border:1px solid gray;
			}
			.btnn{
				padding: 10px;
				font-size: 15px;
				color: white;
				background: red;
				border: none;
				border-radius:5px; 
			}

		}
	</style>

	<title>የመግቢያ ገጽ</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body> <div class="text-center logo mr-5">
                        <img class="flag mb-2" src="./assets/images/logo.png" alt=""><br>
                        የኢትዮጵያ ብሔራዊ ምርጫ ቦርድ<br>
                        National Election Board of Ethiopia
                    </div>
	<div class="header">
		<h2>የቀበሌ ሰራተኞች የመግቢያ ቅጽ</h2></div>

		<form action="admlog.php" method="post">
			<div class="input-group">
				<?php include('errors.php');?>
				<label>ስልክ ቁጥር</label><input type="text" name="id"></div>
				<div class="input-group">
				<label>የይለፍ ቃል ያስገቡ</label><input type="password" name="pass"></div>
				<input type="submit" name="login" class="btnn" value="ጠቅ ያድርጉ">
               </form>

</body>
</html>