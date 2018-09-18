
window.uploadImage = function (blob, callback) {
  let formData = new FormData();
  formData.append('file', blob);
  axios.post(
    '/admin/upload',
    formData,
    {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }
  ).then(response => {
    callback(response.data.url);
  })
  .catch(function(){
    console.log('UPLOAD FAILURE!!');
  });
}
