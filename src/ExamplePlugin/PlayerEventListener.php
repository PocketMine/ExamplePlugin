<?php

namespace ExamplePlugin;

use PocketMine\Event\Listener;
use PocketMine\Event\Player\PlayerRespawnEvent;
use PocketMine\Player;

class PlayerEventListener implements Listener{

	/**
	 * @param PlayerRespawnEvent $event
	 *
	 * @priority NORMAL
	 */
	public function onSpawn(PlayerRespawnEvent $event){
		Player::broadcastMessage($event->getPlayer()->getDisplayName()." has just spawned!");
	}
}