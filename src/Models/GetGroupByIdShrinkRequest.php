<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class GetGroupByIdShrinkRequest extends Model
{
    /**
     * @description APP ID, IMPaaS租户的ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 群会话信息获取的请求体
     *
     * @var string
     */
    public $requestParamsShrink;
    protected $_name = [
        'appId'               => 'AppId',
        'requestParamsShrink' => 'RequestParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->requestParamsShrink) {
            $res['RequestParams'] = $this->requestParamsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGroupByIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RequestParams'])) {
            $model->requestParamsShrink = $map['RequestParams'];
        }

        return $model;
    }
}
