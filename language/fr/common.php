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

	'START_DATE'			=> 'Nous sommes en ligne depuis le',
	'POSTS_PER_DAY_OTHER'	=> 'Messages par jour <strong>%.2f</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Messages par jour <strong>None</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Messages par sujet <strong>%.2f</strong>',
	'POSTS_PER_YEAR_OTHER'	=> 'Messages par année <strong>%d</strong>',
	'POSTS_PER_YEAR_ZERO'	=> 'Messages par année <strong>None</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Messages par sujet <strong>None</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Messages par membre <strong>%.2f</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Messages par membre <strong>None</strong>',
	'TOPICS_PER_DAY_OTHER'	=> 'Sujets par jour <strong>%.2f</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Sujets par jour <strong>None</strong>',
	'TOPICS_PER_YEAR_OTHER'	=> 'Sujets par année <strong>%d</strong>',
	'TOPICS_PER_YEAR_ZERO'	=> 'Sujets par année <strong>None</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Sujets par membre <strong>%.2f</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Sujets par membre <strong>None</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Membres par jour <strong>%.2f</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Membres par jour <strong>None</strong>',
	'USERS_PER_YEAR_OTHER'	=> 'Membres par année <strong>%d</strong>',
	'USERS_PER_YEAR_ZERO'	=> 'Membres par année <strong>None</strong>',
	'TOTAL_FILES_OTHER'		=> 'Total de fichiers joints <strong>%d</strong>',
	'TOTAL_FILES_ZERO'		=> 'Total de fichiers joints <strong>0</strong>',
	'FILES_PER_DAY_OTHER'	=> 'Fichiers joints par jour <strong>%.2f</strong>',
	'FILES_PER_DAY_ZERO'	=> 'Fichiers joints par jour <strong>None</strong>',
	'FILES_PER_YEAR_OTHER'	=> 'Fichiers joints par année <strong>%d</strong>',
	'FILES_PER_YEAR_ZERO'	=> 'Fichiers joints par année <strong>None</strong>',
	'FILES_PER_USER_OTHER'	=> 'Fichiers joints par membre <strong>%.2f</strong>',
	'FILES_PER_USER_ZERO'	=> 'Fichiers joints par membre <strong>None</strong>',

));