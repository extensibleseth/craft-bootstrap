<?php
/**
 * Bootstrap plugin for Craft CMS
 *
 * Build your site with the Bootstrap front-end framework.
 *
 * @author    @Ponies
 * @link      https://iamponies.com/
 * @copyright Copyright (c) 2021 @Ponies
 *
 * @author    Bootstrap
 * @link      https://getbootstrap.com/
 * @copyright 2011-2018 The Bootstrap Authors
 * @copyright 2011-2018 Twitter, Inc.
 * @license   MIT
 */

namespace extensibleseth\bootstrap\web\assets;

use Craft;
use craft\web\AssetBundle;
use extensibleseth\bootstrap\Bootstrap;

/**
 * Class jQueryAssets
 * @since 4.1.1
 */
class jQueryAssets extends AssetBundle
{

    /** @inheritdoc */
    public function init()
    {
        parent::init();

        // Whether to use CDN assets
        if (Bootstrap::$plugin->loadCdn) {

            // Get library version of jQuery
            $version = Bootstrap::$plugin->versions['jquery'];

            // Use CDN in production environment
            $jqueryPath = "https://code.jquery.com/jquery-{$version}.min.js";

        } else {

            // Use local files in all other environments
            $this->sourcePath = '@vendor/components/jquery/';

            // Specify filename
            $jqueryPath = 'jquery.min.js';

        }

        // Register assets
        $this->js = [
            $jqueryPath
        ];

    }

}
