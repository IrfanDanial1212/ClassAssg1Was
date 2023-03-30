<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Student Details Form</title>
</head>


<body>
  <h1>Student Details Form</h1>

  <form id="studentForm" method=post action= StudentDatabase.php onsubmit="return validateForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="matricNumber">Matric Number:</label>
    <input type="text" id="matricNumber" pattern="[0-9]{7}" title="Enter 7 digit of your Matric Number" name="matricNumber" required>

    <label for="email">Email (Gmail Account):</label>
    <input type="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" required>

    <label for="currentAddress">Current Address:</label>
    <input type="text" id="currentAddress" name="currentAddress" required>

    <label for="homeAddress">Home Address:</label>
    <input type="text" id="homeAddress"  name="homeAddress" required>

    <label for="mobilePhoneNumber">Mobile Phone Number:</label>
    <input type="tel" id="mobilePhoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Please include format: 123-456-7890" name="mobilePhoneNumber"  required>
    

    <label for="homeNumber">Home/Emergency Number:</label>
    <input type="tel" id="homeNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Please include format: 123-456-7890" name="homeNumber"  required>
     

    <input type="submit" value="Submit">
    
  </form>

  <script src="script.js"></script>

</body>
</html>