<html>
<?php
session_start();
mysql_connect(
"127.0.0.1",
"root",
"bear123"
);
$create="";
mysql_select_db("Cheapo");
# execute a SQL query on the database
$results = mysql_query("SELECT * FROM Message");
# loop through each message
while ($row = mysql_fetch_array($results)) {
  ?>
  <div class="alert alert-success" id="load">subject: <?php echo $row["subject"]; ?>
<br/>body: <?php echo $row["body"]; ?></div>
  <?php
}
?>
</html>

