<?php
namespace t;

use Mockery as m;

class PostControllerTest extends \TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->repo = m::mock('\Blog\PostRepository');

        // Tell the app to use the provided instance
        // I do not know why the namspace needs to be this way
        $this->app->instance('Blog\PostRepository', $this->repo);

        // Initialize test data
        // TODO: show what happens when this data is missing
        $this->post = new \stdClass();
        $this->post->id = 1;
        $this->post->author_name = "test";
        $this->post->author_id = 1;
        $this->post->created_at = 1;
        $this->post->title = 1;
    }

    // this is important
    public function tearDown()
    {
        m::close();
    }

    public function testGetPosts()
    {
        $this->repo->shouldReceive('getPosts')->once()->andReturn(array($this->post));

        //$c = $this->app->make('PostController');

        $this->action('GET', 'PostController@getPosts');
        $this->assertViewHas('posts');
    }
}

