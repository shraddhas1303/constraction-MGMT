<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constraction management</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="home.php"><img class="logo" src="img/logo.png" alt="logo" height="50px"
                    margin-left="15px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Modules</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Tender & Estimation</a></li>
                            <li><a class="dropdown-item" href="#">Budgeting &Scheduling</a></li>
                            <li><a class="dropdown-item" href="#">Project Management</a></li>
                            <li><a class="dropdown-item" href="#">Procurement Management</a></li>
                            <li><a class="dropdown-item" href="#">Inventory Management</a></li>
                            <li><a class="dropdown-item" href="#">Equipment Management</a></li>
                            <li><a class="dropdown-item" href="#">Finance & Accounts</a></li>
                            <li><a class="dropdown-item" href="#">HR & Payroll</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Features</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Key Features</a></li>
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">Reports</a></li>
                            <li><a class="dropdown-item" href="#">Integration</a></li>
                            <li><a class="dropdown-item" href="#">Inplementation Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Resource</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">Downloads</a></li>
                            <li><a class="dropdown-item" href="#">FAQ's</a></li>
                            <li><a class="dropdown-item" href="#">Case Studies </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Company</a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Partner</a></li>
                            <li><a class="dropdown-item" href="#">careers</a></li>
                            <li><a class="dropdown-item" href="#">Team</a></li>
                            <li><a class="dropdown-item" href="#">Customers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <button class="button1" data-bs-toggle="modal" data-bs-target="#registerModal">schedule a
                            demo</button>
                    </li>
                </ul>
            </div>
        </div>


    </nav>
    <div class="video-container">
        <video autoplay muted loop>
            <source
                src="https://ep-turnerconstruction-prod-asdcetgubtducba3.z01.azurefd.net/uploads/130-8s-homehero-optimized.mp4?v=fc0cf"
                type="video/mp4">

        </video>
        <div class="video-overlay">
            <h3 class="subheading1"><b>Smart Solution</b> <span> for all your needs </span></h3>
            <h1 class="heroOneBox1">आता आपला <br> Constrution Management <br> वाढवा आमच्या सोबत.</h1>
        </div>
    </div>
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Book FREE Consultation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Enter your mobile number</label>
                            <input type="number" class="form-control" id="mobilenumber"
                                placeholder="Enter your mobile number" required>
                        </div>
                        <div class="mb-3">
                            <label for="Business Name" class="form-label">Business Name:</label>
                            <input type="text" id="Business Name*" class="form-control"
                                placeholder="Enter your Business Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="Nature of your Enquiry" class="form-label">Nature of your Enquiry*</label>
                            <select name="" id="" required style="width:100%;  height: 35px;">
                                <option value=" Enter Nature of your Enquiry">Enter Nature of your Enquiry</option>
                                <option value="Demo of myBillbook">Demo of myBillbook</option>
                                <option value="pricing plans and offers">pricing plans and offers</option>
                                <option value="General enquiry">General enquiry</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select your billing requirement?" class="form-label">Select your billing
                                requirement?*</label>
                            <select name="" id="" required style="width:100%; height: 35px; ">
                                <option value=" Enter Select your billing requirement">Enter Select your billing
                                    requirement</option>
                                <option value="Basic billing | android app, single user">Basic billing | android app,
                                    single
                                    user</option>
                                <option
                                    value="Advanced billing| android/ios app + online & offline(laptop), upto 3 users">
                                    Advanced billing| android/ios app + online & offline(laptop), upto 3 users</option>
                                <option
                                    value="Enterprise billing | android/ios app + online & offline(laptop,4 or more users e-way+e-invoicing+POS) ">
                                    Enterprise billing | android/ios app + online & offline(laptop,4 or more users
                                    e-way+e-invoicing+POS)</option>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>