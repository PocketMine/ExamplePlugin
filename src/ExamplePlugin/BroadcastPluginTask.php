<?php

namespace ExamplePlugin;

use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;

class BroadcastPluginTask extends PluginTask{

	public function onRun($currentTick){
		Server::getInstance()->broadcastMessage("[ExamplePlugin] I've ran on tick " . $currentTick);
	}
}