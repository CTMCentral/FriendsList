<?php

namespace CTMCentral\FriendsList\commands;

use CortexPE\Commando\BaseCommand;
use CTMCentral\FriendsList\commands\subcommands\addSubCommand;
use CTMCentral\FriendsList\commands\subcommands\removeSubCommand;
use CTMCentral\FriendsList\events\PlayerOpenFriendForm;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginOwned;
use pocketmine\utils\TextFormat as TF;

class FriendCommand extends BaseCommand implements PluginOwned {

	public function onRun(CommandSender $sender, string $aliasUsed, array $args): void{
		if (!$sender instanceof Player) {
			$sender->sendMessage(TF::RED . "You can only run this command in game");
			return;
		}
		(new PlayerOpenFriendForm($sender))->call();
	}

	protected function prepare(): void{
		$this->registerSubCommand(new addSubCommand($this->getPlugin(), "add", "Add a friend"));
		$this->registerSubCommand(new removeSubCommand($this->getPlugin(), "remove", "Removes a friend"));
	}
}