<?php

namespace Tests\Feature;

use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testimonialsTest extends TestCase
{
    use RefreshDatabase;

    // private $tmony;
    // public function setup(): void
    // {
    //     parent::setup();
    //     $tmony = Testimonial::factory()->create();
    // }

    /**
     * returns List of testimonials
     * expected result: Ok && count >= 1
     */
    public function test_readall(): void
    {
        $count = 10;
        $items = Testimonial::factory()->count($count)->create();
        $response = $this->getJson('api/admin/testimonials');
        $response->assertStatus(200)->json();

        $response->assertJsonCount($count);
    }

    /**
     * fetch single testimonial by ID
     * expected result: Ok && count == 1
     */
    public function test_read(): void
    {
        $item = Testimonial::factory()->create();
        $response = $this->getJson('/api/admin/testimonials/'.$item->id)
        ->assertOk();
        $result = $response->json();

        $this->assertEquals($result['reviewer_name'],$item->reviewer_name);
    }

    // /**
    //  * Create new testimonial
    //  * expected result: Ok &&  existInDB
    //  */
    public function test_create():void
    {
        $item = Testimonial::factory()->make()->toArray();
        $response = $this->postJson('/api/admin/testimonials/',$item)
        ->assertCreated();

        $result = $response->json();

        $this->assertEquals($result['reviewer_name'],$item['reviewer_name']);
        $this->assertDatabaseHas('testimonials', ['reviewer_name' => $item['reviewer_name']]);
    }

    // /**
    //  * Update testimonial
    //  * expected result: Ok && existInDB && updated_at
    //  */
    public function test_update(): void
    {
        $oldItem = Testimonial::factory()->create();

        $item = Testimonial::factory()->make();

        $response = $this->patchJson('/api/admin/testimonials/'.$oldItem->id,$item->toArray())
        ->assertOk();
        $result = $response->json();

        $this->assertEquals($result['reviewer_name'],$item->reviewer_name);
        $this->assertNotEquals($result['reviewer_name'],$oldItem->reviewer_name);

        $this->assertDatabaseHas('testimonials', ['reviewer_name' => $item->reviewer_name]);
        $this->assertDatabaseMissing('testimonials', ['reviewer_name' => $oldItem->reviewer_name]);
    }

    // /**
    //  * Delete testimonial
    //  * expected result: Ok && missingInDB
    //  */
    public function test_delete(): void
    {
        $item = Testimonial::factory()->create();

        $this->deleteJson('/api/admin/testimonials/'.$item->id)
        ->assertNoContent();
        $this->assertDatabaseMissing('testimonials', ['reviewer_name' => $item->reviewer_name]);

    }

}
