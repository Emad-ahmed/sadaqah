<?php include('adminNavbar.php') ?>
<link rel="stylesheet" href="css/event.css">


<style>
    .smslog a
    {
        background: black !important;
    }

</style>
   

<main role="main" class="main">
<h2 class="text-center mt-3">View Event</h2>

<div>
<ul class="breadcrumb">   
    <li class="breadcrumb-item active"><a href="eventshow.php">Event</a></li>
    <li class="breadcrumb-item active"><a href="addevent.php">Add Event</a></li>
</ul>
</div>

<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Title</th>
                   
                    <th>Contact</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include 'config.php';
                    $alldata = mysqli_query($conn, "SELECT * FROM `event` ORDER BY id DESC");

                    while ($row = mysqli_fetch_array($alldata)) {
                        if (strlen($row['description']) > 100)
                            $new_string = substr($row['description'], 0, 20) . '';
                        else
                            $new_string = $row['description'];
                        echo "<tr>
                        <td>$row[id]</td>
                        <td>$row[title]</td>
                        
                        <td>$row[contact]</td>
                        <td><img src='eventImage/$row[image]' alt=''></td>
                        <td>$row[start_date]</td>
                        <td>$new_string..</td>
                        <td><a href='editevent.php?id=$row[id]' class='btn btn-info'>Edit</a> <a href='deleteevent.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
                        
                        </tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <script src="js/datatable.min.js"></script>

</main>