<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | inLaundry</title>

</head>
@extends('layouts.index-user')
@section('container')
<body>

    <div class="slideshow-container d-flex justify-content-center" style="margin-top:100px">

        <div class="mySlides fade">
          <img src="assets\image 9.png" style="width:692px; height:300px">
        </div>
        
        <div class="mySlides fade">
          <img src="assets\poster 2.png" style="width:692px; height:300px">
        </div>
        
    </div>
        
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
       
    </div>

    <div class="container mt-5 d-flex justify-content-center flex-row gap-4">
        <a href="/dryclean" style="text-decoration: none;">
          <div class="box-menu" style="width: 100px; padding-top:7px; height: 100px; border-style:solid; border-color:#F4F4F4; border-width:4px;; border-radius:16px">
            <div class="image d-flex justify-content-center">
              <img width="50px" height="50px" src="assets\icon\003-towel.png" alt="">
            </div>
            <div class="text-center mt-2">
              <p style="font-size: 12px; text-decoration:none; color:black">Dry Clean</p>
            </div>
          </div> 
        </a>

        <a href="/fullwash" style="text-decoration: none;">
          <div class="box-menu" style="width: 100px; padding-top:7px; height: 100px; border-style:solid; border-color:#F4F4F4; border-width:4px;; border-radius:16px">
            <div class="image d-flex justify-content-center">
              <img width="50px" height="50px" src="https://i.ibb.co/c2PNQkG/001-washing-machine.png" alt="">
            </div>
            <div class="text-center mt-2">
              <p style="font-size: 12px; color:black">Full Wash</p>
            </div>
          </div> 
        </a>

        <a href="/iron" style="text-decoration: none;">
          <div class="box-menu" style="width: 100px; padding-top:7px; height: 100px; border-style:solid; border-color:#F4F4F4; border-width:4px;; border-radius:16px">
            <div class="image d-flex justify-content-center">
              <img width="50px" height="50px" src="https://cdn-icons-png.flaticon.com/512/2228/2228113.png" alt="">
            </div>
            <div class="text-center mt-2">
              <p style="font-size: 12px; color:black">Iron</p>
            </div>
          </div> 
        </a>

        <a href="/shoeswash" style="text-decoration: none;">
          <div class="box-menu" style="width: 100px; padding-top:7px; height: 100px; border-style:solid; border-color:#F4F4F4; border-width:4px;; border-radius:16px">
            <div class="image d-flex justify-content-center">
              <img width="50px" height="50px" src="https://cdn-icons-png.flaticon.com/512/2742/2742674.png" alt="">
            </div>
            <div class="text-center mt-2">
              <p style="font-size: 12px; color:black">Shoes Wash</p>
            </div>
          </div> 
        </a>

        <a href="/carpetWash" style="text-decoration: none;">
          <div class="box-menu" style="width: 100px; padding-top:7px; height: 100px; border-style:solid; border-color:#F4F4F4; border-width:4px;; border-radius:16px">
            <div class="image d-flex justify-content-center">
              <img width="50px" height="50px" src="https://cdn-icons-png.flaticon.com/512/6172/6172870.png" alt="">
            </div>
            <div class="text-center mt-2">
              <p style="font-size: 12px; color:black">Carpet Wash</p>
            </div>
          </div> 
        </a>

        <a href="/dollwash" style="text-decoration: none;">
          <div class="box-menu" style="width: 100px; padding-top:7px; height: 100px; border-style:solid; border-color:#F4F4F4; border-width:4px;; border-radius:16px">
            <div class="image d-flex justify-content-center">
              <img width="50px" height="50px" src="https://cdn-icons-png.flaticon.com/512/1746/1746356.png" alt="">
            </div>
            <div class="text-center mt-2">
              <p style="font-size: 12px; color:black">Doll Wash</p>
            </div>
          </div> 
        </a>

        <a href="/bagwash" style="text-decoration: none;">
          <div class="box-menu" style="width: 100px; padding-top:7px; height: 100px; border-style:solid; border-color:#F4F4F4; border-width:4px;; border-radius:16px">
            <div class="image d-flex justify-content-center">
              <img width="50px" height="50px" src="https://cdn-icons.flaticon.com/png/512/2822/premium/2822419.png?token=exp=1641652938~hmac=c803755f490a2c8b91944836a5c6b6f0" alt="">
            </div>
            <div class="text-center mt-2">
              <p style="font-size: 12px; color:black">Bag Wash</p>
            </div>
          </div> 
        </a>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
        
</body>
@endsection
</html>