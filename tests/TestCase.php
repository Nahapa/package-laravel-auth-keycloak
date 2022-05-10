<?php

namespace Tests;

use KeycloakGuard\KeycloakGuardServiceProvider;
use PackageAuth\Models\User;
use PackageAuth\Providers\AuthServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            AuthServiceProvider::class,
            KeycloakGuardServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('auth.defaults', [
            'guard' => 'api',
            'passwords' => 'users',
        ]);

        $app['config']->set('auth.guards.api', [
            'driver' => 'keycloak',
            'provider' => 'users'
        ]);

        $app['config']->set('auth.providers', [
            'users' => [
                'driver' => 'eloquent',
                'model' => User::class
            ],
        ]);

        $app['config']->set('keycloak.realm_public_key', 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAliyxFJN4LfFT7rScUG5JbMAT5gdQqVMMA24Sr9RNHUBzZs0dUck5YxdKNNUQepmVDj62rQ16Xc1k1/HBVdW0Y4oOo9dIjZp19OjXatx2Y0cjA8IatDeXODLFN5VPW581lSzxyN0a1UDhs9CZfdu4Z5cdV/S974POSdTan0GrL/9n8fkkHgp9Tccw9Uabbp+XhrSvvttuq05lfsKxkUWWEEUHf/dReLRHiwZttorJ6lHq3/8/pemid5ekyU2Sn3BMAXA2msYgcsDAsqQjuY5n7ra3xeJyrZuEUaDHGOFuGGRS4ibsmfChYHrzmiEN8MPdJNdoXnb7QWPBbw12/REtCQIDAQAB');
        $app['config']->set('keycloak.load_user_from_database', true);
        $app['config']->set('keycloak.user_provider_custom_retrieve_method', null);
        $app['config']->set('keycloak.user_provider_credential', 'email');
        $app['config']->set('keycloak.token_principal_attribute', 'preferred_email');
        $app['config']->set('keycloak.append_decoded_token', false);
        $app['config']->set('keycloak.allowed_resources', null);
    }
}
