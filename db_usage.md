require_once('database/Db.php');
$db = Db::getInstance();

$db->Execute($sql);
$db->ExecuteS($sql);
$db->getRow($sql);
$db->getValue($sql);
