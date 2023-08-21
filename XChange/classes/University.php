<?php
class University {
    private $name;
    private $exchangeSlots;
    private $country;
    private $city;
    private $image;

    function __construct($name, $exchangeSlots, $country, $city, $image) {
        $this->name = $name;
        $this->exchangeSlots = $exchangeSlots;
        $this->country = $country;
        $this->city = $city;
        $this->image = $image;
    }

    function getName() {
        return $this->name;
    }

    function getExchangeSlots() {
        return $this->exchangeSlots;
    }

    function getCountry() {
        return $this->country;
    }

    function getCity() {
        return $this->city;
    }

    function getImage() {
        return $this->image;
    }
}

?>