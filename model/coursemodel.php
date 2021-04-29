<?php
	
	require_once('db.php');

	function insertCourse($course){
		$conn = getConnection();
		$sql = "insert into course(courseID, coursename, type, joindate,description)
        values('{$course['courseID']}', '{$course['coursename']}', '{$course['type']}', '{$course['joindate']}', '{$course['description']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
    function getCourseByID($courseID){
		$conn = getConnection();
		$sql = "select * from course where courseID = '{$courseID}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllCourse(){
		$conn = getConnection();
		$sql = "select * from course";
		$result = mysqli_query($conn, $sql);
		$course = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($course, $row);
		}

		return $course;
	}

	function updateCourse($course){
		$conn = getConnection();
		$sql = "UPDATE course SET coursename='{$course['coursename']}', type='{$course['type']}', joindate='{$course['joindate']}', description='{$course['description']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteCourse($courseID){
		$conn = getConnection();
		$sql = "delete from Course where courseID='{$courseID}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>