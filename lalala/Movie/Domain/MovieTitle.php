<?php
declare(strict_types=1);

namespace Lalala\Movie\Domain;


class MovieTitle
{
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @var string
     */
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
