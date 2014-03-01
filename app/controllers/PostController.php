<?php

class PostController extends BaseController
{
    public function __construct(\Blog\PostRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getPosts()
    {
        // TODO:
        // you can't test this, how do you get around that?
        $posts = $this->repo->getPosts();
        return View::make('posts')->with('posts', $posts);
    }
}
