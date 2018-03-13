<?php

namespace Napol\Tasks;

use pocketmine\Server;
use pocketmine\scheduler\PluginTask;
use Napol\BarPlus;
use pocketmine\plugin\Plugin;

class BarTask extends PluginTask{

    public function __construct(HotBar $plugin){
        $this->plugin = $plugin;
        parent::__construct($plugin);
    }

    public function onRun($tick){
		$this->plugin->onBar();
    }

	public function cancel(){
      $this->getHandler()->cancel();
   }

}
