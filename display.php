<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "trainee01";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Connection failed!") . $conn->connect_error;
    }

    $sql = "select * from register";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "<table>";
        echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Address</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['contact_no']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['address']}</td>
                </tr>";
        }
        echo "</table>";
    }
?>