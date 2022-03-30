<?php

require_once('../db.php');
require_once ('jazz/model/artist.php');
require_once ('jazz/model/jazzActivity.php');
require_once ('jazz/model/activity.php');
require_once ('jazz/model/location.php');

class jazzRepository
{

    private DB $db;
    private $stmt;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }



    private string $all_events_sql = "SELECT * FROM jazzActivity
                                      JOIN activity a on a.id = jazzActivity.activityId
                                      RIGHT JOIN artist a2 on a2.id = jazzActivity.artistId
                                      JOIN location l on l.id = a.locationId";

    /*

    private string $thursday_events = "SELECT * FROM jazzactivity 
                                        JOIN artist a on jazzactivity.artistId = a.id
                                        JOIN performance p on p.id = jazzactivity.performanceId
                                        JOIN location l on l.id = p.locationId WHERE date='2022-07-28'";

    private string $friday_events = "SELECT * FROM jazzactivity 
                                        JOIN artist a on jazzactivity.artistId = a.id
                                        JOIN performance p on p.id = jazzactivity.performanceId
                                        JOIN location l on l.id = p.locationId WHERE date='2022-07-29'";

    private string $saturday_events = "SELECT * FROM jazzactivity 
                                        JOIN artist a on jazzactivity.artistId = a.id
                                        JOIN performance p on p.id = jazzactivity.performanceId
                                        JOIN location l on l.id = p.locationId WHERE date='2022-07-30'";

    private string $sunday_events = "SELECT * FROM jazzactivity 
                                        JOIN artist a on jazzactivity.artistId = a.id
                                        JOIN performance p on p.id = jazzactivity.performanceId
                                        JOIN location l on l.id = p.locationId WHERE date='2022-07-31'";
    */

    public function findAll()
    {
        $this->stmt = $this->db->prepare($this->all_events_sql);
        //$this->stmt->setFetchMode(PDO::FETCH_CLASS, 'jazzActivity');
        $this->stmt->execute();
        return $this->stmt->fetchAll();
    }

    public function findEvents(){

        /*
        if(isset($_POST["thursdayEvents"])){
            $this->stmt = $this->db->prepare($this->thursday_events);

        }
        elseif (isset($_POST["fridayEvents"])){
            $this->stmt = $this->db->prepare($this->friday_events);
        }
        elseif (isset($_POST["saturdayEvents"])){
            $this->stmt = $this->db->prepare($this->saturday_events);
        }
        elseif (isset($_POST["sundayEvents"])){
            $this->stmt = $this->db->prepare($this->sunday_events);
        }
        else{
            $this->stmt = $this->db->prepare($this->all_events_sql);
        }
        */

        $this->stmt = $this->db->prepare($this->all_events_sql);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'jazzactivity');
        $this->stmt->execute();
        return $this->stmt->rowCount();
    }

    public function purchaseTicket(){

        if(isset($_POST['activityId'])){
            $result = 'kio';
        }
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function saveOne($object)
    {
        // TODO: Implement saveOne() method.
    }

    public function deleteOne($id)
    {
        // TODO: Implement deleteOne() method.
    }
}