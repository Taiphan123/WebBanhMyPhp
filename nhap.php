<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
</head>
<body>
    <form action="" method="post" >
        <textarea name="editor" class="ckeditor" id="editor" cols="80" rows="10"></textarea>
	</form>
    <!-- <script src="{!! asset('ckeditor/ckeditor.js') !!}"></script> -->
    <script>
        ckeditor.replace('editor');
    </script>
</body>
</html>