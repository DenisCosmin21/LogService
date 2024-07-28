<?php
use Illuminate\Support\Facades\Facade;

it('can test', function () {
    
    //dd($this->app->bound('LogInfo'));
    //dd(app('LogInfo'));
    //dd(get_class(\LogInfo));
    /*dd($this->assertInstanceOf(
        \Deniscosmin21\LogService\LogService::class,
        \LogInfo::getFacadeRoot()
    ));*/
    //$service = \LogInfo::getFacadeRoot();
      // $this->assertInstanceOf(\Deniscosmin21\LogService\LogService::class, $service);
    //dd(Facade::getFacadeApplication()->bound('LogInfo'));
    \LogInfo::test('ce va');
});
