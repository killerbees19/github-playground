<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>What's your name?</title>
		<script>
			<?php

			# DO NOT USE THIS LINE ANYWHERE! IT'S A REAL SECURITY NIGHTMARE.
			printf("var test = '%s';\n", addslashes($_GET['name'] ?? $_GET['name']));

			?>
			if(test) alert('Hello ' + test + '!');
		</script>
	</head>
	<body>
		<form action="page.php" method="get">
			Your name:
			<input type="text" name="name" value="<?php print(htmlspecialchars($_GET['name'] ?? $_GET['name'])); ?>" size="9" />
			<input type="submit" name="submit" />
		</form>
	</body>
</html>
