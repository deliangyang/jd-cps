<?php


namespace JdCps\Request;


class PromotionCommonGet extends BaseRequest
{

    protected $method = 'jd.union.open.promotion.common.get';

    protected $siteId = '';

    protected $materialId = '';

    protected $couponUrl = '';

    protected $positionId = 0;

    protected $pid = '';

    /**
     * @param string $siteId
     */
    public function setSiteId(string $siteId)
    {
        $this->siteId = $siteId;
    }

    /**
     * @param string $materialId
     */
    public function setMaterialId(string $materialId)
    {
        $this->materialId = $materialId;
    }

    /**
     * @param string $couponUrl
     */
    public function setCouponUrl(string $couponUrl)
    {
        $this->couponUrl = $couponUrl;
    }

    /**
     * @param int $positionId
     */
    public function setPositionId(int $positionId)
    {
        $this->positionId = $positionId;
    }

    /**
     * @param string $pid
     */
    public function setPid(string $pid)
    {
        $this->pid = $pid;
    }

    protected function getParams(): array
    {
        $params = [
            'promotionCodeReq' => [
                'materialId' => $this->materialId,
                'siteId' => $this->siteId,
            ]
        ];
        return $params;
    }
}
