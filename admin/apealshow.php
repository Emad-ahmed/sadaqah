<?php include('adminNavbar.php') ?>
<link rel="stylesheet" href="css/event.css">


<style>
    
    

    table{
        width: 91.5% !important;
    }

</style>
   

<main role="main" class="main">
<h2 class="text-center mt-3">View Appeal</h2>
<div>
<ul class="breadcrumb">   
    <li class="breadcrumb-item active"><a href="apealshow.php">Appeal</a></li>
    <li class="breadcrumb-item active"><a href="addappeal.php">Add Appeal</a></li>
    <li class="breadcrumb-item active"><a href="addimageappeal.php">Add Image</a></li>
    <li class="breadcrumb-item active"><a href="addvideoappeal.php">Add Video</a></li>
</ul>
</div>
<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Title</th>
                    <th>Poster Image</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include 'config.php';
                    $alldata = mysqli_query($conn, "SELECT * FROM `appeal` ORDER BY id DESC");

                    while ($row = mysqli_fetch_array($alldata)) {
                        if (strlen($row['description']) > 100)
                            $new_string = substr($row['description'], 0, 20) . '';
                        else
                        $new_string = $row['description'];
                        echo "<tr>
                        <td>$row[id]</td>
                        <td>$row[title]</td>
                        <td><img src='appealImage/$row[poster_image]' alt=''></td>
                        <td>$new_string..</td>
                        <td>$row[need_amount]</td>
                        <td><a href='Editappeal.php?id=$row[id]' class='btn btn-info'>Edit</a> <a href='deleteappeal.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
                        
                        </tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <script src="js/datatable.min.js"></script>

</main>