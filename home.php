<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constraction management</title>
    <link rel="stylesheet" href="home.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .image-box{
                border-radius: 10px;
            }
        </style>
   


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="home.php"><img class="logo" src="img/logo.png" alt="logo" height="50px"margin-left="35px"></a>
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
            <source src="img/video.mp4"type="video/mp4">

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
    <div class="fifthAnotherSection">
        <div class="container">
            <div class="fifthOutertextBox">
                <h2>Effective and powerful modules</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img class=" fifthAnotherleftImg" src="./img/landing-1.jpg" alt="">
                </div>
                <div class="col-md-7">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/accounting-finance.webp" alt="" style="width:100px">
                                &nbsp; &nbsp; &nbsp;&nbsp;
                                <p>Accounting & Finance</p>
                            </div>
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/administration.webp" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Administration</p>
                            </div>
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/payroll.webp" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Payroll</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/machinery-maintenance.webp" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Machinery maintenance</p>
                            </div>
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/purchase-and-procurement.webp" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Purchase & Procurement</p>
                            </div>
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/store-inventory.webp" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Store & Inventory</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about_us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Us</h1>
                    <p>Inniti Software Founded in September 2017, we are based in Gujarat, India. We as an IT Solutions
                        and Service Provider Company within 15+ Skilled IT Professional staff. Having 80+ Live ERP
                        Customers. At Inniti Software we are committed to simplifying technology for Construction and
                        Manufacturing Industries. Our IT Professional team believing in implementation of latest
                        technology and having an Industry specific knowledge and aware of each pain area of the industry
                        and working towards how that can be solved or streamline using Information technology. We
                        believe in developing lifelong association/relationship by promising ultimate customer
                        satisfaction.</p>
                    <br>
                    <button class="btn btn-primary">More Info</button>
                </div>
                <div class="col-md-6">
                    <img class=" constractionimg" src="./img/constraction1.jpeg" alt="">

                </div>
            </div>
        </div>
    </section>

    <section class="Details_section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 p-5">
                    <h4>Taking on the challenge</h4>
                    <p>We, at Inniti Software, believes individual expertise and commitments to a group effort will
                        makes a teamwork. Our team operates with enthusiasm and flexibility. Everyone in the team has 3+
                        years of expertise in his or her fields. Together we have built an excellent solution for a
                        Specific Industries. We not only offer a best, but We at Inniti Software believe in
                        knowing/understanding your business domain extensively, dedication and commitment towards work,
                        hold expertise as a weapon and deliver a solution which is hassle free way of working to the
                        customers. We work as a business partner with our customers to solve their problems.</p>
                </div>
                <div class="col-md-4 details_img">
                    <img src="https://www.innitisoftware.com/assets/images/our-story-img3.webp" alt="">
                </div>
                <div class="col-md-4 details_img p-4">
                    <img src="https://www.innitisoftware.com/assets/images/our-story-img2.webp" alt="">
                </div>
                <div class="col-md-8 p-5">
                    <h4>Upon successfully completing the challenge</h4>
                    <p>Inniti Software is well known not only for their solutions but customer support and services too.
                        The customer is always honoured, and our expert team is always trying to fulfil the customer
                        request with best possible way.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="our_mission">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center p-4">
                    <h2>Our Mission</h2>
                </div>
                <div class="col-md-4">
                    <div class="box pt-5">
                        <div class="heading">
                            <div class="div ps-5">
                                <h4>Innovation</h4>
                            </div>
                            <div class="div ps-5">
                                <img src="./img/innovation1.webp" alt="" class="img-fluid ms-5">
                            </div>
                            <div><br><br><br>
                                <p class="pra ms-4 ">To bring the most effective innovation to client’s business setup
                                    and lead them using
                                    innovative technologies that allow them to differentiate themselves in this cut and
                                    through competitive market and take their business to the next level.</p>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box pt-5">
                        <div class="heading ">
                            <div class="div ps-5">
                                <h4>Innovation</h4>
                            </div>
                            <div class="div ps-5">
                                <img src="./img/strategy.webp" alt="" class="img-fluid ms-5">
                            </div>
                            <div><br><br><br>
                                <p class="pra ms-4 ">To bring the out-of-the box solution with constantly upgrading with
                                    latest
                                    information technology and constantly expanding the scope & feature in system to
                                    climb them their goal in this competitive market.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box pt-5">

                        <div class="div ps-5">
                            <h4>Innovation</h4>
                        </div>
                        <div class="div ps-5">
                            <img src="./img/support.webp" alt="" class="img-fluid ms-5">
                        </div>
                        <div><br><br><br>
                            <p class="pra ms-4 ">Build 24 hours a day, 7 Days Week availability for support, stand-up
                                team to solve
                                technical issue and support for Smoothness Use of the System</p>
                        </div>
                        <div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="our_services ">
        <div class="container">
            <div class="row">
                <h1>Our services</h1>
            </div>

<div class="container mt-3">
  <div class="image-marquee d-flex">
    <img src="./img/img1.jpg" alt="Image 1">
    <img src="./img/img2.jpg" alt="Image 2">
    <img src="./img/img3.jpg" alt="Image 3">
    <img src="./img/img4.jpg" alt="Image 4">
    <img src="./img/img5.png" alt="Image 5">
    <img src="./img/img1.jpg" alt="Image 1">
    <img src="./img/img2.jpg" alt="Image 2">
    <img src="./img/img3.jpg" alt="Image 3">
    <img src="./img/img4.jpg" alt="Image 4">
    <img src="./img/img5.png" alt="Image 5">

  </div>
  </div>

        </div>
    </section>



        <!-- Repeat 9 image boxes -->
       

         
         <div class="container img6 mt-5 mb-5 ps-4 ">
            <div class="row">
                <h1 class="project text-center">OUR PROJECT </h1>
            </div>
            <div class="row ms-5">
             <div class="image-box col-md-4">
            <img  src="./img/construction.jpg" alt="Image 1">
            <div class="footer-text">Read More</div>
        </div>
        <div class="image-box col-md-4">
            <img src="./img/road-infra.jpeg" alt="Image 2">
            <div class="footer-text">Read More</div>
        </div>
        <div class="image-box col-md-4">
            <img  src="./img/slider_1.jpg" alt="Image 3">
            <div class="footer-text">Read More</div>
        </div>
            </div>
            <br><br>
            <div class="row ms-5">
            <div class="image-box col-md-4">
            <img src="./img/slider_2.jpg" alt="Image 4">
            <div class="footer-text">Read More</div>
        </div>
        <div class="image-box col-md-4">
            <img src="./img/img6.jpeg" alt="Image 5">
            <div class="footer-text">Read More</div>
        </div>
        <div class="image-box col-md-4">
            <img src="./img/img7.jpeg" alt="Image 6">
            <div class="footer-text">Read More</div>
        </div>
        </div>
        </div>
        


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Contact</h5>
                    <p><i class="fa fa-envelope"></i>&nbsp; A2Zithub@example.com</p>
                    <p><i class='fas fa-phone'></i>+9123456789</p>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2024 A2Z IT HUB PVT LTD. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  const carousel = document.querySelector('#multiImageCarousel');
  const carouselInstance = new bootstrap.Carousel(carousel, {
    interval: 3000, // Auto-slide interval in ms
    wrap: true,
  });

  const images = document.querySelectorAll('.image-marquee img');
let currentIndex = 0;

function moveImages() {
  const firstImage = images[currentIndex];
  firstImage.style.transform = 'translateX(-100%)';

  // After animation, reset the image to the end and move the index
  setTimeout(() => {
    firstImage.style.transform = 'translateX(0)';
    document.querySelector('.image-marquee').appendChild(firstImage);
    currentIndex = (currentIndex + 1) % images.length;
  }, 500); // Match the transition time
}

setInterval(moveImages, 3000); // Change images every 3 seconds

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>
