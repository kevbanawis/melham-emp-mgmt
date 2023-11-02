<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./uam.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>UAM</title>
</head>

<body>

  <?php $shared_path = $_SERVER["DOCUMENT_ROOT"] . "/employee-mgt-template/components/admin/shared/"; ?>

  <div class="container-fluid">
    <header>
      <?php include($shared_path . "header.php") ?>
    </header>
    <div id="search">
      <div class="inner-search">
        <h3>Filters</h3>
        <form>
          <div class="form-row" id="search-form">
            <div class="col-md-3 mb-3">
              <label for="employeeNumber">Employee Number:</label>
              <input type="number" class="form-control" id="validationServer01" placeholder="Enter Employee Number" name="employeeNumber">
            </div>
          </div>
          <div class="form-row" id="search-form">
            <div class="col-md-3 mb-3">
              <label for="employeeName">Employee Name:</label>
              <input type="number" class="form-control" id="validationServer01" placeholder="Enter Employee Name" name="employeeName">
            </div>
          </div>
          <button type="submit" class="btn btn-info w-25">Search</button>

        </form>
      </div>
    </div>
    <div id="table-employees">
      <div class="table-inner">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col" id="col-eid">Employee Number</th>
              <th scope="col" id="col-ename">Employee Name</th>
              <th scope="col" id="col-res"></th>
              <th scope="col" id="col-log"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td><button class="btn btn-primary btn" data-toggle="modal" data-target="#resetModal">Reset <i class="fa fa-refresh" aria-hidden="true"></i></i></button></td>
              <td><button class="btn btn-info btn" data-toggle="modal" data-target="#logoutUserModal">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td><button class="btn btn-primary btn" data-toggle="modal" data-target="#resetModal">Reset <i class="fa fa-refresh" aria-hidden="true"></i></i></button></td>
              <td><button class="btn btn-info btn" data-toggle="modal" data-target="#logoutUserModal">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></i></button></td>
            </tr>


          </tbody>
        </table>
      </div>

    </div>
    <footer>
      <?php include($shared_path . "footer.php") ?>
    </footer>
  </div>

  <!-- Reset Modal -->
  <div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="resetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="resetModalLabel">Reset User Password to Default</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Confirm to reset user's password?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary" onclick="closeModal('#resetModal')">Yes, proceed</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout User Modal -->
  <div class="modal fade" id="logoutUserModal" tabindex="-1" role="dialog" aria-labelledby="logoutUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutUserModalLabel">Logout User / Remove Session</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to REMOVE user's existing session?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary" onclick="closeModal('#logoutUserModal')">Yes, proceed</button>
        </div>
      </div>
    </div>
  </div>

  <script src="./uam.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>