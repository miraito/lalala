<?php
declare(strict_types=1);

namespace Lalala\Movie\Domain;


class ScreeningTime
{
    /**
     * @var int
     */
    private $screeningTime;

    /**
     * @return int
     */
    public function getScreeningTime(): int
    {
        return $this->screeningTime;
    }

    public function __construct(int $screeningTime)
    {
        $this->screeningTime = $screeningTime;
    }
}
