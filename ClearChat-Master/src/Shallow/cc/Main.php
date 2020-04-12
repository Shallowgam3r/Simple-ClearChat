<?php

declare(strict_types=1);

namespace Shallow\cc;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
	public function onEnable(){

		$this->getServer()->getPluginManager()->registerEvents($this, $this);

	}



	public function onCommand(CommandSender $sender, Command $command, $label, array $args): bool
	{

		if (strtolower($command->getName()) == "clearc") {

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");

			$sender->sendMessage(" ");
		}
		return true;
	}

		}
