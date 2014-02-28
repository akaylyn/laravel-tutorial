<?php

class UserTest extends TestCase
{
	public function testGetFollowers()
	{
		$factory = Mockery::mock('FollowerFactory');
		$browser = Mockery::mock('\Buzz\Browser');
		$user = new User();

		$browser->shouldReceive('get');
		$factory->shouldReceive('create');
		$user->getFollowers();
	}
}

