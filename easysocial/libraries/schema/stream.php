<?php
/**
 * @package API plugins
 * @copyright Copyright (C) 2009 2014 Techjoomla, Tekdi Technologies Pvt. Ltd. All rights reserved.
 * @license GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 * @link http://www.techjoomla.com
*/

class streamSimpleSchema {

	public $id;
	public $title;
	public $preview;
	public $raw_content_url;
	public $raw_content;
	public $content;
	public $actor;
	public $published;
	public $last_replied;
	public $likes;
	public $comment_element;
	public $comments;
	
}

class likesSimpleSchema {

	public $uid;
	public $type;
	public $stream_id;
	public $verb;
	public $created_by;
	public $total;
	public $hasliked;

}

class commentsSimpleSchema {

	public $uid;
	public $element;
	public $comment;
	public $verb;
	public $group;
	public $stream_id;
	public $created_by;
	public $created;
	public $lapsed;
	public $params;

}