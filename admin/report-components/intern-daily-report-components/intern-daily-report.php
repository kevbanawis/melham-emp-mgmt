<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./intern-daily-report.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Intern Daily Report</title>
</head>

<body>
    <?php $shared_path = $_SERVER["DOCUMENT_ROOT"] . "/employee-mgt-template/components/admin/shared/"; ?>
    <div class="container-fluid">
        <header>
            <?php include($shared_path . "header.php") ?>
        </header>
        <div id="table-employees">
            <div class="table-inner">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Employee Number</th>
                            <th scope="col" id="col-ename">Employee Name</th>
                            <th scope="col">No. of Required Hours</th>
                            <th scope="col">No. of Required Days</th>
                            <th scope="col">Remaining Hours</th>
                            <th scope="col">Remaining Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">202100007</th>
                            <td>Cara , Brandon C</td>
                            <td>24</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col">
                    <div class="row pt-4">
                        <form action="#export">
                            <button type="submit" class="btn btn-dark pt-25 pb-25">Export to Excel</button>
                        </form>
                    </div>
                    <div class="row pt-4">
                        <nav aria-label="Daily Report Pagination">
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




            </div>

        </div>
        <footer>
            <?php include($shared_path . "footer.php") ?>
        </footer>
    </div>
    <script src="./intern-daily-report.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>