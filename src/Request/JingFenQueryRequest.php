<?php


namespace JdCps\Request;


class JingFenQueryRequest extends BaseRequest
{
    protected $method = 'jd.union.open.goods.jingfen.query';

    protected $eliteId;

    protected $pageIndex = 1;

    protected $pageSize = 20;

    protected $sortName = 'price';

    protected $sort = 'desc';

    public function setEliteId(int $eliteId)
    {
        $this->eliteId = $eliteId;
    }

    public function setPageIndex(int $pageIndex)
    {
        $this->pageIndex = $pageIndex;
    }

    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function setSortName(string $sortName)
    {
        $this->sortName = $sortName;
    }

    public function setSort(string $sort)
    {
        $this->sort = $sort;
    }

    protected function getParams(): array
    {
        return [
            'goodsReq' => [
                'eliteId' => $this->eliteId,
                'pageIndex' => $this->pageIndex,
                'pageSize' => $this->pageSize,
                'sortName' => $this->sortName,
                'sort' => $this->sort,
            ]
        ];
    }
}
