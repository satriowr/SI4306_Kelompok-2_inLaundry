@extends('layouts.index-admin')

@section('container')
<div class="title" style="margin-left:50px; margin-top:100px">
    <h3 style="font-weight:bold">Update Status</h3>

    <div class="form-update">
        @foreach ($customer as $item)
        <form action="/admin/order/{{ $item->id }}" method="post">
            @csrf
            <div class="d-flex flex-row gap-5">
                <div class="left">
                    <div class="mt-5">
                        <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
                        <input type="text" style="width:500px;" class="form-control" id="exampleFormControlInput1" readonly value="{{ $item->name }}">
                    </div>
        
                    <select name="status" style="margin-top:20px" class="form-select" style="500px" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Waiting for payment">Waiting for payment</option>
                        <option value="Processed">Processed</option>
                        <option value="Finish">Finish</option>
                    </select>
                    <br>
                    <p>Weight</p>
                    <div class="counter d-flex flex-row mt-3">
                        <button style="border-radius:100px; width:30px; height:30px" type="button" onclick="myFunctionMin()">-</button>
                        <input style="margin-left:20px; border-style:none; width:50px" type="number" min="0" name="weight" id="myNumber" value="{{ $item->weight }}"><span style="margin-top:3px">Kg</span>
                        <button style="margin-left:20px; border-radius:100px; width:30px; height:30px" type="button" onclick="myFunctionPlus()">+</button>
                    </div>
                </div>
    
                <div class="right" style="margin-top:29px">
                    <div class="mt-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Note from User</label>
                        <textarea name="note" class="form-control" readonly id="exampleFormControlTextarea1" rows="3">{{ $item->note }}</textarea>
                    </div>
                    <div class="mt-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Status from Admin</label>
                        <textarea style="width: 500px" name="nb" class="form-control" id="exampleFormControlTextarea1" rows="2">{{ $item->nb }}</textarea>
                    </div>
                </div>
            </div>
            <br><br>

        <a href="/admin/order/delete/{{ $item->id }}" style="text-decoration: none">
            <button type="button" class="btn btn-danger">Complete Order</button>
        </a>
        <button type="submit" class="btn btn-warning">Update Status</button>
        
        </form>
        @endforeach
    </div>
</div>

<script>
    function myFunctionPlus() {
      document.getElementById("myNumber").stepUp(1);
    }
    
    function myFunctionMin() {
      document.getElementById("myNumber").stepDown(1);
    }
    </script>
@endsection