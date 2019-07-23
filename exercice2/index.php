<?php 

	$bdd = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8','root','Borromee1');

	$sql  = 'SELECT `type` FROM `showTypes`';
	$showQuery=$bdd->query($sql);

    if ($showQuery->execute()) {
        $showTypeList=$showQuery->fetchAll(PDO::FETCH_OBJ);
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
        <h1>Liste types Spectacles</h1>
        <ul>
            <?php foreach ($showTypeList as $showType) : ?>
            <li>
                <?= $showType->type ?>
               
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>