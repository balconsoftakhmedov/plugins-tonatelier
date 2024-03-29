<?php


namespace cBuilder\Classes;

class CCBProTemplate {
	/**
	 * @param $template_name
	 * @param string $template_path
	 * @param string $default_path
	 *
	 * @return string
	 */
	public static function locate_template( $template_name, $template_path = 'cost-calculator-builder-pro/', $default_path = '' ) {
		$template_name .= '.php';
		if ( $template_path != self::template_path() ) { //phpcs:ignore
			$template_path = self::template_path() . $template_path;
		}
		if ( locate_template( $template_path . $template_name ) ) {
			return locate_template( $template_path . $template_name );
		}
		return self::plugin_path( $default_path ) . '/' . $template_name;
	}

	/**
	 * @param $template_name
	 * @param array $args
	 * @param null $echo
	 *
	 * @return bool|string
	 */
	public static function load_template( $template_name, $args = array(), $echo = null ) {
		if ( null === $echo ) {
			return self::load( $template_name, $args );
		}
		echo self::load( $template_name, $args ); //phpcs:ignore
	}

	/**
	 * @param $template_name
	 * @param array $args
	 * @param string $template_path
	 * @param string $default_path
	 *
	 * @return bool|string
	 */
	public static function load( $template_name, $args = array(), $template_path = 'cost-calculator-builder-pro/', $default_path = '' ) {
		ob_start();
		if ( is_array( $args ) ) {
			extract( $args );
		}
		$file = self::locate_template( $template_name, $template_path, $default_path );
		if ( ! file_exists( $file ) ) {
			return false;
		}
		include( $file ); //phpcs:ignore PEAR.Files.IncludingFile.BracketsNotRequired
		return ob_get_clean();
	}

	public static function template_path() {
		return apply_filters( 'ccb_template_path', 'cost-calculator-builder-pro/' );
	}

	/**
	 * @return string
	 */
	public static function plugin_path( $default_path = '' ) {
		if ( ! empty( $default_path ) ) {
			return untrailingslashit( $default_path );
		}
		return untrailingslashit( CCB_PRO_PATH . '/templates/' ); // phpcs:ignore
	}
}
