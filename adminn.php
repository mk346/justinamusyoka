<?php
require 'config/pdo.php';
require 'config.php';
$earning = 0;
$total = 0;
$query = $con->query("SELECT * FROM payment ORDER BY paymentID DESC");
if (mysqli_num_rows($query) > 0) {
  $num_rows = mysqli_num_rows($query);
  while ($row = $query->fetch_assoc()) {
    $earning = $row['price'];
    $earning = intval($earning);
    $total += $earning;
    $clients = $row['client'];
    $client = explode(" ", $clients);
    $price = $row['price'];
    $payment = $row['payment'];
    $status = $row['service'];
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Admin Dashboard</title>
  <link rel="stylesheet" href="Assets/dashboard.css" />
</head>

<body>
  <?php include 'sidebar.php'; ?>

  <!-- main -->

  <div class="main">
    <div class="topbar">
      <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
      </div>
      <!-- search -->
      <div class="search">
        <label>
          <input type="text" placeholder="Search" />
          <ion-icon name="search-outline"></ion-icon>
        </label>
      </div>
      <!-- userImg -->
      <div class="user">
        <img src="img/1.jpg" />
      </div>
    </div>

    <!-- card  -->
    <div class="cardbox">
      <div class="card">
        <div>
          <div class="numbers">1600</div>
          <div class="cardname">Daily views</div>
        </div>
        <div class="iconbox">
          <ion-icon name="eye-outline"></ion-icon>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers"><?php echo $num_rows; ?></div>
          <div class="cardname">Orders</div>
        </div>
        <div class="iconbox">
          <ion-icon name="cart-outline"></ion-icon>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers"><?php echo $total; ?></div>
          <div class="cardname">Earnings</div>
        </div>
        <div class="iconbox">
          <ion-icon name="cash-outline"></ion-icon>
        </div>
      </div>
    </div>
    <!-- detail list -->

    <div class="details">
      <div class="recentorders">
        <div class="cardheader">
          <h2>Recent Orders</h2>
          <a href="order.php" class="btn">View All</a>
        </div>
        <table>
          <thead>
            <tr>
              <td>Name</td>
              <td>Price</td>
              <td>Payment</td>
              <td>Status</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $query2 = $con->query("SELECT * FROM payment ORDER BY paymentID DESC LIMIT 5");
            while ($myrows = $query2->fetch_assoc()) :
            ?>
              <tr>
                <td><?php
                    $clients = $myrows['client'];
                    $client = explode(" ", $clients);
                    echo $client[0]
                    ?>
                </td>
                <td><?php echo $myrows['price'] ?></td>
                <td><?php echo ucwords($myrows['payment']) ?></td>
                <td><span class="status delivered"><?php echo ucwords($myrows['status']) ?></span></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>

      <!-- new customer -->
      <div class="recentcustomers">
        <div class="cardheader">
          <h2>Recent Customers</h2>
        </div>
        <table>
          <?php
          $query2 = $con->query("SELECT * FROM client ORDER BY clientID DESC LIMIT 5");
          while ($myrows2 = $query2->fetch_assoc()) :
          ?>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/5.jpg" alt="" /></div>
              </td>
              <td>
                <h4>
                  <?php
                  echo $myrows2['username'];
                  ?> 
                <br/>
                <span><?php echo ucwords($myrows2['location']) ?></span></h4>
              </td>
            </tr>
          <?php endwhile; ?>
        </table>
      </div>
    </div>
  </div>



  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="script.js"></script>
</body>

</html>