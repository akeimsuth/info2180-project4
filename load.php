<?php
session_start();
mysql_connect(
"127.0.0.1",
"root",
"bear123"
);
mysql_select_db("Cheapo");
# execute a SQL query on the database
$results = mysql_query("SELECT * FROM Message");
echo $results;
$create="New Message";
# loop through each message
while ($row = mysql_fetch_array($results)) {
  ?>
  <li id="load">subject: <?php echo $row["subject"]; ?></li>
  <li id="load">body: <?php echo $row["body"]; ?></li>
  <?php
}
?>

