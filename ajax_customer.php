<?php
/**
 * ajax_customer.php
 *
 * @package default
 */


require_once 'includes/load.php';
if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>

<?php
// Auto suggestion
$html = '';
if (isset($_POST['customer_name']) && strlen($_POST['customer_name'])) {
	$customers = find_by_name('customers', $_POST['customer_name']);
	if ($customers) {
		foreach ($customers as $customer):
			$html .= "<li class=\"list-group-item\">";
		$html .= $customer['name'];
		$html .= "</li>";
		endforeach;
	} else {

		$html .= '<li onClick=\"fill(\''.addslashes().'\')\" class=\"list-group-item\">';
		$html .= 'Not found';
		$html .= "</li>";

	}

	echo json_encode($html);
}
?>

