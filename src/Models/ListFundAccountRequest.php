<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ListFundAccountRequest extends Model
{
    /**
     * @example 2084210001
     *
     * @var string
     */
    public $nbid;

    /**
     * @var bool
     */
    public $queryOnlyInUse;

    /**
     * @var bool
     */
    public $queryOnlyManage;
    protected $_name = [
        'nbid' => 'Nbid',
        'queryOnlyInUse' => 'QueryOnlyInUse',
        'queryOnlyManage' => 'QueryOnlyManage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }
        if (null !== $this->queryOnlyInUse) {
            $res['QueryOnlyInUse'] = $this->queryOnlyInUse;
        }
        if (null !== $this->queryOnlyManage) {
            $res['QueryOnlyManage'] = $this->queryOnlyManage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFundAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }
        if (isset($map['QueryOnlyInUse'])) {
            $model->queryOnlyInUse = $map['QueryOnlyInUse'];
        }
        if (isset($map['QueryOnlyManage'])) {
            $model->queryOnlyManage = $map['QueryOnlyManage'];
        }

        return $model;
    }
}
