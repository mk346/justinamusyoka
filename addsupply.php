<?php 
require 'config.php';
include 'includes/form_handler/save_supply.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/dashboard.css"/>
    <script src="https://kit.fontawesome.com/0fe3bc1f22.js" crossorigin="anonymous"></script>
    <title>Add Supplies</title>
</head>
<body>
    <?php include 'sidebar.php'?>
    <div class="main">
        <h1 class="page-title">New Item</h1>
        <hr class="line">
        <div class="container-fluid-1">
            <div class="mycol">
                <div class="card-1 card-outline card-primary">
                    <div class="card-body-1">
                        <form action="addsupply.php" method="POST">
                            <div class="row-1">
                                <div class="form-col">
                                    <div class="row-2">
                                        <div class="form-group form-col">
                                            <label for class="control-label">Item Name</label>
                                            <input type="text" name="item" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group form-col">
                                            <label for class="control-label">Quantity</label>
                                            <input type="text" name="quantity" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group form-col">
                                            <label for class="control-label">Price</label>
                                            <input type="text" name="price" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group form-col">
                                            <label for class="control-label">Date Purchased</label>
                                            <input type="date" name="date_purchased" id="" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="line-3">
                            <div class="form-col display-flex">
                                <input type="submit" name="save_item" value="Save" class="btn-1">
                                <a href="supplies.php" class="btn-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>