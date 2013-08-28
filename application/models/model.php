<?php
class Model extends CI_Model{
	function get_ars(){
		$this->load->library('rssparser');                          // load library
		//$this->rssparser->set_feed_url('http://education.kapook.com/admission/feed');  // get feed
		$this->rssparser->set_feed_url('http://feeds.arstechnica.com/arstechnica/index/');
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(1);                        // Get six items from the feed
		foreach ($rss as $item)
		{
			echo (string)$item['title'];
			echo (string)$item['description'];
		}	
	}
}
?>