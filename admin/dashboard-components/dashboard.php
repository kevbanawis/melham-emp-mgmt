<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./dashboard-style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <title>Dashboard</title>

</head>
<?php $shared_path = $_SERVER["DOCUMENT_ROOT"] . "/employee-mgt-template/components/admin/shared/"; ?>

<body onload="startTime()">
  <div class="container-fluid">
    <header id="header">
      <?php include($shared_path . "header.php"); ?>
    </header>
    <div id="content1">
      <div class="table-container">
        <h2>Employee Information</h2>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Address</th>
              <td>
                No.27 Commonwealth Avenue corner Regalado Avenue North
                Fairview Quezon City 1121. North Fairview, QUEZON CITY, NCR,
                SECOND DISTRICT, NCR
              </td>
            </tr>
            <tr>
              <th scope="row">Gender</th>
              <td>Male</td>
            </tr>
            <tr>
              <th scope="row">Civil Status</th>
              <td>Maried</td>
            </tr>
            <tr>
              <th scope="row">Email Address</th>
              <td>info@melhamconstruction.ph</td>
            </tr>
            <tr>
              <th scope="row">Cellphone Number</th>
              <td>09569960075</td>
            </tr>
            <tr>
              <th scope="row">Birthday</th>
              <td>2/24/2020</td>
            </tr>
            <tr>
              <th scope="row">Age</th>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">Religion</th>
              <td>INC</td>
            </tr>
            <tr>
              <th scope="row">Start Date</th>
              <td>4/23/2021</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div id="content2">
      <div class="inner-time">
        <div class="card border-light mb-3 justify-content-center" style="max-width: 18rem">
          <div class="card-header">
            <center>Time Today</center>
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <center id="dt"></center>
            </h5>
            <p class="card-text">
              <canvas id="canvas" height="250" width="250"></canvas>
              <center id="yt"></center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <?php include($shared_path . "footer.php") ?>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="dashboard-script.js"></script>
</body>

</html>