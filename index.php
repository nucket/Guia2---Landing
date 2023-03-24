<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

/*
 .S    S.     sSSs_sSSs      sSSs  sdSS_SSSSSSbs   .S   .S_sSSs      sSSSSs
.SS    SS.   d%%SP~YS%%b    d%%SP  YSSS~S%SSSSSP  .SS  .SS~YS%%b    d%%%%SP
S%S    S%S  d%S'     `S%b  d%S'         S%S       S%S  S%S   `S%b  d%S'
S%S    S%S  S%S       S%S  S%|          S%S       S%S  S%S    S%S  S%S
S%S SSSS%S  S&S       S&S  S&S          S&S       S&S  S%S    S&S  S&S
S&S  SSS&S  S&S       S&S  Y&Ss         S&S       S&S  S&S    S&S  S&S
S&S    S&S  S&S       S&S  `S&&S        S&S       S&S  S&S    S&S  S&S
S&S    S&S  S&S       S&S    `S*S       S&S       S&S  S&S    S&S  S&S sSSs
S*S    S*S  S*b       d*S     l*S       S*S       S*S  S*S    S*S  S*b `S%%
S*S    S*S  S*S.     .S*S    .S*P       S*S       S*S  S*S    S*S  S*S   S%
S*S    S*S   SSSbs_sdSSS   sSS*S        S*S       S*S  S*S    S*S   SS_sSSS
SSS    S*S    YSSP~YSSY    YSS'         S*S       S*S  S*S    SSS    Y~YSSY
       SP                               SP        SP   SP
       Y                                Y         Y    Y

*/
