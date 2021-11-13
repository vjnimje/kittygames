<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gradient Test</title>
	<style type="text/css">
		#grad1 {
		height: 200px;
		background: rgb(255,255,255);
		background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(252,0,255,1) 100%);
		box-shadow: 0 0 12px 2px rgb(15 15 15 / 20%);
		}
		#grad2 {
		height: 200px;
		background: rgb(255,255,255);
		background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(252,0,255,1) 100%);
		box-shadow: 0 0 12px 2px rgb(15 15 15 / 20%);
		}
		#grad3 {
		height: 200px;
		background: rgb(255,255,255);
		background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(252,0,255,1) 100%);
		box-shadow: 0 0 12px 2px rgb(15 15 15 / 20%);
		}
		#img{
			max-width: 1200px;
			object-fit: cover;
		}
		#background{
			background-image:url('assets/testback.jpg');
		}
	</style>
</head>
<body id="background">
<div id="grad1" style="margin:50px;"></div>
<div id="grad2" style="margin:50px;"></div>
<div id="grad3" style="margin:50px;"></div>
</body>
</html>