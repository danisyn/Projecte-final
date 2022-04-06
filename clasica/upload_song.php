<?php include('header.php')?>

<?php include('sidebar.php') ?>


<div class="col-lg-6">   


<form enctype="multipart/form-data" id="form1" method="post" action="upload.php">
<input class="form-control form-control-lg" id="formFileLg" type="file" name="file1" accept=".ogg,.flac,.mp3" required="required"/>
<input class="form-control form-control-lg" id="formFileLg" type="submit" name="submit"/>
</form>

</div>