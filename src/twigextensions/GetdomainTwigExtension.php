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
    public function getdomain($url, $method = 'short')
    {
        $scheme = parse_url($url, PHP_URL_SCHEME);
        $host = parse_url($url, PHP_URL_HOST);
        $port = parse_url($url, PHP_URL_PORT);
        
        if ($host === false) return $url;
        
        if ($method == 'full') $url = $scheme . '://' . $host . ($port ? ':' . $port : '');
        else if ($method == 'long') $url = $scheme . '://' . $host;
        else if ($method == 'normal') $url = $host;
        else {
            $aUrl = array_reverse(explode(".", $host));
            if (array_key_exists(1, $aUrl)) $url = $aUrl[1].".".$aUrl[0];
        }

        return $url;
    }
}
