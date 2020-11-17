# MobCoins

This Plugin is made by MasterPlayz0000 

My discord is MasterPlayz#2004

The plugin has some simple functions such as adding removing and getting the amount of coins
# How to get the plugin on to another

Just add this code onto the onEnable function and your ready to use the functions below

```php
$this->mc = $this->getServer()->getPluginManager()->getPlugin("MobCoins");
```

# Adding Coin

On the $amount you can add any integer

```php
/**var
* Player $player
* Int $amount **/
$this->mc->addCoin($player, $amount);
```

# Take Coin

On the $amount you can add any integer

```php
/**var
* Player $player
* Int $amount **/
$this->mc->takeCoin($player, $amount);
```

# Check Coins

```php
/** 
* Player $player **/
$this->mc->getCoins($player);
```

Thank you for using my plugins please report bugs and dm me on discord for more info
MasterPlayz#2004
