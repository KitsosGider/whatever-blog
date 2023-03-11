<?php

/**
 * @param string $asset
 *
 * @return string
 */
function get_theme_asset( $asset = '' ): string {
    return get_stylesheet_directory_uri() . "/assets/$asset";
}