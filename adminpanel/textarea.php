<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/froala_editor.css">
  <link rel="stylesheet" href="css/froala_style.css">
  <link rel="stylesheet" href="css/plugins/code_view.css">
  <link rel="stylesheet" href="css/plugins/image_manager.css">
  <link rel="stylesheet" href="css/plugins/image.css">
  <link rel="stylesheet" href="css/plugins/table.css">
  <link rel="stylesheet" href="css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">


  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  </style>
</head>

<body>
  <div id="editor">
    <form>
      <textarea id='edit' style="margin-top: 30px;" placeholder="Type some text">
        <h1>Textarea</h1>
        <p>The editor can also be initialized on a textarea.</p>
      </textarea>

      <input type="submit">
    </form>
  </div>

  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="js/froala_editor.min.js"></script>
  <script type="text/javascript" src="js/plugins/align.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="js/plugins/image.min.js"></script>
  <script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="js/plugins/link.min.js"></script>
  <script type="text/javascript" src="js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/table.min.js"></script>
  <script type="text/javascript" src="js/plugins/video.min.js"></script>
  <script type="text/javascript" src="js/plugins/url.min.js"></script>
  <script type="text/javascript" src="js/plugins/entities.min.js"></script>

  <script>
    (function () {
      const editorInstance = new FroalaEditor('#edit', {
        enter: FroalaEditor.ENTER_P,
        placeholderText: null,
        events: {
          initialized: function () {
            const editor = this
            this.el.closest('form').addEventListener('submit', function (e) {
              console.log(editor.$oel.val())
              e.preventDefault()
            })
          }
        }
      })
    })()
  </script>
</body>

</html>