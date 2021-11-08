<?php

namespace Website\Controllers;

/**
 * Class AdminController
 *
 *
 */
class TopicController {

	public function index() {

		$topics = getAllTopics();

		$template_engine = get_template_engine();
		echo $template_engine->render('admin/topics/index', ['topics'  => $topics] );
	}

	public function new() {

		$template_engine = get_template_engine();
		echo $template_engine->render('admin/topics/new');
	}
	
	public function save() {
		
		$result = validateTopicData($_POST);
		if ( count($result['errors']) === 0){
			createTopic($result['data']['titel'], $result['data']['desc']);
			redirect(url('Topics.index'));
		}

		$template_engine = get_template_engine();
		echo $template_engine->render('admin/topics/new', ['error' => $result['error']]);

	}

	public function page() {

		$topics = getAllTopicsDescription();
		$template_engine = get_template_engine();
		echo $template_engine->render('admin/topics/topic-page', ['topics'  => $topics] );

	}

}