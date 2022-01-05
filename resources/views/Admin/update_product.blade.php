@extends('layouts.index')

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
        <div class="bar-atas" style="margin-top: 69px">
            <h3 style="font-weight: bold">Update Product</h3>
        </div>

        <form action="/admin/products/{{$product->id}}" method="post" style="margin-top:35px">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Service Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" readonly> 
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="4">{{$product->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
            </div>
                <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
            
        </form>
    </div>

</div>

@endsection