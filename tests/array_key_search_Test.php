<?php

namespace PbraidersTest\Stdlib;

use function Pbraiders\Stdlib\array_key_search;

class array_key_search_Test extends \PHPUnit\Framework\TestCase
{
  /**
   * Undocumented function
   *
   * @return array
   */
  public function provideSucessData(): array
  {
    $aData = require(__DIR__ . \DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'array_key_search.success.php');
    return $aData;
  }

  /**
   * @covers ::\Pbraiders\Stdlib\array_key_search
   * @dataProvider provideSucessData
   * @group specification
   */
  public function test_array_key_search_Success(array $input, $expected)
  {
    $return = array_key_search($input['array1'], $input['array2']);
    $this->assertSame($expected, $return);
  }
}
