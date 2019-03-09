<?php
declare(strict_types=1);

namespace Lalala\Movie\Domain;


class MovieId
{
    /**
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
