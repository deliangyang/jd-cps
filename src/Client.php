<?php


namespace JdCps;


use JdCps\Request\BaseRequest;

class Client
{
    public function __construct()
    {
    }

    public function execute(BaseRequest $request)
    {
        return $request->request();
    }
}
