<html>
	<head>Heading</head>
	<body>
	<?php
		$i = 1;
		do {
			if($i % 2 == 0)
				echo "<h".$i." style=color:red>Heading ".$i."</h".$i.">";
			if($i % 2 == 1)
				echo "<h".$i.">Heading ".$i."</h".$i.">";
			$i++;
		} while ($i <= 6);
		?>
	</body>
</html>