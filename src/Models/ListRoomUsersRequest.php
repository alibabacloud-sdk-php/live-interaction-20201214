<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersRequest\request;
use AlibabaCloud\Tea\Model;

class ListRoomUsersRequest extends Model
{
    /**
     * @description 请求参数的结构体。
     *
     * @var request
     */
    public $request;
    protected $_name = [
        'request' => 'Request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRoomUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }

        return $model;
    }
}
