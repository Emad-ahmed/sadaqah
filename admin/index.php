<?php include 'adminNavbar.php' ?>
<link rel="stylesheet" href="css/event.css">

<style>
    table{
        margin-left: 0.5rem;
        margin-right: 0.5rem;
    }
    .jtable__panel
    {
        padding-left: 1%;
    }

</style>

    

<main role="main" class="main">

<?php
        include 'config.php';

        $sql = "SELECT * from visitors";

        if ($result = mysqli_query($conn, $sql)) {

            // Return the number of rows in result set
            $rowcount = mysqli_num_rows( $result );
            
            // Display result
            echo "<div class='content'>
            <h3>Total User</h3>
            <h2>$rowcount</h2>
            
          </div>";
        }
        ?>



<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Ip Address</th>
                    <th>User Agent</th>
                    <th>Visit Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include 'config.php';
                    $alldata = mysqli_query($conn, "SELECT * FROM `visitors` ");

                    while ($row = mysqli_fetch_array($alldata)) {
                        
                        echo "<tr>
                        <td>$row[id]</td>
                        <td>$row[ip_address]</td>
                        <td>$row[user_agent]</td>
                        <td>$row[visit_time]</td>
                        </tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <script src="js/datatable.min.js"></script>
</main>


</div>