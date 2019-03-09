<?php

declare(strict_types=1);

namespace Lalala\Movie\UseCase\InputPort;

use Lalala\Movie\UseCase\MovieRegisterInputData;
use Lalala\Movie\UseCase\OutPutPort\MovieRegisteredResult;

interface MovieRegister
{
    public function register(
        MovieRegisterInputData $registerData
    ): MovieRegisteredResult;
}
