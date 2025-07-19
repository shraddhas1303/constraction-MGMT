<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
<div class="col-md-6 rightbox">
                <div class="headline">
                    <h2>Book FREE Consultation</h2>
                </div>

                <form action="register.php" method="POST">
                    <label for="Yourname">Yourname:</label>
                    <input type="text" id="Yourname" name="Yourname" placeholder="Enter your name" required>
                    <br>
                    <label for="number">Enter your mobile number*</label>
                    <input type="number" name="mobilenumber" id="mobilenumber" placeholder="Enter your mobile number"
                        required>
                    <br>
                    <label for="Business Name">Business Name:</label>
                    <input type="text" id="Business Name*" name="Business Name*" placeholder="Enter your Business Name"
                        required>
                    <br>
                    <label for="Nature of your Enquiry">Nature of your Enquiry*</label>
                    <select name="" id="" required style="width:100%;  height: 35px;">
                        <option value=""></option>
                        <option value="Demo of myBillbook">Demo of myBillbook</option>
                        <option value="pricing plans and offers">pricing plans and offers</option>
                        <option value="General enquiry">General enquiry</option>

                    </select>
                    <br>


                    <label for="Select your billing requirement?*">Select your billing requirement?*</label>
                    <select name="" id="" required style="width:100%; height: 35px; ">
                        <option value=""></option>
                        <option value="Basic billing | android app, single user">Basic billing | android app, single
                            user</option>
                        <option value="Advanced billing| android/ios app + online & offline(laptop), upto 3 users">
                            Advanced billing| android/ios app + online & offline(laptop), upto 3 users</option>
                        <option
                            value="Enterprise billing | android/ios app + online & offline(laptop,4 or more users e-way+e-invoicing+POS) ">
                            Enterprise billing | android/ios app + online & offline(laptop,4 or more users
                            e-way+e-invoicing+POS)</option>

                    </select>

                    <br>
                    <br>
                    <button class="button2" type="submit">submit</button>
                </form>
            </div>
</body>
</html>