<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<h1 align="center">
    <p style="color: #ffffff">Update Post</p>
</h1>
<head>
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <script src="summernote-ext-video.js"></script >
    <!-- include summernote css/js-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.1/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.1/summernote.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#summernote').summernote(
                {
                    airMode: false,
                    height: 300,
                    airPopover: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ],
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'hr']],
                        ['view', ['fullscreen', 'codeview']],
                        ['help', ['help']],
                        ['group', [ 'video' ]]
                    ]
                });

        });
    </script>
</head>
<body style="background-image: url('http://www.splitshire.com/wp-content/uploads/2014/02/SplitShire_blur10.jpg')">
<div class="container" style="background-color: #ffffff">
    <?php echo Form::open(array(
        'url' => 'post/update',
    ));?>
    <?php echo Form::label("title", "Title"); ?>
    <?php echo "<br>";
    echo Form::text('title',$post->title, ['style' => "
    width:100%",'class'=>'form-control']);?>
    <br>
    <br>

    <textarea id="summernote" name="content" class="form-control"><?php echo $post->content?></textarea>
    <br>
    <br>
    <?php echo Form::label("tags", "Separate tags by commas"); ?>
    <?php echo Form::text('tags', implode(",",$post->tags), ['style' => "
    width:100%",'class'=>'form-control']);?>
    <br>
    <br>

    <div style="text-align:center">
        <input class="btn btn-primary btn-lg" style="width: 300px; margin: 0 auto;" type="submit" value="Save">
        <input class="btn btn-primary btn-lg" style="width: 300px; margin: 0 auto;" type="submit" value="Draft">
    </div>
</div>
</body>
</html>
