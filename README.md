#Class_Assignment1

Input validation (Client & Server side)

I created HTML form for student details in HTML,CSS,and JS, I also connect the HTML form(client side) with database from xampp using mySQLi which is the server side. The form require several input from user and regex has apply into it to validate the input data which is;

# Matric Number: Only 7 digits allowed to insert, not more not less
# Email: Require pattern as @ and gmail 
# Mobile Phone and Home Number: Only insert the number with format 123-456-7890

The database for the student details form has been created using XAmpp. The table for database consists of 7 columns for user(student) name, matric number, email, currents address, home address, mobile phone number and emergency/home number.

After the user has insert all their input in the form and submit, the data will checked again by server side to make sure all the data insert is tely with what required. Otherwise, the form will reject tha input to enter the database.
