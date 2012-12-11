<?php
/**
 * Description of Controller
 *
 * @author edwardsj
 */
include_once("Models/Model.php");
include_once("Controllers/BookingController.php");

class Controller {
     public $model;	

     public function __construct()
     {
          $this->model = new Model();
     } 

     public function invoke()
     {
          if (!isset($_GET['module']))
          {
               // no specific action is requested, we'll show the homepage.
               include 'Views/home.php';
          }
          else
          {
               // run the requested action
               switch ($_GET['module']) {
                   case 'booking':
                       $bookingController = new BookingController();
                       $bookingController->invoke();
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
