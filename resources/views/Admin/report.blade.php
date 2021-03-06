@extends('layouts.index-admin')

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
                <button style="margin-top:20px" type="submit" class="btn btn-danger">Update Report</button>
            </div>
    
            <table class="table" style="margin-top:35px">
                <thead>
                  <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Services Detail</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        <div class="detail d-flex flex-row">
                            <div class="image">
                                <img width="44px" height="44px" style="border-radius:100px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI_D7EI-JyKW6DUp5AAoGHQ9kV11tg6cUOcw&usqp=CAU" alt="">
                            </div>
                            <div class="text" style="margin-left:24px">
                                <h6 style="font-weight: bold">Waluyo Robertus</h6>
                                <p style="color: #C5C7CD">4517 Washington Ave. Manchester, Kentucky 39495</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6 style="font-weight: bold">Washing & Ironing - 5 kg</h6>
                        <p style="color: #C5C7CD">Rp. 35.000,00</p>
                    </td>
                    <td>
                        <h6 style="font-weight: bold">20 December 2021</h6>
                        <p style="color: #C5C7CD">9:30 PM</p>
                    </td>
                    <td>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option selected>Choose Status</option>
                            <option  value="1">Waiting</option>
                            <option value="2">Pick Up</option>
                        </select>
                    </td>
                  </tr>
                  
                </tbody>
            </table>
        </form>
    </div>

</div>

@endsection