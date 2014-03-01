<?php
namespace Blog;

class Post
{
    public function __construct(
        \Blog\PostValidator $validator,
        \Blog\PostRepository $repo,
        \Blog\GithubIntegrator $integrator
    )
    {
        $this->validator = $validator;
        $this->repo = $repo;
    }

    public function get($id)
    {
        $this->repo->getPostById($id);

    }

    public function update($id, $properties)
    {
        if (!$this->validator->isValid($properties))
            throw new Exception("Invalid Input");
    }
}
