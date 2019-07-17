<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ImageTest extends TestCase
{
	/**
     * HTTP test Index.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic unit test function to test invalid url in store().
     *
     * @return void
     */
    public function testInvalidstore()
    {
    	$img = 'invalid image url';
        $post = $this->post('/api/create/', [
        'filename' => $img,
	    ])->assertStatus(404);
        $this->assertEquals($post->getContent(), '{"code":404,"message":"Invalid URL"}');
    }

     /**
     * A basic unit test function to test invalid url in store().
     *
     * @return void
     */
    public function testvalidstore()
    {
    	$img = 'https://cdn.morphsuits.co.uk/media/catalog/product/m/l/mlsph-1.1500039259.jpg';
        $post = $this->post('/api/create/', [
        'filename' => $img,
	    ]);
	    $post->assertStatus(500);
    }


}
