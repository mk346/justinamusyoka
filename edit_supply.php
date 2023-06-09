<?php
require 'config.php';
require 'config/pdo.php';
$id = $_GET['edit_id'];
$query = $db_con->prepare("SELECT * FROM supplies WHERE itemID = :id");
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
        <title>Edit Supply</title>
    </head>

    <body>
        <?php include 'sidebar.php' ?>
        <div class="main">
            <h1 class="page-title">Edit Supply</h1>
            <hr class="line">
            <div class="container-fluid-1">
                <div class="mycol">
                    <div class="card-1 card-outline card-primary">
                        <div class="card-body-1">
                            <form action="includes/save_editsupply.php" method="POST">
                                <div class="row-1">
                                    <div class="form-col">
                                        <div class="row-2">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <div class="form-group form-col">
                                                <label for class="control-label">Item Name</label>
                                                <input type="text" name="item" value="<?php echo $row['name'] ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group form-col">
                                                <label for class="control-label">Quantity</label>
                                                <input type="text" name="quantity" value="<?php echo $row['quantity'] ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group form-col">
                                                <label for class="control-label">Price</label>
                                                <input type="text" name="price" value="<?php echo $row['price'] ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group form-col">
                                                <label for class="control-label">Date Purchased</label>
                                                <input type="date" name="date_purchased" value="<?php echo $row['date_purchased'] ?>" class="form-control" required>
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
                        <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>

    </html>