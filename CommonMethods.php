<?php

class Common
{
	var $conn;
	var $debug; // this is set by a initiated value in the constructor

	function Common($debug)
	{
		$this->debug = $debug;
		$rs = $this->connect("web.coeadvising"); // db name really here
		return $rs;
	}

	//Abbreviates the given major string to save space in the database


	function abbreviateMajor($major)
	{

		if($major == "Engineering Undecided"){
			return "ENGR";
		}elseif($major == "Mechanical Engineering")	{
			return  "MENG"	;
		}elseif($major == "Chemical Engineering")	{
			return  "CENG"	;
		}elseif($major == "Computer Science")	{
			return  "CMSC"	;
		}elseif($major == "Computer Engineering")	{
			return  "CMPE"	;
		}

	}



	//rewrites the array in abbreviated fashion
	function abbreviateMajorsArray($majors){
		$count = 0;
		$abbreviatedMajors = array();
		foreach($majors as $m){

			if($m == "Engineering Undecided"){
				$abbreviatedMajors[$count] = "ENGR";
			}elseif($m == "Mechanical Engineering")	{
				$abbreviatedMajors[$count] = "MENG"	;
			}elseif($m == "Chemical Engineering")	{
				$abbreviatedMajors[$count] = "CENG"	;
			}elseif($m == "Computer Science")	{
				$abbreviatedMajors[$count] = "CMSC"	;
			}elseif($m == "Computer Engineering")	{
				$abbreviatedMajors[$count] = "CMPE"	;
			}else{
				$abbreviatedMajors[$count] = $m	;
			}
			$count = $count + 1;
		}
		return $abbreviatedMajors;
	}


// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

	function connect($db)// connect to MySQL
	{
	 $conn = @mysql_connect("studentdb-maria.gl.umbc.edu", "whesch1", "Fsu^#guGbzA$^XxT") or die("Could not connect to MySQL");

		// $conn = @mysql_connect("studentdb.gl.umbc.edu", "jeanice1", "jeanice1") or die("<br> Could not connect to MySQL <br>");
		//$rs = @mysql_select_db($db, $conn) or die("<br> Could not connect to $db database <br>");
		$rs = @mysql_select_db("whesch1", $conn) or die("<br> Could not connect to $db database <br>");
		$this->conn = $conn;
	}

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */



	function executeQuery($sql, $filename) // execute query
	{
		if($this->debug == true) { echo("$sql <br>\n"); }
		$rs = mysql_query($sql, $this->conn) or die("<br> Could not execute query '$sql' in $filename <br>");
		return $rs;
	}

//Retrieves the advisor database row associated with the provided advisorID
	function getAdvisorInfo($advisorID){

		$sql =  "SELECT * FROM `Proj2Advisors` WHERE `id` = '$advisorID'";
		$rs = $this->executeQuery($sql, "Advising Appointments");
		$row = mysql_fetch_row ( $rs );
		return $row;
	}

//Retrieves the Student ID of the student associated at the row with the given Database ID in the students table
	function getIDOfStudentID($studentID){

		$sql =  "SELECT * FROM `Proj2Students` WHERE `StudentID` = '$studentID'";
		$rs = $this->executeQuery($sql, "Advising Appointments");
		$row = mysql_fetch_row ( $rs );
		return $row[0];
	}

	//Retrieves the student database row associated with the provided Student ID
		function getStudentInfo($studentID){

		$sql =  "SELECT * FROM `Proj2Students` WHERE `id` = '$studentID'";
		$rs = $this->executeQuery($sql, "Advising Appointments");
		$row = mysql_fetch_row ( $rs );
		return $row;
	}

	//Retrieves the advisor information for a given student ID
	function getStudentAdvisor($studentID){

		$sql =  "SELECT * FROM `Proj2Appointments` WHERE `EnrolledID` like '%$studentID%' ";
		$rs = $this->executeQuery($sql, "Advising Appointments");
		$row = mysql_fetch_row ( $rs );
		return $row[2];
	}

	//Retrieves the appointment time associated with a given Student
	function getStudentAppointmentTime($studentID){

		$sql =  "SELECT * FROM `Proj2Appointments` WHERE `EnrolledID` like '%$studentID%' ";
		$rs = $this->executeQuery($sql, "Advising Appointments");
		$row = mysql_fetch_row ( $rs );
		return $row[1];
	}

	//Given a Student ID Retreives all of the student IDs that share an appointment with this student
	function getStudentsSharingAppointment($studentID){

		$sql =  "SELECT * FROM `Proj2Appointments` WHERE `EnrolledID` like '%$studentID%' ";
		$rs = $this->executeQuery($sql, "Advising Appointments");
		$row = mysql_fetch_row ( $rs );
		return $row[4];
	}



} // ends class, NEEDED!!

?>
