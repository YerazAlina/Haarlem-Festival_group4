<?php
namespace app\models;

class historyactivity extends model
{
  
    private DateTime $date;
    private DateTime $time;
    private float $regular_ticket_price;
    private float $family_ticket_price;
    private string $language;
    private int $amount;


    public function __construct( $date, $time, $regular_ticket_price, $family_ticket_price, $language, $amount )
    {
        parent::__construct();

        $this->date = $date; 
        $this->time = $time;
        $this->language = $language;
        $this->amount = $amount;
        $this->regular_ticket_price = $regular_ticket_price;
        $this->family_ticket_price = $family_ticket_price;
    }


    public function setDate(DateTime $date)
    {
        $this->date = $date; 
    }

    public function getDate()
    {
        return $this->date; 
    }
    public function setTime(DateTime $time)
    {
        $this->time = $time; 
    }

    public function getTime()
    {
        return $this->time; 
    }
    public function setRegularTicketPrice(int $regular_ticket_price)
    {
        $this->regular_ticket_price = $regular_ticket_price;
    }
    public function getRegularTicketPrice()
    {
        return $this->regular_ticket_price;
    }

    public function setFamilyTicketPrice(int $family_ticket_price)
    {
        $this->family_ticket_price;
    }

    public function getFamilyTicketPrice()
    {
        return $this->family_ticket_price;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    public function getLanguage()
    {
        return $this->language;
    }
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

}
?>