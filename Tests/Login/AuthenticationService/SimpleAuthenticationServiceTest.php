<?php

declare(strict_types=1);

namespace Affilyadds\Test\Login\AuthenticationService;

use Affilyadds\src\Login\AuthenticationService\SimpleAuthenticationService;
use Affilyadds\src\Login\NormalUser;
use Affilyadds\src\Login\ThirdPartyUser;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class SimpleAuthenticationServiceTest extends TestCase
{
    /**
     * @var SimpleAuthenticationService
     */
    private $simpleAuthenticationservice;

    protected function setUp():void
    {
        $this->simpleAuthenticationservice = new SimpleAuthenticationService();
    }

    public function testSuccessfulAuthenticate(): void
    {
        $user = new NormalUser('test_user_name');
        $response = $this->simpleAuthenticationservice->authenticate($user);

        $this->assertTrue($response);
    }

    public function testThrowInvalidArgumentExceptionWhenUserIsNotANormalUserInstance(): void
    {
        $user = new ThirdPartyUser('test_user_name', 'google');
        $this->expectException(InvalidArgumentException::class);
        $response = $this->simpleAuthenticationservice->authenticate($user);

        $this->assertTrue($response);
    }
}
