<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody\result;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody\result\commonConfig\appConfigs;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody\result\commonConfig\connectionConfig;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody\result\commonConfig\loginConfig;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody\result\commonConfig\mediaConfig;
use AlibabaCloud\Tea\Model;

class commonConfig extends Model
{
    /**
     * @description 登录配置
     *
     * @var loginConfig
     */
    public $loginConfig;

    /**
     * @description app配置
     *
     * @var appConfigs[]
     */
    public $appConfigs;

    /**
     * @description 多媒体配置
     *
     * @var mediaConfig
     */
    public $mediaConfig;

    /**
     * @description 长连接配置
     *
     * @var connectionConfig
     */
    public $connectionConfig;
    protected $_name = [
        'loginConfig'      => 'LoginConfig',
        'appConfigs'       => 'AppConfigs',
        'mediaConfig'      => 'MediaConfig',
        'connectionConfig' => 'ConnectionConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginConfig) {
            $res['LoginConfig'] = null !== $this->loginConfig ? $this->loginConfig->toMap() : null;
        }
        if (null !== $this->appConfigs) {
            $res['AppConfigs'] = [];
            if (null !== $this->appConfigs && \is_array($this->appConfigs)) {
                $n = 0;
                foreach ($this->appConfigs as $item) {
                    $res['AppConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mediaConfig) {
            $res['MediaConfig'] = null !== $this->mediaConfig ? $this->mediaConfig->toMap() : null;
        }
        if (null !== $this->connectionConfig) {
            $res['ConnectionConfig'] = null !== $this->connectionConfig ? $this->connectionConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginConfig'])) {
            $model->loginConfig = loginConfig::fromMap($map['LoginConfig']);
        }
        if (isset($map['AppConfigs'])) {
            if (!empty($map['AppConfigs'])) {
                $model->appConfigs = [];
                $n                 = 0;
                foreach ($map['AppConfigs'] as $item) {
                    $model->appConfigs[$n++] = null !== $item ? appConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MediaConfig'])) {
            $model->mediaConfig = mediaConfig::fromMap($map['MediaConfig']);
        }
        if (isset($map['ConnectionConfig'])) {
            $model->connectionConfig = connectionConfig::fromMap($map['ConnectionConfig']);
        }

        return $model;
    }
}
