<?php

class PostController extends BaseController
{
    public function __construct(\Blog\PostRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getPosts()
    {
        $posts = $this->repo->getPosts();
        return View::make('posts')->with('posts', $posts);
    }
}
