<?php
$dbname = 'test';    
if (!mysql_connect('localhost', 'root', '')) 
{
echo "Impossible de se connecter à MySQL";
exit;
}
$result = mysql_list_tables($dbname);
if (!$result) 
{
echo "Erreur : impossible de lister les bases de données</p>";
echo 'Erreur MySQL : ' . mysql_error();
exit;
}
while ($row = mysql_fetch_row($result))
{
echo "Table : $row[0]</p>";

} 
mysql_free_result($result);
?>