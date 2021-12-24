<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - inLaundry</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            min-height: 100vh;
            overflow: hidden;
            font-family: 'Nunito', sans-serif;
        }

        .container{
            position: relative;
            width: 100%;
        }

        .navigation{
            position: fixed;
            width: 300px;
            height: 100%;
            background-color: #F7FAFF;
            border-left: 10px solid #F7FAFF;
            transition: 0.5s;
            overflow: hidden;
        }

        .navigation ul{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .navigation ul li{
            position: relative;
            width: 100%;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .navigation ul li:hover,
        .navigation ul li.hovered{
           background-color: white;
        }

        .navigation ul li:nth-child(1){
            margin-top:30px;
            margin-bottom:81px;
            pointer-events: none;
        }

        .navigation ul li a{
            position: relative;
            display: block;
            width:86%;
            display: flex;
            text-decoration: none;
            color: #A0AAC8;
        }

        .navigation ul li:hover a,
        .navigation ul li.hovered a{
            color: #495972;
        }

        .navigation ul li a .icon{
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 75px;
            text-align: center;
        }

        .navigation ul li a .icon ion-icon{
            font-size: 1.75em;
        }

        .navigation ul li a .title{
            position: relative;
            display: block;
            padding: 0 10px;
            height: 60px;
            line-height: 60px;
            text-align: start;
            white-space: nowrap;
        }

        .navigation ul li:hover a::before,
        .navigation ul li.hovered a::before{
            content: '';
            position: absolute;
            right: 0;
            top: -50px;
            width: 50px;
            height: 50px;
            background: transparent;
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px white;
            pointer-events: none;
        }

        .navigation ul li:hover a::after,
        .navigation ul li.hovered a::after{
            content: '';
            position: absolute;
            right: 0;
            bottom: -50px;
            width: 50px;
            height: 50px;
            background: transparent;
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px white;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <img width="170" src="assets\logo\logo.png" alt="">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="grid"></ion-icon></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <span class="title">Orders</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="shirt"></ion-icon></span>
                        <span class="title">Products</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="file-tray-full"></ion-icon></span>
                        <span class="title">Marketing</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="megaphone"></ion-icon></span>
                        <span class="title">Reports</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //fungsi untuk hovered select

        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }

        list.forEach((item) =>
        item.addEventListener('mouseover', activeLink));
    </script>
</body>
</html>