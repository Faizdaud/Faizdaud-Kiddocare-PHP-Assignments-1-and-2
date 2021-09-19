<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Dashboard</title>
    <!-- insert stylesheets here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dashbaord/dashboard.css" />
    <link rel="stylesheet" href="./css/dashboard/dashboardChart.css" />
  
</head>


<body>

    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                Company A
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>


        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
        
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Hello, John Doe
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Messages</a></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
                </div>
        </div>
    </nav>


    <main class="col-md-8 ml-sm-auto col-lg-8 px-md py-4">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
        </nav>
        <h1 class="h2">MyDashboard</h1>
        <p>Summary of Sales</p>
        
    
        <div class="row my-4">
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card">
                <h5 class="card-header">Total Sales</h5>
                <div class="card-body">
                    <h5 class="card-title">345k</h5>
                    <p class="card-text">Feb 1 - Apr 1, United States</p>
                    <p class="card-text text-success">18.2% increase since last month</p>
                </div>
                </div>
        </div>

        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
                <h5 class="card-header">Total Orders</h5>
                <div class="card-body">
                    <h5 class="card-title">$2.4k</h5>
                    <p class="card-text">Feb 1 - Apr 1, United States</p>
                    <p class="card-text text-success">4.6% increase since last month</p>
                </div>
            </div>
        </div>


        <div class="col-12 m-4 mx-auto ">
            <div class="card">
                <h5 class="card-header">Daily Sales</h5>
                <div class="card-body">
                     <div id="chart_div" ></div>
                </div>
            </div>
        </div>
        

        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
                <h5 class="card-header">Sales by Employees</h5>
                <div class="card-body">
                    <div id="myChart" ></div>
                </div>
            </div>
        </div>
        

        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
                <h5 class="card-header">Sales by Customers</h5>
                <div class="card-body">
                    <div id="myChart2" ></div>
                </div>
            </div>
        </div>
            


        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
                <h5 class="card-header">Sales by Product Categories</h5>
                <div class="card-body">
                    <div id="myChart3" ></div>
                </div>
            </div>
        </div>
            

            <footer class="pt-5 d-flex justify-content-between">
                <span>Copyright © 2019-2020 <a href="https://themesberg.com">Themesberg</a></span>
                <ul class="nav m-0">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Terms and conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Contact</a>
                    </li>
                    </ul>
            </footer>
    
    </main>




    <!-- insert scripts here -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>  
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="./js/dashboardChart.js"></script>

</body>
</html>