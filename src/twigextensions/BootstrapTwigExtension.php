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

namespace extensibleseth\bootstrap\twigextensions;

use extensibleseth\bootstrap\web\assets\BootstrapAssets;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

/**
 * Class BootstrapTwigExtension
 * @since 4.1.1
 */
class BootstrapTwigExtension extends AbstractExtension implements GlobalsInterface
{

    /**
     * @inheritdoc
     */
    public function getTokenParsers()
    {
        return [
            new UseBootstrap_TokenParser(),
        ];
    }

    /**
     * @inheritDoc
     */
    public function getGlobals(): array
    {
        return [
            'bootstrapAssets' => [BootstrapAssets::class]
        ];
    }

}
