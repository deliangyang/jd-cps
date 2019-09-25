<?php


namespace JdCps\Request;


class GoodsPromotionGoodsInfoQuery extends BaseRequest
{
    protected $method = 'jd.union.open.goods.promotiongoodsinfo.query';

    protected $skuIds = [];

    /**
     * @param array $skuIds
     */
    public function setSkuIds(array $skuIds)
    {
        $this->skuIds = $skuIds;
    }

    protected function getParams(): array
    {
        return [
            'skuIds' => implode(',', $this->skuIds),
        ];
    }
}
