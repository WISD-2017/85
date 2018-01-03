@extends('layouts.master')
@section('title','聯絡我們')
@section('content')
    <center>
    <div style="margin-top: 5%">
        <table>
        <tr>
            <td><label style="font-size: 16px; font-family: 微軟正黑體;">姓名　</label></td>
            <td><input id="name" class="form-control" name="name" required autofocus style="width: 400px; font-family: 微軟正黑體;"></td>
        </tr>
            <td><label>　</label></td>
        <tr>
        </tr>
        <tr>
            <td><label style="font-size: 16px; font-family: 微軟正黑體;">Email　</label></td>
            <td><input id="email" class="form-control" name="email" style="width: 400px; font-family: 微軟正黑體;"></td>
        </tr>
            </tr>
            <td><label>　</label></td>
            <tr>
        <tr>
            <td><label style="font-size: 16px; font-family: 微軟正黑體;">聯絡電話　</label></td>
            <td><input id="phone" class="form-control" name="phone" style="width: 400px; font-family: 微軟正黑體;"></td>
        </tr>
            </tr>
            <td><label>　</label></td>
            <tr>
        <tr>
            <td><label style="font-size: 16px; font-family: 微軟正黑體;">內容說明　</label></td>
            <td><input id="phone" class="form-control" name="phone" style="width: 400px; height: 200px; font-family: 微軟正黑體;"></td>
        </tr>
        </table>
        <br/>
        <br/>
        <button type="button" class="btn btn-secondary" name="message" style="font-size: 16px; font-family: 微軟正黑體">送出</button>

    </div>
    </center>>
@endsection
