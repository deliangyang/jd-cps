<?php


namespace JdCps\Request;


class CategoryGoodsGet extends BaseRequest
{

    protected $method = 'jd.union.open.category.goods.get';

    protected $parentId = 0;

    protected $grade = 0;

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * @param int $grade
     */
    public function setGrade(int $grade)
    {
        $this->grade = $grade;
    }

    protected function getParams(): array
    {
        return [
            'req' => [
                'parentId' => $this->parentId,
                'grade' => $this->grade,
            ]
        ];
    }
}
