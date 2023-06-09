<?php
require 'config.php';
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
    <link rel="stylesheet" href="Assets/dashboard.css" />
    <script src="https://kit.fontawesome.com/0fe3bc1f22.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Payment</title>
</head>

<body>
    <?php include 'sidebar.php' ?>
    <div class="main">
        <h1 class="page-title">Payments</h1>
        <hr class="line">
        <div class="table-container">
            <div class="my-col">
                <div class="card-1 card-outline card-primary">
                    <div class="card-header-1">
                        <div class="card-item">
                            <a href="addpayment.php" class="addbtn">Add New</a>
                        </div>
                    </div>
                    <div class="card-body-1">
                        <div class="mini-wrapper">
                            <div class="row-1">
                                <div class="table-col">
                                    <table class="mytable">
                                        <thead>
                                            <tr>
                                                <th class="rhead">#</th>
                                                <th class="rhead">Client' Name</th>
                                                <th class="rhead">Price</th>
                                                <th class="rhead">Payment</th>
                                                <th class="rhead">Status</th>
                                                <th class="rhead">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            $query = $con->query("SELECT * FROM payment order by paymentID DESC");
                                            while ($row = $query->fetch_assoc()) :
                                            ?>
                                                <tr>
                                                    <td class="rbody"><?php echo $i++; ?></td>
                                                    <td class="rbody"><?php echo ucwords($row['client']); ?></td>
                                                    <td class="rbody"><?php echo $row['price'] ?></td>
                                                    <td class="rbody"><?php echo $row['payment'] ?></td>
                                                    <td class="rbody"><?php echo $row['status'] ?></td>
                                                    <td class="rbody">
                                                        <div class="btn-group">
                                                            <a href="edit_payment.php?&edit_id=<?php echo $row['paymentID'] ?>" class="btn-main btn-edit">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="delete_delete.php?&del_id=<?php echo $row['paymentID'] ?>" class="btn-main btn-del">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
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