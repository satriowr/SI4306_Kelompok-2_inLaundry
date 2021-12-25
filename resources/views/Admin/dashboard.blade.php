@extends('layouts.index')

@section('container')

<div class="content-dashboard">
    <div class="left-content">
        <h1>Welcome Miles</h1> 
        <div class="summary mt-5 d-flex flex-row" style="width: 400px; height:100px; padding-top:5px; padding-bottom:5px; ">
            <div class="text">
                <h3>Floyd Miles</h3>
                <p>floydmiles27@gmail.com <br><span>ID : 1202190249</span></p>
            </div>

            <div class="image" style="margin-left:100px">
                <img width="90px" style="border-radius:100px" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
            </div>
        </div>
        <br><br><br>
        <div>
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>
    
@endsection

        
       

