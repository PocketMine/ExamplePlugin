<?php

namespace ExamplePlugin;

use PocketMine\Command\Command;
use PocketMine\Command\CommandSender;
use PocketMine\Event\Listener;
use PocketMine\Event\Player\PlayerRespawnEvent;
use PocketMine\Player;
use PocketMine\Plugin\PluginBase;
use PocketMine\Utils\TextFormat;

class MainClass extends PluginBase implements Listener{

	public function onLoad(){
		console(TextFormat::WHITE . "[ExamplePlugin] I've been loaded!");
	}

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new BroadcastPluginTask($this), 120);
		console(TextFormat::DARK_GREEN . "[ExamplePlugin] I've been enabled!");
	}

	public function onDisable(){
		console(TextFormat::DARK_RED . "[ExamplePlugin] I've been disabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch($command->getName()){
			case "example":
				$sender->sendMessage("Hello ".$sender->getName()."!");
				return true;
			default:
				return false;
		}
	}

	/**
	 * @param PlayerRespawnEvent $event
	 *
	 * @priority        NORMAL
	 * @ignoreCancelled false
	 */
	public function onSpawn(PlayerRespawnEvent $event){
		Player::broadcastMessage($event->getPlayer()->getDisplayName() . " has just spawned!");
	}
}
