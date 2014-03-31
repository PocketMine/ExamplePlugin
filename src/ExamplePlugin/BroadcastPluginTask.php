<?php

namespace ExamplePlugin;

use PocketMine\Player;
use PocketMine\Scheduler\PluginTask;

class BroadcastPluginTask extends PluginTask{

	public function onRun($currentTick){
		Player::broadcastMessage("[ExamplePlugin] I've ran on tick " . $currentTick);
	}
}