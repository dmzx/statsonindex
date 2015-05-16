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
	'POSTS_PER_DAY_OTHER'	=> 'Posts per day <strong>%.2f</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Posts per day <strong>None</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Posts per topic <strong>%.2f</strong>',
	'POSTS_PER_YEAR_OTHER'	=> 'Posts per year <strong>%d</strong>',
	'POSTS_PER_YEAR_ZERO'	=> 'Posts per year <strong>None</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Posts per topic <strong>None</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Posts per member <strong>%.2f</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Posts per member <strong>None</strong>',
	'TOPICS_PER_DAY_OTHER'	=> 'Topics per day <strong>%.2f</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Topics per day <strong>None</strong>',
	'TOPICS_PER_YEAR_OTHER'	=> 'Topics per year <strong>%d</strong>',
	'TOPICS_PER_YEAR_ZERO'	=> 'Topics per year <strong>None</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Topics per member <strong>%.2f</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Topics per member <strong>None</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Members per day <strong>%.2f</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Members per day <strong>None</strong>',
	'USERS_PER_YEAR_OTHER'	=> 'Members per year <strong>%d</strong>',
	'USERS_PER_YEAR_ZERO'	=> 'Members per year <strong>None</strong>',
	'TOTAL_FILES_OTHER'		=> 'Total attachments <strong>%d</strong>',
	'TOTAL_FILES_ZERO'		=> 'Total attachments <strong>0</strong>',
	'FILES_PER_DAY_OTHER'	=> 'Attachments per day <strong>%.2f</strong>',
	'FILES_PER_DAY_ZERO'	=> 'Attachments per day <strong>None</strong>',
	'FILES_PER_YEAR_OTHER'	=> 'Attachments per year <strong>%d</strong>',
	'FILES_PER_YEAR_ZERO'	=> 'Attachments per year <strong>None</strong>',
	'FILES_PER_USER_OTHER'	=> 'Attachments per member <strong>%.2f</strong>',
	'FILES_PER_USER_ZERO'	=> 'Attachments per member <strong>None</strong>',

));