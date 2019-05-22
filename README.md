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

Input:

    {{ "https://www.mydomain.com/index.html" | getdomain }}

Output:

    mydomain.com

Brought to you by [Akagibi](https://www.akagibi.com)
