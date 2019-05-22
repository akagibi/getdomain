# Getdomain plugin for Craft CMS 3.x

Twig filter to extract the domain name from a string.

## Requirements

This plugin requires Craft CMS 3.x

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require akagibi/getdomain

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Getdomain.

## Using Getdomain

**Getdomain** filter can be used with 4 different parameters.

- full
- long
- normal
- short *default*

Input:

    {% set url = "https://www.domain.com:1234/index.html?param" %}
    {{ url | getdomain(full) }}
    {{ url | getdomain(long) }}
    {{ url | getdomain(normal) }}
    {{ url | getdomain }}

Output:

    https://www.domain.com:1234
    https://www.domain.com
    www.domain.com
    domain.com

Brought to you by [Akagibi](https://www.akagibi.com)
