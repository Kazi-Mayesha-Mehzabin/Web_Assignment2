
<?php
require_once('connection.php');
$connection = new Connection();


$dbConnect = $connection->getConnection();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Contact List</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <h3>Contact List</h3>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead style="background-color: #01C531;">
                        <th style="color: #000000;">Name</th>
                        <th style="color: #000000;">Email</th>
                        <th style="color: #000000;">Subject</th>
                        <th style="color: #000000;">Message</th>


                    </thead>
                    <tbody>
                        <?php
                        $contactInfo = "SELECT * FROM contact;";
                        $countArray = $dbConnect->query($contactInfo);
                        if ($countArray->num_rows > 0) {
                            while ($row = $countArray->fetch_assoc()) {
                                echo "<tr>";

                                echo   "<td> " . $row['name'] . "</td>";
                                echo   "<td> " . $row['email'] . "</td>";
                                echo   "<td> " . $row['subject'] . "</td>";
                                echo   "<td> " . $row['message'] . "</td>";
                               

                                echo "</tr>";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>


        </div>

    </section>



</body>
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>