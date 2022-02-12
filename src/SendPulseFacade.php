<?php

namespace LaravalSendpulse;


use Illuminate\Support\Facades\Facade;
use App\Source\SendPulse\DTO\SendEmailsDTO;

/**
 * @method static sendEmails(SendEmailsDTO $emailsDTO)
 */
class SendPulseFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SendPulseFacade::class;
    }
}