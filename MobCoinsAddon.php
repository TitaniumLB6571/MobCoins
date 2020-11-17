<?php
    
/**
 * @name MobCoinsAddon
 * @version 1.0.0
 * @main JackMD\ScoreHud\Addons\MobCoinsAddon
 * @depend MobCoins
 */
namespace JackMD\ScoreHud\Addons {
    
	use JackMD\ScoreHud\addon\AddonBase;
	use Master\Mob;
	use pocketmine\Player;

	class MobCoinsAddon extends AddonBase {

		private $mobcoins;

		public function onEnable(): void {
			$this->mobcoins = $this->getServer()->getPluginManager()->getPlugin("MobCoins");
		}

		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array {
			return [
				"{coin}" => $this->mobcoins->getCoins($player),
			];
		}
	}
}
