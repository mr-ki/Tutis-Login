=== Tutis Login ===
Description: A login script that is written in OOP and uses PHP5's PDO.
Creator: FireDart
Site: http://www.firedartstudios.com/labs/tutis-login

== Updates ==
= Version 1.4.1 (October 3, 2012) =
 - Added clearSession() function; Clears the current logged-in user without redirecting
 - Fixed security issue where when a currently logged-in user (on the same computer registers a new account keeps him in the current account

= Version 1.4 (July 30, 2012) =
 - Added config.class.php; Turns config settings into static vars to be called anywhere
 - Added notice.class.php; Handels Errors
 - Added mailer.class.php; Handels Mailing
 - Added changeEMail() function (Merged the two change password functions into one)
 - Added redirects upon login
 - Addedd "Delete Account" feature
 - Added sessionIsSet() function that sees if a user login but does not redirect if user it not
 - Addedd E-Mail fall back; E-Mails still send if template is missing
 - Changed Config; Config info now stored in confic.inc.php
 - Chanaged recover password, it no longer resets old password but waits for user to check email and change it
 - Changed Mail template; Template is now stored in a html file in assets/email_templates/
 - Changed Default Mail Template; Default E-Mail template is located assets/email_templates/default.html
 - Fixed a few string bugs
 - Updated database.class.php Now handels better and offers more output variation on query (FETCH_ASSOC, FETCH_BOTH, FETCH_LAZY, FETCH_OBJ, fetchAll)
 
 - Support for sha512 if server can't handel Bcrypt

= Version 1.3.3 (June 2, 2012) =
 - Session now recreated upon login if user has set "Remember Me" feature
			
= Version 1.3.2 (May 22, 2012) =
 - Fixed Bcrypt Security Hole, upgraded to $2y$

= Version 1.3.1 (May 19, 2012) =
 - Added "Change Password" feature on login
 - Fixed a few bugs in member.class.php

= Version 1.3 (May 12, 2012) =
 - Bcrypt Encrypted Passwords

= Version 1.2.1 (March 15, 2012)  =
 - Performance; Increased performance by only selected need columns from the db
 - Security; SESSION Hijacking Prevention (Thanks wide_load)
 - Security; Uses now MUST be logged in to see change password screen (before you could see it but needed the session id/valid so one could have used an existing session to reset your password, am sorry I missed this)
 - Registration; Check if user exist in inactive db before approving new user
 - Registration; If inactive user is older than 24 hours replace user
 - Logs; New Logs on users recovering and resetting password

= Version 1.2 (March 03, 2012) =
 - Recover Password (With feature to force users to change password on next login)
 - Option to user "Remember Me?" feature
 - "Remember Me?" Feature with sha256 Encryption on cookies
 - "Remember Me?" Feature Changes cookie very time a user visits
 - "Remember Me?" Feature verifies with db for active logins
 - Option to send user a welcome e-mail on registration
 - Option to send user an activation link on registration

= Version 1.1 (March 03, 2012) =
 - Add Captcha Support

= Version 1.0 (February 25, 2012) =
 - Simple Login Script
 - Registration Form
 - Captcha Support on Registration
 - 128 Character Encrypt Password using PHP's sha256 Hash
 - Option to send user a welcome e-mail on registration
 - Option to send user an activation link on registration
 - Example usage in the included zip (Simple example of the script in action)
 - Comes with a simplistic css style (Just for fun)