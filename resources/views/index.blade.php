@extends('layouts.master')
@section('title','首頁')
@section('content')


<center>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 960px; height:500px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://www.85cafe.com/file/banner_index/960x500/%E5%85%83%E6%97%A6%E6%96%B0%E5%B9%B4%E6%96%B0%E6%9B%99%E5%85%89-960X500.jpg" alt="event1" style="width:960px; height:500px;">
            </div>

            <div class="item">
                <img src="http://www.85cafe.com/file/banner_index/960x500/20171204%E9%9B%AAQ%E9%A4%85_%E7%B6%B2%E9%A0%81960X500.jpg" alt="event2" style="width:960px; height:500px;">
            </div>

            <div class="item">
                <img src="http://www.85cafe.com/file/banner_index/960x500/%E9%BB%91%E8%89%B2%E7%B9%BD%E7%B4%9B%E9%BA%B5%E5%8C%85%E5%B0%88%E6%A1%88%E7%B6%B2%E9%A0%81-960x500-01.jpg" alt="event3" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</center>


    @endsection