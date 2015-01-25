<?php
/*
Template Name: Contact
*/
?>
<?php
    $name = trim($_POST['clientname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $organization = trim($_POST['organization']);
    $message = trim($_POST['message']);

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

?>
<?php get_header() ?>

			<?php the_post() ?>
			<div id="post-<?php the_ID() ?>" class="post">
				<div class="entry-content">
                <div class="wrapper">
                    <div id="latest">
                        <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                        <p>We Would Love to Hear From You.</p>
                            <div class="formLayout">
                            <div class="formWrapper">
                            <div class="formRow"><input id="clientname" type="text" name="clientname" value="Name" /></div>
                            <input id="email" type="text" name="email" value="E-Mail" />
                            </div>
                            <div class="formWrapper">
                            <div class="formRow"><input id="phone" type="text" name="phone" value="Phone Number" /></div>
                            <input id="organization" type="text" name="organization" value="Organization" />
                            </div>
                            <textarea id="message" name="message">Write Your Message Here!</textarea>
                            <div class="submitButton"><input type="submit" class=submit value="Send" /></div>
                            </div>
                    </form>
                    <img src="http://appek.azurewebsites.net/wp-content/uploads/2015/01/scranton.png"/>
                    <h3 id="scrantonText">Made with pride in Scranton, PA</h3>
                    <img src="http://appek.azurewebsites.net/wp-content/uploads/2015/01/address.png"/>
                    
                    </div>
                    </div>
                    </div>
                  
		</div><!-- #content -->

<?php get_footer() ?>