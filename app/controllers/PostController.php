<?php

class PostController extends BaseController
{
    public function __construct(\Blog\Post $post)
    {
        $this->post = $post;
    }

    public function updatePost()
    {
        $input = Input::get("post_content");
        $this->post->update(Input::get('id'), $input);
    }

    public function getPosts()
    {

        $posts = $this->post->getPosts();
        //$posts = $this->repo->getPosts();
        return View::make('posts')->with('posts', $posts);
    }
}
