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

    <div class="container">
        <div class="box-menu" style="width: 100px; height: 100px">
            <img src="assets\icon\003-towel.png" alt="">
        </div>
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