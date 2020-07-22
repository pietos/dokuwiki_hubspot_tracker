<?php
/**
 * DokuWiki plugin for Hubspot
 *
 * Hook into application -> executed after header metadata was rendered
 *
 * @license GPLv3 (http://www.gnu.org/licenses/gpl.html)
 * @author  Pieter van Os (info@pkservices.nl)
 */

if (!defined('DOKU_INC')) {
    die();
}
if (!defined('DOKU_PLUGIN')) {
    define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');
}
require_once DOKU_PLUGIN . 'action.php';
require_once DOKU_PLUGIN . 'hubspot/code.php';

class action_plugin_hubspot extends DokuWiki_Action_Plugin
{
    function register(Doku_Event_Handler $controller)
    {
        // TPL_METAHEADER_OUTPUT AFTER to place it before the </head>
        $controller->register_hook(
            'TPL_METAHEADER_OUTPUT', 'AFTER', $this, '_hook_header'
        );
    }

    function _hook_header(Doku_Event $event, $param)
    {
        $data = hubspot_tracking();
        $event->data['script'][] = array(
            'type'    => 'text/javascript',
            'charset' => 'utf-8',
            '_data'   => $data,
        );
    }
}
