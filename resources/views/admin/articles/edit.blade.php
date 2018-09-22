@extends('layouts.admin')

@section('title', '编辑文章')

{{-- 这里的 push scripts 必须放在 include mde 之前，否则 tui.editor 无法正常工作 --}}
@push('scripts')
    <script>
      new Vue({
        el: '#app',
        data: {
          id: <?= $article->id ?>,
          title: <?= json_encode($article->title) ?>,
          slug: <?= json_encode($article->slug ?: $article->id) ?>
        },
        created: function() {
          this.upgradeSlug();
          this.upgradeDraft();
        },
        mounted: function() {
          this.bindKey();
        },
        methods: {
          bindKey: function() {
            document.onkeydown = e => {
              if (e.key === 's' && (e.ctrlKey || e.metaKey)) {
                e.preventDefault();
                this.saveArticle();

                return false;
              }
            };
          },
          saveArticle: function() {
            console.log('sdf saved.');
            axios.put('/admin/articles/' + this.id, {
              slug: this.slug,
              title: this.title,
              content: editor.getMarkdown()
            }).then(resp => {
              if (resp.status === 200) {
                this.notifySuccess();
              } else {
                this.notifyFailure();
              }
            }).catch(error => {
              this.notifyFailure(error.toString());
            });
          },
          notifySuccess: function() {
            this.$notify({
              title: '保存成功',
              //message: '这是一条成功的提示消息',
              type: 'success'
            });
          },
          notifyFailure: function(message) {
            this.$notify({
              title: '保存失败',
              message: message,
              type: 'error'
            });
          },
          upgradeSlug: function() {
            localStorage.setItem('slug', this.slug);
          },
          upgradeDraft: function() {
            let draftKey = 'draft-' + this.slug;
            localStorage.setItem(draftKey, <?= json_encode($article->content) ?>);
          },
        },
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
