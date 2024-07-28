<?php

namespace Deniscosmin21\LogService;

use Illuminate\Http\Request;
use Deniscosmin21\LogService\ApiRequest;

class LogService
{
    private $details = '';
    private $email_list = [];
    private $send_message = 'false';
    private $phone = '';
    private $source = '';
    private $location = '';
    private $type = 'info';

    

    private function set_source(Request | string $request) 
    {
        if(gettype($request) == 'string'){
            $this->source = $request;
        }
        else{
            $this->source = $request->httpHost();
        }

        return $this;
    }

    private function set_location()
    {
        $history = debug_backtrace();
        
        $this->location = $history[2]['file'] . ' ';

        if(array_key_exists('class', $history[2])){
            $this->location = $this->location . $history[2]['class'] . ' ';
        }

        $this->location = $this->location . $history[2]['function'];

    }

    public function set_data(string $details, string $type = 'info')
    {
        $this->type($type);
        $this->details = $details;

        return $this;
    }

    public function email(array $email_list)
    {
        $this->email_list = implode(',', $email_list);
        $this->send_message = 'email';

        return $this;
    }

    public function sms($phone_number)
    {
        $this->phone = $phone_number;
        $this->send_message = 'email_and_sms';
        
        return $this;
    }

    public function type($type = 'info')
    {
        $this->type = $type;

        return $this;
    }

    public function send()
    {
        $this->set_location();

        $data = ['source' => $this->source, 'type' => $this->type, 'location' => $this->location, 'details' => $this->details, 'send_notification' => $this->send_message, 'email_list' => $this->email_list];

        return ApiRequest::send($data);
    }
}
