
<div id="editSection"></div>

@push('scripts')
    <script src="{{ cix('js/mde.js') }}"></script>
    <script>
      var initVal = localStorage.getItem(getDraftKey());
      var editor = new Editor({
        el: document.querySelector('#editSection'),
        initialEditType: 'markdown',
        initialValue: initVal,
        previewStyle: 'vertical',
        height: '500px',
        exts: ['scrollSync'],
        events: {
          change: function () {
            localStorage.setItem(getDraftKey(), editor.getMarkdown());
          }
        },
        hooks: {
          addImageBlobHook: function (blob, callback) {
            uploadImage(blob, function (url) {
              callback(url, 'alt text')
            });

            return false;
          }
        }
      });

      function getDraftKey () {
        var slug = localStorage.getItem('slug');

        return 'draft-' + slug;
      }
    </script>
@endpush
