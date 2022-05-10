<?php

namespace Tests\Feature;

use PackageAuth\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAuth()
    {
        $credentials = [
            'email'     => 'myuser@myuser.com.br',
            'password'  => 'password',
        ];

        $response = $this->postJson(route('auth'), [], [
            'bearer eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICI3TXRWNkI5aEJoZFBNcE1wMFhZMkdZRTl3STZuQ1VOVWdxWVBVZmp5OHJjIn0.eyJleHAiOjE2NTIyMDU0MjIsImlhdCI6MTY1MjIwNTEyMiwianRpIjoiMmYzNGRkNzctZTA4OC00Y2I0LWFjZTItZjRlMmY3MDRhNzA4IiwiaXNzIjoiaHR0cDovL2xvY2FsaG9zdC9hdXRoL3JlYWxtcy9teXJlYWxtIiwiYXVkIjoiYWNjb3VudCIsInN1YiI6ImU1OTYzYmY1LTFiYzQtNDJmOC04ZGVjLTY2OWMwMTA0MjhlNiIsInR5cCI6IkJlYXJlciIsImF6cCI6Im15Y2xpZW50IiwiYWNyIjoiMSIsImFsbG93ZWQtb3JpZ2lucyI6WyJodHRwOi8vbG9jYWxob3N0Il0sInJlYWxtX2FjY2VzcyI6eyJyb2xlcyI6WyJkZWZhdWx0LXJvbGVzLW15cmVhbG0iLCJvZmZsaW5lX2FjY2VzcyIsInVtYV9hdXRob3JpemF0aW9uIl19LCJyZXNvdXJjZV9hY2Nlc3MiOnsiYWNjb3VudCI6eyJyb2xlcyI6WyJtYW5hZ2UtYWNjb3VudCIsIm1hbmFnZS1hY2NvdW50LWxpbmtzIiwidmlldy1wcm9maWxlIl19fSwic2NvcGUiOiJlbWFpbCBwcm9maWxlIiwiY2xpZW50SG9zdCI6IjE3Mi4yMy4wLjEiLCJjbGllbnRJZCI6Im15Y2xpZW50IiwiZW1haWxfdmVyaWZpZWQiOmZhbHNlLCJwcmVmZXJyZWRfdXNlcm5hbWUiOiJzZXJ2aWNlLWFjY291bnQtbXljbGllbnQiLCJjbGllbnRBZGRyZXNzIjoiMTcyLjIzLjAuMSJ9.NDcI6qo6axBTwhXVhPsnzqLEOCXSkPmNKxtPy3XvaAO0vGgPSA4X2i5-ecSV7dETLbUOPNAWLw0FfjkTr1p4rfycsognVNVE1i_LMmY2RNavHAQqF0JQ04Sz68s64hibQ8zL99QX7mFHPV1McWgtQL2tlp3tYURt23R9WtSU6MBxlH4Ao5bqtu0X8Tt2kLClGQwUoUvap07kDeRXXK1RaKveI8y7-Ej9g32BPDtvSVwqExim5yIbexeIhLtZ_fgY_ihJwwdF0x8Lii4mlxE1XduDYZv5EPp26oAifqVrSi3wpWJ07vZuWYSnSe2KRPnd7eNMVWcaiaaZtIRDxRPF6A'
        ]);

        $response->dd();
    }
}
