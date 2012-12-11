<?php
/**
 * Booking Class, used to create and manage Booking objects.
 *
 * @author edwardsj
 */
class Booking {
    public $name;
    public $department;
    public $email;
    public $dateFrom;
    public $dateTo;
    public $equipment; //this should be an array of equipment with at least one entry.
    public $reason;
    
    public function __construct($name, $department, $email, $dateFrom,
            $dateTo, $equipment, $reason)
    {
        $this->name = $name;
        $this->department = $department;
        $this->email = $email;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->equipment = $equipment;
        $this->reason = $reason;        
    }
}
?>
