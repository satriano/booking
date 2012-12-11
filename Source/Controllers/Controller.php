<?php
/**
 * Description of Controller
 *
 * @author edwardsj
 */
include_once("Model/Model.php");

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
               include 'View/home.php';
          }
          else
          {
               // run the requested action
               switch ($_GET['action']) {
                   case 'bookingform':
                       include 'View/makeBookingView.php';
                       break;
                   case 'makebooking':
                       include 'makeBooking.php';
                       break;
                   case 'viewbookings':
                       $bookings = $this->model->getBookingList();
                       include 'View/listBookingView.php';
                       break;
                   case 'viewbooking':
                       $booking = $this->model->getBooking($_GET['id']);
                       include 'View/bookingView.php';
                       break;
                   case 'home':
                       include 'View/home.php';
                       break;
                   default:
                       include 'View/404.php';
                       break;
               }
          }
     }
}

?>
