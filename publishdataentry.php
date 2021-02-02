<?php
include("auth_session.php");
include('db.php');
$update = 0; //For adding new entry
$username = $_SESSION["username"];
if(isset($_GET['pid'])) 	 {
$pid = $_GET['pid'];
$sql    = "SELECT * FROM `publications` WHERE pid='$pid'";
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res)==0) {
			$message= "No Publiction selected";
			
			
		}else { $row1 = mysqli_fetch_assoc($res);

			if($row1['emp_id'] != $username) {
				$message= "This publication is not user paper. Please add your publication here. ";
			}
			else{
			$update = 1; //For updating the publiction 
			}	
		} 
}

if(isset($_POST['submit'])) {
	$author1   = stripslashes($_REQUEST['author1']);
	$author1 = mysqli_real_escape_string($con, $author1);
	$institution1   = stripslashes($_REQUEST['institution1']);
	$institution1 = mysqli_real_escape_string($con, $institution1);
	$author2   = stripslashes($_REQUEST['author2']);
	$author2 = mysqli_real_escape_string($con, $author2);
	$institution2   = stripslashes($_REQUEST['institution2']);
	$institution2 = mysqli_real_escape_string($con, $institution2);
	$author3   = stripslashes($_REQUEST['author3']);
	$author3 = mysqli_real_escape_string($con, $author3);
	$institution3   = stripslashes($_REQUEST['institution3']);
	$institution3 = mysqli_real_escape_string($con, $institution3);
	$author4   = stripslashes($_REQUEST['author4']);
	$author4 = mysqli_real_escape_string($con, $author4);
	$institution4   = stripslashes($_REQUEST['institution4']);
	$institution4 = mysqli_real_escape_string($con, $institution4);
	$author5   = stripslashes($_REQUEST['author5']);
	$author5 = mysqli_real_escape_string($con, $author5);
	$institution5   = stripslashes($_REQUEST['institution5']);
	$institution5 = mysqli_real_escape_string($con, $institution5);
	$paper_title = stripslashes($_REQUEST['paper_title']);
	$paper_title = mysqli_real_escape_string($con,$paper_title); 
	$journal_title = stripslashes($_REQUEST['journal_title']);
	$journal_title = mysqli_real_escape_string($con, $journal_title);
	$domain = stripslashes($_REQUEST['domain']);
	$domain = mysqli_real_escape_string($con, $domain);
	$journal_conference = stripslashes($_REQUEST['journal_conference']);
	$journal_conference = mysqli_real_escape_string($con, $journal_conference);
	$volume = stripslashes($_REQUEST['volume']);
	$volume = mysqli_real_escape_string($con, $volume);
	$issue = stripslashes($_REQUEST['issue']);
	$issue = mysqli_real_escape_string($con, $issue);
	$year = stripslashes($_REQUEST['year']);
	$year = mysqli_real_escape_string($con, $year);
	$month = stripslashes($_REQUEST['month']);
	$month = mysqli_real_escape_string($con, $month);
	$issn_isbn_doi = stripslashes($_REQUEST['issn_isbn_doi']);
	$issn_isbn_doi = mysqli_real_escape_string($con, $issn_isbn_doi);
	$international_national = stripslashes($_REQUEST['international_national']);
	$international_national = mysqli_real_escape_string($con, $international_national);
	$published_full = stripslashes($_REQUEST['published_full']);
	$published_full = mysqli_real_escape_string($con, $published_full);
	$abstract_published = stripslashes($_REQUEST['abstract_published']);
	$abstract_published = mysqli_real_escape_string($con, $abstract_published);
	$scopus_wos = stripslashes($_REQUEST['scopus_wos']);
	$scopus_wos = mysqli_real_escape_string($con, $scopus_wos);
	$citation_scopus = stripslashes($_REQUEST['citation_scopus']);
	$citation_scopus = mysqli_real_escape_string($con, $citation_scopus);
	$citation_google_scholar = stripslashes($_REQUEST['citation_google_scholar']);
	$citation_google_scholar = mysqli_real_escape_string($con, $citation_google_scholar);
	$link = stripslashes($_REQUEST['link']);
	$link = mysqli_real_escape_string($con, $link);
	$affiliated_to_vit = stripslashes($_REQUEST['affiliated_to_vit']);
	$affiliated_to_vit = mysqli_real_escape_string($con, $affiliated_to_vit);
	$author_name = stripslashes($_REQUEST['author_name']);
	$author_name = mysqli_real_escape_string($con, $author_name);
	$page_numbers = stripslashes($_REQUEST['page_numbers']);
	$page_numbers = mysqli_real_escape_string($con, $page_numbers);
	$citations_internal = stripslashes($_REQUEST['citations_internal']);
	$citations_internal = mysqli_real_escape_string($con, $citations_internal);
	$cite_article = stripslashes($_REQUEST['cite_article']);
	$cite_article = mysqli_real_escape_string($con, $cite_article);
	
	if($update == 0) {
		//insert query for adding the data
		$query = "INSERT INTO `publications`(emp_id, author1, institution1, author2, institution2, author3, institution3, author4, institution4, author5, institution5, paper_title, journal_title, domain, journal_conference, volume, issue, year, month, issn_isbn_doi, international_national, published_full, abstract_published, scopus_wos, citation_scopus, citation_google_scholar, link, affiliated_to_vit, author_name, page_numbers, citations_internal, cite_article) VALUES ('$username', '$author1', '$institution1', '$author2', '$institution2', '$author3', '$institution3', '$author4', '$institution4', '$author5', '$institution5', '$paper_title', '$journal_title', '$domain', '$journal_conference', '$volume', '$issue', '$year', '$month', '$issn_isbn_doi', '$international_national', '$published_full', '$abstract_published', '$scopus_wos', '$citation_scopus', '$citation_google_scholar', '$link', '$affiliated_to_vit', '$author_name', '$page_numbers', '$citations_internal', '$cite_article')";
		$result   = mysqli_query($con, $query);
		header("Location: dashboard.php");
	} else {
			//Update query for updating data
			$query_update = "UPDATE `publications` SET author1='$author1',institution1='$institution1',author2='$author2',institution2='$institution2',author3='$author3',institution3='$institution3',author4='$author4',institution4='$institution4',author5='$author5',institution5='institution5',paper_title='$paper_title',journal_title='$journal_title',domain='$domain',journal_conference='$journal_conference',volume='$volume',issue='$issue',year='$year',month='$month',issn_isbn_doi='$issn_isbn_doi',international_national='$international_national',published_full='$published_full',abstract_published='$abstract_published',scopus_wos='$scopus_wos',citation_scopus='$citation_scopus',citation_google_scholar='$citation_google_scholar',link='$link',affiliated_to_vit='$affiliated_to_vit',author_name='$author_name',page_numbers='$page_numbers',citations_internal='$citations_internal',cite_article='$cite_article' WHERE pid='$pid'";
			$result_update   = mysqli_query($con, $query_update);
			header("Location: dashboard.php");
	}
	//mysql_query($con,$query);
	//header('location:dashboard.php');
}
	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="css/dataentry.css" />
</head>
<body>
<div>
<?php // include "includes/header.php"
include("includes/header.php");
?>
</div class="containor">
	<form action="" method="post">
		<label for="author1">Author1:</label>
		<input type="text" 	name="author1" id="author1" value = <?php if(isset($row1['pid'])) {echo $row1['author1'];}?> >
		<br>
		<label for="institution">Institution1:</label>
		<input type="text" name="institution1" id="institution1" value = <?php if(isset($row1['pid'])) {echo $row1['institution1'];}?> >
		<br>
		<label for="author2">Author2:</label>
		<input type="text" name="author2" id="author2" value = <?php if(isset($row1['pid'])) {echo $row1['author2'];}?> >
		<br>
		<label for="institution2">Institution2:</label>
		<input type="text" name="institution2" id="institution2" value = <?php if(isset($row1['pid'])) {echo $row1['institution2'];}?> >
		<br>
		<label for="author3">Author3:</label>
		<input type="text" name="author3" id="author3" value = <?php if(isset($row1['pid'])) {echo $row1['author3'];}?>>
		<br>
		<label for="institution3">Institution3:</label>
		<input type="text" name="institution3" id="institution3" value = <?php if(isset($row1['pid'])) {echo $row1['institution3'];}?>>
		<br>
		<label for="author4">Author4:</label>
		<input type="text" name="author4" id="author4" value = <?php if(isset($row1['pid'])) {echo $row1['author4'];}?>>
		<br>
		<label for="institution4">Institution4:</label>
		<input type="text" name="institution4" id="institution4" value = <?php if(isset($row1['pid'])) {echo $row1['institution4'];}?>>
		<br>
		<label for="author5">Author5:</label>
		<input type="text" name="author5" id="author5" value = <?php if(isset($row1['pid'])) {echo $row1['author5'];}?>>
		<br>
		<label for="institution4">Institution5:</label>
		<input type="text" name="institution5" id="institution5" value = <?php if(isset($row1['pid'])) {echo $row1['institution5'];}?>>
		<br>
		<label for="paper_title">Paper title:</label>
		<input type="text" name="paper_title" id="paper_title" value = <?php if(isset($row1['pid'])) {echo $row1['paper_title'];}?>>
		<br>
		<label for="journal_title">Journal title:</label>
		<input type="text" name="journal_title" id="journal_title" value = <?php if(isset($row1['pid'])) {echo $row1['journal_title'];}?>>
		<br>
		<label for="domain">Domain:</label>
		<input type="text" name="domain" id="domain" value = <?php if(isset($row1['pid'])) {echo $row1['domain'];}?> >
		<br>
		<label for="journal_conference">Journal/Conference/Book Chapter:</label>
		<select id="journal_conference" name="journal_conference">
			<option value="Journal" <?php if(isset($row1['pid']) and $row1['journal_conference']=="Journal")echo 'selected="selected"';?>>Journal</option>
			<option value="Conference" <?php if(isset($row1['pid']) and $row1['journal_conference']=="Conference")echo 'selected="selected"';?>>Conference</option>
			<option value="Book Chapter" <?php if(isset($row1['pid']) and $row1['journal_conference']=="Book Chapter")echo 'selected="selected"';?>>Book Chapter</option>
		</select>
		<br>
		<label for="volume">Volume:</label>
		<input type="number" name="volume" id="volume" value = <?php if(isset($row1['pid'])) {echo $row1['volume'];}?>>
		<br>
		<label for="issue">Issue:</label>
		<input type="number" name="issue" id="issue" value = <?php if(isset($row1['pid'])) {echo $row1['issue'];}?>>
		<br>
		<label for="year">Year:</label>
		<input type="number" name="year" id="year" value = <?php if(isset($row1['pid'])) {echo $row1['year'];}?>>
		<br>
		<label for="month">Month:</label>
		<select id="month" name="month">
			<option value="January" <?php if(isset($row1['pid']) and $row1['month']=="January")echo 'selected="selected"';?>>January</option>
			<option value="Febuary" <?php if(isset($row1['pid']) and $row1['month']=="Febuary")echo 'selected="selected"';?>>Febuary</option>
			<option value="March" <?php if(isset($row1['pid']) and $row1['month']=="March")echo 'selected="selected"';?>>March</option>
			<option value="April" <?php if(isset($row1['pid']) and $row1['month']=="April")echo 'selected="selected"';?>>April</option>
			<option value="May" <?php if(isset($row1['pid']) and $row1['month']=="May")echo 'selected="selected"';?>>May</option>
			<option value="June" <?php if(isset($row1['pid']) and $row1['month']=="June")echo 'selected="selected"';?>>June</option>
			<option value="July" <?php if(isset($row1['pid']) and $row1['month']=="July")echo 'selected="selected"';?>>July</option>
			<option value="August" <?php if(isset($row1['pid']) and $row1['month']=="August")echo 'selected="selected"';?>>August</option>
			<option value="September" <?php if(isset($row1['pid']) and $row1['month']=="September")echo 'selected="selected"';?>>September</option>
			<option value="October" <?php if(isset($row1['pid']) and $row1['month']=="October")echo 'selected="selected"';?>>October</option>
			<option value="November" <?php if(isset($row1['pid']) and $row1['month']=="November")echo 'selected="selected"';?>>November</option>
			<option value="December" <?php if(isset($row1['pid']) and $row1['month']=="December")echo 'selected="selected"';?>>December</option>
		</select>
		<br>
		<label for="issn_isbn_doi">ISSN/ISBN/DOI:</label>
		<input type="text" name="issn_isbn_doi" id="issn_isbn_doi" value = <?php if(isset($row1['pid'])) {echo $row1['issn_isbn_doi'];}?>>
		<br>
		<label for="international_national">International/national:</label>
		<select id="international_national" name="international_national">
			<option value="International" <?php if(isset($row1['pid']) and $row1['international_national']=="International")echo 'selected="selected"';?>>International</option>
			<option value="National" <?php if(isset($row1['pid']) and $row1['international_national']=="National")echo 'selected="selected"';?>>National</option>
		</select>
		<br>
		<label for="published_full">Published Full Paper in Proceedings? (for conference paper) (Y/N)</label>
		<select id="published_full" name="published_full">
			<option value="Yes" <?php if(isset($row1['pid']) and $row1['published_full']=="Yes")echo 'selected="selected"';?>>Yes</option>
			<option value="No" <?php if(isset($row1['pid']) and $row1['published_full']=="No")echo 'selected="selected"';?>>No</option>
		</select>
		<br>
		<label for="abstract_published">Abstract Published?(Y/N)</label>
		<select id="abstract_published" name="abstract_published">
			<option value="Yes" <?php if(isset($row1['pid']) and $row1['abstract_published']=="Yes")echo 'selected="selected"';?>>Yes</option>
			<option value="No" <?php if(isset($row1['pid']) and $row1['abstract_published']=="No")echo 'selected="selected"';?>>No</option>
		</select>
		<br>
		<label for="scopus_wos">Scopus/WoS/SCI(Y/N)</label>
		<select id="scopus_wos" name="scopus_wos">
			<option value="Yes" <?php if(isset($row1['pid']) and $row1['scopus_wos']=="Yes")echo 'selected="selected"';?>>Yes</option>
			<option value="No" <?php if(isset($row1['pid']) and $row1['scopus_wos']=="No")echo 'selected="selected"';?>>No</option>
		</select>
		<br>
		<label for="citation_scopus">Citation if any in Scopus Wos:</label>
		<input type="number" name="citation_scopus" id="citation_scopus" value = <?php if(isset($row1['pid'])) {echo $row1['citation_scopus'];}?>>
		<br>
		<label for="citation_google_scholar">Citation if Any in Google Scholar:</label>
		<input type="number" name="citation_google_scholar" id="citation_google_scholar" value = <?php if(isset($row1['pid'])) {echo $row1['citation_google_scholar'];}?>>
		<br>
		<label for="link">Link to your paper:</label>
		<input type="text" name="link" id="Link to your paper" value = <?php if(isset($row1['pid'])) {echo $row1['link'];}?>>
		<br>
		<label for="affiliated_to_vit">Affiliated to VIT?</label>
		<select id="affiliated_to_vit" name="affiliated_to_vit">
			<option value="Yes" <?php if(isset($row1['pid']) and $row1['affiliated_to_vit']==1)echo 'selected="selected"';?>>Yes</option>
			<option value="No" <?php if(isset($row1['pid']) and $row1['affiliated_to_vit']=0)echo 'selected="selected"';?>>No</option>
		</select>
		<br>
		<label for="author_name">Which Author?(First, Second etc)</label>
		<select id="author_name" name="author_name">
			<option value="First" <?php if(isset($row1['pid']) and $row1['author_name']=="First")echo 'selected="selected"';?>>First</option>
			<option value="Second" <?php if(isset($row1['pid']) and $row1['author_name']=="Second")echo 'selected="selected"';?>>Second</option>
			<option value="Third" <?php if(isset($row1['pid']) and $row1['author_name']=="Third")echo 'selected="selected"';?>>Third</option>
			<option value="Fourth" <?php if(isset($row1['pid']) and $row1['author_name']=="Fourth")echo 'selected="selected"';?>>Fourth</option>
			<option value="Fifth" <?php if(isset($row1['pid']) and $row1['author_name']=="Fifth")echo 'selected="selected"';?>>Fifth</option>
		</select>
		<br>
		<label for="page_numbers">Page Numbers:</label>
		<input type="text" name="page_numbers" id="page_numbers" value = <?php if(isset($row1['pid'])) {echo $row1['page_numbers'];}?>>
		<br>
		<label for="citations_internal">Citations:</label>
		<input type="number" name="citations_internal" id="citations_internal" value = <?php if(isset($row1['pid'])) {echo $row1['citations_internal'];}?>>
		<br>
		<label for="cite_article">Cite This Article(IEEE Style):</label>
		<input type="text" name="cite_article" id="cite_article" value = <?php if(isset($row1['pid'])) {echo $row1['cite_article'];}?>>
		<br>
		<input type="submit" name="submit" value="submit" class="login-button">
	</form>
<div>
<?php // include "includes/footer.php"?>
</div>
</body>
</html>