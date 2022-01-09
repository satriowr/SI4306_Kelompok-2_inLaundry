@extends('layouts.index-admin')

@section('container')


<style>

    .calendar {
    margin-top:120px;
    width: 500px;
    background-color: #fff;
 
    }
    .month {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 40px 30px;
    text-align: center;
    background-color: #22a7f4;
    color: #fff;
    }
    .weekdays {
    background-color: #3998cf;
    color: #fff;
    padding: 7px 0;
    display: flex;
    }
    .days {
    font-weight: 300;
    padding: 10px 0;
    display: flex;
    flex-wrap: wrap;
    }
    .weekdays div,
    .days div {
    text-align: center;
    width: 14.28%;
    }
    .days div {
    padding: 10px 0;
    margin-bottom: 10px;
    transition: all 0.4s;
    }
    .prev_date {
    color: #999;
    }
    .today {
    background-color: #22a7f4;
    color: #fff;
    }
    .days div:hover {
    cursor: pointer;
    background-color: #dfe6e9
    }
    .prev,
    .next {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 23px;
    background-color: rgba(0, 0, 0, 0.1);
    transition: all 0.4s;
    }
    .prev:hover,
    .next:hover {
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.2);
    }
    #month {
    font-size: 30px;
    font-weight: 500;}
</style>


<body onload="renderDate()">
    <div class="content-dashboard d-flex flex-row ">
        <div class="left-content">
            <div onload="renderDate()" class="wrapper">
                <div  class="calendar">
                    <div class="month" style="border-radius:10px 10px 0 0">
                        <div class="prev" onclick="moveDate('prev')">
                            <span>&#10094;</span>
                        </div>
                        <h2 id="month"></h2>
                        <p style="margin-top:10px" id="date_str"></p>
                        <div class="next" onclick="moveDate('next')">
                            <span>&#10095;</span>
                        </div>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
        
                    </div>
                    <div class="days"></div>
                </div>
            </div>
        </div>
    
        <div class="right-content" style="margin-left:100px;">
            <div class="content-flex d-flex flex-row gap-3">
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
            
            <div class="status d-flex flex-row" style="margin-top:40px; padding-top:28px">
                <div class="delivery">
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
            <div class="notes" style="margin-top:50px">
                <div class="title d-flex flex-row justify-content-between mb-3" style="width: 400px;">
                    <h3>Notes</h3>
                    
                    <ion-icon  data-toggle="modal" data-target="#exampleModalCenter" style="font-size:30px; margin-top:2px; color:#22A7F4" name="add-circle"></ion-icon>
               
                </div>

                @foreach ($showNote as $note)
                    <div class="show-notes d-flex flex-row">
                        <div class="card-notes d-flex flex-row justify-content-between mb-2 " style="width: 400px; height: 50px;border-style:solid; border-color:#F4F4F4; border-width:2px; border-radius:7px; padding-top:10px; padding-left:10px; padding-right:10px">
                            <div class="note">
                                <p>{{ $note->event }}</p>
                            </div>
    
                            <div class="time">
                                <p>{{ $note->date }}</p>
                            </div>
                        </div>

                        <a href="/admin/dashboard/delete/{{ $note->id }}">
                            <ion-icon class="text-danger" style="font-size:30px; margin-top:10px; margin-left: 15px" name="close-circle"></ion-icon>
                        </a>
                    </div>
                @endforeach
                
                </div>
                
            </div>
    
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">New Notes</h5>
            </div>

            <form action="/admin/dashboard/new" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event</label>
                        <input type="text" class="form-control" name="event" id="exampleFormControlInput1" autocomplete="off" placeholder="make event">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event Date</label>
                        <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="date" id="exampleFormControlInput1">
                    </div> 
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Event</button>
                </div>
            </form>
          </div>
        </div>
      </div>
</body>


<script>
    var dt = new Date();
 function renderDate() {
 dt.setDate(1);
 var day = dt.getDay();
 var today = new Date();
 var endDate = new Date(
 dt.getFullYear(),
 dt.getMonth() + 1,
 0
 ).getDate();
 var prevDate = new Date(
 dt.getFullYear(),
 dt.getMonth(),
 0
 ).getDate();
 var months = [
 "January",
 "February",
 "March",
 "April",
 "May",
 "June",
 "July",
 "August",
 "September",
 "October",
 "November",
 "December"
 ]
 document.getElementById("month").innerHTML =
months[dt.getMonth()];
 document.getElementById("date_str").innerHTML =
dt.toDateString();
 var cells = "";
 for (x = day; x > 0; x--) {
 cells += "<div class='prev_date'>" + (prevDate - x +
1) + "</div>";
 }
 console.log(day);
 for (i = 1; i <= endDate; i++) {
 if (i == today.getDate() && dt.getMonth() ==
today.getMonth()) cells += "<div class='today'>" + i + "</div>";
 else
 cells += "<div>" + i + "</div>";
 }
 document.getElementsByClassName("days")[0].innerHTML =
cells;
 }
 function moveDate(para) {
 if(para == "prev") {
 dt.setMonth(dt.getMonth() - 1);
 } else if(para == 'next') {
 dt.setMonth(dt.getMonth() + 1);
 }
 renderDate();
 }
</script>


@endsection

        
       

