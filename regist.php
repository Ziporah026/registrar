<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_info";

// create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Create database if it doesn't exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
  // Select database
  $conn->select_db($dbname);
  
  // Create users table
  $sql_create_table = "CREATE TABLE IF NOT EXISTS students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    secondname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    dob DATE NOT NULL,
    phoneNumber  VARCHAR(13) NOT NULL,
    emailAddress VARCHAR(50) NOT NULL,
    grades VARCHAR(2) NOT NULL,
    regYear INT(4) NOT NULL,
    course VARCHAR(50) NOT NULL,
    regNumber VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    passConfirm VARCHAR(50) NOT NULL,
    hobbies VARCHAR(50) NOT NULL,
    father VARCHAR(50) NOT NULL,
    mother VARCHAR(50) NOT NULL,
    homeAddress VARCHAR(50) NOT NULL,
    county VARCHAR(50) NOT NULL,
    comment VARCHAR(50) NOT NULL,
    upload_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  )";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $firstname = $_POST['fname'];
    $secondname = $_POST['sname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['emailAddress'];
    $grades = $_POST['grades'];
    $regYear = $_POST['regYear'];
    $course = $_POST['course'];
    $regNumber = $_POST['regNumber'];
    $pass = $_POST['pass'];
    $passConfirm = $_POST['passConfirm'];
    $hobbies = $_POST['hobbies'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $homeAddress = $_POST['homeAddress'];
    $county = $_POST['county'];
    $comment = $_POST['comment'];
   
    // Insert into database
    $sql_insert_user = "INSERT INTO students (firstname, secondname, lastname, gender, dob, phoneNumber, emailAddress, grades, regYear, course, regNumber, pass, passConfirm, hobbies, father, mother, homeAddress, county, comment) VALUES ('$firstname', '$secondname', '$lastname', '$gender', '$dob', '$phoneNumber', '$emailAddress', '$grades', '$regYear', '$course', '$regNumber', '$pass', '$passConfirm', '$hobbies', '$father', '$mother', '$homeAddress', '$county', '$comment')";

    if ($conn->query($sql_insert_user) === TRUE) {
      echo "Registration successful!";
    } else {
      echo "Error: " . $sql_insert_user . "<br>" . $conn->error;
    }
  } else {
    echo "Registration successfull: " . $conn->error;
  }
} else {
  echo "Error creating database: " . $conn->error;
}
  
  $conn->close();
  ?>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_info";

// create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Create database if it doesn't exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
  // Select database
  $conn->select_db($dbname);
  
  // Create users table
  $sql_create_table = "CREATE TABLE IF NOT EXISTS students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50) NOT NULL,
        secondname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        gender ENUM('male', 'female', 'other') NOT NULL,
        dob DATE NOT NULL,
        phoneNumber VARCHAR(13) NOT NULL,
        emailAddress VARCHAR(50) NOT NULL,
        grades VARCHAR(2) NOT NULL,
        regYear INT(4) NOT NULL,
        course VARCHAR(50) NOT NULL,
        regNumber VARCHAR(50) NOT NULL,
        pass VARCHAR(50) NOT NULL,
        passConfirm VARCHAR(50) NOT NULL,
        hobbies VARCHAR(50) NOT NULL,
        father VARCHAR(50) NOT NULL,
        mother VARCHAR(50) NOT NULL,
        homeAddress VARCHAR(50) NOT NULL,
        county VARCHAR(50) NOT NULL,
        comment VARCHAR(50) NOT NULL,
        upload_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  )";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = isset($_POST['fname']) ? $_POST['fname'] : '';
  $secondname = isset($_POST['sname']) ? $_POST['sname'] : '';
  $lastname = isset($_POST['lname']) ? $_POST['lname'] : '';
  $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
  $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
  $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
  $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
  $grades = isset($_POST['grades']) ? $_POST['grades'] : '';
  $regYear = isset($_POST['regYear']) ? $_POST['regYear'] : '';
  $course = isset($_POST['course']) ? $_POST['course'] : '';
  $regNumber = isset($_POST['regNumber']) ? $_POST['regNumber'] : '';
  $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
  $passConfirm = isset($_POST['passConfirm']) ? $_POST['passConfirm'] : '';
  $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : '';
  $father = isset($_POST['father']) ? $_POST['father'] : '';
  $mother = isset($_POST['mother']) ? $_POST['mother'] : '';
  $homeAddress = isset($_POST['homeAddress']) ? $_POST['homeAddress'] : '';
  $county = isset($_POST['county']) ? $_POST['county'] : '';
  $comment = isset($_POST['comment']) ? $_POST['comment'] : '';

    // Insert into database
    $sql_insert_user = "INSERT INTO students (firstname, secondname, lastname, gender, dob, phoneNumber, emailAddress, grades, regYear, course, regNumber, pass, passConfirm, hobbies, father, mother, homeAddress, county, comment) VALUES ('$firstname', '$secondname', '$lastname', '$gender', '$dob', '$phoneNumber', '$emailAddress', '$grades', '$regYear', '$course', '$regNumber', '$pass', '$passConfirm', '$hobbies', '$father', '$mother', '$homeAddress', '$county', '$comment')";

    if ($conn->query($sql_insert_user) === TRUE) {
      echo "Registration successful!";
    } else {
      echo "Error: " . $sql_insert_user . "<br>" . $conn->error;
    }

    // Retrieve and display data
    $sql_select_all = "SELECT * FROM students";
    $result = $conn->query($sql_select_all);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Grades</th>
                    <th>Registration Year</th>
                    <th>Course</th>
                    <th>Registration Number</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                    <th>Hobbies</th>
                    <th>Father</th>
                    <th>Mother</th>
                    <th>Home Address</th>
                    <th>County</th>
                    <th>Comment</th>
                    <th>Upload Timestamp</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["secondname"] . "</td>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["dob"] . "</td>
                    <td>" . $row["phoneNumber"] . "</td>
                    <td>" . $row["emailAddress"] . "</td>
                    <td>" . $row["grades"] . "</td>
                    <td>" . $row["regYear"] . "</td>
                    <td>" . $row["course"] . "</td>
                    <td>" . $row["regNumber"] . "</td>
                    <td>" . $row["pass"] . "</td>
                    <td>" . $row["passConfirm"] . "</td>
                    <td>" . $row["hobbies"] . "</td>
                    <td>" . $row["father"] . "</td>
                    <td>" . $row["mother"] . "</td>
                    <td>" . $row["homeAddress"] . "</td>
                    <td>" . $row["county"] . "</td>
                    <td>" . $row["comment"] . "</td>
                    <td>" . $row["upload_timestamp"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

} else {
  echo "Error creating database: " . $conn->error;
}
  
  $conn->close();
  ?>
   