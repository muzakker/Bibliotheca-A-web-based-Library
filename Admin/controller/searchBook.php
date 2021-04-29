<?php

    //require_once('../model/bookModel.php');

    $search = $_REQUEST['search'];

    $conn = mysqli_connect('localhost', 'root', '', 'bibliotheca');
    $sql = "select * from book WHERE concat(bookname, author, price) like '%$search%'";
	$result = mysqli_query($conn, $sql);
    $row_cnt = mysqli_num_rows($result);

    if($row_cnt > 0){
        $response = "<table border=1>
                        <tr>
                            <td>bookID</td>
                            <td>Book Name</td>
                            <td>Category</td>
                            <td>Author</td>
                            <td>Published</td>
                            <td>Author</td>
                        </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            $response .= "	<tr>
                                <td>{$row['bookID']}</td>
                                <td>{$row['bookname']}</td>
                                <td>{$row['category']}</td>
                                <td>{$row['author']}</td>
                                <td>{$row['published']}</td>
                                <td>{$row['price']}</td>
                            </tr>";
            }
        $response .= "</table>";

	    echo $response;

    }else{
        echo "NO DATA FOUND";
    }

?>