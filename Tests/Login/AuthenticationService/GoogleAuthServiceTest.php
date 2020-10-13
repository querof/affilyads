<?php

declare(strict_types=1);

namespace Affilyadds\Test\Login\AuthenticationService;

use Affilyadds\src\Login\AuthenticationService\GoogleAuthService;
use Affilyadds\src\Login\AuthenticationService\SimpleAuthenticationService;
use Affilyadds\src\Login\NormalUser;
use Affilyadds\src\Login\ThirdPartyUser;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class GoogleAuthServiceTest extends TestCase
{
    /**
     * @var SimpleAuthenticationService
     */
    private $GoogleAuthService;

    protected function setUp():void
    {
        $this->GoogleAuthService = new GoogleAuthService();
    }

    public function testSuccessfulAuthenticate(): void
    {
        $user = new ThirdPartyUser('test_user_name', 'google');
        $response = $this->GoogleAuthService->authenticate($user);

        $this->assertTrue($response);
    }

    public function testThrowInvalidArgumentExceptionWhenUserIsNotAThirdPartyUserInstance(): void
    {
        $user = new NormalUser('test_user_name');
        $this->expectException(InvalidArgumentException::class);
        $response = $this->GoogleAuthService->authenticate($user);

        $this->assertTrue($response);
    }
}
