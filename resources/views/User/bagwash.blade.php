@extends('layouts.index-user')

@section('container')
    <div class="main-content" style="margin-top:100px; margin-left:100px;">
        <h2 style="font-weight:bold">Bag Wash</h2>
    </div>

    <div class="form-fill d-flex flex-row gap-5" style="margin-left:100px; margin-top:50px; width:500px;">
        <div class="left">
            <form method="POST" action="/bagwash">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Customer Name</label>
                    <input style="width: 450px" type="text" name="name" class="form-control" id="name" value="Satrio Rahman Wicaksono" readonly>
                </div>

                <div class="mb-3">
                    <label for="geocoder" class="form-label">Customer Address</label>
                    <div class="geocoder" id="geocoder"></div>
                </div>
                <input type="hidden" name="service" value="Bag Wash">
                <input type="hidden" name="weight" value="0">
                <input type="hidden" name="price" value="0">
                <button type="submit" class="btn btn-primary">Next</button>

            </form>
        </div>

        <div class="right" style="">
            <div style="width: 700px; margin-top:60px;" id="map"></div>
        </div>

    </div>

@endsection