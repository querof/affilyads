<?php

declare(strict_types=1);

namespace Affilyadds\test\Login;

use Affilyadds\src\Login\AuthenticationService\AuthenticationServiceInterface;
use Affilyadds\src\Login\AuthenticationService\GoogleAuthService;
use Affilyadds\src\Login\AuthenticationService\SimpleAuthenticationService;
use Affilyadds\src\Login\LoginModule;
use Affilyadds\src\Login\NormalUser;
use Affilyadds\src\Login\ThirdPartyUser;
use Affilyadds\src\Login\UnableToAuthenticateUserException;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

class LoginModuleTest extends TestCase
{
    /** @var SimpleAuthenticationService */
    private $simpleAuthenticationService;

    /** @var GoogleAuthService */
    private $googleAuthService;

    /**
     * @var \Prophecy\Prophecy\ObjectProphecy
     */
    private $authenticationServiceInterface;

    protected function setUp(): void
    {
        $this->authenticationServiceInterface = $this->prophesize(AuthenticationServiceInterface::class);
        $this->simpleAuthenticationService = new SimpleAuthenticationService();
        $this->googleAuthService = new GoogleAuthService();
    }

    public function testNormalUserAuthenticateSuccessful(): void
    {
        $user = new NormalUser('test_user_name');

        $loginModule = new LoginModule($this->simpleAuthenticationService);
        $response = $loginModule->login($user);

        $this->assertNull($response);
    }

    public function testThirdPartyUserAuthenticateSuccessful(): void
    {
        $user = new ThirdPartyUser('test_user_name', 'facebook');

        $loginModule = new LoginModule($this->googleAuthService);
        $response = $loginModule->login($user);

        $this->assertNull($response);
    }

    public function testThrowUnableToAuthenticateUserExceptionAuthentication(): void
    {
        $this->expectException(UnableToAuthenticateUserException::class);
        $this->authenticationServiceInterface->authenticate(Argument::any())->willReturn(false);
        $loginModule = new LoginModule($this->authenticationServiceInterface->reveal());
        $user = new NormalUser('test_user_name');

        $loginModule->login($user);
    }
}
