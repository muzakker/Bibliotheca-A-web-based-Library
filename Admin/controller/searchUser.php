<?php

    $search = $_REQUEST['search'];

    $conn = mysqli_connect('localhost', 'root', '', 'bibliotheca');
    $sql = "select * from user WHERE concat(id, username, type, fullname, email, gender, dob) like '%$search%'";
	$result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);

    if($row_count > 0){
        $response = "<table border=1>
                        <tr>
                            <td>#</td>
                            <td>Username</td>
                            <td>Full Name</td>
                            <td>Gender</td>
                            <td>Email</td>
                            <td>Date of Birth</td>
                            <td>User Type</td>
                        </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            $response .= "	<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['username']}</td>
                                <td>{$row['fullname']}</td>
                                <td>{$row['gender']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['dob']}</td>
                                <td>{$row['type']}</td>
                            </tr>";
            }
        $response .= "</table>";

	    echo $response;

    }else{
        echo "NO USER FOUND";
    }

?>