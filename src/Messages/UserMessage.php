<?php

namespace Maestroerror\LarAgent\Messages;

use Maestroerror\LarAgent\Core\Contracts\Message as MessageInterface;
use Maestroerror\LarAgent\Core\Abstractions\Message;
use Maestroerror\LarAgent\Core\Enums\Role;

class UserMessage extends Message implements MessageInterface
{
    public function __construct(string $content, array $metadata = [])
    {
        parent::__construct(Role::USER->value, $content, $metadata);
    }
}