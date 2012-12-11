<?php
/**
 * Description of Controller
 *
 * @author edwardsj
 */
include_once("Models/BookingModel.php");

class BookingController {
     public $booking;	

     public function __construct()
     {
         $this->booking = new BookingModel();
     } 

     public function invoke()
     {
          if (!isset($_GET['action']))
          {
               // no specific action is requested, we'll show the homepage.
               include 'Views/makeBookingView.php';
          }
          else
          {
               // run the requested action
               switch ($_GET['action']) {
                   case 'bookingform':
                       include 'Views/makeBookingView.php';
                       break;
                   case 'makebooking':
                       include 'Controllers/makeBooking.php';
                       break;
                   case 'viewbookings':
                       $bookings = $this->booking->getBookingList();
                       include 'Views/listBookingView.php';
                       break;
                   case 'viewbooking':
                       $booking = $this->booking->getBooking($_GET['id']);
                       include 'Views/bookingView.php';
                       break;
                   case 'home':
                       include 'Views/home.php';
                       break;
                   default:
                       include 'Views/404.php';
                       break;
               }
          }
     }
}

?>