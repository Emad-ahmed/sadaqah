<?php include('adminNavbar.php') ?>
<link rel="stylesheet" href="css/event.css">


<style>
  table{
        width:91.5% !important;
    }
    video{
        height:5rem;
        width:5rem;
    }
</style>

<main role="main" class="main">
<h2 class="text-center mt-3">View Video</h2>

<div>
<ul class="breadcrumb">   
    <li class="breadcrumb-item active"><a href="apealshow.php">Appeal</a></li>
    <li class="breadcrumb-item active"><a href="addimageappeal.php">Add Image</a></li>
    <li class="breadcrumb-item active"><a href="addvideoappeal.php">Add Video</a></li>
</ul>
</div>

<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Title</th>
                    <th>Video</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include 'config.php';
                    $alldata = mysqli_query($conn, "SELECT * FROM appeal, apeal_video where appeal.id = apeal_video.appeal_id");

                    while ($row = mysqli_fetch_array($alldata)) {
                        
                        echo "<tr>
                        <td>$row[id]</td>
                        <td>$row[title]</td>
                        <td><video src='video/$row[video]' controls>
                        </video></td>
                        <td><a href='editvideoappeal.php?id=$row[id]' class='btn btn-info'>Edit</a> <a href='deletevideoappeal.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
                        </tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <script src="js/datatable.min.js"></script>

</main>