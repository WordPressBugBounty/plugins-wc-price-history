<?php

namespace PriorPrice\Helpers;

/**
 * Pro helper.
 *
 * @since 2.2.0
 */
class Pro {

	/**
	 * Check if the plugin is pro.
	 *
	 * @since 2.2.0
	 *
	 * @return bool
	 */
	public static function is_pro() : bool {
		return defined( 'WC_PRICE_HISTORY_EDITOR_PLUGIN_URL' );
	}
}
