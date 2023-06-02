<?php

// Collect form data
$attendee_name = $_POST['attendee_name'];
$attendee_type = $_POST['attendee_type'];
$attendee_affil = $_POST['attendee_affil'];
$attendee_email = $_POST['attendee_email'];
$attendee_diet = $_POST['attendee_diet'];
$satellite_choice = $_POST['satellite_choice'];
$reg_type = $_POST['reg_type'];
$iscb_type = $_POST['iscb_type'];
$iscb_id = $_POST['iscb_id'];
$passport_tckn = $_POST['passport_tckn'];
$address = $_POST['address'];
$city = $_POST['city'];
$zipCode = $_POST['zipCode'];
$country = $_POST['country'];

// Create JSON object
/*
$data = array('attendee_name' => $attendee_name, 'price' => $price, 'conference_track' => $conference_track);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
*/

echo "Name: ", $attendee_name, "<br>";
echo "Affiliation: ", $attendee_affil, "<br>";
echo "Email: ", $attendee_email, "<br>";
echo "Passport/TCKN: ", $passport_tckn, "<br>";
echo "Address: ", $address, "<br>";
echo "City: ", $city, "<br>";
echo "Zip: ", $zipCode, "<br>";
echo "Country: ", $country, "<br>";
echo "Registering to: ", $reg_type, "<br>";
echo "Satellite: ", $satellite_choice, "<br>";
echo "Type: ", $attendee_type, "<br>";
echo "ISCB Type: ", $iscb_type, "<br>";
echo "ISCB ID: ", $iscb_id, "<br>";
echo "Dietary: ", $attendee_diet, "<br>";


//echo "Context: ", $context;



// $result = file_get_contents('https://ppgpayment-test.birlesikodeme.com:20000/api/ppg/Payment/Payment', false, $context);

// Check for errors
if ($result === FALSE) {
    // An error occurred, handle it here
}

?>
