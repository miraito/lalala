<?php
declare(strict_types=1);

namespace Lalala\Movie\Domain;

class Movie
{
    /**
     * @var MovieId
     */
    private $id;
    /**
     * @var MovieTitle
     */
    private $title;
    /**
     * @var ScreeningTime
     */
    private $screeningTime;

    public function __construct(MovieId $id, MovieTitle $title, ScreeningTime $screeningTime)
    {

        $this->id = $id;
        $this->title = $title;
        $this->screeningTime = $screeningTime;
    }

    /**
     * @return MovieTitle
     */
    public function getTitle(): MovieTitle
    {
        return $this->title;
    }

    /**
     * @return ScreeningTime
     */
    public function getScreeningTime(): ScreeningTime
    {
        return $this->screeningTime;
    }

    /**
     * @return MovieId
     */
    public function getId(): MovieId
    {
        return $this->id;
    }

}
