<?php

namespace JdCps\Request;

use GuzzleHttp\Client;

abstract class BaseRequest
{
    protected $method;

    protected $app_key = '';

    protected $format = 'json';

    protected $v = '1.0';

    protected $sign_method = 'md5';

    public function request()
    {
        $client = new Client([
            'base_uri' => 'https://router.jd.com',
            'verify' => false,
        ]);
        $query = [
            'v' => $this->v,
            'method' => $this->method,
            'timestamp' => date('Y-m-d H:i:s'),
            'app_key' => $this->app_key,
            'access_token' => '',
            'sign_method' => $this->sign_method,
            'format' => $this->format,
            'param_json' => json_encode($this->getParams())
        ];
        ksort($query);
        $sign_str = [];
        foreach ($query as $k => $v) {
            $sign_str[] = sprintf('%s=%s', $k, $v);
        }
        $query['sign'] = md5(implode('&', $sign_str));
        $resp = $client->get('/api', [
            'query' => $query,
        ]);
        return $resp->getBody()->getContents();
    }

    abstract protected function getParams(): array ;

}
