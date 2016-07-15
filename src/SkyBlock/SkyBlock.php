<?php

namespace SkyBlock;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class SkyBlock extends PluginBase{
 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
  if($cmd->getName() == "ada"){
   if(!empty($args[0])){
    if(strtolower($args[0]) == "olustur"){
    }
    else if(strtolower($args[0]) == "isinlan"){
    }
   }
  }
 }
}
?>
