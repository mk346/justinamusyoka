<?php
require 'config.php';
$from_date = "";
$to_date = "";
$err_arry = array();
$i = 0;
$username = "";
// $phone = "";
// $email = "";
// $location = "";
// $type = "";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style data-styles="">
        ion-icon {
            visibility: hidden
        }

        .hydrated {
            visibility: inherit
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0fe3bc1f22.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="Assets/dashboard.css" />
    <title>Reports</title>
</head>

<body>
    <?php include 'sidebar.php' ?>
    <div class="main">
        <h1 class="page-title">Reports</h1>
        <hr class="line">
        <div class="container-fluid-1">
            <div class="form-col">
                <div class="card-1 card-outline card-primary">
                    <div class="card-body-1">
                        <div class="d-flex w-100 px-1 justify-content align-items">
                            <form action="" method="POST" class="report-form">
                                <label for="date-from" class="control-label mx-1">From</label>
                                <input type="date" class="form-control col-sm" name="from_date" required>
                                <label for="date-to" class="control-label mx-1">To</label>
                                <input type="date" class="form-control col-sm" name="to_date" required>
                                <input type="submit" name="filter" class="btn-main btn-view" value="View Report">
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="report-row">
                    <div class="form-col">
                        <div class="card-1">
                            <div class="card-body-1">
                                <div class="row-1">
                                    <table class="reports-table">
                                        <thead>
                                            <tr class="trow">
                                                <th class="rhead">#</th>
                                                <th class="rhead">Order Date</th>
                                                <th class="rhead">Client's Name</th>
                                                <th class="rhead">Phone Number</th>
                                                <th class="rhead">Location</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_POST['filter'])) {
                                                $from_date = strip_tags($_POST['from_date']);
                                                $to_date = strip_tags($_POST['to_date']);

                                                $query = "SELECT * FROM client WHERE date_ordered BETWEEN '$from_date' AND '$to_date'";
                                                $result = mysqli_query($con, $query);
                                                if ($result) {
                                                    $rows = mysqli_num_rows($result);
                                                    if ($rows > 0) {
                                                        foreach ($result as $data) {
                                                            $i++;
                                            ?>
                                                            <tr class="trow">
                                                                <td class="rbody"><?php echo $i; ?></td>
                                                                <td class="rbody"><?php $date_ordered = date("M d, Y", strtotime($data['date_ordered']));
                                                                                    echo $date_ordered; ?></td>
                                                                <td class="rbody"><?php echo $data['username'] ?></td>
                                                                <td class="rbody"><?php echo $data['phone'] ?></td>
                                                                <td class="rbody"><?php echo $data['location'] ?></td>
                                                            </tr>
                                            <?php
                                                        }
                                                    } else if ($rows <= 0) {
                                                        array_push($err_arry, "<span style='color: red;'>No Records Found</span><br>");
                                                    }
                                                }
                                            }
                                            ?>
                                            <tr>
                                                <div class="error-display">
                                                    <?php if (in_array("<span style='color: red;'>No Records Found</span><br>", $err_arry)) {
                                                        echo "<span style='color: red;'>No Records Found</span><br>";
                                                    } ?>
                                                </div>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</body>

</html>