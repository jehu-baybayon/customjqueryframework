<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/function.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="navigation"></div>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/function.js"></script>
	<script type="text/javascript">
		$(".navigation").navigation({
			navColor: "#103c42",
			textColor: "white",
			navMenus: [
				{data: "HOME"},
				{
					data: "SERVICES",
					dropdown: "true",
					subMenus: [
						{data: "WEB"},
						{data: "SOFTWARE"},
						{data: "MOBILE"}
					]
				},
				{data: "ABOUT"},
				{data: "CONTACT"}
			]
		});
	</script>
</body>
</html>