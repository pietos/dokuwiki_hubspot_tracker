DokuWiki-hubspot
===============

A DokuWiki plugin that allows you to embed the hubspot tracking code in your pages.

Plugin Data
===============

Field        | Data
:------------|:--------------------------------------------------------------------------------------
description  | Plugin allows you to easily track your wiki visits by Hubspot.
author       | Pieter van Os (Made for www.netyce.com)
email        | p.vanos@pkservices.nl
type         | admin
lastupdate   | 2020-07-20
compatible   | binky, 2014-04-28, Detritus, Elenor of Tsort, Frusterick Manners, Greebo
similar      | googleanalytics, piwik, matomo
tags         | Hubspot, Tracking, Statistics, Piwik, Google Analytics

Description
===============
This plugin can be used for any kind of javascript traking code, but the main purpose here is hubspot.

Installation
===============
Install the plugin using the PluginManager(https://www.dokuwiki.org/plugin:plugin).


External requirements
===============

This plugin requires the following additional components that must be installed separately:

  * Hubspot account
  * Hubspot tracking code

Configuration
===============
  - Go to Plugin Management and make sure Hubspot tracking is enabled
  - Configure the plugin in ***Admin -> Configuration Manager –> Plugin Settings –> Hubspot tracking***  
  - The Hubspot tracking plugin should now be enabled and you should see the trackingcode in the rendered html on wiki pages.
