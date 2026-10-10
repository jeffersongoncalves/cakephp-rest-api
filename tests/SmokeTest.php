<?php

use PHPUnit\Framework\TestCase;

/**
 * Every class the plugin ships autoloads (catches syntax errors, bad namespaces and missing dependencies).
 */
class SmokeTest extends TestCase
{
    /**
     * @dataProvider classes
     */
    public function testClassLoads(string $class): void
    {
        $this->assertTrue(class_exists($class) || interface_exists($class) || trait_exists($class), $class);
    }

    public function classes(): array
    {
        return [
            ['RestApi\\Controller\\ApiController'],
            ['RestApi\\Controller\\ApiErrorController'],
            ['RestApi\\Controller\\AppController'],
            ['RestApi\\Controller\\Component\\AccessControlComponent'],
            ['RestApi\\Error\\ApiExceptionRenderer'],
            ['RestApi\\Event\\ApiRequestHandler'],
            ['RestApi\\Middleware\\RestApiMiddleware'],
            ['RestApi\\Model\\Entity\\ApiRequest'],
            ['RestApi\\Model\\Table\\ApiRequestsTable'],
            ['RestApi\\Plugin'],
            ['RestApi\\Routing\\Exception\\InvalidTokenException'],
            ['RestApi\\Routing\\Exception\\InvalidTokenFormatException'],
            ['RestApi\\Routing\\Exception\\MissingTokenException'],
            ['RestApi\\Serializer\\ArraySerializer'],
            ['RestApi\\Utility\\ApiRequestLogger'],
            ['RestApi\\Utility\\JwtToken'],
            ['RestApi\\View\\ApiErrorView'],
            ['RestApi\\View\\ApiView'],
        ];
    }
}
