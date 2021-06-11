<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryApiControllerTest extends TestCase
{
    use DatabaseMigrations, WithFaker;

    public function setUp():void{
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    public function test_categories_can_be_retrieved(){
        Category::factory(10)->create();
        $response = $this->json('get', 'api/categories');
        $response->assertOk();
    }

    public function test_category_can_be_created(){
        $user = User::factory()->create();
        $this->actingAs($user)->json('post', 'api/category/store', [
            'category_title'=> $this->faker->sentence,
            'category_color'=> $this->faker->hexColor,
        ])->assertOk();
    }
}
