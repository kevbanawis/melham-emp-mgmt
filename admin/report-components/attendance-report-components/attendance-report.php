<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./attendance-report.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Attendance Report</title>
</head>

<body>
    <?php $shared_path = $_SERVER["DOCUMENT_ROOT"] . "/employee-mgt-template/components/admin/shared/"; ?>
    <div class="container-fluid">
        <header>
            <?php include($shared_path . "header.php") ?>
        </header>
        <div id="search">
            <div class="inner-search">
                <form action="#export" id="export-form"></form>
                <form action="#search" id="search-form">
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="employee-type">Employee Type:</label>
                            <select class="form-control" name="employee-type">
                                <option>--</option>
                                <option>Regular</option>
                                <option>Contractual</option>
                                <option>Intern</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="DateFrom">Date From:</label>
                            <input type="date" class="form-control" name="DateFrom">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="DateTo">Date To:</label>
                            <input type="date" class="form-control" name="DateTo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info" form="search-form">Search</button>
                    <button type="submit" class="btn btn-dark" form="export-form">Export to Excel</button>
                </form>
            </div>
        </div>
        <div id="table-employees">
            <div class="table-inner">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Employee Number</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Employment Type</th>
                            <th scope="col">Course</th>
                            <th scope="col">University</th>
                            <th scope="col">June 1, 2021</th>
                            <th scope="col">June 2, 2021</th>
                            <th scope="col">June 3, 2021</th>
                            <th scope="col">June 4, 2021</th>
                            <th scope="col">June 5, 2021</th>
                            <th scope="col">June 6, 2021</th>
                            <th scope="col">June 7, 2021</th>
                            <th scope="col">June 8, 2021</th>
                            <th scope="col">June 9, 2021</th>
                            <th scope="col">June 10, 2021</th>
                            <th scope="col">June 11, 2021</th>
                            <th scope="col">June 12, 2021</th>
                            <th scope="col">June 13, 2021</th>
                            <th scope="col">June 14, 2021</th>
                            <th scope="col">June 15, 2021</th>
                            <th scope="col">June 16, 2021</th>
                            <th scope="col">June 17, 2021</th>
                            <th scope="col">June 18, 2021</th>
                            <th scope="col">June 19, 2021</th>
                            <th scope="col">June 20, 2021</th>
                            <th scope="col">June 21, 2021</th>
                            <th scope="col">June 22, 2021</th>
                            <th scope="col">June 23, 2021</th>
                            <th scope="col">June 24, 2021</th>
                            <th scope="col">June 25, 2021</th>
                            <th scope="col">June 26, 2021</th>
                            <th scope="col">June 27, 2021</th>
                            <th scope="col">June 28, 2021</th>
                            <th scope="col">June 29, 2021</th>
                            <th scope="col">June 30, 2021</th>
                        </tr>
                    </thead>
                    <tbody class="attendance-body">
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Employee Name</td>
                            <td>Regular</td>
                            <td>BSIT</td>
                            <td>University of the East</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>08:56:05-14:01:45</td>
                            <td>08:56:05-14:01:45</td>
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
    </div>
    <script src="./attendance-report.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>