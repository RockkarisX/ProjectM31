<?php
    // Put your MailChimp API and List ID hehe
    $api_key = '77be833a6a680b3b176bbd86944fa397-us16';
    $list_id = 'af58f0d112';
 
    // Let's start by including the MailChimp API wrapper
    include('./inc/MailChimp.php');
    // Then call/use the class
    use \DrewM\MailChimp\MailChimp;
    $MailChimp = new MailChimp($api_key);
 
    // Submit subscriber data to MailChimp
    // For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
    // For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
    $result = $MailChimp->post("lists/$list_id/members", [
                            'email_address' => $_POST["emailn"],
                            'status'        => 'subscribed',
                        ]);
 
    if ($MailChimp->success())
		{
			$output = json_encode(array('type'=>'message', 'text' => '<h2>THANK YOU!</h2><p>Thank you, you have been added to our mailing list.</p>'));
			die($output);        

		}else{
			$output = json_encode(array('type'=>'error', 'text' => '<h2>Please try again.</h2>'));
			die($output);
		}        

?>