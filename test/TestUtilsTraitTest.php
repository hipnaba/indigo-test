<?php
namespace IndigoTest\Test;

use Indigo\Test\TestUtilsTrait;
use IndigoTest\Test\Mock\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests the general purpose utilities.
 *
 * @package IndigoTest\Test
 * @author  Danijel Fabijan <danijel.fabijan@bruckom.hr>
 * @link    https://github.com/hipnaba/indigo-view
 */
class TestUtilsTraitTest extends TestCase
{
    /**
     * CallProtectedMethod should call the protected method and return the result.
     *
     * @return void
     */
    public function testCallProtectedMethod()
    {
        /**
         * The trait under test.
         *
         * @var TestUtilsTrait $trait
         */
        $trait = $this->getMockForTrait(TestUtilsTrait::class);

        $object = new MockObject();
        $value = 'some string';

        $returned = $trait->callProtectedMethod($object, 'protectedPassThrough', [$value]);

        $this->assertEquals($value, $returned);
    }
}
