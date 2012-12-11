<?php
/**
 * Description of Model
 *
 * @author edwardsj
 */
include_once("Models/Booking.php");
include_once("Models/Database.php");
include_once("Models/Email.php");

class Model {
    public function makeBooking($name, $department, $email, $dateTo, $dateFrom, $equipment, $reason)
    {
        $booking = new Booking($name, $department, $email, $dateFrom, $dateTo, $equipment, $reason);
    }
    
    public function deleteBooking($id)
    {
    }
    public function getBookingList()
    {
        // here goes some hardcoded values to simulate the database
        return array(
                "1" => new Booking("Jordan Ahmadzadeh", "Communications", "jordan@thelowry.com", "2012-11-27", "2012-12-07", array("MacBook"), "Editing video for Centre Stage exhibition"),
        );
    }

    public function getBooking($id)
    {
        // we use the previous function to get all the books and then we return the requested one.
        // in a real life scenario this will be done through a db select command
        $allBookings = $this->getBookingList();
        return $allBookings[$id];
    }
}
?>
