<?php 

	$bdd = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8','root','Borromee1');

	 $sql  = 'SELECT  `lastName`, `firstName` FROM `clients`';
	 $customerQuery=$bdd->query($sql);
	 if ($customerQuery->execute()) {
	 	$customersList=$customerQuery->fetchAll(PDO::FETCH_ASSOC);
	 }
	
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Clients</title>
    <style>
    .article {
        background-color: white;
    }

    html,
    body {
        background-color: grey;
    }
    </style>
</head>

<body>
    <div align="middle" class="article">
        <h1>Liste Clients</h1>
        <ul>
            <?php foreach ($customersList as $customer) : ?>
            <li>
                <?= $customer['firstName'] ?>
                <?=$customer['lastName']?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>