<?php
class TextMungerForObivousImplementationTest extends PHPUnit_Framework_TestCase {

    public function testLeavesWordsUpTo3CharsUnchanged() {
        $this->assertThat($this->munge('abc'), $this->equalTo('abc'));
    }

    public function testReversesMiddleOfLongerWords() {
        $this->markTestSkipped();
        $this->assertThat($this->munge('abcd'), $this->equalTo('acbd'));
    }

    public function munge($word) {
        return $word;
    }
}
