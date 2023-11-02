<head>
</head>
<?php

//basePath
$base = "http://" . $_SERVER['SERVER_NAME'] . "/employee-mgt-template/components/admin";


//logout
$logoutPath = "http://" . $_SERVER['SERVER_NAME'] . "/employee-mgt-template";

//dashboard
$dashboard_path = $base . "/dashboard-components";

//employees
$viewEmployeesPath = $base . "/employee-components/view-employees-components";
$uamPath = $base . "/employee-components/uam-components";

//accomplishments
$viewAccomplishmentsPath = $base . "/accomplishment-components";

//reports
$interDailyReportPath = $base . "/report-components/intern-daily-report-components";
$attendanceReportPath = $base . "/report-components/attendance-report-components";

?>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark justify-content-center">
        <a href="<?php echo $dashboard_path ?>/dashboard.php" class="navbar-brand d-flex w-50 mr-auto">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Employees
                    </a>
                    <div class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-info" href="<?php echo $viewEmployeesPath ?>/view-employees.php">View Employees</a>
                        <a class="dropdown-item text-info" href="<?php echo $uamPath ?>/uam.php">UAM</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $viewAccomplishmentsPath ?>/view-accomplishment.php">Accomplishment</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reports
                    </a>
                    <div class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-info" href="<?php echo $interDailyReportPath ?>/intern-daily-report.php">Intern Daily Report</a>
                        <a class=" dropdown-item text-info" href="<?php echo $attendanceReportPath ?>/attendance-report.php"">Attendance Report</a>
                    </div>
                </li>
            </ul>
            <ul class=" nav navbar-nav ml-auto w-100 justify-content-center">
                <li class="nav-item dropdown p">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled text-light" href="#">Admin, Admin A.</a>
                        <a class="dropdown-item disabled text-light" href="#">EID-476346</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-info" data-toggle="modal" data-target="#mpModal">Manage Profile</a>
                        <a class="dropdown-item text-info" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Manage Profile -->
    <div class="modal fade" id="mpModal" tabindex="-1" role="dialog" aria-labelledby="mpModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mpModalLabel">Manage Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="tab">
                        <button class="tablinks" onclick="openTab(event, 'change-pass')" id="defaultOpen">Change password</button>
                        <button class="tablinks" onclick="openTab(event, 'other-tab1')">Option 1</button>
                        <button class="tablinks" onclick="openTab(event, 'other-tab2')">Option 2</button>
                        <button class="tablinks" onclick="openTab(event, 'other-tab3')">Option 3</button>
                    </div>

                    <div id="change-pass" class="tabcontent">
                        <div class="inner-tab">
                            <form>
                                <div class="form-row" id="search-form">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">Old Password:</label>
                                        <input type="password" class="form-control" id="validationServer01" placeholder="Enter Old Password">
                                    </div>
                                </div>
                                <div class="form-row" id="search-form">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">New Password:</label>
                                        <input type="password" class="form-control" id="validationServer01" placeholder="Enter New Password">
                                    </div>
                                </div>
                                <div class="form-row" id="search-form">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">Re-type Password:</label>
                                        <input type="password" class="form-control" id="validationServer01" placeholder="Re-enter Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info w-100">Update Password</button>
                            </form>
                        </div>
                    </div>

                    <div id="other-tab1" class="tabcontent">
                        <h3>Option 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat rem ipsa laboriosam illum ad. Totam enim dolorem aliquam! Nihil nemo nesciunt ipsa quia suscipit officia vitae dignissimos eaque nam pariatur!</p>
                    </div>

                    <div id="other-tab2" class="tabcontent">
                        <h3>Option 2</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam sint, quasi quae molestias vel consequatur ducimus vitae possimus nulla ad officia, similique earum quo provident. Harum hic blanditiis soluta provident.</p>
                    </div>

                    <div id="other-tab3" class="tabcontent">
                        <h3>Option 3</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam sint, quasi quae molestias vel consequatur ducimus vitae possimus nulla ad officia, similique earum quo provident. Harum hic blanditiis soluta provident.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout User / Remove Session</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You are about to logout, continue?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    <form action="<?php echo $logoutPath ?>/login.php">
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>