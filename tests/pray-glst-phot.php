<?php
//take off the two unprintable characters after Creatures Evolution Engine - Archived information file. zLib 1.13 compressed.
//require_once(dirname(__FILE__).'/../agents/CreatureHistory.php');
require_once(dirname(__FILE__).'/../agents/PRAYFile.php');
require_once(dirname(__FILE__).'/../support/StringReader.php');
require_once(dirname(__FILE__).'/../support/FileReader.php');
require_once(dirname(__FILE__).'/../support/Archiver.php');

$agent = new PRAYFile(new FileReader($argv[1]));
$blocks = $agent->GetBlocks(PRAY_BLOCK_GLST);
$history = $blocks[0]->GetHistory();
foreach($history['events'] as $event) {
	if($event['eventnumber'] == 13) {
		print $agent->GetBlockByName($event['photograph'].'.photo')->OutputPNG();
		break;
	}
}

?>
