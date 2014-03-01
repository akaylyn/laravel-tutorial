<?php
namespace Blog;

// TODO: interface
class PostRepository
{
    public function getPosts()
    {
        $posts = \Post::join('users', 'posts.author_id', '=', 'users.id')
            ->select('title', 'users.name as author_name', 'users.id as author_id',
                'posts.id', 'posts.created_at')
            ->get();
        return $posts;
    }
}

