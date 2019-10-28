@extends('layouts.default')

@section('main')
<div class="container">
<div class="row">
    <div class="col-md-12">
      <h3 class="brand-class">聯絡我們</h3>
      <hr>
        <P class="description-class">如果您對本公司有任何的建議，我們非常歡迎您能來信指教，我們會以最快的速度回應給您，謝謝。</p>
        <form name="contact_form" action="#">        
            <input type="text" id="contact_name" maxlength="25" placeholder="聯絡人">
            <input type="text" id="contact_phone" maxlength="12" placeholder="電話">
            <input type="email" id="contact_email" placeholder="Email"> <p>
            <p><textarea id="contact_content" rows="7" cols="67" placeholder="建議內容..."></textarea> </p>
            <input type="submit" value="送出">
        </form>
    </div>
</div>
</div>
@stop