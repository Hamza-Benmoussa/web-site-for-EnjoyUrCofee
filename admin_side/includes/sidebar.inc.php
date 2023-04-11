<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: burlywood;
            height: 80px;
            width: 100%;
            
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;

        }

        nav ul {
            float: right;
            margin-right: 55px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 7px 13px;
            cursor: pointer;
        }

        label.logo {
            color: white;
            font-size: 35px;
            line-height: 80px;
            padding: 0 100px;
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .checkButton {
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }

        .myCheckBox {
            display: none;
        }

        a:hover,
        a.active {
            color: #f7c324;
        }

        @media screen and (max-width:952px) {
            label.logo {
                font-size: 30px;
                padding-left: 50px;
            }

            nav ul li a {
                font-size: 16px;
            }
        }

        @media screen and (max-width:858px) {
            .checkButton {
                display: block;
            }

            ul {
                position: fixed;
                width: 100%;
                height: 100vh;
                background-color: rgb(239, 232, 233);
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }

            nav ul li {
                display: block;
                margin: 50px 0;
                line-height: 30px;
            }

            nav ul li a {
                font-size: 20px;
                color: black;
            }

            a:hover,
            a.active {
                color: #e60064;
            }

            .myCheckBox:checked~ul {
                left: 0;
            }
        }
    </style>

</head>

<body>
    <nav>
        <input type="checkbox" class="myCheckBox" id="myCheck">
        <label for="myCheck" class="checkButton">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo">Enjoy Ur Coffee<span style="color:#f7c324"></span></label>
        <ul>

            <li class="li_norm"><a href="adminUsers.php" class="a_norm">
                    Admin users</a>
            </li>


            <li class="li_norm"> <a href="products.php" class="a_norm">
                    Products</a>
            </li>


            <li class="li_norm"><a href="orders.php" class="a_norm">
                    Orders</a>
            </li>


            <li class="li_norm"> <a href="../includes/logout.inc.php" class="a_norm">
                    Log out</a>
            </li>

        </ul>
    </nav>
</body>

</html>