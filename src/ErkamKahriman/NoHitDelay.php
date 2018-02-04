<?php

namespace ErkamKahriman;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\utils\TextFormat as C;

class NoHitDelay extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(C::GREEN."Aktiviert.");
    }

    public function onDamage(EntityDamageEvent $event){
        $event->setCancelled(false);
    }

    public function onHit(EntityDamageEvent $event){
        $event->setCancelled(false);
    }

    public function onDisable(){
        $this->getLogger()->info(C::RED."Deaktiviert.");
    }
}