<?php


namespace App\Classes\Factory;


class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }


    public function logIn(): void
    {
        // TODO: Implement logIn() method.
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        // TODO: Implement logOut() method.
        echo "Send HTTP API request to log out user $this->email\n";
    }

    public function createPost($content): void
    {
        // TODO: Implement createPost() method.
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}
