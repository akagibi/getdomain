<?php
/**
 * Getdomain plugin for Craft CMS 3.x
 *
 * Twig filter to extract the domain name from a string.
 *
 * @link      https://www.akagibi.com
 * @copyright Copyright (c) 2019 Akagibi
 */

namespace akagibi\getdomain\twigextensions;

use akagibi\getdomain\Getdomain;

use Craft;

/**
 * @author    Akagibi
 * @package   Getdomain
 * @since     1
 */
class GetdomainTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Getdomain';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('getdomain', [$this, 'getdomain']),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('getdomain', [$this, 'getdomain']),
        ];
    }

    /**
     * @param null $text
     *
     * @return string
     */
    public function getdomain($str)
    {
        return $str;
    }
}
