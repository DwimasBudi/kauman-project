@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="New Post Title" autofocus value="{{ old('title') }}">
    @error('title')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="new-post-slug" value="{{ old('slug') }}">
    @error('slug')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select @error('category') is-invalid @enderror" name="category_id" id="category" required>
        <option selected disabled>Pilih kategory</option>
        @foreach ($categories as $category)  
            @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>
    @error('category')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
        <label for="image" class="form-label">Thumbnail :</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
   </div>
    
  <div class="mb-3">
    <label for="description" class="form-label">Body</label>
    @error('body')
        <p class="text-danger">
            {{$message}}
        </p> 
    @enderror
        <textarea name="description" id="description" cols="30" rows="20" required>

        </textarea>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Create Post</button>
</form>
</div>
<script src="/js/tinymce/tinymce.min.js"></script>
<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener('input',function () {
        fetch('/dashboard/posts/checkSlug?title='+title.value)
        .then(response=>response.json())
        .then(data=>slug.value=data.slug)

    });

    // TinyMCE
tinymce.init({
  selector: 'textarea',
    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak code searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking save table directionality emoticons template',
    toolbar: 'undo redo | formatselect | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image media | code',
    promotion: false,
    branding: false,
  /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
</script>
@endsection