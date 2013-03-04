<?php
/*
 * Content Include
 * 
 * Used to write content information into a static var to be
 * used anywhere
 */

/*
 * Get the Content class
 */
require_once('content.class.php');

/*
 * Write content to the Content static class
 */

Content::write('secure', 'Secure Page', 'Secure Page', '<p>This is a secure page</p>', 'style');


Content::write('secure1', 'Secure Page 1', 'Secure Page 1', '<p>This is another secure page</p>', 'default');


Content::write('secure2', 'Secure Page 2', 'Secure Page 2', '<p>And a last one. Here with a different css file.</p>', 'reset');

?>