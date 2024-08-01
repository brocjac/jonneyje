@extends('components.layout')
@section('title')
    JonneyJE Home Internet
@endsection
@section('content')
<div class="section1">
    <img src="{{'/images/homepage-background-image.jpg'}}">
    <div class="content">
        <h1>Best in Class</h1>
        <h2>Internet & Services in Kewaskum Wisconsin</h2>
        <h3>Internet Starting at $60/Month</h3>
    </div>
    <a href="#scrollContent" class="checkOut">
        <p>Check it Out</p>
        <i class="fas fa-chevron-down"></i>
    </a>
</div>
<div id="scrollContent" class="section2">
    <div class="services">
        <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
        <p>BEST Customer Support</p>
    </div>
    <div class="services">
        <i class="fa-solid fa-globe" style="color: #ffffff;"></i>
        <p>Reliable High Speed Internet</p>
    </div>
    <div class="services">
        <i class="fa-solid fa-wrench" style="color: #ffffff;"></i>
        <p>24/7 Tech Support*</p>
    </div>
</div>
<div class="section3">
    <div class="section3Content" id="ourInternetPlan">
        <img class="section3Img" id="InternetImg" src="{{'family-in-living-room.jpg'}}" alt="">
        <div class="contentPlans">
            <h2>Best in Class High Speed Internet</h2>
            <h3>We won’t increase the price after 11 months!</h3>
            <ul>
                <li>Advanced Wi-Fi</li>
                <li>Low Latency Fiber</li>
                <li>50mbps Download / 25mbps Upload</li>
                <li>Only for $60/Month</li>
            </ul>
            <div class="poweredBy"><p>Powered By</p><img class="wisconsinInternet" src="{{'/images/wisconsin_internet.png'}}"></div>
            <button class="button" onclick="window.location.href='https://w3docs.com';">Shop Now</button>
        </div>
    </div>
    <div class="section3Content" id="ITService">
        <img class="section3Img" id="ITImg" src="{{'guy-in-server-room.jpg'}}" alt="">
        <div class="contentPlans">
            <h2>Professional IT Service</h2>
            <h3>Quality Service for a Great Price!</h3>
            <ul>
                <li>Surveillance Installation</li>
                <li>IT Support and Services</li>
                <li>Best in Class Server Installation</li>
                <li>Only for $120/Hour Service</li>
            </ul>
            <button class="button" onclick="window.location.href='https://w3docs.com';">Make Appointment</button>
        </div>
    </div>
</div>

@endsection
