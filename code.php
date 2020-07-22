<?php
/**
 * DokuWiki plugin for hubspot
 *
 * Generates the inserted js/html code that is inserted into dom (HTML-HEAD)
 *
 * @license GPLv3 (http://www.gnu.org/licenses/gpl.html)
 * @author  Pieter van Os (info@pkservices.nl)
 */
require_once(DOKU_INC . 'inc/auth.php');


/**
 * Injects the necessary trackingcodes for hubspot tracking into DOM
 * Original code base for this plugin is the Matomo tracking plugin
 */
function hubspot_tracking()
{
    global $conf;

    if (isset($conf['plugin']['hubspot']['js_tracking_code']))
      {
        // Config does not contain keys if they are default;
        // so check whether they are set & to non-default value

        // default 0, so check if it's not set or 0
        if (!isset($conf['plugin']['hubspot']['track_admin_user'])
            || $conf['plugin']['hubspot']['track_admin_user'] == 0
        ) {
            if (isset($_SERVER['REMOTE_USER']) && auth_isadmin()) {
                return;
            }
        }

        // default 1, so check if it's set and 0
        if (isset($conf['plugin']['hubspot']['track_user'])
            && $conf['plugin']['hubspot']['track_user'] == 0
        ) {
            if (isset($_SERVER['REMOTE_USER'])) {
                return;
            }
        }

        // Changes made by Pieter van Os (info@pkservices.nl)
        $trackingCode = (isset($conf['plugin']['hubspot']['js_tracking_code']))
            ? $conf['plugin']['hubspot']['js_tracking_code'] : '';
        ptln($trackingCode);
    } else {
        // Show configuration tip for admin
        if (isset($_SERVER['REMOTE_USER']) && auth_isadmin()) {
            msg('Please configure the hubspot plugin <a href="doku.php?id=start&do=admin&page=config#plugin____hubspot____plugin_settings_name">here</a>');
        }
    }
}
