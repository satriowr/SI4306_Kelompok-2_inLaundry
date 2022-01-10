<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inLaundry</title>
    <link rel="icon" href="assets\logo\logoEdit.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        body{
            font-family: 'Nunito', sans-serif;
            /* height: 100000000000px; */
        }
        
        .active {
            color: #1597E5 !important;
        }

        
    </style>

</head>
<body>
    <nav style="background-color:white" class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/">
              <img width="170" src="assets\logo\logo.png" alt="">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul style="font-weight:600" class="navbar-nav gap-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">How it Works</a>
              </li>

              {{-- <li class="nav-item">
                <a href="#" class="nav-link">Testimony</a>
              </li> --}}

              <li>
                  <a href="/signin">
                    <button style="background-color: #1597E5; width:100px; border-style:none;" type="button" class="btn btn-primary">Login</button>
                  </a>
              </li>

            </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        <div class="home d-flex flex-row justify-content-between" style="margin-top:120px">
            <div class="title" style="width:700px; margin-top:60px">
                <h3 style="font-size: 36px">Are you looking for a laundry that will come through for you?</h3>
                <br>
                <h1 style="font-size: 72px; font-weight:bold; width:900px">This is the <br><span style="color: #1597E5" id="typed"></span></h1>
                <div class="btn-getStarted mt-5">
                    <a href="/signup">
                        <button style="background-color: #1597E5; width:176.15px; height:51.94px; border-style:none" type="button" class="btn btn-primary">Get Started</button>
                    </a>
                </div>
            </div>

            <div class="iillustrator">
                <img width="400px" src="assets\image.png" alt="">
            </div>
        </div>

        <div class="aboutUs" style="margin-top:120px">
            <div class="title-about d-flex flex-row justify-content-end">
                {{-- <img style="margin-top:23px;" width="32px" height="32px" src="assets\icon\Group 68.png" alt="">
                <h4 style="margin-top:23px; font-size: 36px;">Who we are</h4>
                <hr style="width:386.3px; border: 1px solid #1597E5; margin-top:50px; border-radius:7px"> --}}
                <h1 style="font-size: 72px; font-weight:bold; color: #1597E5;">About Us</h1>
            </div>

            <div class="content-about" style="margin-top:50px">

                <div class="about-atas d-flex flex-row justify-content-between">
                    <div class="image-about">
                        <img width="450.78px" height="412px" src="assets\1.png" alt="">
                    </div>
    
                    <div class="text-about" style="width: 600px; margin-top:100px">
                        <h3 style="font-size: 36px"><span style="color:#1597E5">inLaundry</span> is the modern Solution for your laundry problem</h3><br>
                        <p style="font-size: 24px">With us, your laundry will be done in no time and we’re gonna deliver it for you. </p>
                    </div>
                </div>
                
                <br>

                <div class="about-bawah d-flex flex-row justify-content-between mt-5" >
                    <div class="text" style="margin-top:100px; width:718.12px">
                        <h3 style="font-size: 36px">Customized your order based on your needs</h3><br>
                        <p style="font-size: 24px; width:600px">Adjust your laundry situasion with us and we’re going to take care the rest of it.</p>
                    </div>

                    <div class="image-about">
                        <img width="341px" src="assets\handuk.png" alt="">
                    </div>
                </div>    
            </div>

            <div class="how-it-works" style="margin-top:120px">
                <h1 style="font-size: 72px; font-weight:bold; color: #1597E5;">How it Works</h1>
                <div class="gambar d-flex flex-row justify-content-center gap-5" style="margin-top:77px">
                    <div class="services text-center">
                        <img width="207.91px" height="195px" src="assets\Rectangle 15.png" alt="">
                        <p style="font-size:24px; font-weight:bold">services</p>
                    </div>

                    <div class="pick-up text-center">
                        <img width="207.91px" height="195px" src="assets\Rectangle 15-1.png" alt="">
                        <p style="font-size:24px; font-weight:bold">Pick Up</p>
                    </div>

                    <div class="payment text-center">
                        <img width="207.91px" height="195px" src="assets\Rectangle 15-2.png" alt="">
                        <p style="font-size:24px; font-weight:bold">Payment</p>
                    </div>

                    <div class="check-status text-center">
                        <img width="207.91px" height="195px" src="assets\Rectangle 15-3.png" alt="">
                        <p style="font-size:24px; font-weight:bold">Check Status</p>
                    </div>
                </div>
                <div class="btn-getStarted d-flex justify-content-center" style="margin-top:81px">
                    <a href="/signup">
                        <button style="background-color: #1597E5; width:176.15px; height:51.94px; border-style:none" type="button" class="btn btn-primary">Get Started</button>
                    </a>
                </div>
            </div>

            {{-- <div class="services" style="margin-top:120px">
                <div class="title-services d-flex justify-content-end">
                    <h1 style="font-size: 72px; font-weight:bold; color: #1597E5;">Testimony</h1>
                </div>

                <div class="content-service d-flex flex-row gap-3 mt-5">
                    <img width="289.72px" src="assets\Group 65.png" alt="">
                    <img width="289.72px" src="assets\Group 66.png" alt="">
                    <div class="slider mt-2" style="margin-left:150px">
                        <div class="content-slide">
                            <div class="main-content" style="
                            width:463.56px;
                            height: 305.77px;
                            border-style:solid;
                            border-width:1px;
                            border-color:#1597E5;
                            border-radius: 5px 70px;
                            ">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <footer class="text-center text-lg-start bg-light text-muted" style="margin-top:100px; background-color:#ECECEC;">
        <!-- Section: Social media -->
        <section
          class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
          </div>
          <!-- Left -->
      
          <!-- Right -->
          <div>
            <a href="" class="me-4 text-reset">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->
      
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <img width="170" src="assets\logo\logo.png" alt="">
                </h6>
                <p>
                  inLaundry is the modern Solution for your laundry problem

                  With us, your laundry will be done in no time and we’re gonna deliver it for you.
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  services
                </h6>
                <p>
                  <a href="#!" class="text-reset">Dry Clean</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Washing & Ironing</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Quick Wash</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Company
                </h6>
                <p>
                  <a href="#!" class="text-reset">About Us</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Job</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Our Team</a>
                </p>

              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Contact
                </h6>
                <p><i class="fas fa-home me-3"></i> Kediri, Jawa Timur 64132</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  admin@inlaundry.com
                </p>
                <p><i class="fas fa-phone me-3"></i> (012) 99779927</p>
                <p><i class="fas fa-print me-3"></i> (012) 99779928</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2021 Copyright:
          <a class="text-reset fw-bold" href="/">inLaundry</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>

{{-- typeJS --}}
<script type="text/javascript">
    var typed = new Typed("#typed", {
        strings: ["inLaundry", "Best Laundry", "Your Laundry Solution"],
        typeSpeed : 70,
        startDelay : 90,
        loop:true
    });
</script>


</html>