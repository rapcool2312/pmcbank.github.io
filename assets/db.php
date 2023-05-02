<?php 
    $con = new mysqli('pmcbankk.mysql.database.azure.com','rupesh2312','Bhimsen85%','mybank');
    define('bankName', 'PMC Bank',true);
    $ar = $con->query("select * from userAccounts,branch where id = '$_SESSION[userId]' AND userAccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
