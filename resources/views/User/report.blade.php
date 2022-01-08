@extends('layouts.index-user')

@section('container')

<div class="content-orders">
    <div class="component-atas" style="margin-left: 650px">
        <div class="content-flex d-flex flex-row  gap-4">
            <div class="searcbar">
                <input type="text" placeholder="Search for peoples ..." style="border-radius: 20px 5px 20px 5px; width:280px; height:56px; background-color:#F3F6FF; border-style:none; padding-left:10px; outline:none">
            </div>
            <div class="notification" style="width:56px; height:56px; border-radius: 20px 5px 20px 5px; background-color:#F3F6FF; border-style:none;">
                <div class="icons d-flex justify-content-center">
                    <ion-icon name="notifications-outline" style="font-size: 28px; margin-top:13px; color: #8F92A1">
                </div>
            </div>
            
            <div class="setting">
                <div class="image">
                    <img style="border-radius: 100px; width: 56px" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80" alt="">
                </div>
            </div>
        </div>
    </div>
    
    <div class="component-bawah">
        <form action="" method="post">
            <div class="bar-atas" style="margin-top: 69px">
                <h3 style="font-weight: bold">Report Page</h3>
            </div>
    
            <table class="table" style="margin-top:35px">
                <thead>
                  <tr>
                    <th scope="col" style="color: #9FA2B4">Services Details</th>
                    <th scope="col" style="color: #9FA2B4">Price</th>
                    <th scope="col" style="color: #9FA2B4">Date</th>
                    <th scope="col" class="ps-4" style="color: #9FA2B4">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        <div class="detail d-flex flex-row">
                            <div class="image mt-1">
                                <img src="\assets\Dry Clean.png" alt="">   
                            </div>
                            <div class="text mt-3" style="margin-left:24px">
                                <h6 style="font-weight: bold">Dry Clean</h6>
                                
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6 style="font-weight: bold" class="mt-1">Rp. 35.000,00</h6>
                        <p style="color: #C5C7CD">5 kg</p>
                    </td>
                    <td>
                        <h6 style="font-weight: bold" class="mt-1">20 December 2021</h6>
                        <p style="color: #C5C7CD">9:30 PM</p>
                    </td>
                    <td>
                        <p class=" text-center p-2 mt-2 fw-bold rounded-pill bg-warning" style="width: 100px; color: rgb(255, 255, 255);">Process</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div class="detail d-flex flex-row">
                            <div class="image mt-1">
                                <img src="\assets\Full Wash.png" alt="">   
                            </div>
                            <div class="text mt-3" style="margin-left:24px">
                                <h6 style="font-weight: bold">Full Wash</h6>
                                
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6 style="font-weight: bold" class="mt-1">Rp. 21.000,00</h6>
                        <p style="color: #C5C7CD">3 kg</p>
                    </td>
                    <td>
                        <h6 style="font-weight: bold" class="mt-1">15 December 2021</h6>
                        <p style="color: #C5C7CD">10:30 PM</p>
                    </td>
                    <td>
                        <p class="text-center p-2 mt-2 fw-bold rounded-pill bg-success" style="width: 100px; color: rgb(255, 255, 255);">Finished</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div class="detail d-flex flex-row">
                            <div class="image mt-1">
                                <img src="\assets\Shoes Wash.png" alt="">   
                            </div>
                            <div class="text mt-3" style="margin-left:24px">
                                <h6 style="font-weight: bold">Shoes Wash</h6>
                                
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6 style="font-weight: bold" class="mt-1">Rp. 18.750,00</h6>
                        <p style="color: #C5C7CD">1 pcs</p>
                    </td>
                    <td>
                        <h6 style="font-weight: bold" class="mt-1">20 December 2021</h6>
                        <p style="color: #C5C7CD">9:30 PM</p>
                    </td>
                    <td>
                        <p class=" text-center p-2 mt-2 fw-bold rounded-pill bg-danger" style="width: 100px; color: rgb(255, 255, 255);">Canceled</p>
                    </td>
                  </tr>
                </tbody>
            </table>
        </form>
    </div>

</div>

@endsection