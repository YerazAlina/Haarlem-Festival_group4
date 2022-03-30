<?php

class location {
    
    public int $id;
    public string $locationname;
    public string $address;
    public string $postalCode;
    public string $city;

    /**
     * @param int $id
     * @param string $locationname
     * @param string $address
     * @param string $postalCode
     * @param string $city
     */


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLocationname(): string
    {
        return $this->locationname;
    }

    /**
     * @param string $locationname
     */
    public function setLocationname(string $locationname): void
    {
        $this->locationname = $locationname;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }





}