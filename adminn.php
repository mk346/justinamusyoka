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
<?php include 'sidebar.php';?>

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
            <div class="numbers">90</div>
            <div class="cardname">Orders</div>
          </div>
          <div class="iconbox">
            <ion-icon name="cart-outline"></ion-icon>
          </div>
        </div>
        <!-- <div class="card">
          <div>
            <div class="numbers">254</div>
            <div class="cardname">Comments</div>
          </div>
          <div class="iconbox">
            <ion-icon name="chatbubbles-outline"></ion-icon>
          </div>
        </div> -->
        <div class="card">
          <div>
            <div class="numbers">70000</div>
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
              <tr>
                <td>Duvet</td>
                <td>1100</td>
                <td>Paid</td>
                <td><span class="status delivered">Done</span></td>
              </tr>
              <tr>
                <td>Clothes</td>
                <td>700</td>
                <td>Due</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>Carpet</td>
                <td>1500</td>
                <td>Paid</td>
                <td><span class="status delivered">Done</span></td>
              </tr>
              <tr>
                <td>Duvet</td>
                <td>1000</td>
                <td>Due</td>
                <td><span class="status inprogress">In Progress</span></td>
              </tr>
              <tr>
                <td>Clothes</td>
                <td>1000</td>
                <td>Due</td>
                <td><span class="status inprogress">In Progress</span></td>
              </tr>
              <tr>
                <td>Carpet</td>
                <td>1500</td>
                <td>Paid</td>
                <td><span class="status delivered">Done</span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- new customer -->
        <div class="recentcustomers">
          <div class="cardheader">
            <h2>Recent Customers</h2>
          </div>
          <table>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/5.jpg" alt="" /></div>
              </td>
              <td>
                <h4>David <br /><span>Tumaini</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/2.jpg" alt="" /></div>
              </td>
              <td>
                <h4>Ali <br /><span>Kandisi</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/1.jpg" alt="" /></div>
              </td>
              <td>
                <h4>Baraka <br /><span>Tuala</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/2.jpg" alt="" /></div>
              </td>
              <td>
                <h4>Kandi<br /><span>Kandisi</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/5.jpg" alt="" /></div>
              </td>
              <td>
                <h4>Rosy <br /><span>Buru</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/4.jpg" alt="" /></div>
              </td>
              <td>
                <h4>Imani <br /><span>Tumaini</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/2.jpg" alt="" /></div>
              </td>
              <td>
                <h4>Amani <br /><span>Mayor</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgbox"><img src="img/1.jpg" alt="" /></div>
              </td>
              <td>
                <h4>Kituu <br /><span>Kiserian</span></h4>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>



    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script src="script.js"></script>
  </body>
</html>
