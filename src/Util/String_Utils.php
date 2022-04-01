<?php

namespace Gin0115\WP_Unit_Example\Util;

class String_Util {

	/**
	 * Replace the first occurrence of a string.
	 *
	 * @return string
	 */
	public static function replace_first( $string, $search, $replace ) {
		$pos = strpos( $string, $search );
		if ( $pos !== false ) {
			$string = substr_replace( $string, $replace, $pos, strlen( $search ) );
		}
		return $string;
	}

	/**
	 * Replace the last occurrence of a string.
	 *
	 * @param string $string
	 * @param  $search
	 * @param string $replace
	 * @return void
	 */
	public static function replace_last( $string, $search, $replace ): string{
		$pos = strrpos( $string, $search );
		if ( $pos !== false ) {
			$string = substr_replace( $string, $replace, $pos, strlen( $search ) );
		}
		return $string;
	}

	/**
	 * Replace all occurrences of a string.
	 *
	 * @param string $string
	 * @param  $search
	 * @param string $replace
	 * @return void
	 */
	public static function replace_all( $string, string $search, $replace ): string {
		return str_replace( $search, $replace, $string );
	}

	public static function contains( $string, $search ){
		return strpos( $string, $search ) !== false;
	}

	public static function starts_with( $string, $search ) {
		return strpos($string, $search)=== 0;
	}

	public static function ends_with( string $string, $search ){
		return strrpos( $string, $search ) === strlen( $string ) - strlen( $search );
	}

}
