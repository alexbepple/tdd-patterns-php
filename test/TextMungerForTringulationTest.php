<?php
class TextMungerForTriangulationTest extends PHPUnit_Framework_TestCase {

    public function testLeavesWordsUpTo3CharsUnchanged() {
        $this->assertThat($this->munge('abc'), $this->equalTo('abc'));
    }

    public function testReversesMiddleOfLongerWords() {
        $this->assertThat($this->munge('abcd'), $this->equalTo('acbd'));
    }

    public function munge($word) {
        if ($word === 'abcd')
            return $word[0]
                  .$word[2]
                  .$word[1]
                  .$word[3];
        return $word;
    }
}
