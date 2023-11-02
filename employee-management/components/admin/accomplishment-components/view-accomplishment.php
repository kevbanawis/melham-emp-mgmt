<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view-accomplishment.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>View Accomplishment</title>
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
                        <div class="col-md-3 mb-3">
                            <label for="activityTask">Activity Task:</label>
                            <input type="text" class="form-control" id="validationServer02" placeholder="Enter a task" name="activityTask">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="pStartDate">Performed Start Date:</label>
                            <input type="date" class="form-control" name="pStartDate">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="pEndDate">Performed End Date:</label>
                            <input type="date" class="form-control" name="pEndDate">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info w-25">Search</button>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addAccomplishment">Add Accomplishment</button>
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
                            <th scope="col" id="col-created">Date Created</th>
                            <th scope="col" id="col-task">Task Perform</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">202100002</th>
                            <td>Employee Full Name</td>
                            <td>5/6/2021 11:25:42 AM</td>
                            <td>Managing attendance website.</td>
                            <td><button class="btn btn-dark btn" href="#download"><i class="fa fa-paperclip text-secondary" aria-hidden="true" id="icon"></i></i></button></td>
                            <td><button class="btn btn-dark btn" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit text-info" aria-hidden="true" id="icon"></i></button></td>
                            <td><button class="btn btn-dark btn" href="#delete"><i class="fa fa-trash text-danger " aria-hidden="true" id="icon"></i></button></td>
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

        <!-- Add Accomplishment Modal -->
        <div class="modal fade" id="addAccomplishment" tabindex="-1" role="dialog" aria-labelledby="addAccomplishmentLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAccomplishmentLabel">Add new task/accomplishment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="#add-accomplishment">

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="acitivityTask">Task Description:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="acitivityTask"></textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <label for="inputGroupFile01">Upload:</label>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="uploadTask">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="employeeDoer">Who did the task?</label>
                                    <select class="form-control" name="employeeDoer">
                                        <option>- choose employee -</option>
                                        <option>Employee 1</option>
                                        <option>Employee 2</option>
                                        <option>Employee 3</option>
                                        <option>Employee 4</option>
                                        <option>Employee 5</option>
                                    </select>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-btn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" form="add-accomplishment" class="btn btn-primary w-25" onclick="closeModal('#addAccomplishment')" [disabled]="form.invalid">Add Accomplishment</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Accomplishment Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit task/accomplishment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="#edit-accomplishment">

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="acitivityTask">Task Description:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="acitivityTask">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consequatur nobis quidem impedit minus soluta adipisci excepturi, ipsa earum libero dolorem consectetur nulla inventore eveniet voluptatem, veritatis fuga dolore quibusdam?</textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="input-group-prepend">
                                        <label for="inputGroupFile01">Upload:</label>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="uploadTask">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="employeeDoer">Who did the task?</label>
                                    <select class="form-control" name="employeeDoer">
                                        <option>- choose employee -</option>
                                        <option selected>Employee 1</option>
                                        <option>Employee 2</option>
                                        <option>Employee 3</option>
                                        <option>Employee 4</option>
                                        <option>Employee 5</option>
                                    </select>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-btn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" form="edit-accomplishment" class="btn btn-primary w-25" onclick="closeModal('#addAccomplishment')" [disabled]="form.invalid">Add Accomplishment</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="./view-accomplishment.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>