<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersRequest\requestParams;

use AlibabaCloud\Tea\Model;

class initMembers extends Model
{
    /**
     * @example 888666
     *
     * @var string
     */
    public $appUid;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example 1608739200000
     *
     * @var int
     */
    public $joinTime;

    /**
     * @example test
     *
     * @var string
     */
    public $nick;

    /**
     * @example 3
     *
     * @var int
     */
    public $role;
    protected $_name = [
        'appUid'     => 'AppUid',
        'extensions' => 'Extensions',
        'joinTime'   => 'JoinTime',
        'nick'       => 'Nick',
        'role'       => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return initMembers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
