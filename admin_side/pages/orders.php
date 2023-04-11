<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table-style  {
    border-collapse: collapse;
    box-shadow: 0 5px 50px rgba(0,0,0,0.15);
    cursor: pointer;
    margin: 0px auto;
    border: 2px solid burlywood;
    margin-top: 20px;
    
    text-align: center;
    justify-content: center;
    margin-left: 500px;
}
body 
{
	display: flex;
	justify-content: center;
	align-items: center;
    margin-top: -300px;
	min-height: 100vh;
	flex-direction: column;
	background: #89260d;
}

thead tr {
    background-color: burlywood;
    color: #fff;
    text-align: left;
}

th, td {
    padding: 15px 20px;
    text-align: center;
}

tbody tr, td, th {
    border: 1px solid #ddd;
}

tbody tr:nth-child(even){
    background-color: #f3f3f3;
}

@media screen and (max-width: 550px) {
  body {
    align-items: flex-start;
  }
  .table-style  {
    width: 100%;
    margin: 0px;
    font-size: 10px;
  }
  th, td {
    padding: 10px 7px;
}
    </style>
</head>
<body>
<?php require_once('../includes/sidebar.inc.php'); ?>
    <div class="table-style">
        <table>
            <thead>
                <tr>
                    <td>id commande</td>
                    <td>date commande</td>
                    <td>date livraison</td>
                    <td>id client</td>
                    <td>heure</td>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('../functions/connect.fun.php');
                require_once('../functions/loginFunctions.fun.php');
                $commande = fetchcommandesFromDb();
                if ($commande != null) {
                    for ($i = 0; $i < count($commande); $i++) {
                ?>
                        <tr>
                            <td><?php echo $commande[$i]['idcommande']; ?></td>
                            <td><?php echo $commande[$i]['datecommande']; ?></td>
                            <td><?php echo $commande[$i]['datelivraison']; ?></td>
                            <td><?php echo $commande[$i]['idclient']; ?></td>
                            <td><?php echo $commande[$i]['heure']; ?></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>