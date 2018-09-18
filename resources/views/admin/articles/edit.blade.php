@extends('layouts.admin')

@section('title', '新建文章')

{{-- 这里的 push scripts 必须放在 include mde 之前，否则 tui.editor 无法正常工作 --}}
@push('scripts')
  <script>
    new Vue({
      el: '#app',
      data: {
        title: <?= json_encode($article->title) ?>,
        slug: <?= $article->slug ?: $article->id ?>
      },
      created: function () {
        this.upgradeSlug();
        this.upgradeDraft();
      },
      methods: {
        upgradeSlug: function () {
          localStorage.setItem('slug', this.slug);
        },
        upgradeDraft: function () {
          let draftKey = 'draft-' + this.slug;
          localStorage.setItem(draftKey, <?= json_encode($article->content) ?>);
        }
      }
    });
  </script>
@endpush

@section('content')
  <div class="el-row">
    <el-input v-model="slug" v-on:change="upgradeSlug" placeholder="请输入 Slug"></el-input>
  </div>
  <div class="el-row">
    <el-input v-model="title" placeholder="请输入标题"></el-input>
  </div>
  <div class="el-row">
    @include('admin.widgets.mde')
  </div>
@endsection
