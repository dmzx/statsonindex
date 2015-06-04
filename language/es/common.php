<?php
/**
* @package Statistics on Index
* @copyright (c) 2015 dmzx - http://dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(

	'START_DATE'			=> 'We have been online since',
	'POSTS_PER_DAY_OTHER'	=> 'Mensajes por día <strong>%.2f</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Mensajes por día <strong>Ninguno</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Mensajes por tema <strong>%.2f</strong>',
	'POSTS_PER_YEAR_OTHER'	=> 'Mensajes por año <strong>%d</strong>',
	'POSTS_PER_YEAR_ZERO'	=> 'Mensajes por año <strong>Ninguno</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Mensajes por tema <strong>Ninguno</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Mensajes por usuario <strong>%.2f</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Mensajes por usuario <strong>Ninguno</strong>',
	'TOPICS_PER_DAY_OTHER'	=> 'Temas por día <strong>%.2f</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Temas por día <strong>Ninguno</strong>',
	'TOPICS_PER_YEAR_OTHER'	=> 'Temas por año <strong>%d</strong>',
	'TOPICS_PER_YEAR_ZERO'	=> 'Temas por año <strong>Ninguno</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Temas por usuario <strong>%.2f</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Temas por usuario <strong>Ninguno</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Usuarios por día <strong>%.2f</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Usuarios por día <strong>Ninguno</strong>',
	'USERS_PER_YEAR_OTHER'	=> 'Usuarios por año <strong>%d</strong>',
	'USERS_PER_YEAR_ZERO'	=> 'Usuarios por año <strong>Ninguno</strong>',
	'TOTAL_FILES_OTHER'		=> 'Adjuntos totales <strong>%d</strong>',
	'TOTAL_FILES_ZERO'		=> 'Adjuntos totales <strong>0</strong>',
	'FILES_PER_DAY_OTHER'	=> 'Adjuntos por día <strong>%.2f</strong>',
	'FILES_PER_DAY_ZERO'	=> 'Adjuntos por día <strong>Ninguno</strong>',
	'FILES_PER_YEAR_OTHER'	=> 'Adjuntos por año <strong>%d</strong>',
	'FILES_PER_YEAR_ZERO'	=> 'Adjuntos por año <strong>Ninguno</strong>',
	'FILES_PER_USER_OTHER'	=> 'Adjuntos por usuario <strong>%.2f</strong>',
	'FILES_PER_USER_ZERO'	=> 'Adjuntos por usuario <strong>Ninguno</strong>',
));
