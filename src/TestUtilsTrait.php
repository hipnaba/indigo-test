<?php
namespace Indigo\Test;

/**
 * General purpose utilities.
 *
 * @package Indigo\Test
 * @author  Danijel Fabijan <danijel.fabijan@bruckom.hr>
 * @link    https://github.com/hipnaba/indigo-view
 */
trait TestUtilsTrait
{
    /**
     * Calls a protected object method.
     *
     * @param object $object    The object.
     * @param string $method    The method name.
     * @param array  $arguments The method arguments.
     *
     * @return mixed
     */
    public function callProtectedMethod($object, $method, array $arguments = [])
    {
        $class = new \ReflectionClass($object);
        $method = $class->getMethod($method);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $arguments);
    }
}
