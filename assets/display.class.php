<?php

// display class expanding
// tutis login class
// author: Kristian Heitkamp
// March 4th 2013

class Display {


	public function create_page($title, $headline, $content, $css, $loggedInUser)
	{
		$output = '';
		$output .= $this->create_head($title, $css);
		$output .= $this->create_usermenu($loggedInUser);
		$output .= $this->create_mainNavigation();
		$output .= $this->create_content($content, $headline);
		$output .= $this->create_footer();

		return $output;
	}

	
	protected function create_head($title, $css)
	{
		$author = Config::read('site_author');
		$generator = Config::read('site_generator');
		$site_title = Config::read('site_title');


		$output = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  	<meta http-equiv="content-type" content="text/html; charset=utf-8">
  	<meta name="author" content="'.$author.'">
  	<meta name="generator" content="'.$generator.'">
	<title>'.$site_title.' – '.$title.'</title>
	<!--CSS Files-->
	<link rel="stylesheet" type="text/css" href="'.$this->define_css($css).'" />
</head>
<body>
	<div id="wrapper" class="group">	
		<div id="header" class="group">';
		
		return $output;
	}

	// the css file can be selected. The prefix .css will
	// be added automatically
	protected function define_css($css)
	{
		if (!$css)
		{
			return 'assets/css/default.css';
		}
		else
		{
			return 'assets/css/'.$css.'.css';
		}
	}

	// creates the main navigation. action is required to identify
	// the associated content that will be delivered through the 
	// content class
	protected function create_mainNavigation()
	{
		$output = '
	<ul id="navigation" class="group">
		<li><a href="index.php">Index</a></li>
		<li><a href="index.php?action=secure">Secure Page</a></li>
		<li><a href="index.php?action=secure1">Secure Page 1</a></li>
		<li><a href="index.php?action=secure2">Secure Page 2</a></li>
	</ul>';

		return $output;
	}

	// create_usermenu needs the users name ($loggedInUser) to display it's
	// username in the user-menu if the user is logged in.
	protected function create_usermenu($loggedInUser)
	{
		$output = '
<div id="user">';
		if(isset($loggedInUser)) 
		{ 
			$output .= '
	<div id="user-info">Hello, '.$loggedInUser.'</div>
	<ul id="user-ops">
		<li><a href="member.php?action=settings">Settings</a></li>
		<li><a href="member.php?action=logout">Logout</a></li>
	</ul>';
		}
		
		else
		{ 
				$output .= '
	<div id="user-info">Hello, Guest</div>
	<ul id="user-ops">
		<li><a href="member.php?action=login">Login</a></li>
		<li><a href="member.php?action=register">Register</a></li>
	</ul>';
		}

		$output .= '
		</div>';

		return $output;
	}

	// creates the content with a headline <h2>
	protected function create_content($content, $headline)
	{
		$output = '
<div id="body" class="group">
	<h2>'.$headline.'</h2>
'.$content.'
	</div>';

		return $output;
	}

	// the footer closes the HTML document
	protected function create_footer()
	{
		$output= '
	</div>
</div>
</body>
</html>';

		return $output;
	}


}