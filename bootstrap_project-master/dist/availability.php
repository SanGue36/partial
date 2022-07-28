<!-- <?php
  

?> -->

<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<body>
    <center>
      <?php 

      require_once 'php/config.php';

        // $username = "user"; 
        // $password = "pass123"; 
        // $database = "sangue"; 
        // $mysqli = new mysqli("localhost", $username, $password, $database); 
        $query = "SELECT `id`, `first_name`, `last_name`, `email`, `dob`, `gender`, `b_type`, `address`, `city`, `mobile`, `created_at` FROM `donors` ;";



        print("\n");
        print("\n");
        echo '<table table class="table table-striped" border="1" cellspacing="4" cellpadding="4"> 
              <tr> 
                  <td> <font face="Arial">first name</font> </td> 
                  <td> <font face="Arial">last name</font> </td> 
                  <td> <font face="Arial">email</font> </td> 
                  <td> <font face="Arial">dob</font> </td> 
                  <td> <font face="Arial">gender</font> </td> 
                  <td> <font face="Arial">b_type</font> </td>
                  <td> <font face="Arial">address</font> </td>
                  <td> <font face="Arial">city</font> </td>
                  <td> <font face="Arial">mobile</font> </td>
              </tr>';

        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $fname = $row["first_name"];
                $lname = $row["last_name"];
                $email = $row["email"];
                $dob = $row["dob"];
                $gender = $row["gender"]; 
                $btype = $row["b_type"];
                $address = $row["address"];
                $city = $row["city"];
                $mobile = $row["mobile"];
                

                echo '<tr> 
                          <td>'.$fname.'</td> 
                          <td>'.$lname.'</td> 
                          <td>'.$email.'</td> 
                          <td>'.$dob.'</td> 
                          <td>'.$gender.'</td> 
                          <td>'.$btype.'</td> 
                          <td>'.$address.'</td> 
                          <td>'.$city.'</td>
                          <td>'.$mobile.'</td>  
                      </tr>';
            }
            $result->free();
        } 
      ?>
  </center>
</body>
</html>




