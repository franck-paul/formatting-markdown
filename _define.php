<?php
/**
 * @brief formatting-markdown, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'Markdown syntax',                                                                                     // Name
    'Brings you markdown (extra) syntax for your entries (see https://michelf.ca/projects/php-markdown/)', // Description
    'Michel Fortin, Franck Paul and contributors',                                                         // Author
    '1.11',                                                                                                // Version
    [
        'requires'    => [['core', '2.16']],
        'permissions' => 'usage,contentadmin',
        'type'        => 'plugin',
        'settings'    => [
            'pref' => '#user-options.user_options_edition',
            'blog' => '#params.formatting_markdown'
        ],
        'support' => 'https://github.com/franck-paul/formatting-markdown',
        'details' => 'https://open-time.net/?q=formatting-markdown'
    ]
);
