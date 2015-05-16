<?php
/**
* @package Statistics on Index
* @copyright (c) 2015 dmzx - http://dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace dmzx\statsonindex\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{

		return array(
			'core.user_setup' => 'load_language_on_setup',
			'core.index_modify_page_title'	=> 'main',
		);
	}

	public function main($event)
	{

		$total_posts = $this->config['num_posts'];
		$total_topics = $this->config['num_topics'];
		$total_users = $this->config['num_users'];
		$total_files = $this->config['num_files'];
		$start_date		= date("d M Y, H:i:s", $this->config['board_startdate'] );
		$boarddays 		= ceil((time() - $this->config['board_startdate']) / 86400);

		$l_total_file_s = ($total_files == 0) ? 'TOTAL_FILES_ZERO' : 'TOTAL_FILES_OTHER';
		$posts_per_day = $total_posts / $boarddays;
		$l_posts_per_day_s = ($posts_per_day == 0) ? 'POSTS_PER_DAY_ZERO' : 'POSTS_PER_DAY_OTHER';
		$posts_per_year = $posts_per_day * 364.25;
		$l_posts_per_year_s = ($posts_per_year == 0) ? 'POSTS_PER_YEAR_ZERO' : 'POSTS_PER_YEAR_OTHER';
		$posts_per_user = $total_posts / $total_users;
		$l_posts_per_user_s = ($posts_per_user == 0) ? 'POSTS_PER_USER_ZERO' : 'POSTS_PER_USER_OTHER';
		$posts_per_topic = $total_posts / $total_topics;
		$l_posts_per_topic_s = ($posts_per_topic == 0) ? 'POSTS_PER_TOPIC_ZERO' : 'POSTS_PER_TOPIC_OTHER';
		$topics_per_day = $total_topics / $boarddays;
		$l_topics_per_day_s = ($topics_per_day == 0) ? 'TOPICS_PER_DAY_ZERO' : 'TOPICS_PER_DAY_OTHER';
		$topics_per_year = $topics_per_day * 364.25;
		$l_topics_per_year_s = ($topics_per_year == 0) ? 'TOPICS_PER_YEAR_ZERO' : 'TOPICS_PER_YEAR_OTHER';
		$topics_per_user = $total_topics / $total_users;
		$l_topics_per_user_s = ($topics_per_user == 0) ? 'TOPICS_PER_USER_ZERO' : 'TOPICS_PER_USER_OTHER';
		$files_per_day = $total_files / $boarddays;
		$l_files_per_day_s = ($files_per_day == 0) ? 'FILES_PER_DAY_ZERO' : 'FILES_PER_DAY_OTHER';
		$files_per_year = $files_per_day * 364.25;
		$l_files_per_year_s = ($files_per_year == 0) ? 'FILES_PER_YEAR_ZERO' : 'FILES_PER_YEAR_OTHER';
		$files_per_user = $total_files / $total_users;
		$l_files_per_user_s = ($files_per_day == 0) ? 'FILES_PER_USER_ZERO' : 'FILES_PER_USER_OTHER';
		$users_per_day = $total_users / $boarddays;
		$l_users_per_day_s = ($users_per_day == 0) ? 'USERS_PER_DAY_ZERO' : 'USERS_PER_DAY_OTHER';
		$users_per_year = $users_per_day * 364.25;
		$l_users_per_year_s = ($users_per_year == 0) ? 'USERS_PER_YEAR_ZERO' : 'USERS_PER_YEAR_OTHER';

	$this->template->assign_vars(array(
	'POSTS_PER_DAY'		=> sprintf($this->user->lang[$l_posts_per_day_s], $posts_per_day),
	'POSTS_PER_YEAR'	=> sprintf($this->user->lang[$l_posts_per_year_s], $posts_per_year),
	'POSTS_PER_TOPIC'	=> sprintf($this->user->lang[$l_posts_per_topic_s], $posts_per_topic),
	'POSTS_PER_USER'		=> sprintf($this->user->lang[$l_posts_per_user_s], $posts_per_user),
	'TOPICS_PER_DAY'		=> sprintf($this->user->lang[$l_topics_per_day_s], $topics_per_day),
	'TOPICS_PER_YEAR'	=> sprintf($this->user->lang[$l_topics_per_year_s], $topics_per_year),
	'TOPICS_PER_USER'	=> sprintf($this->user->lang[$l_topics_per_user_s], $topics_per_user),
	'TOTAL_FILES'		=> sprintf($this->user->lang[$l_total_file_s], $total_files),
	'FILES_PER_DAY'		=> sprintf($this->user->lang[$l_files_per_day_s], $files_per_day),
	'FILES_PER_YEAR'	=> sprintf($this->user->lang[$l_files_per_year_s], $files_per_year),
	'FILES_PER_USER'		=> sprintf($this->user->lang[$l_files_per_user_s], $files_per_user),
	'USERS_PER_DAY'		=> sprintf($this->user->lang[$l_users_per_day_s], $users_per_day),
	'USERS_PER_YEAR'	=> sprintf($this->user->lang[$l_users_per_year_s], $users_per_year),
	'START_DATE'		=> $start_date,
		));
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/statsonindex',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
