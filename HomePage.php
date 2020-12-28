<?php 
session_start();


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `members` WHERE CONCAT('memberName`, `memberGender`, `memberAge`, ) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `members`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "family");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>SEED FAMILY TREE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width"/>
        <link rel="stylesheet" href="jquery-ui.css"/>
        <script src="jquery-1.11.0.js"></script>
        <script src="jquery-ui.js"></script>
        <script src="ps-family.js"></script>
        <link rel="stylesheet" href="treestyle.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="assets/logo.png" />
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 --><!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body>
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="home.html"><img src="assets/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="assets/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="HomePage.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <!-- <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li> -->
                        <li><a href="googlemap.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Google Map</span></a></li>
                        <li><a href="calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendar</span></a></li>
                        <li><a href="setting.php"><i class="fa fa-info" aria-hidden="true"></i><span class="hidden-xs hidden-sm">About</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                        <div class="container">
                            <div class="row">
                                <div class="col-me-12 mt-4">
                                    <div class="card">
                                        <div class="card-hearder">
                                            <h4 class="card-tittle">Search Here</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="filter_value" class="form-control" placeholder="Search Records">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" name="filter_btn" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                            </form>
                                            <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Middle Name</th>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col">Age</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Birthday</th>
                                                        <th scope="col">Contact</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $connection = mysqli_connect("localhost","root","","family");
                                                    if(isset($_POST['filter_btn']))
                                                    {

                                                            $value_filter = $_POST['filter_value'];
                                                            $query = "SELECT * FROM members WHERE CONCAT(memberFName,memberMName,memberLName,memberAge,memberGender,memberBirthday,memberContact) LIKE '%$value_filter%'";
                                                            $query_run = mysqli_query($connection, $query); 

                                                            if(mysqli_num_rows($query_run) > 0)
                                                            {
                                                                while($row = mysqli_fetch_array($query_run))
                                                                {
                                                                    ?>
                                                                    <tr>
                                                                    <td><?php echo $row['memberFName'];?></td>
                                                                    <td><?php echo $row['memberMName'];?></td>
                                                                    <td><?php echo $row['memberLName'];?></td>
                                                                    <td><?php echo $row['memberAge'];?></td>
                                                                    <td><?php echo $row['memberGender'];?></td>
                                                                    <td><?php echo $row['memberBirthday'];?></td>
                                                                    <td><?php echo $row['memberContact'];?></td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                 <tr>
                                                                    <td colspan="7">No Record Found</td>
                                                                 </tr>
                                                                <?php
                                                            }
                                                        }

                                                    ?>
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
   
            
                                
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                        
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <!-- <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Family</a></li> -->
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>Test Name</span>
                                                    <p class="text-muted small">
                                                        test@name.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                    <a href="logout.php" class="view btn-sm active">Logout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                
                <div class="user-dashboard">
                        <!--  <input type="button" id="sendData" value="send data" onclick="$.send_Family({url: 'save_family.php'})"/> -->
        <!-- <div id="pk-family-tree"> -->
        <button type="submit">Add Profile</button>
        </div>
        <script>
        $(document).ready(function(){
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("HomePage.php", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });
    });
});
        </script>
                    </div>
                </div>
               
            </div>
            
        </div>
         

    </div>



    <!-- Modal -->
    <!-- <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog"> -->

            <!-- Modal content-->
            <!-- <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div> -->
    

</body>
</html>