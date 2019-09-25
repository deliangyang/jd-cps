<?php

namespace JdCps\Request;

use GuzzleHttp\Client;

abstract class BaseRequest
{
    protected $method;

    protected $format = 'json';

    protected $v = '1.0';

    protected $sign_method = 'md5';

    public function request(string $appKey, string $appSecret)
    {
        $client = new Client([
            'base_uri' => 'https://router.jd.com',
            'verify' => false,
        ]);
        $query = [
            'v' => $this->v,
            'method' => $this->method,
            'timestamp' => date('Y-m-d H:i:s'),
            'app_key' => $appKey,
            'sign_method' => $this->sign_method,
            'format' => $this->format,
            'param_json' => json_encode($this->getParams())
        ];
        ksort($query);
        $sign_str = '';
        foreach ($query as $k => $v) {
            $sign_str .= $k . $v;
        }
        $query['sign'] = strtoupper(md5($appSecret . $sign_str . $appSecret));
        $resp = $client->get('/api', [
            'query' => $query,
        ]);
        return $this->getResponse(
            $resp->getBody()->getContents());
    }

    abstract protected function getParams(): array;

    public function getResponse(string $response): array
    {
        $result = json_decode($response, true);
        $key = str_replace('.', '_', $this->method) . '_response';
        if (!isset($result[$key]['result'])) {
            return [];
        }
        return json_decode($result[$key]['result'], true);
    }

}
