<?php

declare(strict_types=1);

namespace Lalala\Movie\UseCase\GateWay;

use Lalala\Movie\Domain\Movie;
use Lalala\Movie\Domain\MovieId;

interface MovieRepository
{
    public function identifier(): string;

    public function save(Movie $model):MovieId;
}
