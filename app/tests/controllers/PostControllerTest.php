<?php

class PostControllerTest extends TestCase
{
    public function testGetPosts()
    {
        $this->call('GET', 'posts');
        echo 'test';
    }
}
