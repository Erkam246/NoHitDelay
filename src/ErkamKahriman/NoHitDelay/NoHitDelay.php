<?php

namespace ErkamKahriman\NoHitDelay;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class NoHitDelay extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onHit(EntityDamageByEntityEvent $event){
        $entity = $event->getEntity();
        $damager = $event->getDamager();
        if($entity instanceof Player && $damager instanceof Player){
            $event->setAttackCooldown(0);
        }
    }
}