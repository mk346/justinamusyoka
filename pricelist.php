<?php
require 'config.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style data-styles="">ion-icon{visibility:hidden}.hydrated{visibility:inherit}</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/dashboard.css" />
    <title>Prices</title>
</head>
<body>
    <?php include 'sidebar.php'?>
    <div class="main">
        <h1 class="page-title">Price List</h1>
        <hr class="line">
        <div class="table-container">
            <div class="mycol">
                <div class="card-1 card-outline card-primary">
                    <div class="card-header-1">
                        <div class="card-item">
                            <a href="#" class="addbtn">Add New</a>
                        </div>
                    </div>
                        <div class="card-body-1">
                            <div class="mini-wrapper">
                                <div class="row-1">
                                    <div class="table col">
                                        <table class="mytable">
                                            <thead>
                                                <tr>
                                                    <th class="rhead">#</th>
                                                    <th class="rhead">Category/Type</th>
                                                    <th class="rhead">Quantity</th>
                                                    <th class="rhead">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                $query = $con->query("SELECT * FROM pricelist order by priceID DESC");
                                                while ($row = $query->fetch_assoc()):
                                                ?>
                                                <tr>
                                                    <td class="rbody"><?php echo $i++; ?></td>
                                                    <td class="rbody"><?php echo $row['category']?></td>
                                                    <td class="rbody"><?php echo $row['quantity']?></td>
                                                    <td class="rbody"><?php echo $row['price']?></td>
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

</body>
</html>