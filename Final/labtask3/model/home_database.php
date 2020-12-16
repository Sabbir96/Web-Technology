<?php
        function viewData($id){
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "UserDatabase";
            
            $conn = new mysqli($servername, $username, $pass, $dbname);
            
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
        
        
            $sql = "SELECT * FROM userinfo WHERE id='".$id."'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
        
                $row = $result->fetch_assoc();
                return $row;
                $conn->close();
            } 
            else {
                echo "0 results";
                $conn->close();
            }
        }

        function deleteId($id){
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "userdata";
            
          
            $conn = new mysqli($servername, $username, $pass, $dbname);
            
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
           
            $sql = "DELETE FROM userinfo WHERE id='".$id."'";
            
            if ($conn->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $conn->error;
            }
            
            $conn->close();
        }

        function updateEmail($id,$email){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "userdata";
        
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "UPDATE userinfo SET email='".$email."' WHERE id='".$id."'";
        
            if ($conn->query($sql) === TRUE) {
            echo "Updated Successfully";
            } else {
            echo "Error Updated: " . $conn->error;
            }
        
            $conn->close();
        }
?>