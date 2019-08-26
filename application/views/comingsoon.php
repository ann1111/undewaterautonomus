<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="masaaki-komori-lu-9-z-9-q-s-8-">
					<div class="group-40-copy">
						<img src="uploads/comingsoonpageimages/UAMLogoWhite.png" style="height:285px;width:700px">
					</div>
					<div class="line-3-copy-mob">
					</div>
					<div class="underwater-mapping-i">
						<span style="font-weight: 900;">Underwater </span><span style="font-weight:150;">mapping is about to</span><span style="font-weight: 900;"> change.</span>
					</div>

					<div class="line-3-copy-2">
					</div>
					<div class="">
							<div class="imagine-if-we-really">		
								<span><strong>Imagine</strong> If we really knew what our planet looked like below the water as well as we do above it.<br/>If we had the ability to easily search in, navigate and learn about our oceans, lakes and waterways as never before.</br>If this could be done when required, as often as required, much less expensively than today.</br></br>That’s the promise of Underwater Autonomous Mapping, from UAM Tec Pty Ltd of Australia.</br></br>Get in touch at <a href="mailto:info@uamtec.com" style="text-decoration:underline;color:#fff;font-weight: 600;">info@uamtec.com</a></br></br>See us at <a href="#" style="text-decoration:underline;color:#fff;font-weight: 600;">CEBIT Australia 2019</a></span>
							</div>
							<div class="line-3-copy">
							</div>
						<div style="margin-top:5px" class="signUpForm">
							<div class="sign-up-to-recieve">Sign up, to recieve updates.
							</div>
							<div class="sign-up-to-recieve-mob">Sign up, to recieve regular updates about UAM.
							</div>
							<div class="">
							<?php print_r($_POST); ?>
								<form method="post">
									<div class="col-md-8 row" style="margin-right:0px;margin-left:0px">
										<label class="full-name">Full Name </label><span>*</span>
										<input type="text" class="form-control" name="fullname" placeholder="Full Name" style="height: 45px;width:703px;border-radius:2px;	background-color:#FFFFFF;" required />
									</div>
									<div class="col-md-8 row" style="padding-top:30px;margin-right:0px;margin-left:0px">
										<label class="email-address-copy">Email Address </label><span>*</span>
										<input type="email" class="form-control" name="emailaddress" placeholder="Email" style="height: 45px;width:703px;border-radius:2px;	background-color:#FFFFFF;" required />
									</div>
									<div class="col-md-8 row" style="padding-top:30px;margin-right:0px;margin-left:0px">
										<div class="col-md-6" style="padding: 0;max-width: 46%;">
											<label class="company-name-optio-copy">Company Name</label>
											<input type="text" name="companyname" class="form-control company-field" placeholder="Company Name" required />
										</div>
										<div class="col-md-6" style="padding: 0;margin-right:0px;margin-left:0px">
											<label class="phone-number-optio-copy">Phone Number</label>
											<input type="text" name="phone" class="form-control phone-field" placeholder="Phone Number" required />
										</div>
									</div>
									<div class="col-md-8 row" style="padding-top:35px;margin-right:0px;margin-left:0px">
										<div class="col-md-6" style="padding: 0;max-width: 44%;">
										</div>
										<div class="col-md-6">
											<input type="submit" class=" rectangle-copy-14" value="Submit" >
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>


	<!-- Modal -->
<div class="modal fade modal-display" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="">
          <button type="button" class="close modal-close" data-dismiss="modal" onclick="window.location='<?php echo base_url(); ?>'">&times;</button>
		  
        </div>
        <div class="modal-body">
          <div class="thank-you-for-submi">Thank you, for submitting your information.</br>We will be in contact shortly.
          </div>
        </div>
      </div>
      
    </div>
</div>

<?php if($_POST ==  true){ 

$data = array(
    "email_address" => $_POST['emailaddress'],
    "status" => "subscribed",
    "tags" => ["a tag"],
    "merge_fields" => array(
        "FNAME"=> $_POST['fullname'],
        "LNAME"=> '',
        "ADDRESS"=> [
            "addr1" => $_POST['companyname'],
            "city" => "--",
            "state" => "--",
            "zip" => "000000",
            "country" => "aus"
        ],
        "PHONE"=> $_POST['phone'],
        // "BIRTHDAY"=> "05-07-1984",
        ),
    );

$data_string = json_encode($data);
$ch = curl_init('https://us3.api.mailchimp.com/3.0/lists/d53acac14e/members');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: apikey d8725cd0d8238818b873203b2e5801c4-us3'
));
 $result = curl_exec($ch);
 //print_r($result);// exit;

if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
    // pr(json_decode($error_msg));
}

?>
<script>
/*
$("form").on('submit', function(){
   $('.modal').show();
})*/
  	$(document).ready(function () {
	
	$('.close').click(function() {
    $('.modal').modal('hide');
	});
    	//$("form").on('submit', function(){
   $('.modal').show();
//})
/*$("#myBtn").click(function(){

        	$('#myModal').modal('show');
    	});*/
	});
</script>

<?php } ?>