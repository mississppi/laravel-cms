<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class MakeCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create category';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $title = $this->ask('Enter the category title');
        
        Category::create([
            'title' => $title,
        ]);

        $this->info('Category created!');
        // return Command::SUCCESS;
    }
}
