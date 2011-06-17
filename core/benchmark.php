<?php
/**
 * PHP Classe for SpaghettiPHP Framework
 * Created to resume some useful informations
 * and to compelte some default patterns on
 * pianolab base
 * 
 * Available alerts:
 * 
 * - Google Analytics OK
 * - Debug status OK
 * - 404 Layout error OK
 * - Pianolab Signature OK
 * - CNPJ from client OK
 * - Security Salt change OK
 * - Mail settings
 * - App default settings
 * - Production database
 * - 
 * 
 */ 
class Benchmark extends View {
	public static function resume() {
		$return['DEBUG'] = (Config::read('debug')) ? 'OK' : 'Disabled';
		$return['SECURITY_SALT'] = (Config::read('securitySalt') == '5a65as56d4a65s4d6a5a654892') ? '[WARNING] You need to change the security salt KEY to prevent security' : 'OK';
		$return['ANALYTICS'] = (Config::read('analytics')) ? 'OK' : '[WARNING] Your need to put the analytics client CODE.';
		$return['404_page'] = (Config::read('404_page')) ? 'OK' : '[WARNING] Your need to CREATE a 404 PAGE personalized. Request to DESIGNER and then put 404_page as TRUE on app/config/settings.php';
		
		# Signature
		$file = trim(file_get_contents(APP . '/views/shared/_signature.htm.php'));
		$return['DEVELOPER_SIGNATURE'] = (!empty($file)) ? 'OK' : '[WARNING] Put a COMPANY signature on app/views/shared/_signature.htm.php FILE. Confirm with your DESIGN with LOGO you should use.';
		# END signature
		
		$return['CNPJ_CLIENT'] = (Config::read('cnpj_client')) ? 'OK' : '[WARNING] All websites needs a CNPJ by the LAW. Check in your JOB for this information or contact your superior';
		
		$return['MAIL_SETTINGS'] = (Config::read('Mailer.smtp.username') || Config::read('Mailer.smtp.password') || Config::read('Mailer.smtp.port') || Config::read('Mailer.smtp.host') || Config::read('Mailer.smtp.transport')) ? '[ERROR] You need to SET UP mail settings to your application' : 'OK';
		
		# Output
		echo '<table>';
		echo '	<tr>';
		echo '	<th>AREA</th>';
		echo '	<th>RESPONSE</th>';
		echo '	</tr>';
		foreach ($return as $index => $content):
			echo '<tr>';
			echo '	<td>' . $index . '</td>';
			echo '	<td>' . $content . '</td>';
			echo '</tr>';
		endforeach;
		echo '</table>';
	}
}