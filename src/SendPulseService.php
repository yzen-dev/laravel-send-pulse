<?php

namespace LaravalSendpulse;

use Sendpulse\RestApi\ApiClient;
use LaravalSendpulse\DTO\SendEmailsDTO;
use Sendpulse\RestApi\Storage\FileStorage;

class SendPulseService
{
    /**
     * @var \Sendpulse\RestApi\ApiClient
     */
    private ApiClient $client;
    private string $bookId;
    
    public function __construct($userId, $secret, $bookID)
    {
        $this->client = new ApiClient($userId, $secret, new FileStorage());
        $this->bookId = $bookID;
    }
    
    public function sendEmails(SendEmailsDTO $emailsDTO): void
    {
        $this->client->addEmails($this->bookId, $emailsDTO->toArray());
    }
}