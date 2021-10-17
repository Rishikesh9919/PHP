<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body{
            margin: 0;
            padding: 0;
            background-image: url("Clouds.gif");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }
        .main{
            display: block;
            width: 50%;
            margin:auto;
            box-sizing: border-box ;
        }
        .container{
            margin-top: 10%;
            background-color: sandybrown;
            border-radius: 10px;
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            box-shadow: 5px 5px 15px rgba(0,0,0,0.5);
        }
        .box{
            width: 40%;
            flex-wrap: wrap;
            margin: 15px;
        }
        .input-box{
            display: block;
            width: 80%;
            outline: none;
            height: 25px;
            border: 1px solid rgb(92, 59, 240);
            padding: 0 8px 0 8px;
            font-size: 0.8em;
            letter-spacing: 1.2px;
        }
        h3{
            display: block;
            width: 100%;
            font-size: 1.5em;
            text-align: center;
            margin-bottom:  20px;
        }
        span{
            display: block;
            width: 100%;
            text-align: center;
            color: red;
        }
        @media screen and (max-width: 768px){
            .main{
                width: 50%;
            }
            .container{
                flex-direction: column;
            }
            .box{
                width: auto;
                padding-left: 10%;
            }
        }
        .btnsub{
            display: block;
            width: 100%;
        }
        .btn{
            float: right;
            margin-right: 13%;
            margin-top: 2%;
            width: 70px;
            height: 35px;
            outline: none;
            font-size: 1em;
            margin-bottom: 10%;
        }
        nav{
            display: block;
            background-color: rgba(0,0,0,1);
            height: 42px;
        }
        .nav-item-left{
            display: flex;

        }
        ul{
            margin: 0;
            padding: 8px;
            display: inline-flex;
            list-style: none;
            width: 40%;
            justify-content: space-evenly;
        }
        li{
            color: #fff;
            
        }
        
    </style>
</head>
<body>
    <nav>
        <div class="nav-item-left">
            <ul>
                <li>Home</li>
                <li>Contact</li>
                <li>About</li>
            </ul>
        </div>
    </nav>
    <form action="database.php" method="POST" onsubmit="return valid()">
        <div class="main">
            <div class="container">
                <h3>Sign Up</h3>
                <span id="error"></span>
                <div class="box">
                    <label>Name</label>
                    <input type="text" name="name" id="Name" class="input-box" autocomplete="off">
                </div>
                <div class="box">
                    <label>Surname</label>
                    <input type="text" name="surname" id="Surname" class="input-box" autocomplete="off">
                </div>
                <div class="box">
                    <label>Email</label>
                    <input type="text" name="email" id="Email" class="input-box" autocomplete="off">
                </div>
                <div class="box">
                    <label>Password</label>
                    <input type="password" name="password" id="Password" class="input-box" autocomplete="off">
                </div>
                <div class="btnsub">
                    <input type="submit" name="submit" value="Submit" class="btn" autocomplete="off">
                </div>
            </div>
        </div>
    </form>
    <script>
        function valid(){
            var name = document.getElementById("Name").value;
            var surname = document.getElementById("Surname").value;
            var email = document.getElementById("Email").value;
            var pass = document.getElementById("Password").value;
            if (name == "" || surname == "" || email == "" || pass == ""){
                document.getElementById("error").innerHTML = "Please fill all the details";
                return false;
            }
            if (name == NaN || surname == NaN){
                document.getElementById("error").innerHTML = "Name ans Surname should be alphabet";
                return false;
            }
            if (email.indexOf("@") <= 0 || (email.charAt(email.length(-4))  != "." && email.charAt(email.length(-3))  != "." )){
                document.getElementById("error").innerHTML = "Enter a valid emal id";
                return false;
            }
        }
    </script>
</body>
</html>