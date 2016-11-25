<? session_start(); ?>
<?php if(isset($_SESSION['user_session'])): ?>


<?php else: ?>
<SCRIPT LANGUAGE="javascript">location.href = "../../Application/views/admin.php";   </SCRIPT>
<?php endif; ?>