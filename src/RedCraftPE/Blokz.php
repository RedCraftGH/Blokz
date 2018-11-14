<?php

namespace RedCraftPE;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Blokz extends PluginBase implements Listener {

	public static $instance;

	public function onEnable(): void {
	
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		self::$instance = $this;
	}
	public function getInstance(): self {
	
		return self::$instance;
	}
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
	
		switch (strtolower($command->getName())) {
		
			//fun stuff here.
		}
	}
}
