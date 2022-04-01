<?php

use PHPUnit\Framework\TestCase;
use Gin0115\WP_Unit_Example\Util\String_Util;

class Test_String_Utils extends TestCase {

	/**
	 * Test that the first occupance of a sub string is replaced within another string.
	 *
	 * @return void
	 */
	public function test_replace_first() {
		// The value => expected outcome
		$tests = array(
			'aa-aa-bb-cc' => 'zz-aa-bb-cc',
			'ff-rr-bb-aa' => 'ff-rr-bb-zz',
			'pp-aa-qq-aa' => 'pp-zz-qq-aa',
			'rr-nn-aa-ww' => 'rr-nn-zz-ww',
		);

		foreach ( $tests as $input => $expected ) {
			$this->assertEquals( $expected, String_Util::replace_first( $input, 'aa', 'zz' ) );
		}
	}

	/**
	 * Test that the last occupance of a sub string is replaced within another string.
	 *
	 * @return void
	 */
	public function test_replace_last() {
		// The value => expected outcome
        $tests = array(
			'aa-aa-bb-cc' => 'aa-zz-bb-cc',
			'ff-rr-aa-aa' => 'ff-rr-aa-zz',
			'pp-aa-qq-aa' => 'pp-aa-qq-zz',
			'aa-nn-aa-ww' => 'aa-nn-zz-ww',
		);

		foreach ( $tests as $input => $expected ) {
			$this->assertEquals( $expected, String_Util::replace_last( $input, 'aa', 'zz' ) );
		}
	}
}
