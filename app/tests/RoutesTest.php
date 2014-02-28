<?php

class RoutesTest extends TestCase
{
	public function testGetRoot()
	{
		View::shouldReceive('make');
		$this->call('GET', '/');
	}

	public function testGetUsers()
	{
		// Mock the database
		$user = Mockery::mock('Eloquent', 'User');
		$user->shouldReceive('all')->andReturn(array(1));
		$this->call('GET', 'users');
		$this->assertViewHas('users');
	}

	public function testGetProfile()
	{
		// this tests the controller, not the route
		//$this->call('GET', 'profile/1');
	}
}
