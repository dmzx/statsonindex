<?php
/**
* @package Statistics on Index
* @copyright (c) 2015 dmzx - http://dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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

	'START_DATE'			=> 'تم إنشاء هذا المنتدى بتاريخ ',
	'POSTS_PER_DAY_OTHER'	=> 'عدد المشاركات يومياً <strong>%.2f</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'عدد المشاركات يومياً <strong>لا شئ</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'عدد المشاركات لكل موضوع <strong>%.2f</strong>',
	'POSTS_PER_YEAR_OTHER'	=> 'عدد المشاركات سنوياً <strong>%d</strong>',
	'POSTS_PER_YEAR_ZERO'	=> 'عدد المشاركات سنوياً <strong>لا شئ</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'عدد المشاركات لكل موضوع Posts per topic <strong>لا شئ</strong>',
	'POSTS_PER_USER_OTHER'	=> 'عدد المشاركات لكل عضو <strong>%.2f</strong>',
	'POSTS_PER_USER_ZERO'	=> 'عدد المشاركات لكل عضو <strong>لا شئ</strong>',
	'TOPICS_PER_DAY_OTHER'	=> 'عدد المواضيع يومياً <strong>%.2f</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'عدد المواضيع يومياً <strong>لا شئ</strong>',
	'TOPICS_PER_YEAR_OTHER'	=> 'عدد المواضيع سنوياً <strong>%d</strong>',
	'TOPICS_PER_YEAR_ZERO'	=> 'عدد المواضيع سنوياً <strong>لا شئ</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'عدد المواضيع لكل عضو <strong>%.2f</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'عدد المواضيع لكل عضو <strong>لا شئ</strong>',
	'USERS_PER_DAY_OTHER'	=> 'الأعضاء يومياً <strong>%.2f</strong>',
	'USERS_PER_DAY_ZERO'	=> 'الأعضاء يومياً <strong>لا شئ</strong>',
	'USERS_PER_YEAR_OTHER'	=> 'الأعضاء سنوياً <strong>%d</strong>',
	'USERS_PER_YEAR_ZERO'	=> 'الأعضاء سنوياً <strong>لا شئ</strong>',
	'TOTAL_FILES_OTHER'		=> 'إجمالي المرفقات <strong>%d</strong>',
	'TOTAL_FILES_ZERO'		=> 'إجمالي المرفقات <strong>0</strong>',
	'FILES_PER_DAY_OTHER'	=> 'عدد المرفقات يومياً <strong>%.2f</strong>',
	'FILES_PER_DAY_ZERO'	=> 'عدد المرفقات يومياً <strong>لا شئ</strong>',
	'FILES_PER_YEAR_OTHER'	=> 'عدد المرفقات سنوياً <strong>%d</strong>',
	'FILES_PER_YEAR_ZERO'	=> 'عدد المرفقات سنوياً <strong>لا شئ</strong>',
	'FILES_PER_USER_OTHER'	=> 'عدد المرفقات لكل عضو <strong>%.2f</strong>',
	'FILES_PER_USER_ZERO'	=> 'عدد المرفقات لكل عضو <strong>لا شئ</strong>',

));
