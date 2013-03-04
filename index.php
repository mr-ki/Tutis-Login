<?php
if(!file_exists('assets/config.inc.php')) 
{
	echo '<a href="setup/">Please install Tutis to view the demo …</a>';
} 
else 
{
	/*
	**********
	Member Login
	Example
	**********
	*/
	/* Include Code */
	include("assets/member.inc.php");
	include('assets/display.inc.php');
	include('assets/content.inc.php');

	/* Is an Action set? */
	if(isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = null;
	}

	$Display = new Display;

	if($action) 
	{
		// check if member is logged in
		// will be redirected if not logged in
		$member->LoggedIn(); 

		// read out the content that is stored in the
		// contentArray under the index $action
		// will return an array as well
		$contentArray = Content::read($action);

		
		// storing the content of the member->data() array into $member_data
		$member_data = $member->data();

		// extracting the members username out of the $member_data array:
		$member_username = $member_data->username;

		// loading content from the content_array into 
		// the create_page method from the Display class
		$display = $Display->create_page(
											$contentArray['title'], 
											$contentArray['headline'], 
											$contentArray['content'], 
											$contentArray['css'],
											$member_username
										);
		echo $display;
		
	} 
	else 
	{

		$readme = file_get_contents('readme.txt', true);
		$display = $Display->create_page(
											'Main View',
											'Main View',
											$readme
										);
		echo $display;
	}
} 

 ?>