<html>
    <head>
        <meta charset="UTF-8">
        <title>test</title>
    </head>
    <body>
    	<?php
        	$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=myHeroku', 'postgres', 'thanhmon1999');
                $pdo->setAttribute(PDO::ATTR_TIMEOUT, 15);
        	echo "fail!!!!!!";
                
                
		?>
	</ul>
    </body>
</html>