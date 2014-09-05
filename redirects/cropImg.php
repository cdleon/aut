<?php require_once('cropImg.inc.php'); ?>
<html>

<head>
    <?php jcrop_css(); jcrop_js_head(); ?>
</head>

<body style="background-color:rgba(0,0,0,.8);">

    <div class="article" style="margin:20px auto;padding:20px;background-color:white;">
        <h1>Corta la imagen:</h1> 
        <img src="<?php echo $TEMPfilename; ?>" id="cropbox" />
        <form action="saveImg.php" method="post" onsubmit="return checkCoords();">
            <input type="hidden" name="rtrn_url" value="<?php if(defined('RTRN_URL')){echo RTRN_URL;}?>" />
            <input type="hidden" id='id' name='id' value='<?php echo $id; ?>'/>
            <input type="hidden" id="f" name="f" value='<?php echo $f; ?>'/><br>
            <input type="hidden" id="x" name="x" />
            <input type="hidden" id="y" name="y" />
            <input type="hidden" id="w" name="w" />
            <input type="hidden" id="h" name="h" /><br>
            <input type="submit" class="btn btn-success" value="Corta!" />
        </form>
        <button id="cancelar" class="btn btn-default" style="position:relative;top:-50px;left:75px;">Cancelar</button>
    </div>
    <script type="text/javascript">
        var redirect = <?php if(defined('RTRN_URL')){echo '"../'.RTRN_URL.'?del='.$id.'"';}?>;
        $('#cancelar').click(function(){
            window.location.href = redirect;
        });
    </script>

</body>

</html>