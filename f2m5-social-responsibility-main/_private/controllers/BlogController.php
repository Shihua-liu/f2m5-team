<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class BlogController {

	

    public function index() {

		$blogs = getAllBlogs();

		$template_engine = get_template_engine();
		echo $template_engine->render('blog/blog-index-temp', ['blogs' => $blogs]);
	}

	public function blog() {

		$template_engine = get_template_engine();
		echo $template_engine->render('blog/blog-temp');
	}

    public function save() {

		$result = validateBlogData($_POST);
		if (count ($result['error']) === 0 ){
			
			createBlog($result['data']['id'], $result['data']['Titel'], $result['data']['Subtitel'], $result['data']['Tekst']);

			redirect(url('blog-index'));
		}
		$template_engine = get_template_engine();
		echo $template_engine->render('blog/blog-temp', ['error' => $result['error']]);
	}

	public function view($id) {

		$blogPost = getBlogPost($id);

		$template_engine = get_template_engine();
		return $template_engine->render('blog/blog-view', ['blog_post' => $blogPost]);

	}

	
}

