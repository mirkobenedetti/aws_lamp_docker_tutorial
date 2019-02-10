<?php

  $conn = mysqli_connect("mysql-tutorial-db.cvrs0klpxnsi.eu-central-1.rds.amazonaws.com:3306", 
                         "dbmaster", "putyourownpassword", "aws_lamp_tutorial");
  if($conn) echo "Connected to the database.";