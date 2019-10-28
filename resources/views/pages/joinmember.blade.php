@extends('layouts.default')

@section('main')
<div class="container">
<div class="row">
    <div class="col-md-12">
      <h3 class="brand-class">填寫會員資料</h3>
      <hr>
        <form name="joinmember_form" action="#">        
            <p><input type="email" id="joinmember_email" placeholder="請輸入Email"> </p>
            <p><input type="password" id="joinmember_password" placeholder="請輸入密碼"> </p>
            <p><input type="password" id="joinmember_confirmpassword" placeholder="請確認密碼"> </p>
            <p><input type="text" id="joinmember_name" placeholder="請輸入姓名"> </p>
            <p><input type="text" id="joinmember_phone" placeholder="請輸入電話"> </p>
            <p><input type="date" id="joinmember_birth" placeholder="請輸入生日"> </p>
            <p><input type="text" id="joinmember_address" placeholder="請輸入地址"> </p>
            <input type="submit" value="送出">
        </form>
    </div>
</div>
</div>
@stop