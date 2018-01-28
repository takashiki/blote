<?php

use App\Enums\ArticleType;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Schema::hasTable('typecho_contents')) {
            return;
        }

        $adminId = DB::table('users')->where('name', config('blote.admin.username'))->value('id');
        DB::table('typecho_contents')->orderBy('cid')->chunk(100, function ($contents) use ($adminId) {
            foreach ($contents as $content) {
                if ($content->type != 'post') {
                    continue;
                }

                $article = [
                    'id' => $content->cid,
                    'title' => $content->title,
                    'slug' => is_numeric($content->slug) ? $content->slug : $content->cid,
                    'content' => str_replace('<!--markdown-->', '', $content->text),
                    'order' => $content->order,
                    'type' => ArticleType::Blog,
                    'created_by' => $adminId,
                    'updated_by' => $adminId,
                    'created_at' => date('Y-m-d H:i:s', $content->created),
                    'updated_at' => date('Y-m-d H:i:s', $content->modified),
                ];

                DB::table('articles')->insert($article);
            }
        });
    }
}
