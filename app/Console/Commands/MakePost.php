<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class MakePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create Post';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $title = $this->ask('Enter the post title');
        $content = $this->ask('Enter the post title');
        $category_id = 1;
        $status = "draft";
        
        Post::create([
            'title' => $title,
            'content' => $content,
            'category_id' => $category_id,
            'status' => $status,
        ]);

        $this->info('Post created!');
    }
}
