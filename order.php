<?php
require 'config.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style data-styles="">ion-icon{visibility:hidden}.hydrated{visibility:inherit}</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/dashboard.css"/>
    <script src="https://kit.fontawesome.com/0fe3bc1f22.js" crossorigin="anonymous"></script>
    <title>Clients</title>
</head>
<body>
    <?php include 'sidebar.php'?>
    <div class="main">
        <h1 class="page-title">Orders List</h1>
        <hr class="line">
        <div class="table-container">
            <div class="mycol">
                <div class="card-1 card-outline card-primary">
                    <div class="card-header-1">
                        <div class="card-body-1">
                            <div class="mini-wrapper">
                                <div class="row-1">
                                    <div class="table-col">
                                        <table class="mytable">
                                            <thead>
                                                <tr>
                                                    <th class="rhead">#</th>
                                                    <th class="rhead">Client's Name</th>
                                                    <th class="rhead">Phone Number</th>
                                                    <th class="rhead">Email</th>
                                                    <th class="rhead">Location</th>
                                                    <th class="rhead">Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                //fetching data from clients table
                                                $query = $con->query("SELECT * FROM client order by clientID DESC");
                                                while ($row = $query->fetch_assoc()):
                                                ?>
                                                <tr>
                                                    <td class="rbody"><?php echo $i++; ?></td>
                                                    <td class="rbody"><?php echo ucwords($row['username']);?></td>
                                                    <td class="rbody"><?php echo $row['phone'];?></td>
                                                    <td class="rbody"><?php echo $row['email'];?></td>
                                                    <td class="rbody"><?php echo ucwords($row['location']);?></td>
                                                    <td class="rbody"><?php echo $row['type'];?></td>
                                                </tr>
                                                <?php endwhile; ?>
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
    </div>
</body>
</html>