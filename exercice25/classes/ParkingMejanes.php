<?php 
require_once('Parking.php');

class ParkingMejanes extends Parking
{
    protected int $capaciteMax = 500;
    protected int $placesReservees = 100;
}
