<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <title> Contact us</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
            box-sizing: border-box;
        }
        /* Style inputs */
        
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        /* Style the container/contact section */
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }
        /* Create two columns that float next to eachother */
        
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        
        @media screen and (max-width: 600px) {
            .column,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
        
        body {
            background: url('images/aboutbg.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        
        .logo img {
            height: 70px;
            /* Adjust the height as needed */
            width: auto;
            /* Maintain the aspect ratio */
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: #00093c;
            height: 80px;
        }
        
        nav ul {
            list-style: none;
            display: flex;
            /* Remove default margin */
        }
        
        nav ul a {
            display: inline-block;
            color: #fff;
            text-decoration: none;
        }
        
        nav ul li {
            margin: 0 15px;
        }
        
        nav ul div.dropdown {
            display: flex;
            align-items: center;
        }
        
        .social_icon {
            display: flex;
            align-items: center;
            margin-left: auto;
            /* Push social icons to the right */
        }
        
        input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 4px;
            margin-right: 10px;
        }
        
        .search-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px;
            cursor: pointer;
        }
        
        .login-btn,
        .register-btn {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 8px;
            cursor: pointer;
            text-decoration: none;
        }
        
        .main_img img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            /* Add a subtle box shadow */
        }
    </style>
</head>

<body>
    <nav>

        <div class="logo">
            <img src="logonew.jpeg">
        </div>

        <ul>

            <li>
                <a href="test1.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="courses.html">Departments</a>

            </li>


            <li><a href="book.html" style="color:white;">Other Books</a></li>



        </ul>

        <div class="social_icon">
            <input type="text" placeholder="Search for a book...">
            <button class="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>&nbsp;


            <button class="login-btn">
                <a href="login.html" class="login-btn">Login </a> </button> &nbsp;
            <button class="register-btn">
                <a href="register.html" class="register-btn">Register </a>
            </button>
        </div>

    </nav>
    <h2> Contact Section</h2>


    <div class="container">
        <div style="text-align:center">
            <h2>Contact Us</h2>
            <p> Your feedback is valuable for us! For any Queries please contact:</p>
        </div>
        <div class="row">
            <div class="column">
                <img src="D:\project\images\cont.jpg" style="width:100%">
            </div>
            <div class="column">
                <form action="contactusphp.php"method="post">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Department</label>
                    <input type="text" id="lname" name="lastname" placeholder="Enter your Department ..">

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

</body>

</html>