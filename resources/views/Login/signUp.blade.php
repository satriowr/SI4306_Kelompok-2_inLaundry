<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="https://i.ibb.co/X2rghdV/output-onlinepngtools-13.png">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Sign up | inLaundry</title>
    
    <style>
        body,
        html {
        	width: 100%;
        	height: 100%;
            font-family: 'Manrope', sans-serif;
        }

        body {
        	margin: 0;
        	padding: 0;
        	background: white;
        }

        .bubbles {
        	position: absolute;
        	width: 100%;
        	height: 100%;
        	z-index: 0;
        	overflow: hidden;
        	top: 0;
        	left: 0;
        }

        .bubble {
        	position: absolute;
        	bottom: -100px;
        	width: 40px;
        	height: 40px;
        	background: #f1f1f1;
        	border-radius: 50%;
        	opacity: 0.5;
        	animation: rise 10s infinite ease-in;
        }

        .bubble:nth-child(1) {
        	width: 40px;
        	height: 40px;
        	left: 10%;
        	animation-duration: 8s;
        }

        .bubble:nth-child(2) {
        	width: 20px;
        	height: 20px;
        	left: 20%;
        	animation-duration: 5s;
        	animation-delay: 1s;
        }

        .bubble:nth-child(3) {
        	width: 50px;
        	height: 50px;
        	left: 35%;
        	animation-duration: 7s;
        	animation-delay: 2s;
        }

        .bubble:nth-child(4) {
        	width: 80px;
        	height: 80px;
        	left: 50%;
        	animation-duration: 11s;
        	animation-delay: 0s;
        }

        .bubble:nth-child(5) {
        	width: 35px;
        	height: 35px;
        	left: 55%;
        	animation-duration: 6s;
        	animation-delay: 1s;
        }

        .bubble:nth-child(6) { 
        	width: 45px;
        	height: 45px;
        	left: 65%;
        	animation-duration: 8s;
        	animation-delay: 3s;
        }

        .bubble:nth-child(7) {
        	width: 90px;
        	height: 90px;
        	left: 70%;
        	animation-duration: 12s;
        	animation-delay: 2s;
        }

        .bubble:nth-child(8) {
        	width: 25px;
        	height: 25px;
        	left: 80%;
        	animation-duration: 6s;
        	animation-delay: 2s;
        }

        .bubble:nth-child(9) {
        	width: 15px;
        	height: 15px;
        	left: 70%;
        	animation-duration: 5s; 
        	animation-delay: 1s;
        }

        .bubble:nth-child(10) {
        	width: 90px;
        	height: 90px;
        	left: 25%;
        	animation-duration: 10s;
        	animation-delay: 4s;
        }

        @keyframes rise {
        	0% {
        		bottom: -100px;
        		transform: translateX(0);
        	}
        	50% {
        		transform: translate(100px);
        	}
        	100% {
        		bottom: 1080px;
        		transform: translateX(-200px);
        	}
        }

        .login-fill h3{
            font-size: 30px;
            font-weight: 750;
            margin-left: 30px;
            margin-top: 40px;
            color: #1C1C1E;
        }

        .login-fill{
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width: 400px;
            height: 600px;
            background-color: white;
            border-radius: 10px;
        }

        .btn-google {
            position:absolute;
            top: 95%;
            left:50%;
            transform:translate(-50%,-50%);
            color: #545454;
            width: 85%;
            height: 40px;
            padding-top: 5px;
            padding-bottom: 0;
            background-color: #ffffff;
            font-size: 16px;
            box-shadow: 0 1px 2px 1px #ddd;
        }

        .btn-google img{
            margin-right: 10px;
        }

        .or-container {
            align-items: center;
            color: #ccc;
            display: flex;
            position: absolute;
            top: 86%;
            left:50%;
            transform:translate(-50%,-50%);
            width: 90% ;
            
        }

        .line-separator {
            background-color: #ccc;
            flex-grow: 5;
            height: 1px
        }

        .or-label {
            flex-grow: 1;
            margin: 0 15px;
            text-align: center
        }

        .form-login{
            width: 85%;
            margin-left: 30px;
            margin-top: 20px;
        }

        .btn-login button{
            margin-top:30px;
            width: 100%;
            height: 40px;
            color: #545454;
            height: 40px;
            padding-top: 5px;
            padding-bottom: 0;
            background-color: #ffffff;
            font-size: 16px;
            box-shadow: 0 1px 2px 1px #ddd;
            border:none;
            border-radius: 7px;
        }

    </style>
</head>
<body>
    <div class="container">

        <div class="bubbles">

            <div class="login-fill">
                <h3>Sign up</h3>
    
                <div class="row">
                    <div class="col-md-12"> <a class="btn btn-lg btn-google btn-block btn-outline" href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png">Sign up with Google</a> </div>
                </div>
    
                <form action="/signup" method="POST">
                @csrf 
                    <div class="form-login">
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input type="text" name="name" class="form-control mt-1 @error('name')
                            is-invalid @enderror" id="name" placeholder="Enter full name" required>

                            @error('name')
                                <div class="invalid-feedback">
                                    
                                </div>
                            @enderror
                            
                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control mt-1 @error('email')
                            is-invalid @enderror" id="email" placeholder="Enter email" required>
                        
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        
                        </div>
    
                        <div class="form-group mt-3">
                            <label for="password" >Password</label>
                            <input type="password" name="password" class="form-control mt-1 @error('password')
                            is-invalid @enderror" id="password" placeholder="at least 8 characters" required>
                        
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        
                        </div>
    
                        <br>
                
                        <div class="sign-up" style="font-size: 12px;">
                            <p>Already have an account?</p>
                            <a href="/signin" style="text-decoration:none;">Log in</a>
                        </div>
    
                        <div class="btn-login">
                            <button type="submit">Sign up</button>
                        </div>
                    
                    </div>
                </form>
    
            </div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>
    
    </div>

</body>
</html>