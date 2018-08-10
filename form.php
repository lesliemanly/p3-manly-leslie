<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'lesmanlythanyou.com' // Put you mail domain here
	,
	'Mrs. Manly's Kindergarten Class' // Put your site name / form name here
	,
	'lmanly@onalaskaisd.net' // Where will the form notification be sent?
	,
	'lmanly@onalaskaisd.net' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
