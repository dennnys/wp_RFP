<?php 

if (isset($_POST['submit_rfp'])) {

	$message_rfp = '';
	$to = get_option( 'admin_email' );
	$subject = 'RFP';

	$message_rfp .='<p><b>Information Personal </b></p>';
	if (isset($_POST['q71'])) {
		$message_rfp .='<p><b>First name: </b>'.$_POST['q71'].'</p>';
		//$subject .= $_POST['q71'];
	}
	if (isset($_POST['q72'])) {
		$message_rfp .='<p><b>Last name: </b>'.$_POST['q72'].'</p>';
		//$subject .= ' '.$_POST['q72'];
	}
	if (isset($_POST['q73'])) {
		$message_rfp .='<p><b>Email: </b>'.$_POST['q73'].'</p>';
	}
	if (isset($_POST['q74'])) {
		$message_rfp .='<p><b>Phone number: </b>'.$_POST['q74'].'</p>';
	}
/*	if (isset($_POST['q75'])) {
		$message_rfp .='<p><b>Where do you work? </b>'.$_POST['q75'].'</p>';
	} */
	if (isset($_POST['q76'])) {
		$message_rfp .='<p><b>Monthly marketing budget: </b>'.$_POST['q76'].'</p>';
	}
	if (isset($_POST['q77'])) {
		$message_rfp .='<p><b>How did you hear about us? </b>'.$_POST['q77'].'</p>';
	}
	$message_rfp .='</br>';
	if (isset($_POST['q01'])) {
		$message_rfp .='<p><b>What’s the goal?:</b> '.$_POST['q01'].'</p>';
	}
	if (isset($_POST['q02'])) {
		$message_rfp .='<p><b>Campaign Name: </b>'.$_POST['q02'].'</p>';
	}
	if (isset($_POST['q03'])) {
		$message_rfp .='<p><b>Proposal Deadline: </b>'.$_POST['q03'].'</p>';
	}
	if (isset($_POST['q11'])) {
		$message_rfp .='<p><b>Name of the brand: </b>'.$_POST['q11'].'</p>';
	}
	if (isset($_POST['q12'])) {
		$message_rfp .='<p><b>Details about your brands: </b>'.$_POST['q12'].'</p>';
	}
	if (isset($_POST['q13'])) {
		$message_rfp .='<p><b>The Brand\'s Marketing Challenge: </b>'.$_POST['q13'].'</p>';
	}
	if (isset($_POST['q14'])) {
		$message_rfp .='<p><b>Major competitors in market: </b>'.$_POST['q14'].'</p>';
	}
	if (isset($_POST['q15'])) {
		$message_rfp .='<p><b>Differentiates you from your competitors: </b>'.$_POST['q15'].'</p>';
	}
/*	if (isset($_POST['q16'])) {
		$message_rfp .='<p><b>Exclusivity: </b>'.$_POST['q16'].'</p>';
	} */
	if (isset($_POST['q21'])) {
		$message_rfp .='<p><b>Objectives: </b>'.$_POST['q21'].'</p>';
	}
	if (isset($_POST['q22'])) {
		$message_rfp .='<p><b>The Campaign - What message are you trying to get across? </b>'.$_POST['q22'].'</p>';
	}
	if (isset($_POST['q23'])) {
		$message_rfp .='<p><b>The Campaign - Would you like to include a clear Call to Action (CTA)? </b>'.$_POST['q23'].'</p>';
	}
	if (isset($_POST['q24'])) {
		$message_rfp .='<p><b>Content Deadline: </b>'.$_POST['q24'].'</p>';
	}
	if (isset($_POST['q25'])) {
		$message_rfp .='<p><b>Flight Dates - start: </b>'.$_POST['q25'].'</p>';
	}
	if (isset($_POST['q26'])) {
		$message_rfp .='<p><b>Flight Dates - end: </b>'.$_POST['q26'].'</p>';
	}
	if (isset($_POST['q41'])) {
		$message_rfp .='<p><b>Influencer DO’s: </b>'.$_POST['q41'].'</p>';
	}
	if (isset($_POST['q42'])) {
		$message_rfp .='<p><b>Influencer DON’Ts: </b>'.$_POST['q42'].'</p>';
	}
	if (isset($_POST['q43'])) {
		$message_rfp .='<p><b>Are there accounts influencers should tag? </b>'.$_POST['q43'].'</p>';
	}
	if (isset($_POST['q44'])) {
		$message_rfp .='<p><b>Are there hashtags influencers should use? </b>'.$_POST['q44'].'</p>';
	}
	if (isset($_POST['q45'])) {
		$message_rfp .='<p><b>Is there a link influencers should add to their profile bios? </b>'.$_POST['q45'].'</p>';
	}
	if (isset($_POST['q51'])) {
		$message_rfp .='<p><b>Demographics - gender: </b>'.$_POST['q51'].'</p>';
	}
	if (isset($_POST['q52'])) {
		$message_rfp .='<p><b>Demographics - age min: </b>'.$_POST['q52'].'</p>';
	}
	if (isset($_POST['q53'])) {
		$message_rfp .='<p><b>Demographics - age max: </b>'.$_POST['q53'].'</p>';
	}
	if (isset($_POST['q54'])) {
		$message_rfp .='<p><b>Demographics - location: </b>'.$_POST['q54'].'</p>';
	}
	if (isset($_POST['q61'])) {
		$message_rfp .='<p><b>Influencer Collaborations: </b>'.$_POST['q61'].'</p>';
	}
	if (isset($_POST['q62'])) {
		$message_rfp .='<p><b>Branded Content: </b>'.$_POST['q62'].'</p>';
	}
/*	if (isset($_POST['q63'])) {
		$message_rfp .='<p><b>Extended Content Rights: </b>'.$_POST['q63'].'</p>';
	} */
/*	if (isset($_POST['q64'])) {
		$message_rfp .='<p><b>Product Shipping: </b>'.$_POST['q64'].'</p>';
	} */

	if (isset($_POST['q3'])) {
		if (!empty($_POST['q3'])) {
			$message_rfp .= "<p><b>Which content inspires you?</b></p>";
			$message_rfp .= '<div>';
			foreach ($_POST['q3'] as $value) {
				$message_rfp .= "<div style='width: 200px; height: 200px; float: left; overflow: hidden;'>";
				$message_rfp .= '<img style="object-fit: cover; width: 100%; height: 100%;" src="http://imagemotion.com/wp-content/plugins/rfp/img/inspires/'.$value.'">';
				$message_rfp .= "</div>";
			}
			$message_rfp .= '</div>';
		}
	}

	$headers = array('Content-Type: text/html; charset=UTF-8');

	$reponse = wp_mail( $to, $subject, $message_rfp, $headers);

	if ($reponse) {$_SESSION['rfp_succes']= 'Succes '; }
		else { $_SESSION['rfp_error']= 'Error '; }

	//var_dump($reponse); die();

} //end if
