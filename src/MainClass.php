<?php

namespace ExamplePlugin;

use PocketMine\Command\Command;
use PocketMine\Command\CommandSender;
use PocketMine\Plugin\PluginBase;
use PocketMine\Utils\TextFormat;

class MainClass extends PluginBase{

	public function onEnable(){
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
}