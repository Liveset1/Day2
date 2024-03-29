<?php 

namespace Liveset1\Day2;

use pocketmine\plugin;
use pocketmine\plugin\PluginBase; 
use pocketmine\command\CommandSender; 
use pocketmine\command\Command; 
use pocketmine\utils\TextFormat as c; 
use pocketmine\Player; 
use pocketmine\Server; 

class Main extends PluginBase {
	
	public $fts = "§7[§bDevCommands§7]";
	
 public function  onEnable(){
   $this->getLogger()->info("Day Enabled");
   $this->getServer()->getPluginManager()->registerEvents($this, $this);
}
 public function onDisable(){         
   $this->getLogger()->info("Disabled Day");     
} 
	
public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
    if($cmd->getName() == "day") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("day.command")) {
   	    $player->getLevel()->setTime(0);
            $player->sendMessage($this->fts . TF::GREEN . " You have set the time to day!");
            }else{
            $player->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      } 
}
}
