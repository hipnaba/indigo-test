<?php
namespace IndigoTest\Test\Mock;

/**
 * A mock object used for testing.
 *
 * @package IndigoTest\Test\Mock
 * @author  Danijel Fabijan <hipnaba@gmail.com>
 * @link    https://github.com/hipnaba/indigo-test
 */
class MockObject
{
    /**
     * Returns the passed value.
     *
     * @param mixed $value The value to pass through.
     *
     * @return mixed
     */
    protected function protectedPassThrough($value)
    {
        return $value;
    }
}