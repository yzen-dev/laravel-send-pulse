<?php

namespace LaravalSendpulse\DTO;


class SendEmailsDTO
{
    public string $email;
    public array $variables;

    /**
     * @param string $email
     * @param array $variables
     */
    public function __construct(string $email, array $variables)
    {
        $this->email = $email;
        $this->variables = $variables;
    }

    public function toArray()
    {
        return [
            [
                'email' => $this->email,
                'variables' => $this->variables
            ]
        ];
    }
}