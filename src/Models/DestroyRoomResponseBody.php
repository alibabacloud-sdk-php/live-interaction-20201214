<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DestroyRoomResponseBody extends Model
{
    /**
     * @description 错误码。
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息。
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 请求是否成功。
     *
     * @var bool
     */
    public $responseSuccess;
    protected $_name = [
        'errorCode'       => 'errorCode',
        'errorMsg'        => 'errorMsg',
        'requestId'       => 'RequestId',
        'responseSuccess' => 'ResponseSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->responseSuccess) {
            $res['ResponseSuccess'] = $this->responseSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DestroyRoomResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResponseSuccess'])) {
            $model->responseSuccess = $map['ResponseSuccess'];
        }

        return $model;
    }
}
