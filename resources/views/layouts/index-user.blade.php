<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

    <style>
        .icon-navbar ion-icon{
            font-size: 1.5em;
            color: #1597E5;
            opacity: 70%;
        }

        .profile ion-icon{
            font-size: 1.5em;
            color: #1597E5;
            opacity: 70%;
        }

        .profile{
            display: flex;
            flex-direction: row;
            color: #1597E5;
           
        }

        .right{
            display: flex;
            flex-direction: row;
        }

        .flexbox{
            display: flex;
            flex-direction:row;
        }

    </style>
    
</head>
<body>
    <nav style="background-color:#F7FAFF" class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/">
              <img width="170" src="assets\logo\logo.png" alt="">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <div class="status-nav" style="width: 300px; height:48px; background-color:white; border-radius:100px; padding-top:9px; padding-left:20px; padding-right:20px;">
                <div class="flexbox d-flex justify-content-between">
                    <div class="icon-navbar" style="margin-top: 4px">
                        <a href="" style="text-decoration: none">
                            <ion-icon name="reader"></ion-icon>
                        </a>
                        <a href="" style="text-decoration: none">
                            <ion-icon name="notifications" style="margin-left:10px"></ion-icon>
                        </a>   
                    </div>

                    <div class="profile">
                        <div class="right" style="margin-top: 4px; margin-right:10px;">
                            <a href="" style="text-decoration: none">
                                <ion-icon name="wallet" style="margin-right:5px"></ion-icon>
                            </a>
                            <h6 style="margin-top: 2px">1000000</h6>
                        </div>

                        <div class="profile-picture">
                            <img width="30px" style="border-radius: 100px" src="data:image/jpeg;base64,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" alt="">
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </nav>

    <div class="container">
        @yield('container')
    </div>
    
</body>
</html>