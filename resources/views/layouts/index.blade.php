<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - inLaundry</title>
    <link rel="icon" href="assets\logo\logoEdit.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body{
            min-height: 100vh;
            overflow: hidden;
            font-family: 'Nunito', sans-serif;
        }

        .containerSidebar{
            position: relative;
            width: 100%;
        }

        .navigationSidebar{
            position: fixed;
            width: 300px;
            height: 100%;
            background-color: #F7FAFF;
            border-left: 10px solid #F7FAFF;
            transition: 0.5s;
            overflow: hidden;
        }

        .navigationSidebar ul{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .navigationSidebar ul li{
            position: relative;
            width: 100%;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .navigationSidebar ul li:hover,
        .navigationSidebar ul li.hovered{
           background-color: white;
        }

        .navigationSidebar ul li:nth-child(1){
            margin-top:50px;
            margin-bottom:81px;
            pointer-events: none;
        }

        .navigationSidebar ul li a{
            position: relative;
            display: block;
            width:100%;
            display: flex;
            text-decoration: none;
            color: #A0AAC8;
        }

        .navigationSidebar ul li:hover a,
        .navigationSidebar ul li.hovered a{
            color: #495972;
        }

        .navigationSidebar ul li a .icon{
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 75px;
            text-align: center;
        }

        .navigationSidebar ul li a .icon ion-icon{
            font-size: 1.75em;
        }

        .navigationSidebar ul li a .title{
            position: relative;
            display: block;
            padding: 0 10px;
            height: 60px;
            line-height: 60px;
            text-align: start;
            white-space: nowrap;
        }

        .navigationSidebar ul li:hover a::before,
        .navigationSidebar ul li.hovered a::before{
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

        .navigationSidebar ul li:hover a::after,
        .navigationSidebar ul li.hovered a::after{
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

        .main{
            position: absolute;
            left: 300px;
        }

        .content-dashboard{
            margin-left:50px;
            margin-top:50px;
        }

        .content-orders{
            margin-left:50px;
            margin-top:50px;
        }
    </style>
</head>
<body>
    <div class="containerSidebar">
        <div class="navigationSidebar">
            <ul>
                <li>
                    <img width="170px" src="https://i.postimg.cc/q7wFVBpQ/logo.png" alt="">
                </li>

                <li>
                    <a href="/admin/dashboard">
                        <span class="icon"><ion-icon name="grid"></ion-icon></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/order">
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
                    <a href="/admin/report">
                        <span class="icon"><ion-icon name="megaphone"></ion-icon></span>
                        <span class="title">Reports</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main">
        @yield('container')
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //fungsi untuk hovered select

        let list = document.querySelectorAll('.navigationSidebar li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }

        list.forEach((item) =>
        item.addEventListener('mouseover', activeLink));
    </script>

    <script>
        const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        ];
    
        const data = {
        labels: labels,
        datasets: [{
            label: 'Testing Chart.js',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45], //dataset
        }]
        };
    
        const config = {
        type: 'line',
        data: data,
        options: {}
        };
    </script>

    <script>
        const myChart = new Chart(
        document.getElementById('myChart'),
        config
        );
    </script>
</body>
</html>