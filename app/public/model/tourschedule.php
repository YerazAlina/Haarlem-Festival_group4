<?php

class tourschedule 
{
    private DateTime $date;
    private DateTime $time;
    private int $dutchTours; // number of
    private int $englishTours;
    private int $chineseTours;


    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function getTime(): DateTime
    {
        return $this->time;
    }

    public function setTime(DateTime $time): void
    {
        $this->time = $time;
    }


    public function getDutchTours(): int
    {
        return $this->dutchTours;
    }

    public function setDutchTours(int $dutchTours): void
    {
        $this->dutchTours = $dutchTours;
    }

    public function getEnglishTours(): int
    {
        return $this->englishTours;
    }

    public function setNEnglishTours(int $englishTours): void
    {
        $this->englishTours = $englishTours;
    }

    public function getChineseTours(): int
    {
        return $this->chineseTours;
    }

    public function setChineseTours(int $chineseTours): void
    {
        $this->chineseTours = $chineseTours;
    }
}