<?php


namespace App\Classes\Factory;


class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        // TODO: Implement logIn() method.
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        // TODO: Implement logOut() method.
        echo "Send HTTP API request to log out user $this->login\n";
    }

    public function createPost($content): void
    {
        // TODO: Implement createPost() method.
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}
