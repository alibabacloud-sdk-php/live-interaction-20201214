<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateRoomRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 应用appKey
     *
     * @var string
     */
    public $domain;

    /**
     * @description 创建者id
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description 创建者昵称
     *
     * @var string
     */
    public $ownerNick;

    /**
     * @description 创建房间的标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'domain'    => 'domain',
        'ownerId'   => 'ownerId',
        'ownerNick' => 'ownerNick',
        'title'     => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }
        if (null !== $this->ownerNick) {
            $res['ownerNick'] = $this->ownerNick;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }
        if (isset($map['ownerNick'])) {
            $model->ownerNick = $map['ownerNick'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
