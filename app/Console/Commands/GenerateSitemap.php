<?php

namespace App\Console\Commands;

use App\Models\News\Post;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $postsitemap= Sitemap::create()->add(
            Url::create('/noticias')
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.1)
        )
        ->add(Url::create('/informacion')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );

        Post::get()->each(function(Post $post) use ($postsitemap){
            $postsitemap->add(
                Url::create("/noticias/{$post->id}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_HOURLY)
            );
        });
        $postsitemap->writeToFile(public_path('sitemap.xml'));
    }
}
