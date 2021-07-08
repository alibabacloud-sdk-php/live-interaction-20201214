<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 回调url
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description 加签密钥-key
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @description 加签密钥-value
     *
     * @var string
     */
    public $signatureValue;

    /**
     * @description 回调api列表
     *
     * @var bool[]
     */
    public $apis;

    /**
     * @description 回调列表
     *
     * @var bool[]
     */
    public $spis;

    /**
     * @description 事件输出列表
     *
     * @var bool[]
     */
    public $events;
    protected $_name = [
        'callbackUrl'    => 'CallbackUrl',
        'signatureKey'   => 'SignatureKey',
        'signatureValue' => 'SignatureValue',
        'apis'           => 'Apis',
        'spis'           => 'Spis',
        'events'         => 'Events',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureValue) {
            $res['SignatureValue'] = $this->signatureValue;
        }
        if (null !== $this->apis) {
            $res['Apis'] = $this->apis;
        }
        if (null !== $this->spis) {
            $res['Spis'] = $this->spis;
        }
        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureValue'])) {
            $model->signatureValue = $map['SignatureValue'];
        }
        if (isset($map['Apis'])) {
            $model->apis = $map['Apis'];
        }
        if (isset($map['Spis'])) {
            $model->spis = $map['Spis'];
        }
        if (isset($map['Events'])) {
            $model->events = $map['Events'];
        }

        return $model;
    }
}
