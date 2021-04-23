<?php $title = 'Contact';
require_once 'template/header.php';
function filterString($field){

}
if ($_SERVER['REQUEST_METHOD']=='POST'){

    if (isset($_FILES['document']) && $_FILES['document']['error'] == 0){

        $allowed = [
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif'
        ];

        $maxFileSize = 10 * 1024;

        $fileMimeType = mime_content_type($_FILES['document']['tmp_name']);
        $fileSize = $_FILES['document']['size'];

        if (!in_array($fileMimeType, $allowed)) die('File Type not allowed');
        if ($fileSize > $maxFileSize) die('File size nit allowed. Allowed size is: '. $maxFileSize);

    }
}
?>

<h1>Contact us</h1>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <lapel for="name">Your name</lapel>
            <input type="text" name="name" class="form-control" placeholder="Your name">
        </div>
        <div class="form-group">
            <lapel for="email">Your email</lapel>
            <input type="email" name="email" class="form-control" placeholder="Your email">
        </div>
        <div class="form-group">
            <lapel for="document">Your image</lapel>
            <input type="file" name="document" >
        </div>
        <div class="form-group">
            <lapel for="massage">Your massage</lapel>
            <textarea name="message" class="form-control" placeholder="Your massage"></textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="send">
</form>
<?php
require_once 'template/footer.php'?>

