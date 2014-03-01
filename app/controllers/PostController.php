<?php

class PostController extends BaseController
{
    public function __construct()
    {
    }

    public function getPosts()
    {
        // TODO:
        // you can't test this, how do you get around that?
        $posts = Post::join('users', 'posts.author_id', '=', 'users.id')
            ->select('title', 'users.name as author_name', 'users.email as author_email', 'posts.id', 'posts.created_at')
            ->get();
        return View::make('posts')->with('posts', $posts);
    }
}
