<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\weui;

use yii\web\AssetBundle;

/**
 * Class WeuiAsset
 * @package xutl\weui
 */
class WeuiAsset extends AssetBundle
{
    /**
     * @var array list of CSS files that this bundle contains. Each CSS file can be specified
     * in one of the three formats as explained in [[js]].
     */
    public $css = [
        '//res.wx.qq.com/open/libs/weui/1.1.2/weui.min.css',
    ];

    public $js = [
        '//res.wx.qq.com/open/libs/weuijs/1.1.2/weui.min.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',//yii jq
    ];
}