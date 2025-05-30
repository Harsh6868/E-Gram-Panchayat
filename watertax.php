<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Tax Payment</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing:border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            /* padding: 20px; */
        }
        h2 {
            color: #333;
        }
        form {
            width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            margin-top: 15px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .qr-container {
            text-align: center;
            margin-top: 20px;
        }
        .qr-container img {
            width: 200px;
            height: 200px;
        }
         /* footer section */
.footer {
    background: #222;
    color: #fff;
    padding: 40px 10%;
    position: relative;
    margin-top: 50px;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.footer-section {
    flex: 1;
    min-width: 250px;
}

.footer-section h3 {
    margin-bottom: 15px;
    font-size: 20px;
    border-bottom: 2px solid #ff9800;
    display: inline-block;
    padding-bottom: 5px;
}
.footer-section p, 
        .footer-section a {
            font-size: 14px;
            color: #ddd;
            text-decoration: none;
            display: block;
            margin: 5px 0;
            transition: 0.3s ease;
        }

        .footer-section a:hover {
            color: #ff9800;
        }

        /* Social Icons */
        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .social-icons a {
            background: #444;
            padding: 10px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            transition: 0.3s ease;
        }
        .social-icons a:hover {
            background: #ff9800;
        }

        .social-icons img {
            width: 20px;
            height: 20px;
        }

        /* Google Map */
        .map-container {
            width: 100%;
            max-width: 350px;
            height: 200px;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Copyright Section */
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            margin-top: 20px;
        }

/* Responsive */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }
    .footer-section {
        text-align: center;
    }
}

.navbar{
    width: 100%;
    height: 30px;
    margin: auto;
    padding:50px 0;
    display: flex;
    align-items: center; 
    background-color: rgba(31, 41, 40, 0.644);
    border-bottom: 3px solid rgb(224, 249, 0);
    backdrop-filter: blur(50px);  
    font-size: 20px;
}
 .logo{
    height: 140px;
    cursor: pointer;
    padding:0px 10px 50px 20px ;
    margin-top: 50px; 
 }
/* navbar */
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 18px;
    position: relative; 
} 
.navbar ul li a{
    text-decoration: none;
    color: rgb(245, 245, 245);
    text-transform: uppercase;
}
/* .navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 10px;
    bottom: -10;
    transition: 0.5s;
} */
.navbar ul li:hover::after{
    width: 80%;
}
.dropdown-menu {
    display: flex;
    flex-direction: column;
    list-style: none;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 100%;
    left: 0;
    background: #ffc400;
    display: none;
    min-width: 150px;
   z-index: 10;
}

.dropdown{
    padding: 32px 0;
    /* background-color: red; */
}
.dropdown:hover .dropdown-menu{
    display: flex;
}
.dropdown-menu li {
    width: 100%;
}

.dropdown-menu a {
    padding: 10px 15px;
    display: block;
    /* color: white; */
    color: rgb(0, 0, 0) !important;
}

.dropdown-menu a:hover {
    background: #666;
}
/* Show Dropdown on Hover */
.dropdown:hover .dropdown-menu {
    display: block;
}
    </style>
</head>
<body>
<div class="navbar">
            <img src="State_logo (1).png" class="logo"> 
            <ul>
                <li><a href="2index.html">Home</a></li>
                <li><a href="3index.html">About Us</a></li>
                <li><a href="https://bhulekh.mahabhumi.gov.in/">7/12</a></li>
            <li class="dropdown">
                    <a href="#">Taxes&#9662;</a>
                    <ul class="dropdown-menu">
                        <li><a href="hometax.php">HomeTax</a></li>
                        <li><a href="watertax.php">WaterTax</a></li>
                    </ul> 
                <li><a href="4index.html">Events</a></li>
                <li><a href="7index.html">Complaint</a></li>
                <li class="dropdown">
                    <a href="6index.html">Schemes&#9662;</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://pmkisan.gov.in/">PM Kisan</a></li>
                        <li><a href="https://omms.nic.in/">Gram-Sadak</a></li>
                        <li><a href="https://swachhbharatmission.ddws.gov.in/">Swatch Bharat</a></li>
                    </ul>
            <li class="dropdown">
                    <a href="#">Certificates&#9662;</a>
                    <ul class="dropdown-menu">
                        <li><a href="5index.html">Birth Certificates</a></li>
                        <li><a href="1index.html">Death Certificates</a></li>
                        <li><a href="1.2index.html">Marriage Certificates</a></li>
                    </ul>
              <li class="dropdown">
                    <a href="#">Gallary&#9662;</a>
                    <ul class="dropdown-menu">
                        <li><a href="2index.html#photos">Photos</a></li>
                        <li><a href="#video">Videos</a></li>
                    </ul> 
                    <li class="dropdown">
                        <a href="#">Login&#9662;</a>
                        <ul class="dropdown-menu">
                            <li><a href="11index.html">Login</a></li>
                            <li><a href="8index.html">Register</a></li> 
                        </ul>
                    </li>                
                </li>
               </li>
            </ul>
        </div> 
    </div>
    <h2>Water Tax Payment</h2>
    <form action="watertax.php" method="POST">
        <label for="owner_name">Owner Name:</label>
        <input type="text" id="owner_name" name="owner_name" required><br>
        
        <label for="connection_id">Water Connection ID:</label>
        <input type="text" id="connection_id" name="connection_id" required><br>
        
        <label for="tax_amount">Tax Amount (INR):</label>
        <input type="number" id="tax_amount" name="tax_amount" required><br>
        
        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" required>
            <option value="credit_card">Credit Card</option>
            <option value="debit_card">Debit Card</option>
            <option value="upi">UPI</option>
        </select><br>
        
        <div class="qr-container">
            <p>Scan the QR code to pay via UPI:</p>
            <img src="payQr.jpg" alt="UPI QR Code">
        </div>
        
        <label for="transaction_id">Transaction ID (for UPI payments):</label>
        <input type="text" id="transaction_id" name="transaction_id"><br>
        
        <button type="submit">Pay Now</button>
    </form>
    <!-- footer section -->
<footer>
    <footer class="footer">
        <div class="footer-container">
            
            <!-- About Section -->
            <div class="footer-section">
                <h3>About Us</h3>
                <p>i have committed to delivering 
                    the best services to my village peoples with a focus on
                     quality and innovation.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="2index.html">Home</a>
                <a href="https://bhulekh.mahabhumi.gov.in/">7/12</a>
                <a href="6index.html">Schemes</a>
                <a href="3index.html">About Us</a>
                <a href="4index.html">Events</a>
                <a href="#">Privacy Policy</a>
            </div>
            <!-- Contact Info -->
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: E-Gram@gmail.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: Amadade,Bhadgaon,India.</p>
                <div class="social-icons">
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Twitter"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733635.png" alt="Instagram"></a>
                </div>
            </div>
            <!-- Google Map -->
            <div class="footer-section">
                <h3>Our Location</h3>
                <div class="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59705.92375701393!2d75.19800449030689!3d20.7256404266985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd94405a77776a1%3A0x17b5823506c5acf4!2sAmadade%2C%20Maharashtra%20424105!5e0!3m2!1sen!2sin!4v1738258577287!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2025 E-Gram Panchayat,Amadade 🏛 All rights reserved  📚 Design By Harsh 🔗</i></p>
        </div>
</footer> 
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "panchayat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $owner_name = $_POST['owner_name'];
    $connection_id = $_POST['connection_id'];
    $tax_amount = $_POST['tax_amount'];
    $payment_method = $_POST['payment_method'];
    $transaction_id = isset($_POST['transaction_id']) ? $_POST['transaction_id'] : NULL;
    
    $sql = "INSERT INTO water_tax_payments (owner_name, connection_id, tax_amount, payment_method, transaction_id) VALUES ('$owner_name', '$connection_id', '$tax_amount', '$payment_method', '$transaction_id')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Payment successful.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>