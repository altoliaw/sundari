<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function SendVerMail()
    {
        /*Mail::raw('測試使用 Laravel 的 Gmail 寄信服務', function ($message){
                    $message->to('t107598001@ntut.org.tw', 'test')->subject('測試');
        });*/
        Mail::send('test_mail_view', [], function($m) {
            $m->from('t107598001@ntut.org.tw', 'stu');
            $m->to('t107598001@ntut.org.tw')->subject('測試寄信-mandrill');
        });
    }
}
