<?php

require_once ("historytour.php");
require_once ("historyDAO.php");

class historytour 
{
  private historyDAO $dao;

  protected function rowToHistoricTour(array $row): historytour {
    $tour = new historytour();

    $tour->setId((int)$row["id"]);
    $tour->setDate(new DateTime($row["date"]));
    $tour->setDate(new DateTime($row["time"]));
    $tour->setVenue((int)$row["price"]);
    $tour->setVenue((int)$row["famPrice"]);
    $tour->setLanguage((int)$row["language"]);
    $tour->setGuide((string)$row["guide"]);
    $tour->setGuide((string)$row["tourType"]);

    return $tour;
  }

  protected function rowToTourSchedule(array $row): tourschedule{
    $schedule = new tourschedule();

    $schedule->setDate(new DateTime($row["date"]));
    $schedule->setTime(new DateTime($row["time"]));
    $schedule->setNDutchTours((int)$row["Dutch"]);
    $schedule->setNEnglishTours((int)$row["English"]);
    $schedule->setNChineseTours((int)$row["Chinese"]);

    return $schedule;
  }

  //getbyid method
  //getall method
  //getschedule method
}