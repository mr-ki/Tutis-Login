<?php
/*
 * Content Class
 * 
 * Used to write conftent into a static var to be
 * used anywhere
 */
class Content {
	/*
	 * @var $contentArray
	 *
	 * Used to store all the content
	 */
	static $contentArray;
	/*
	 * Content Read function
	 * 
	 * Reads the content value from the $contentArray
	 * 
	 * @param string $action the key in the parent array
	 */
	public static function read($action) 
	{
		return self::$contentArray[$action];

	}
	/*
	 * Content Write function
	 * 
	 * Writes data to the $contentArray
	 * 
	 * @param string $action the key in the parent array
	 * @param string $title, $headline, $content, $css the values 
	 * of an array associated to the key in the parent array
	 */
	public static function write($action, $title, $headline, $content, $css) 
	{
		self::$contentArray[$action] = array(
										"title" => $title,
										"headline" => $headline,
										"content" => $content,
										"css" => $css
										);
	}
}
?>
