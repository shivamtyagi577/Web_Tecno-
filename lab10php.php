<?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '';  
    $conn = mysqli_connect($host, $user, $pass);  
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_connect_error());  
    }  
    echo 'Connected successfully<br/>';  
      
    $sql = 'CREATE Database christ';  
    if(mysqli_query( $conn,$sql)){  
        echo "Database mydb created successfully.";  
    }
    // else{  
    //     echo "Sorry, database creation failed ".mysqli_error($conn);  
    // }
    $dbname = 'christ';
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $sql1 = "create table stuinfo(stud_id INT ,stud_name TEXT NOT NULL,age INT NOT NULL, gender TEXT, course TEXT, address TEXT)";  
    if(mysqli_query($conn, $sql1)){  
        echo "Table stuinfo created successfully";  
    }
    else{  
        echo "Could not create table: ". mysqli_error($conn);  
    }  

    $sql2 = 'INSERT INTO stuinfo(stud_id,stud_name ,age, gender, course, address) VALUES (2047111,"sonoo", 23, "Male", "MCS","SG P")';  
    if(mysqli_query($conn, $sql2)){  
    echo "Record inserted successfully"; 
    echo "<br>"; 
    }else{  
    echo "Could not insert record: ". mysqli_error($conn);  
    }  

    $sql3 = 'INSERT INTO stuinfo(stud_id,stud_name ,age, gender, course, address) VALUES (2047111,"Swanawa", 23, "Male", "MCS","koramangala")';  
    if(mysqli_query($conn, $sql3)){  
    echo "Record inserted successfully";  
    echo "<br>";
    }else{  
    echo "Could not insert record: ". mysqli_error($conn);  
    }  

    $sql4 = "UPDATE stuinfo SET stud_name='Dhirendra' WHERE stud_id=2047111";
    if(mysqli_query($conn, $sql4)){  
        echo "Record updated successfully";  
        echo "<br>";
        }else{  
        echo "Could not update record: ". mysqli_error($conn);  
        }  


    




    $sql6 = "DELETE FROM stuinfo WHERE stud_id=2047111";

    if ($conn->query($sql6) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }



    $sql5 = 'INSERT INTO stuinfo(stud_id,stud_name ,age, gender, course, address) VALUES (2047111,"Dhire Cho", 23, "Male", "MSC","koramangala")';  
    if(mysqli_query($conn, $sql5)){  
    echo "Record inserted successfully";  
    echo "<br>";
    }else{  
    echo "Could not insert record: ". mysqli_error($conn);  
    }


    // $sql7 = "SELECT stud_id, stud_name, age FROM stuinfo";
    // $result = $conn->query($sql7);
    // if ($result->num_rows > 0) {
    // // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["stud_id"]. " - Name: " . $row["stud_name"]. " - Age :" .$row["age"]. "<br>";
    // }
    // } else {
    // echo "0 results";
    // }


    $sql7 = "SELECT stud_id, stud_name, age, course FROM stuinfo";
    $result = $conn->query($sql7);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Age</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["stud_id"]. " - Name: " . $row["stud_name"]. " - Age :" .$row["age"]." - Course :" .$row["course"]. "<br>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }

    $sql9 = "SELECT stud_id, stud_name, age, course FROM stuinfo WHERE course = 'MCA'";
    $result = $conn->query($sql9);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["stud_id"]. " - Name: " . $row["stud_name"]. " - Age :" .$row["age"]. " - Course :" .$row["course"]. "<br>";
    }
    } else {
    echo "0 results";
    }


    mysqli_close($conn);  
    ?>  







<!-- <?php  
        $host = 'localhost';  
        $user = 'Shivam Tyagi';  
        $pass = 'Abroad123#';  
        $dbname = "CHRIST";
        $conn = mysqli_connect($host, $user, $pass, $dbname);  
        if(! $conn )  
        {  
        die('Could not connect: ' . mysqli_error());  
        }  
        echo 'Connected successfully';  
        //echo $conn;

        $sql = "INSERT INTO stuinfo (stud_id, stud_name, age, gender, course, address)
        VALUES ('2047100', 'John', '89', 'Female', 'AS SS')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        mysqli_close($conn);  
    ?>   -->


