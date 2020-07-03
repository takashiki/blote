<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Article;
use Storage;

class ToHugo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'to:hugo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Article::where('type', 1)->each(function ($r) {

            $text = <<<MD
+++
title= "$r->title"
draft = false
date= "$r->created_at"
+++

$r->content
MD;

            Storage::disk('local')->put('posts/' . str_replace(['\\', '/'], '|', $r->title) . '.md', $text);
        });
    }
}
