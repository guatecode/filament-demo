<?php

namespace Tests\Feature;

use App\Filament\Resources\Blog\PostResource\Pages\ListPosts;
use App\Models\Blog\Post;
use App\Models\Shop\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PostResourceTest extends TestCase
{
    /** @test */
    public function can_list_posts()
    {
        $this->actingAs(User::first());

        $posts = Post::limit(10)->get();

        Livewire::test(ListPosts::class)
            ->assertCanSeeTableRecords($posts);
    }
}
