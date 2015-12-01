<?php
session_start ();

$debug = false;
include ('CommonMethods.php');
$COMMON = new Common ( $debug );




$studentRow = $COMMON->getStudentInfo($_SESSION["studID"]);
$localMaj = $studentRow[5];
$firstName = $studentRow[1];
$lastName = $studentRow[2];
$email = $studentRow[4];
$studentID = $studentRow[3];


?>
<html lang="en">
<head>
	<?php include('Header.php'); ?>
<title>Edit Student Information</title>
</head>

<!--Provide a form for the student to edit their information-->
<body>
	<div id="login">
		<div id="form">
			<div class="top">
				<h2>
					Edit Student Information<span class="login-create"></span>
				</h2>
				<form action="StudProcessEdit.php" method="post" name="Edit">

					<!--Adjust first name-->
					<div class="field">
						<label for="firstN">First Name</label> <input id="firstN"
							size="30" maxlength="50" type="text" name="firstN" required
							value=<?php echo $firstName?>>
					</div>
					<!--Adjust Last name-->
					<div class="field">
						<label for="lastN">Last Name</label> <input id="lastN" size="30"
							maxlength="50" type="text" name="lastN" required
							value=<?php echo $lastName?>>
					</div>

					<!--Show student id-->
					<div class="field">
						<label for="studID">Student ID</label> <input id="studID"
							size="30" maxlength="7" type="text" pattern="[A-Za-z]{2}[0-9]{5}"
							title="AB12345" name="studID" disabled
							value=<?php echo $studentID ?>>
					</div>
					<div class="field">
						<label for="email">E-mail</label> <input id="email" size="30"
							maxlength="255" type="email" name="email" required
							value=<?php echo $email?>>
					</div>
					<div class="field">

						<!--Handle abbreviated majors but print them out fully-->

						<label for="major">Major</label> <select id="major" name="major">
							<option
								<?php if($localMaj == 'CMPE'){echo("selected");}?>>Computer
								Engineering</option>
							<option
								<?php if($localMaj == 'CMSC'){echo("selected");}?>>Computer
								Science</option>
							<option
								<?php if($localMaj == 'MENG'){echo("selected");}?>>Mechanical
								Engineering</option>
							<option
								<?php if($localMaj == 'CENG'){echo("selected");}?>>Chemical
								Engineering</option>
							<option
								<?php if($localMaj == 'ENGR'){echo("selected");}?>>Engineering
								Undecided</option>
							<!-- someday
					<option <?php if($localMaj == 'Africana Studies'){echo("selected");}?>>Africana Studies</option>
					<option <?php if($localMaj == 'American Studies'){echo("selected");}?>>American Studies</option>
					<option <?php if($localMaj == 'Ancient Studies'){echo("selected");}?>>Ancient Studies</option>
					<option <?php if($localMaj == 'Anthropology'){echo("selected");}?>>Anthropology</option>
					<option <?php if($localMaj == 'Asian Studies'){echo("selected");}?>>Asian Studies</option>
					<option <?php if($localMaj == 'Biochemistry and Molecular Biology'){echo("selected");}?>>Biochemistry and Molecular Biology</option>
					<option <?php if($localMaj == 'Bioinformatics and Computational Biology'){echo("selected");}?>>Bioinformatics and Computational Biology</option>
					<option <?php if($localMaj == 'Biological Sciences'){echo("selected");}?>>Biological Sciences</option>
					<option <?php if($localMaj == 'Business Technology Administration'){echo("selected");}?>>Business Technology Administration</option>
					<option <?php if($localMaj == 'Chemistry'){echo("selected");}?>>Chemistry</option>
					<option <?php if($localMaj == 'Dance'){echo("selected");}?>>Dance</option>
					<option <?php if($localMaj == 'Economics'){echo("selected");}?>>Economics</option>
					<option <?php if($localMaj == 'Financial Economics'){echo("selected");}?>>Financial Economics</option>
					<option <?php if($localMaj == 'Emergency Health Services'){echo("selected");}?>>Emergency Health Services</option>
					<option <?php if($localMaj == 'English'){echo("selected");}?>>English</option>
					<option <?php if($localMaj == 'Environmental Science and Environmental Studies'){echo("selected");}?>>Environmental Science and Environmental Studies</option>
					<option <?php if($localMaj == 'Gender and Womens Studies'){echo("selected");}?>>Gender and Womens Studies</option>
					<option <?php if($localMaj == 'Geography'){echo("selected");}?>>Geography</option>
					<option <?php if($localMaj == 'Global Studies'){echo("selected");}?>>Global Studies</option>
					<option <?php if($localMaj == 'Health Administration and Policy'){echo("selected");}?>>Health Administration and Policy</option>
					<option <?php if($localMaj == 'History'){echo("selected");}?>>History</option>
					<option <?php if($localMaj == 'Information Systems'){echo("selected");}?>>Information Systems</option>
					<option <?php if($localMaj == 'Interdisciplinary Studies'){echo("selected");}?>>Interdisciplinary Studies</option>
					<option <?php if($localMaj == 'Management of Aging Services'){echo("selected");}?>>Management of Aging Services</option>
					<option <?php if($localMaj == 'Mathematics'){echo("selected");}?>>Mathematics</option>
					<option <?php if($localMaj == 'Statistics'){echo("selected");}?>>Statistics</option>
					<option <?php if($localMaj == 'Media and Communication Studies'){echo("selected");}?>>Media and Communication Studies</option>
					<option <?php if($localMaj == 'Modern Languages, Linguistics and Intercultural Communication'){echo("selected");}?>>Modern Languages, Linguistics and Intercultural Communication</option>
					<option <?php if($localMaj == 'Music'){echo("selected");}?>>Music</option>
					<option <?php if($localMaj == 'Philosophy'){echo("selected");}?>>Philosophy</option>
					<option <?php if($localMaj == 'Physics'){echo("selected");}?>>Physics</option>
					<option <?php if($localMaj == 'Political Sciences'){echo("selected");}?>>Political Science</option>
					<option <?php if($localMaj == 'Psychology'){echo("selected");}?>>Psychology</option>
					<option <?php if($localMaj == 'Social Work'){echo("selected");}?>>Social Work</option>
					<option <?php if($localMaj == 'Sociology'){echo("selected");}?>>Sociology</option>
					<option <?php if($localMaj == 'Theatre'){echo("selected");}?>>Theatre</option>
					<option <?php if($localMaj == 'Visual Arts'){echo("selected");}?>>Visual Arts</option>
					<option <?php if($localMaj == 'Undecided'){echo("selected");}?>>Undecided</option>
					<option <?php if($localMaj == 'Other'){echo("selected");}?>>Other</option>
-->
						</select>
					</div>

					<!--proceed to edit the information-->
					<div class="nextButton">
						<input type="submit" name="save" class="button large go"
							value="Save">
					</div>

			</div>
			</form>

<?php include('Footer.php'); ?>
