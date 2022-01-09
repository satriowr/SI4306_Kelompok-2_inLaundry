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
                <h3 style="font-weight: bold">Products Page</h3>
            </div>
    
            <table class="table" style="margin-top:35px">
                <thead>
                  <tr>
                    <th scope="col">Services Detail</th>
                    <th scope="col">Price</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($showProduct as $product)
                    <tr>
                        <td>
                            <div class="detail d-flex flex-row">
                                <div class="image mt-3">
                                    <img src="\assets\{{ $product->image }}" alt="">
                                </div>
                                <div class="text mt-3" style="margin-left:24px">
                                    <h6 style="font-weight: bold">{{ $product->name }}</h6>
                                    <h6 style="color: #C5C7CD">{{ $product->description }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>  
                            <p class="mt-3" style="font-weight: bold">Rp {{ $product->price }}</p>
                        </td>
                    
                        <td>
                            <a href="/admin/products/{{$product->id}}/edit" class="btn btn-warning btn-sm mt-3">Update</a>
                            
                           
                        </td>
                      </tr>
                    @endforeach
                  
                </tbody>
            </table>
        </form>
    </div>

</div>

@endsection