<?php


namespace JdCps\Request;


class OrderQueryRequest extends BaseRequest
{
    protected $method = 'jd.union.open.order.query';

    protected $pageNo = 1;

    protected $pageSize = 20;

    protected $type = 1;

    protected $time = '';

    protected $childUnionId = '';

    protected $key = '';

    public function setPageNo(int $pageNo)
    {
        $this->pageNo = $pageNo;
    }

    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function setType(int $type)
    {
        $this->type = $type;
    }

    public function setChildUnionId(int $childUnionId)
    {
        $this->childUnionId = $childUnionId;
    }

    public function setTime(\DateTime $dateTime)
    {
        $this->time = $dateTime->format('YmdHi');
    }

    protected function getParams(): array
    {
        $params = [
            'orderReq' => [
                'pageNo' => $this->pageNo,
                'pageSize' => $this->pageSize,
                'type' => $this->type,
                'time' => $this->time,
            ]
        ];
        if (!$this->childUnionId) {
            $params['childUnionId'] = $this->childUnionId;
        }
        if (!$this->key) {
            $params['key'] = $this->key;
        }
        return $params;
    }
}
