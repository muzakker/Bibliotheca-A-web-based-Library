<?php

    $search = $_REQUEST['search'];

    $conn = mysqli_connect('localhost', 'root', '', 'bibliotheca');
    $sql = "select * from penalty WHERE concat(issueID, username, bookname, issuedDate, returnedDate, amount) like '%$search%'";
	$result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);

    if($row_count > 0){
        $response = "<table border=1>
                        <tr>
                            <td>Issue ID</td>
                            <td>Username</td>
                            <td>Book Name</td>
                            <td>Issued Date</td>
                            <td>Return Date</td>
                            <td>amount</td>
                        </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            $response .= "	<tr>
                                <td>{$row['issueID']}</td>
                                <td>{$row['username']}</td>
                                <td>{$row['bookname']}</td>
                                <td>{$row['issuedDate']}</td>
                                <td>{$row['returnedDate']}</td>
                                <td>{$row['amount']}</td>
                            </tr>";
            }
        $response .= "</table>";

	    echo $response;

    }else{
        echo "NO PENALIZED USER FOUND";
    }

?>