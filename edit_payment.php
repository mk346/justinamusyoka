<?php
require 'config.php';
require 'config/pdo.php';
$client_list = "";
$client_name = "";
$query = "SELECT * FROM client ORDER BY clientID DESC";
$exec = mysqli_query($con, $query);
if (mysqli_num_rows($exec)) {
    while ($rows = mysqli_fetch_assoc($exec)) {
        $client_list = $client_list."<option>".$rows['username']." ".$rows['phone']."</option>";
        $client_name = $client_name."<option>".$rows['username']."</option>";
    }
}
$id = $_GET['edit_id'];
$query = $db_con->prepare("SELECT * FROM payment WHERE paymentID = :id");
$query->bindParam(':id', $id);
$query->execute();
for ($i = 0; $row = $query->fetch(); $i++) {
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Assets/dashboard.css" />
        <script src="https://kit.fontawesome.com/0fe3bc1f22.js" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <title>Edit Service</title>
    </head>

    <body>
        <?php include 'sidebar.php' ?>
        <div class="main">
            <h1 class="page-title">Edit Payment</h1>
            <hr class="line">
            <div class="container-fluid-1">
                <div class="mycol">
                    <div class="card-1 card-outline card-primary">
                        <div class="card-body-1">
                            <form action="includes/save_edit_payment.php" method="POST">
                                <div class="row-2 padding-right">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <div class="form-group form-col">
                                        <label for class="control-label">Client</label>
                                        <select name="client" id="client_name" class="form-control">
                                            <!-- <option value="#">Select Client</option> -->
                                            <!-- <input type="hidden" value=""> -->
                                            <option value="<?php $row['client'] ?>">
                                                <?php echo $row['client']; ?>
                                            </option>
                                            <option value="<?php $client_list ?>">
                                                <?php echo $client_list ?>
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group form-col">
                                        <label for class="control-label">Type</label>
                                        <select name="type" id="type" class="form-control" onchange="showOption();">
                                            <option value="<?php $row['service'] ?>"><?php echo $row['service'] ?></option>
                                            <option value="Everyday Wear">Everyday Wear</option>
                                            <option value="Formal Wear">Formal Wear</option>
                                            <option value="Delicate Fabrics">Delicate Fabrics</option>
                                            <option value="Beddings">Beddings</option>
                                            <option value="Special Garments">Special Garments</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-col">
                                        <label for class="control-label">Amount Per Kg</label>
                                        <input type="number" name="amount" id="amount" value="<?php echo $row['amount'] ?>" class="form-control" disabled>
                                    </div>
                                    <div class="form-group form-col">
                                        <label for class="control-label">Quantity</label>
                                        <input type="number" name="quantity" class="form-control" value="<?php echo $row['quantity'] ?>">
                                    </div>
                                    <div class="form-group form-col">
                                        <label for class="control-label">Payment</label>
                                        <select name="payment" id="mode" class="form-control">
                                            <option value="<?php $row['payment'] ?>"><?php echo $row['payment'] ?></option>
                                            <option value="mpesa">Mpesa</option>
                                            <option value="cash">Cash</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-col">
                                        <label for class="control-label">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="<?php $row['status'] ?>"><?php echo $row['status'] ?></option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Done">Done</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="line-3">
                                <div class="form-col display-flex mg-bt">
                                    <input type="submit" name="edit_payment" value="Save" class="btn-1">
                                    <a href="payment.php" class="btn-2">Cancel</a>
                                </div>
                            </form>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="Assets/js/options.js"></script>
    </body>

    </html>