<?php include ("View/header.php"); ?>
    <div class="page-header"><h1>Booking Details</h1></div>
    <div>
        <?php
        
        echo 'Name: ' . $booking->name . '<br/>';
        echo 'Department: ' . $booking->department . '<br/>'; 
        echo 'Email: ' . $booking->email . '<br/>'; 
        echo 'Date From: ' . $booking->dateFrom . '<br/>'; 
        echo 'Date To: ' . $booking->dateTo . '<br/>';
        echo 'Equipment: ';
        foreach($booking->equipment as $item)
        {
            echo ($item) . '<br />';
        }
        
        echo 'Reason: ' . $booking->reason . '<br/><br/>';
        ?>
    </div>
<?php include ("View/footer.php"); ?>