<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./view-employees.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>View Employees</title>
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
        <form action="#search">
          <div class="form-row" id="search-form">
            <div class="col-md-2 mb-3">
              <label for="employeeNumber">Employee Number:</label>
              <input type="number" class="form-control" id="validationServer01" placeholder="Enter employee number" name="employeeNumber">
            </div>
            <div class="col-md-3 mb-3">
              <label for="employeeName">Employee Name:</label>
              <input type="text" class="form-control" id="validationServer02" placeholder="Enter employee name" name="employeeName">
            </div>

            <div class="col-md-2 mb-3">
              <label for="gender">Gender:</label>
              <select class="form-control" name="gender">
                <option>--</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <div class="col-md-2 mb-3">
              <label for="civil-status">Civil Status:</label>
              <select class="form-control" name="civil-status">
                <option>--</option>
                <option>Single</option>
                <option>Married</option>
                <option>Widowed</option>
                <option>Separated</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-2 mb-3">
              <label for="start-date">Start Date:</label>
              <input type="date" class="form-control" name="start-date">
            </div>
            <div class="col-md-2 mb-3">
              <label for="end-date">End Date:</label>
              <input type="date" class="form-control" name="end-date">
            </div>
            <div class="form-check p-5">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Show Inactive Employees
              </label>
            </div>
          </div>

          <button type="submit" class="btn btn-info w-25">Search</button>
          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addModal">Register Employee</button>
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
              <th scope="col" id="col-egen">Gender</th>
              <th scope="col">Civil Status</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>
            <tr>
              <th scope="row">202100001</th>
              <td>Employee Name</td>
              <td>Male</td>
              <td>Maried</td>
              <td>2021-05-06</td>
              <td>2021-05-06</td>
              <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit" id="edit-icon"></i></button></td>
            </tr>


          </tbody>
        </table>
        <nav aria-label="Employees Pagination">
          <ul class="pagination">
            <li class="page-item"><a class="page-link bg-dark text-info" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">3</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">4</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">5</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">6</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">7</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">8</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">9</a></li>
            <li class="page-item"><a class="page-link bg-dark text-light" href="#">10</a></li>
            <li class="page-item"><a class="page-link bg-dark text-info" href="#">Next</a></li>
          </ul>
        </nav>
      </div>

    </div>
    <footer>
      <?php include($shared_path . "footer.php") ?>
    </footer>

    <!-- Modal Add Employees -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Register Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="#add-employee">
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="lastname">Last Name:</label>
                  <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                </div>
                <div class="form-group col-md-4">
                  <label for="firstname">First Name:</label>
                  <input type="text" class="form-control" placeholder="First Name" name="firstname">
                </div>
                <div class="form-group col-md-2">
                  <label for="middle">Middle Name:</label>
                  <input type="text" class="form-control" placeholder="MI" name="middle">
                </div>
                <div class="form-group col-md-3">
                  <label for="suffix">Suffix:</label>
                  <input type="text" class="form-control" placeholder="Suffix Name" name="suffix">
                </div>
              </div>

              <div class="form-row">
                <div class="email">
                  <label for="inputPassword4">Email:</label>
                  <input type="email" class="form-control" name="middle" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">Phone:</label>
                  <input type="text" class="form-control" placeholder="Enter contact number" name="phone">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="civil-status">Civil Status:</label>
                  <select class="form-control" name="civil-status">
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Separated</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="birthday">Birthday:</label>
                  <input type="date" class="form-control" name="birthday">
                </div>
                <div class="form-group col-md-3">
                  <label for="religion">Religion:</label>
                  <input type="text" class="form-control" placeholder="City/Municipality" name="religion">
                </div>
                <div class="form-group col-md-3">
                  <label for="uac">User Rights:</label>
                  <select class="form-control" name="uac">
                    <option>User</option>
                    <option>Admin</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="employee-type">Employment Type:</label>
                  <select class="form-control" name="employee-type">
                    <option>Regular</option>
                    <option>Contractual</option>
                    <option>Intern</option>
                  </select>
                </div>
              </div>

              <hr>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="address-initial">No. Inc. Bldg. Name / Street / Subdivision: </label>
                  <input type="text" class="form-control" placeholder="Initial Address" name="address-initial">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="barangay">Barangay:</label>
                  <input type="text" class="form-control" placeholder="Brgy." name="barangay">
                </div>
                <div class="form-group col-md-3">
                  <label for="city-mun">City/Municipality:</label>
                  <input type="text" class="form-control" placeholder="City/Municipality" name="city-mun">
                </div>
                <div class="form-group col-md-3">
                  <label for="province">Province:</label>
                  <input type="text" class="form-control" placeholder="Province" name="province">
                </div>
                <div class="form-group col-md-3">
                  <label for="region">Region:</label>
                  <input type="text" class="form-control" placeholder="Region" name="region">
                </div>
              </div>

              <hr>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="start-date">Start Date:</label>
                  <input type="date" class="form-control" name="Start Date" name="start-date">
                </div>

                <div class="form-group col-md-6">
                  <label for="end-date">End Date:</label>
                  <input type="date" class="form-control" name="End Date" name="end-date">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="remarks">Remarks:</label>
                  <input type="text" class="form-control" placeholder="Remarks" name="remarks">
                </div>
              </div>

            </form>

          </div>
          <div class="modal-footer">
            <button type="button" id="close-btn" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" form="submit-form" class="btn btn-primary w-25" onclick="closeModal('#addModal')" [disabled]="form.invalid">Register</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Add Employees-->

    <!-- Modal Edit Employee -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="#edit-employee">
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="lastname">Last Name:</label>
                  <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                </div>
                <div class="form-group col-md-4">
                  <label for="firstname">First Name:</label>
                  <input type="text" class="form-control" placeholder="First Name" name="firstname">
                </div>
                <div class="form-group col-md-2">
                  <label for="middle">Middle Name:</label>
                  <input type="text" class="form-control" placeholder="MI" name="middle">
                </div>
                <div class="form-group col-md-3">
                  <label for="suffix">Suffix:</label>
                  <input type="text" class="form-control" placeholder="Suffix Name" name="suffix">
                </div>
              </div>

              <div class="form-row">
                <div class="email">
                  <label for="inputPassword4">Email:</label>
                  <input type="email" class="form-control" name="middle" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">Phone:</label>
                  <input type="text" class="form-control" placeholder="Enter contact number" name="phone">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="civil-status">Civil Status:</label>
                  <select class="form-control" name="civil-status">
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Separated</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="birthday">Birthday:</label>
                  <input type="date" class="form-control" name="birthday">
                </div>
                <div class="form-group col-md-3">
                  <label for="religion">Religion:</label>
                  <input type="text" class="form-control" placeholder="City/Municipality" name="religion">
                </div>
                <div class="form-group col-md-3">
                  <label for="uac">User Rights:</label>
                  <select class="form-control" name="uac">
                    <option>User</option>
                    <option>Admin</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="employee-type">Employment Type:</label>
                  <select class="form-control" name="employee-type">
                    <option>Regular</option>
                    <option>Contractual</option>
                    <option>Intern</option>
                  </select>
                </div>
              </div>

              <hr>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="address-initial">No. Inc. Bldg. Name / Street / Subdivision: </label>
                  <input type="text" class="form-control" placeholder="Initial Address" name="address-initial">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="barangay">Barangay:</label>
                  <input type="text" class="form-control" placeholder="Brgy." name="barangay">
                </div>
                <div class="form-group col-md-3">
                  <label for="city-mun">City/Municipality:</label>
                  <input type="text" class="form-control" placeholder="City/Municipality" name="city-mun">
                </div>
                <div class="form-group col-md-3">
                  <label for="province">Province:</label>
                  <input type="text" class="form-control" placeholder="Province" name="province">
                </div>
                <div class="form-group col-md-3">
                  <label for="region">Region:</label>
                  <input type="text" class="form-control" placeholder="Region" name="region">
                </div>
              </div>

              <hr>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="start-date">Start Date:</label>
                  <input type="date" class="form-control" name="Start Date" name="start-date">
                </div>

                <div class="form-group col-md-6">
                  <label for="end-date">End Date:</label>
                  <input type="date" class="form-control" name="End Date" name="end-date">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="remarks">Remarks:</label>
                  <input type="text" class="form-control" placeholder="Remarks" name="remarks">
                </div>
              </div>

            </form>

          </div>
          <div class="modal-footer">
            <button type="button" id="close-btn" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" form="submit-form" class="btn btn-primary w-25" onclick="closeModal('#editModal')" [disabled]="form.invalid">Update</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Edit Employee -->

  </div>
  <script src="./view-employees.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>