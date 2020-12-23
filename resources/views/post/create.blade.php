@extends('layouts.app')

@section('content')

  <div class="container-fluid py-3">
    <h2>投稿する画像を選択する</h2>
    @csrf
    <div class="row">
    
      <div class="col-md-6 border"  style="padding:300px;">

      <form action="/post/store" method="post">
        <input type="file" onChange="imgPreView(event)">
        <div id="preview"></div>
      </div>

      <div class="col-md-6 pt-5">
        <label for="content"><h2>コメントを記入する <span>(空白も可)</span></h2></label>
        <textarea class="form-control" id="content" name="content" rows="8"></textarea>
        <div class="pt-5">
          <button type="submit" class="btn  btn-secondary btn-lg btn-block border border-success">投稿する</button>
        </div>
      </div>
      </form>
    </div>
  </div>

<script>
function imgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("preview");
  var previewImage = document.getElementById("previewImage");
   
  if(previewImage != null) {
    preview.removeChild(previewImage);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}
</script>
@endsection