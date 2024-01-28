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

    <!-- Custom fonts for this template-->
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <img src="../ams.png" alt="Logo" class="img-fluid max-height-30 sidebar-brand-image">
   
</a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-solid fa-users"></i>
                    <span>Dashboard</span></a>       
            </li>
            

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="department.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Items</span></a>
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>


                    <div>
 

                    <div>

                    
                    <div class="dashboard-cards">





                    <h1>Hello Paulooo!!!!</h1>

<style>
    .dashboard-cards {
  display: flex;
  justify-content: center;

}

.card {
  /* Basic structure */
  background-color: #fff; /* White background */
  border: 1px solid #ccc; /* Gray border */
  border-radius: 5px; /* Rounded corners */
  padding: 15px; /* Inner spacing */
  margin-bottom: 15px; /* Spacing between cards */

  /* Header and content */
  display: flex; /* Flexbox layout */
  flex-direction: column; /* Vertical arrangement */
  align-items: center; /* Align content vertically */

  /* Header style */
  h3 {
    margin-bottom: 10px;
    font-weight: bold;
  }

  /* Content style */
  span {
    font-size: 18px;
    color: #333;
  }
}
</style>


  <div id="request-card" class="card">
    No. Of Request</div>
  <div id="out-of-stock-card" class="card">
    No. Of Out of Stock</div>
</div>

<script>




const requestCountEl = document.getElementById('request-count');

// ... getCurrentWeekRange function remains the same

async function fetchRequestCount(startDate, endDate) {
  // Simulate a database query with static data
  const requestCount = 123; // Replace with your static request count
  return requestCount;

    const query = `SELECT COUNT(*) AS count FROM requests WHERE created_at BETWEEN ? AND ?`;
    db.query(query, [startDate, endDate], (err, result) => {
      if (err) {
        reject(err);
      } else {
        resolve(result[0].count); // Assuming the count is in the first row
      }
    });
  };

  return requestCount;


// ... updateRequestCount function with error handling
function updateRequestCount() {
  const weekRange = getCurrentWeekRange();
  fetchRequestCount(weekRange.startDate, weekRange.endDate)
    .then((count) => requestCountEl.textContent = count)
    .catch((error) => {
      console.error(error);
      requestCountEl.textContent = 'Error fetching data';
    });
}

const outOfStockCountEl = document.getElementById('out-of-stock-count');

// ... (existing JavaScript functionality)

async function fetchOutOfStockCount() {
  // Replace this with your actual API call or data source
  // Make sure it returns the promise resolving to the count of out-of-stock items
  const response = await fetch('/api/out-of-stock-items');
  return response.json();
}

function updateOutOfStockCount() {
  fetchOutOfStockCount()
    .then((data) => outOfStockCountEl.textContent = data.count)
    .catch((error) => console.error(error));
}

updateOutOfStockCount();
// ... (optional) call it at intervals like before




</script>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Request',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


<canvas id="myChart1"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx1 = document.getElementById('myChart').getContext('2d');
  const currentMonth = new Date().getMonth(); // 0-indexed (0 = January, 11 = December)
const months = [];
for (let i = currentMonth - 5; i <= currentMonth; i++) {
  months.push(new Date(2024, i, 1).toLocaleString('en-US', { month: 'long' })); // Adjust year as needed
}

const data = {
  labels: months,
  datasets: [{
    label: '# of Request',
    data: [65, 59, 80, 81, 56, 55],
    borderColor: 'blue',
    backgroundColor: 'rgba(0, 150, 255, 0.2)',
    fill: true,
  }, {
    label: 'Dataset 2',
    data: [28, 48, 40, 19, 86, 27],
    borderColor: 'orange',
    backgroundColor: 'rgba(255, 165, 0, 0.2)',
    fill: true,
  }]
};


const options = {
  scales: {
    y: {
      beginAtZero: true
    }
  }
};

const chart = new Chart(ctx, {
  type: 'line',
  data: data,
  options: options
});
</script>











                    <!-- Content Row -->
                    <div class="row">

                  
                   



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>