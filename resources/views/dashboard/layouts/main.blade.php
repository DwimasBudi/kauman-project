<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="/css/dashboard-style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- Data Table --}}
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    @include('dashboard.layouts.sidebar')
    <section class="dashboard">
    @include('dashboard.layouts.header')
    
    @yield('container')
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="/js/dashboard-script.js"></script>

    {{-- Data Table --}}
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script>
<script src="/js/tinymce/tinymce.min.js"></script>
<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener('change',function () {
        fetch('/dashboard/post/checkSlug?title='+title.value)
        .then(response=>response.json())
        .then(data=>slug.value=data.slug)
    });

    // TinyMCE
tinymce.init({
  selector: 'textarea',
    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak code searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking save table directionality emoticons',
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
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;           
        }
    }
</script>
<script>
const API_URL = "https://api.openai.com/v1/chat/completions";

const generateBtn = document.getElementById("generateBtn");
const perbaikiButton = document.getElementById("perbaikiButton");
const stopBtn = document.getElementById("stopBtn");
let editor = tinymce.activeEditor;

stopBtn.disabled = true;
let controller = null; 

const generate = async (promptInput) => {

  if (promptInput=="") {
    alert("Masukkan Perintah");
    return;
  }

  generateBtn.disabled = true;
  stopBtn.disabled = false;
  tinymce.activeEditor.setContent('Keajaiban Ai menanti...');
  
  controller = new AbortController();
  const signal = controller.signal;

  try {

    const response = await fetch(API_URL, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer {{ env('OPEN_AI') }}`,
      },
      body: JSON.stringify({
        model: "gpt-3.5-turbo",
        messages: [{ role: "user", content: promptInput }],
        max_tokens: 900,
        temperature: 0.2,
        stream: true, 
      }),
      signal, 
    });

    const reader = response.body.getReader();
    const decoder = new TextDecoder("utf-8");
    tinymce.activeEditor.setContent('');

    while (true) {
      const { done, value } = await reader.read();
      if (done) {
        break;
      }

      const chunk = decoder.decode(value);
      const lines = chunk.split("\n");
      const parsedLines = lines
        .map((line) => line.replace(/^data: /, "").trim()) 
        .filter((line) => line !== "" && line !== "[DONE]") 
        .map((line) => JSON.parse(line)); 

      for (const parsedLine of parsedLines) {
        const { choices } = parsedLine;
        const { delta } = choices[0];
        const { content } = delta;

        if (content) {
          var currentContent = tinymce.activeEditor.getContent({ format: 'text' });
          var newContent = currentContent + content;
          tinymce.activeEditor.setContent(newContent);
        }
      }
    }
  } catch (error) {

    if (signal.aborted) {
      var currentContent = tinymce.activeEditor.getContent({ format: 'text' });
      var newContent = currentContent + " ............(((STOP)))........";
      tinymce.activeEditor.setContent(newContent);
    } else {
      console.error("Error:", error);
      var currentContent = tinymce.activeEditor.getContent({ format: 'text' });
      var newContent = currentContent + " ............Error occurred while generating........";
      tinymce.activeEditor.setContent(newContent);
    }
  } finally {

    generateBtn.disabled = false;
    stopBtn.disabled = true;
    controller = null; 
  }
};

const stop = () => {

  if (controller) {
    controller.abort();
    controller = null;
  }
};

// promptInput.addEventListener("keyup", (event) => {
//   if (event.key === "Enter") {
//     let promptInput = document.getElementById("promptInput");
//     generate(promptInput);
//   }
// });

generateBtn.addEventListener("click", function() {
  var promptInput = document.getElementById("promptInput").value;
  // console.log(promptInput);
  generate(promptInput);
});

stopBtn.addEventListener("click", stop);
perbaikiButton.addEventListener("click", function() {
  let promptInput = "perbaiki paragraph berikut ini : " + tinymce.activeEditor.getContent({ format: 'text' });
  // console.log(promptInput);
  generate(promptInput);
});



</script>
</body>
</html>