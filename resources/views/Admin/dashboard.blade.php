@extends('layouts.index-admin')

@section('container')

<div class="content-dashboard d-flex flex-row ">
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

    <div class="right-content" style="margin-left:250px;">
        <div class="content-flex d-flex flex-row gap-4">
            <div class="searcbar">
                <input type="text" placeholder="Search for peoples ..." style="border-radius: 20px 5px 20px 5px; width:280px; height:56px; background-color:#F3F6FF; border-style:none; padding-left:10px; outline:none">
            </div>
            <div class="notification" style="width:56px; height:56px; border-radius: 20px 5px 20px 5px; background-color:#F3F6FF; border-style:none;">
                <div class="icons d-flex justify-content-center">
                    <ion-icon name="notifications-outline" style="font-size: 28px; margin-top:13px; color: #8F92A1">
                </div>
            </div>
            <div class="setting">
                <div class="icons d-flex justify-content-center" style="width:56px; height:56px; border-radius: 20px 5px 20px 5px; background-color:#F3F6FF; border-style:none;">
                    <ion-icon name="settings-outline" style="font-size: 28px; margin-top:13px; color: #8F92A1">
                </div>
            </div>
        </div>

        <div class="laundry-pay" style="width: 440px; height:152px; background-color: #69DADB; border-radius: 10px 50px 10px 50px; margin-top:45px">
            <br>
            <div class="content-flex d-flex flex-row">
                <div class="icons d-flex justify-content-center" style="margin-top: 20px; margin-left:24px;  width: 56px; height:56px; border-radius: 15px 5px 15px 5px; background-color: #F3F6FF; padding-top:12px">
                    <img width="35.4px" height="32px" src="https://i.postimg.cc/vm1XJgdb/fluent-money-hand-20-filled.png" alt="">
                </div>

                <div class="harga" style="margin-top: 30px; margin-left:16px;">
                    <h3 style="font-weight: bold">Rp. 27.000.000 <br><span style="color: #1597E5">LaundryPay</span></h3>
                </div>

                <div class="debit" style="width: 100px; height: 31px; margin-top: 30px; margin-left: 18px; border-radius: 2px 10px 2px 10px; background-color:#193498">
                    <p style="font-size: 13px; color:white; font-weight:bold; margin-top:7px; margin-left:5px">+ Rp. 325.000</p>
                </div>
            </div> 
        </div>
        
        <div class="status d-flex flex-row" style="margin-top:40px; padding-top:28px">
            <div class="delivery" style="margin-left: 23px">
                <div class="content-flex d-flex flex-row">
                    <div class="case" style="width:20px; height: 20px; border-radius:100px; background-color: #1597E5; color:white;">
                        <div class="icons d-flex justify-content-center" style="font-size: 12px; padding-top:3.5px;">
                            <ion-icon name="rocket-outline"></ion-icon>
                        </div>
                    </div>
                    &nbsp&nbsp
                    <p style="color:#808191;">Delivery</p>
                </div>
                
                <h3 style="font-size:32px">8/10</h3>
                <div class="bar" style="width: 120px; height:5.18px; background-color: #E6ECF2; border-radius: 7px">
                    <div class="fillbar" style="width: 96px; height:5.18px; background-color: #1F95EE; border-radius: 7px"></div>
                </div>
            </div>

            <div class="Complete" style="margin-left: 50px">
                <div class="content-flex d-flex flex-row">
                    <div class="case" style="width:20px; height: 20px; border-radius:100px; background-color: #1597E5; color:white;">
                        <div class="icons d-flex justify-content-center" style="font-size: 12px; padding-top:3.5px;">
                            <ion-icon name="stopwatch-outline"></ion-icon>
                        </div>
                    </div>
                    &nbsp&nbsp
                    <p style="color:#808191;">Complate</p>
                </div>
                
                <h3 style="font-size:32px">80%</h3>
                <div class="bar" style="width: 120px; height:5.18px; background-color: #E6ECF2; border-radius: 7px">
                    <div class="fillbar" style="width: 96px; height:5.18px; background-color: #1F95EE; border-radius: 7px"></div>
                </div>
            </div>
        </div>

        <div class="order" style="margin-top: 93px">
            <div class="content-flex d-flex flex-row">
                <h3 style="font-weight:bold; color: #3E3F43;">Order</h3>
                <a style="font-weight:bold; text-decoration:none; color: #8F92A1; margin-top:5px; margin-left: 300px" href=""><p >See all ></p></a>
            </div>
            
            <div class="card-content d-flex flex-row" style="margin-top: 20px">
                <div class="image">
                    <img style="border-radius: 100px; width: 60px" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80" alt="">
                </div>

                <div class="text" style="margin-left:18px">
                    <h4 style="font-weight:bold">Kristin Watson</h4>
                    <p>(808) 555-5678</p>
                </div>  
            </div>

            <div class="card-content d-flex flex-row" style="margin-top: 20px">
                <div class="image">
                    <img style="border-radius: 100px; width: 60px" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80" alt="">
                </div>

                <div class="text" style="margin-left:18px">
                    <h4 style="font-weight:bold">Kristin Watson</h4>
                    <p>(808) 555-5678</p>
                </div>  
            </div>

            <div class="card-content d-flex flex-row" style="margin-top: 20px">
                <div class="image">
                    <img style="border-radius: 100px; width: 60px" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80" alt="">
                </div>

                <div class="text" style="margin-left:18px">
                    <h4 style="font-weight:bold">Kristin Watson</h4>
                    <p>(808) 555-5678</p>
                </div>  
            </div>
        </div>
    </div>
</div>
    
@endsection

        
       

