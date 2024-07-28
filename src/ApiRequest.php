<?php

namespace Deniscosmin21\LogService;

use Illuminate\Support\Facades\Http;

class ApiRequest
{
    public static function send($data)
    {
        
        return Http::asForm()->withBasicAuth(env('API_CREDENTIALS_USER'), env('API_CREDENTIALS_PASSWORD'))->post('http://localhost/log_service/public/api/send_log', $data)->json();
    }
}