<?php include ("View/header.php"); ?>
    <div class="page-header"><h1>Booking List</h1></div>
    <div>
        <table>
            <tbody><tr><td>Id</td><td>Name</td><td>Department</td><td>Email</td>
                    <td>Date From</td><td>Date To</td><td>Equipment</td>
                        <td>Reason</td></tr></tbody>
            <?php
            foreach($bookings as $title => $booking)
            {   echo '<tr><td><a href="index.php?action=viewbooking&id='.$booking->id.'">'.$booking->id.'</a></td>'.
                '<td>'.$booking->name . '</td>'.
                '<td>'.$booking->department . '</td>'.
                '<td>'.$booking->email . '</td>'.
                '<td>'.$booking->dateFrom . '</td>'.
                '<td>'.$booking->dateTo . '</td><td>';
                foreach($booking->equipment as $item)
                {
                    echo $item . ' ';
                }
                echo '</td><td>'.$booking->reason . '</td></tr>';
            }
            ?>
        </table>
    </div>
    <br />
<?php include ("View/footer.php"); ?>