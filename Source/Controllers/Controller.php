<?php
/**
 * Description of Controller
 *
 * @author edwardsj
 */
include_once("Models/Model.php");

class Controller {
     public $model;	

     public function __construct()
     {
          $this->model = new Model();
     } 

     public function invoke()
     {
          if (!isset($_GET['action']))
          {
               // no specific action is requested, we'll show the homepage.
               include 'Views/home.php';
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
                       $bookings = $this->model->getBookingList();
                       include 'Views/listBookingView.php';
                       break;
                   case 'viewbooking':
                       $booking = $this->model->getBooking($_GET['id']);
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
