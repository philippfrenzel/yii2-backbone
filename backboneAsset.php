<?php
namespace net\frenzel\assets\backbone;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */
class backboneAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower';
    
    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'underscore/underscore.js',
        'backbone/backbone.js'
    ];

    /**
     * [$depends description]
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}