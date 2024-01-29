<?php
	require_once '../validate.php';
	require '../name.php';
    // require '../login_quer.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../ams.png" type="image/svg+xml">

    <title>Stockman</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

   
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
   
.sidebar-brand-image {
    max-height: 150px;
    margin-right: 10px;
}

</style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <img src="../ams.png" alt="Logo" class="img-fluid max-height-30 sidebar-brand-image">
   
</a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-list-alt"></i>
                    <span>Dashboard</span></a>       
            </li>
            

            <!-- Nav Item - Items -->
            <li class="nav-item active">
                <a class="nav-link" href="items.php">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Items</span></a>
            </li>

             <!-- Nav Item - Categories -->
             <li class="nav-item">
                <a class="nav-link" href="categories.php">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Categories</span></a>
            </li>

             <!-- Nav Item - Requests -->
             <li class="nav-item">
                <a class="nav-link" href="request.php">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Requests</span></a>
            </li>
             <!-- Nav Item - Allocations -->
             <li class="nav-item">
                <a class="nav-link" href="storage.php">
                    <i class="fas fa-fw fa-box-open"></i>
                    <span>Storages</span></a>
            </li>
             <!-- Nav Item - Reports -->
             <li class="nav-item">
                <a class="nav-link" href="reports.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reports</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       
                      

                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name;?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Item List</h1>
                    </div>
                
<script>
    function addItemField() {
  var newField = $('<div class="item">' +
    '<label for="itemName">Item Name:</label>' +
    '<input type="text" id="itemName" name="itemName[]"><br>' +
    '<label for="itemQuantity">Quantity:</label>' +
    '<input type="number" id="itemQuantity" name="itemQuantity[]"><br>' +
    '<label for="itemSize">Size:</label>' +
    '<input type="text" id="itemSize" name="itemSize[]"><br>' +
    // Add more fields as needed
    '</div>');
  $("#itemFields").append(newField);


</script>
                    <form id="stockForm">
  <!-- <div id="itemFields">
  </div>
  <label for="addMoreItems">Add More Items?</label><br>
  <button onclick="addItemField()" id="addMoreItems">Yes</button><br><br> -->
  <ul>
  
  <li>
  <label for="item-name">Item Name:</label><br>
  <input type="text">
  </li>
  <li>
    <label for="item-size">Item Size</label>
  <input name="item-size" type="text" id="myInputBox">
  </li>
  <li>
    <label for="categories">categories</label>
  <select name="categories" id="categories">
  <option value="javascript">Computer</option>
  <option value="python">Machine</option>
  <option value="c++">C++</option>
  <option value="java">Java</option>
</select>
  </li>
  <li>
  <label for="categories">Location</label>
  <select name="categories" id="categories">
  <option value="javascript">Computer</option>
  <option value="python">Machine</option>
  <option value="c++">C++</option>
  <option value="java">Java</option>
</select>
  </li>
  <li>
  <label for="items">Description:</label><br>
  <input type="text">
  </li>
  </ul>
  <button type="button" onclick="addItemField()">Add Another Item</button>
  <button type="submit">Submit Form</button>
</form>



                    
                    </form>


                    <a href="items.php">return</a>

</body>

</html>