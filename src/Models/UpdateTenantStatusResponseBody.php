<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class UpdateTenantStatusResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var bool
     */
    public $responseSuccess;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 是否更新成功
     *
     * @var bool
     */
    public $result;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'responseSuccess' => 'ResponseSuccess',
        'errorCode'       => 'errorCode',
        'errorMsg'        => 'errorMsg',
        'result'          => 'result',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responseSuccess) {
            $res['ResponseSuccess'] = $this->responseSuccess;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTenantStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResponseSuccess'])) {
            $model->responseSuccess = $map['ResponseSuccess'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
