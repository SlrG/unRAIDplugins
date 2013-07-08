<?PHP
/* Copyright 2012, Bergware International & Andres Hamer-Adams.
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2, or (at your option)
 * any later version.
 */
?>
<script>
$(document).ready(function() {
  $('#sleep').click(function() {
    $(this).val('Sleeping...').attr('disabled',false);
    $.ajax( { url: "<?=$sf?>/include/SleepMode.php", success: function(data) { window.location.reload(true); } });
  });
});
<?if ($confirm['sleep']):?>
function activateSleep() {
  $('#sleep').attr('disabled',!$('#confirmSleep').prop('checked'));
}
<?endif;?>
</script>

<table class="array_status">
<tr>
<td></td>
<td><input type="button" id="sleep" value="Sleep"<?=$confirm['sleep']?' disabled':''?> onclick="disableInput();"></td>
<td><strong>Sleep</strong> will immediately Sleep Server.<br>
<?if ($confirm['sleep']):?>
<input type="checkbox" id="confirmSleep" value="OFF" onclick="activateSleep()"> <small>Yes I want to do this</small>
<?endif;?>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td>Make sure your server supports S3 sleep.<br><br>
Check this <a href="http://lime-technology.com/wiki/index.php?title=Setup_Sleep_(S3)_and_Wake_on_Lan_(WOL)" target="_blank">wiki entry</a> for more information.
</td>
</tr>
</table>