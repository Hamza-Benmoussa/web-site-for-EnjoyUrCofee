<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.table-style  {
    border-collapse: collapse;
    box-shadow: 0 5px 50px rgba(0,0,0,0.15);
    cursor: pointer;
    margin: 0px auto;
    border: 2px solid burlywood;
    margin-top: 10px;
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

}
body 
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
    margin-top: -20px;
	background: #89260d;
}
.box 
{
	position: relative;
	width: 380px;
	height: 550px;
	background: #89260d;
	border-radius: 8px;
	overflow: hidden;
    margin-top: 20px;
}
.box::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#f6ff00,#f6ff00);
	animation: animate 6s linear infinite;
}
.box::after 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#f6ff00,#f6ff00);
	animation: animate 6s linear infinite;
	animation-delay: -3s;
}
@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}
form 
{
	position: absolute;
	inset: 2px;
	background: white;
	padding: 50px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
h2 
{
	color: #89260d;
	font-weight: 500;
	text-align: center;
	letter-spacing: 0.1em;
}
.inputBox 
{
	position: relative;
	width: 300px;
	margin-top: 35px;
}
.inputBox input 
{
	position: relative;
	width: 100%;
	padding: 20px 10px 10px;
	background: transparent;
	outline: none;
	box-shadow: none;
	border: none;
	color: white;
	font-size: 1em;
	letter-spacing: 0.05em;
	transition: 0.5s;
	z-index: 10;
}
.inputBox span 
{
	position: absolute;
	left: 0;
	padding: 20px 0px 10px;
	pointer-events: none;
	font-size: 1em;
	color: #89260d;
	letter-spacing: 0.05em;
	transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span 
{
	color: #89260d;
	transform: translateX(0px) translateY(-34px);
	font-size: 0.75em;
}
.inputBox i 
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #89260d;
	border-radius: 4px;
	overflow: hidden;
	transition: 0.5s;
	pointer-events: none;
	z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i 
{
	height: 44px;
}
.links 
{
	display: flex;
	justify-content: space-between;
}
.links a 
{
	margin: 10px 0;
	font-size: 0.75em;
	color: #89260d;
	text-decoration: beige;
}
.links a:hover, 
.links a:nth-child(2)
{
	color: #89260d;
}
.coul{
	color: red;
}
input[type="submit"]
{
	border: none;
	outline: none;
	padding: 11px 25px;
	background: #89260d;
	cursor: pointer;
	border-radius: 4px;
	font-weight: 600;
	width: 200px;
	margin-top: 10px;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}
    </style>
</head>


<body>
    <?php require_once('../includes/sidebar.inc.php'); ?>
    <div class="table-style">
        <table>
            <thead>
                <tr>
                    <td>product id</td>
                    <td>name</td>
                    <td>prix</td>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('../functions/connect.fun.php');
                require_once('../functions/loginFunctions.fun.php');
                $product = fetchProductsFromDb();
                if ($product != null) {
                    for ($i = 0; $i < count($product); $i++) {
                ?>
                        <tr>
                            <td><?php echo $product[$i]['idproduit']; ?></td>
                            <td><?php echo $product[$i]['nomproduit']; ?></td>
                            <td><?php echo $product[$i]['prix']; ?></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
    <div class="box">
        <form action="../includes/addProduct.inc.php" method="post">
            <h2>add product</h2>
            <div class="inputBox">
                <input type="text" name="nomproduit" autofocus required>
                <span>nom produit</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="number" name="prix" required>
                <span>prix</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="number" name="cartegorie_id" required>
                <span>categorie id</span>
                <i></i>
            </div>
            <input type="submit" name="submit_new_product" value="ajouter produit">
        </form>
    </div>
</body>

</html>