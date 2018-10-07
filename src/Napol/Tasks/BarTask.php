<?php

namespace Napol\Tasks;

use pocketmine\Server;
use pocketmine\scheduler\Task;
use Napol\BarPlus;
use pocketmine\plugin\Plugin;

class BarTask extends Task{

    public function __construct(BarPlus $plugin){
        $this->plugin = $plugin;
    }

    public function onRun(int $currentTick){
		$this->plugin->onBar();
    }

	public function cancel(){
      $this->getHandler()->cancel();
   }

}
