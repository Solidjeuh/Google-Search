<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/


/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(

	'GOOGLE'							=> 'Google',
	'GOOGLE_SEARCH'						=> 'Google Zoeken ...',
	'SEARCH_GOOGLE'						=> 'Google Zoeken',

	'GOOGLESEARCH_NAVBAR'				=> 'Navbar',
	'GOOGLESEARCH_HEADER'				=> 'Header',
	'GOOGLESEARCH_INDEX'				=> 'Index',

	'ACP_GOOGLESEARCH_CONFIG'			=> 'Google Zoeken',
	'ACP_GOOGLESEARCH_CONFIG_EXPLAIN'	=> 'Dit is de configuratie pagina voor de Google Zoeken extensie.',

	'ACP_GOOGLESEARCH_CONFIG_SET'		=> 'Configuratie',
	'GOOGLESEARCH_CONFIG_SAVED'			=> 'Google Zoeken instellingen opgeslagen',

	'GOOGLESEARCH_CUSTOM'				=> 'Aangepast Google Zoeken',

	'GOOGLESEARCH_NOSCRIPT'				=> 'JavaScript moet zijn ingeschakeld en Google op de witte lijst worden gezet om de aangepaste Google zoekresultaten te bekijken',

	'GOOGLESEARCH_POSITION'				=> 'Google Zoeken Positie',
	'GOOGLESEARCH_POSITION_EXPLAIN'		=> 'Wilt u de zoekopdracht in de NavBar of Header weergeven??',


	'GOOGLESEARCH_CUSTOM_CODE'						=> 'Aangepaste Code',
	'GOOGLESEARCH_CUSTOM_CODE_EXPLAIN'				=> 'U kunt deze standaard code indien gewenst vervangen door uw eigen zoekmachine id',
	'GOOGLESEARCH_CUSTOM_CODE_PLACEHOLDER'			=> 'Zoekmachine ID',

	'GOOGLESEARCH_VERIFICATION_CODE'				=> 'Verificatie van Google Webmaster hulpprogramma’s',
	'GOOGLESEARCH_VERIFICATION_CODE_EXPLAIN'		=> 'U kunt hier uw Google verificatie code invoeren als u dat wilt',
	'GOOGLESEARCH_VERIFICATION_CODE_PLACEHOLDER'	=> 'Google Verificatie Code',

	'GOOGLESEARCH_REQUIRE_3.1.4'					=> 'Deze extensie vereist phpBB 3.1.4 of hoger en werkt niet met 3.2.0 of nieuwer. Werk je forum bij of download de Google Zoeken Extensie voor phpBB 3.2.x',
	'GOOGLESEARCH_REQUIRE_3.2.0'					=> 'Deze extensie vereist ten minste phpBB versie 3.2.0. Update uw forum om deze extensie te kunnen gebruiken',
));

