<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 18px;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.ee{
    font-size: 2em;
}
.header{
    height: 80px;
    width: 70%;
    background-color: #89260d;
    border-radius: 3px;
    margin: 30px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px;
}
.header .logo{
    width: 100px ;
    height: 100px;
}
.cart{
    display: flex;
    background-color: white;
    justify-content: space-between;
    align-items: center;
    padding: 7px 10px;
    border-radius: 3px;
    width: 80px;
}
.fa-solid{
    color: #89260d;
}
.cart p{
    height: 22px;
    width: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 22px;
    background-color: #89260d;
    color: white;
}
.container{
    display: flex;
    width: 70%;
    margin-bottom: 30px;
}
#root{
    width: 60%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
}
.sidebar{
    width: 40%;
    border-radius: 5px;
    background-color: #eee;
    margin-left: 20px;
    padding: 15px;
    text-align: center;
}
.head{
    background-color:#89260d;
    border-radius: 3px;
    height: 40px;
    padding: 10px;
    margin-bottom: 20px;
    color: white;
    display: flex;
    align-items: center;
}
.foot{
    display: flex;
    justify-content: space-between;
    margin: 20px 0px;
    padding: 10px 0px;
    border-top: 1px solid #333;
}
.box{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    border: 1px solid #89260d;
    border-radius: 5px;
    padding: 15px;
}
.img-box{
    width: 100%;
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.images{
    max-width: 90%;
    max-height: 90%;
    object-fit: cover;
    object-position: center;
}
.bottom{
    margin-top: 20px;
    width: 100%;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 110px;
}
h2{
    font-size: 20px;
    color: red;
}
button{
    width: 100%;
    position: relative;
    border: none;
    border-radius: 5px;
    background-color:#89260d;
    padding: 7px 25px;
    cursor: pointer;
    color: white;
}
button:hover{
    background-color: #333;
}
.cart-item{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    background-color: white;
    border-bottom: 1px solid #aaa;
    border-radius: 3px;
    margin: 10px 10px;
}
.row-img{
    width: 50px;
    height: 50px;
    border-radius: 50px;
    border: 1px solid #89260d;
    display: flex;
    align-items: center;
    justify-content: center;
}
.rowimg{
    max-width: 43px;
    max-height: 43px;
    border-radius: 50%;
}
.fa-trash:hover{
    cursor: pointer;
    color: #333;
}

        </style>
        
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
        <a href="index.php"><img class="logo" src="images/logoo.png" alt=""> </a>
        <h3 class="ee"></h3>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total"> Mad 0.00
                    </h2>
                    
                </div> <a href="index1.php"><button class="btn"> Valider</button></a>  
            </div>
        </div>
        <script>
            const product = [
    {
        id: 0,
        image: 'images/2.png',
        title: 'Sweet strawberry',
        price: 1.99,
    },
    {
        id: 1,
        image: 'images/3.png',
        title: 'Cheesecake',
        price: 2.99,
    },
    {
        id: 2,
        image: 'images/4.png',
        title: 'Banana and vanilla',
        price: 12.99,
    },
    {
        id: 3,
        image: 'images/5.png',
        title: 'Nespresso',
        price: 10.99,
    },
    {
        id: 4,
        image: 'images/6.png',
        title: 'Breakfast',
        price: 15.99,
    },
    {
        id: 5,
        image: 'images/7.png',
        title: 'Pistachio Ice Cream Cone',
        price: 10.99,
    },
    {
        id: 6,
        image: 'images/8.png',
        title: 'Jus Orange',
        price: 10.99,
    },
    {
        id: 7,
        image: 'images/9.png',
        title: 'Ice Cream Sundae',
        price: 13.99,
    },
    {
        id: 8,
        image: 'images/11.png',
        title: 'Green lemon cake',
        price: 5.99,
    }
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>Mad ${price}</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "Mad "+0+"";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "Mad "+total+"";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>Mad ${price}</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}
document.getElementById("total").value=sessionStorage.getItem('TOTAL');


        </script>
      
    </body>
</html>