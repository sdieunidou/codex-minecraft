<?php

class PaperPluginDisablingTest extends PHPUnit\Framework\TestCase
{
    public function testParseAndAnalyse()
    {
        date_default_timezone_set('UTC');
        $logFile = new \Aternos\Codex\Log\File\PathLogFile(__DIR__ . "/../../../data/bukkit/paper-plugin-disabling.log");
        $detective = new \Aternos\Codex\Minecraft\Detective\Detective();
        $detective->setLogFile($logFile);
        $log = $detective->detect();
        $log->parse();
        $analysis = $log->analyse();
        
        $expectedLog = 'Aternos\Codex\Minecraft\Log\PaperLog Object
(
    [entries:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:31] [main/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:31] [main/INFO]: Loaded 0 recipes
                                    [number:protected] => 1
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [1] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:31] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:31] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                    [number:protected] => 2
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [2] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:31] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:31] [Server thread/INFO]: Loading properties
                                    [number:protected] => 3
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [3] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:31] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:31] [Server thread/INFO]: Default game type: SURVIVAL
                                    [number:protected] => 4
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [4] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:33] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:33] [Server thread/INFO]: This server is running Paper version git-Paper-521 (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
                                    [number:protected] => 5
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [5] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:36] [Server thread/INFO]: Server Ping Player Sample Count: 12
                                    [number:protected] => 6
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [6] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:36] [Server thread/INFO]: Using 4 threads for Netty based IO
                                    [number:protected] => 7
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [7] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:36] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:36] [Server thread/INFO]: Debug logging is disabled
                                    [number:protected] => 8
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [8] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:37] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:37] [Server thread/INFO]: Generating keypair
                                    [number:protected] => 9
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [9] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:38] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:38] [Server thread/INFO]: Starting Minecraft server on *:10434
                                    [number:protected] => 10
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [10] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:04:39] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:04:39] [Server thread/INFO]: Using epoll channel type
                                    [number:protected] => 11
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [11] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:05] [Server thread/INFO]: [SuperLobbyPlus] Loading SuperLobbyPlus v1.3.3
                                    [number:protected] => 12
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [12] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:05] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:05] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
                                    [number:protected] => 13
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [13] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:05] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:05] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
                                    [number:protected] => 14
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [14] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:05] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:05] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
                                    [number:protected] => 15
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [15] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:05] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:05] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
                                    [number:protected] => 16
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [16] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:05] [Server thread/WARN]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:05] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
                                    [number:protected] => 17
                                )

                        )

                    [level:protected] => WARN
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [17] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:06] [Server thread/INFO]: Preparing level "world"
                                    [number:protected] => 18
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [18] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:06] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:06] [Server thread/INFO]: Reloading ResourceManager: Default, bukkit
                                    [number:protected] => 19
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [19] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:08] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:08] [Server thread/INFO]: Loaded 524 recipes
                                    [number:protected] => 20
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [20] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: -------- World Settings For [world] --------
                                    [number:protected] => 21
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [21] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 22
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [22] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 23
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [23] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 24
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [24] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 25
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [25] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 26
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [26] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 27
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [27] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 28
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [28] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Beetroot Growth Modifier: 100%
                                    [number:protected] => 29
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [29] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Carrot Growth Modifier: 100%
                                    [number:protected] => 30
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [30] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Potato Growth Modifier: 100%
                                    [number:protected] => 31
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [31] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 32
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [32] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 33
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [33] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 34
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [34] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 35
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [35] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 36
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [36] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 37
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [37] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 38
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [38] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 39
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [39] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 40
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [40] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 41
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [41] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 42
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [42] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 43
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [43] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 44
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [44] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 45
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [45] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 46
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [46] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 47
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [47] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 48
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [48] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 49
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [49] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:10] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:10] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 50
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [50] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: -------- World Settings For [world_nether] --------
                                    [number:protected] => 51
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [51] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 52
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [52] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 53
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [53] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 54
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [54] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 55
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [55] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 56
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [56] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 57
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [57] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 58
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [58] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Beetroot Growth Modifier: 100%
                                    [number:protected] => 59
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [59] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Carrot Growth Modifier: 100%
                                    [number:protected] => 60
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [60] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Potato Growth Modifier: 100%
                                    [number:protected] => 61
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [61] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 62
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [62] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 63
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [63] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 64
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [64] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 65
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [65] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 66
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [66] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 67
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [67] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 68
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [68] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 69
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [69] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 70
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [70] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 71
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [71] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 72
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [72] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 73
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [73] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 74
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [74] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 75
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [75] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 76
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [76] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 77
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [77] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 78
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [78] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 79
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [79] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 80
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [80] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
                                    [number:protected] => 81
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [81] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Mob Spawn Range: 8
                                    [number:protected] => 82
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [82] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Cactus Growth Modifier: 100%
                                    [number:protected] => 83
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [83] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Cane Growth Modifier: 100%
                                    [number:protected] => 84
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [84] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Melon Growth Modifier: 100%
                                    [number:protected] => 85
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [85] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Mushroom Growth Modifier: 100%
                                    [number:protected] => 86
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [86] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
                                    [number:protected] => 87
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [87] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Sapling Growth Modifier: 100%
                                    [number:protected] => 88
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [88] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Beetroot Growth Modifier: 100%
                                    [number:protected] => 89
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [89] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Carrot Growth Modifier: 100%
                                    [number:protected] => 90
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [90] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Potato Growth Modifier: 100%
                                    [number:protected] => 91
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [91] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Wheat Growth Modifier: 100%
                                    [number:protected] => 92
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [92] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: NetherWart Growth Modifier: 100%
                                    [number:protected] => 93
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [93] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Vine Growth Modifier: 100%
                                    [number:protected] => 94
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [94] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Cocoa Growth Modifier: 100%
                                    [number:protected] => 95
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [95] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
                                    [number:protected] => 96
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [96] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Experience Merge Radius: 3.0
                                    [number:protected] => 97
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [97] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
                                    [number:protected] => 98
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [98] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
                                    [number:protected] => 99
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [99] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Random Lighting Updates: false
                                    [number:protected] => 100
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [100] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
                                    [number:protected] => 101
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [101] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Max TNT Explosions: 100
                                    [number:protected] => 102
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [102] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
                                    [number:protected] => 103
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [103] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Arrow Despawn Rate: 1200
                                    [number:protected] => 104
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [104] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
                                    [number:protected] => 105
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [105] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Item Merge Radius: 2.5
                                    [number:protected] => 106
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [106] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Item Despawn Rate: 6000
                                    [number:protected] => 107
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [107] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: View Distance: 10
                                    [number:protected] => 108
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [108] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
                                    [number:protected] => 109
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [109] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
                                    [number:protected] => 110
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [110] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:11] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:11] [Server thread/INFO]: Preparing start region for level minecraft:overworld (Seed: 1582517021810822702)
                                    [number:protected] => 111
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [111] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: Preparing start region for level minecraft:the_nether (Seed: 1582517021810822702)
                                    [number:protected] => 112
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [112] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: Preparing start region for level minecraft:the_end (Seed: 1582517021810822702)
                                    [number:protected] => 113
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [113] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: Time elapsed: 364 ms
                                    [number:protected] => 114
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [114] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: [SuperLobbyPlus] Enabling SuperLobbyPlus v1.3.3*
                                    [number:protected] => 115
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [115] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: ==================================
                                    [number:protected] => 116
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [116] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: #[SuperLobbPlus]#
                                    [number:protected] => 117
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [117] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: #Activado correctamente#
                                    [number:protected] => 118
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [118] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: #Plugin by Maurittoh#
                                    [number:protected] => 119
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [119] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: #Twitter: @MauroReviews#
                                    [number:protected] => 120
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [120] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: #Version: 1.3.1#
                                    [number:protected] => 121
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [121] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: #[SuperLobbPlus]#
                                    [number:protected] => 122
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [122] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:12] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:12] [Server thread/INFO]: ==================================
                                    [number:protected] => 123
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [123] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: Unknown command. Type "/help" for help.
                                    [number:protected] => 124
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [124] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: Unknown command. Type "/help" for help.
                                    [number:protected] => 125
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [125] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/ERROR]: Error occurred while enabling SuperLobbyPlus v1.3.3 (Is it up to date?)
                                    [number:protected] => 126
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => java.lang.RuntimeException: Could not find PlaceholderAPI!! Plugin can not work without it!
                                    [number:protected] => 127
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at maurittoh.com.MainCommand.onEnable(MainCommand.java:161) ~[?:?]
                                    [number:protected] => 128
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:254) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 129
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:326) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 130
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:405) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 131
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:443) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 132
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:357) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 133
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:608) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 134
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:570) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 135
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:431) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 136
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:316) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 137
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:786) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 138
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 139
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [126] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: [SuperLobbyPlus] Disabling SuperLobbyPlus v1.3.3
                                    [number:protected] => 140
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [127] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: 
                                    [number:protected] => 141
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [128] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: ==================================
                                    [number:protected] => 142
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [129] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: #[SuperLobbPlus]#
                                    [number:protected] => 143
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [130] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: #Desactivado correctamente#
                                    [number:protected] => 144
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [131] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: #Plugin by Maurittoh#
                                    [number:protected] => 145
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [132] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: #Twitter: @MauroReviews#
                                    [number:protected] => 146
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [133] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: #Version: 1.3.1#
                                    [number:protected] => 147
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [134] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: #[SuperLobbPlus]#
                                    [number:protected] => 148
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [135] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/INFO]: ==================================
                                    [number:protected] => 149
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [136] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:14] [Server thread/ERROR]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:14] [Server thread/ERROR]: Error occurred while disabling SuperLobbyPlus v1.3.3 (Is it up to date?)
                                    [number:protected] => 150
                                )

                            [1] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => org.bukkit.plugin.IllegalPluginAccessException: Plugin attempted to register maurittoh.com.comandos.CommandSpawn@4db8a1fd while not enabled
                                    [number:protected] => 151
                                )

                            [2] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.registerEvents(SimplePluginManager.java:541) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 152
                                )

                            [3] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at maurittoh.com.MainCommand.registerEvents(MainCommand.java:492) ~[?:?]
                                    [number:protected] => 153
                                )

                            [4] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at maurittoh.com.MainCommand.onDisable(MainCommand.java:213) ~[?:?]
                                    [number:protected] => 154
                                )

                            [5] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:256) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 155
                                )

                            [6] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.disablePlugin(JavaPluginLoader.java:360) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 156
                                )

                            [7] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.disablePlugin(SimplePluginManager.java:437) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 157
                                )

                            [8] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:330) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 158
                                )

                            [9] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:405) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 159
                                )

                            [10] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:443) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 160
                                )

                            [11] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:357) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 161
                                )

                            [12] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:608) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 162
                                )

                            [13] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:570) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 163
                                )

                            [14] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:431) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 164
                                )

                            [15] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:316) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 165
                                )

                            [16] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:786) ~[minecraft_server.jar:git-Paper-521]
                                    [number:protected] => 166
                                )

                            [17] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                    [number:protected] => 167
                                )

                        )

                    [level:protected] => ERROR
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [137] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:15] [Server thread/INFO]: Done (9.503s)! For help, type "help"
                                    [number:protected] => 168
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [138] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:15] [Server thread/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:15] [Server thread/INFO]: Starting GS4 status listener
                                    [number:protected] => 169
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

            [139] => Aternos\Codex\Minecraft\Log\Entry Object
                (
                    [prefix:protected] => [12:05:15] [Query Listener #1/INFO]:
                    [lines:protected] => Array
                        (
                            [0] => Aternos\Codex\Log\Line Object
                                (
                                    [text:protected] => [12:05:15] [Query Listener #1/INFO]: Query running on **.**.**.**:10434
                                    [number:protected] => 170
                                )

                        )

                    [level:protected] => INFO
                    [time:protected] => 
                    [iterator:protected] => 0
                )

        )

    [iterator:protected] => 140
    [logFile:protected] => Aternos\Codex\Log\File\PathLogFile Object
        (
            [content:protected] => [12:04:31] [main/INFO]: Loaded 0 recipes
[12:04:31] [Server thread/INFO]: Starting minecraft server version 1.13.2
[12:04:31] [Server thread/INFO]: Loading properties
[12:04:31] [Server thread/INFO]: Default game type: SURVIVAL
[12:04:33] [Server thread/INFO]: This server is running Paper version git-Paper-521 (MC: 1.13.2) (Implementing API version 1.13.2-R0.1-SNAPSHOT)
[12:04:36] [Server thread/INFO]: Server Ping Player Sample Count: 12
[12:04:36] [Server thread/INFO]: Using 4 threads for Netty based IO
[12:04:36] [Server thread/INFO]: Debug logging is disabled
[12:04:37] [Server thread/INFO]: Generating keypair
[12:04:38] [Server thread/INFO]: Starting Minecraft server on *:10434
[12:04:39] [Server thread/INFO]: Using epoll channel type
[12:05:05] [Server thread/INFO]: [SuperLobbyPlus] Loading SuperLobbyPlus v1.3.3
[12:05:05] [Server thread/INFO]: Server permissions file permissions.yml is empty, ignoring it
[12:05:05] [Server thread/WARN]: **** SERVER IS RUNNING IN OFFLINE/INSECURE MODE!
[12:05:05] [Server thread/WARN]: The server will make no attempt to authenticate usernames. Beware.
[12:05:05] [Server thread/WARN]: While this makes the game possible to play without internet access, it also opens up the ability for hackers to connect with any username they choose.
[12:05:05] [Server thread/WARN]: To change this, set "online-mode" to "true" in the server.properties file.
[12:05:06] [Server thread/INFO]: Preparing level "world"
[12:05:06] [Server thread/INFO]: Reloading ResourceManager: Default, bukkit
[12:05:08] [Server thread/INFO]: Loaded 524 recipes
[12:05:10] [Server thread/INFO]: -------- World Settings For [world] --------
[12:05:10] [Server thread/INFO]: Mob Spawn Range: 8
[12:05:10] [Server thread/INFO]: Cactus Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Cane Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Melon Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Sapling Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Beetroot Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Carrot Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Potato Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Wheat Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Vine Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[12:05:10] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[12:05:10] [Server thread/INFO]: Experience Merge Radius: 3.0
[12:05:10] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[12:05:10] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[12:05:10] [Server thread/INFO]: Random Lighting Updates: false
[12:05:10] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[12:05:10] [Server thread/INFO]: Max TNT Explosions: 100
[12:05:10] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[12:05:10] [Server thread/INFO]: Arrow Despawn Rate: 1200
[12:05:10] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[12:05:10] [Server thread/INFO]: Item Merge Radius: 2.5
[12:05:10] [Server thread/INFO]: Item Despawn Rate: 6000
[12:05:10] [Server thread/INFO]: View Distance: 10
[12:05:10] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[12:05:10] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[12:05:11] [Server thread/INFO]: -------- World Settings For [world_nether] --------
[12:05:11] [Server thread/INFO]: Mob Spawn Range: 8
[12:05:11] [Server thread/INFO]: Cactus Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Cane Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Melon Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Sapling Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Beetroot Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Carrot Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Potato Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Wheat Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Vine Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[12:05:11] [Server thread/INFO]: Experience Merge Radius: 3.0
[12:05:11] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[12:05:11] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[12:05:11] [Server thread/INFO]: Random Lighting Updates: false
[12:05:11] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[12:05:11] [Server thread/INFO]: Max TNT Explosions: 100
[12:05:11] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[12:05:11] [Server thread/INFO]: Arrow Despawn Rate: 1200
[12:05:11] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[12:05:11] [Server thread/INFO]: Item Merge Radius: 2.5
[12:05:11] [Server thread/INFO]: Item Despawn Rate: 6000
[12:05:11] [Server thread/INFO]: View Distance: 10
[12:05:11] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[12:05:11] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[12:05:11] [Server thread/INFO]: -------- World Settings For [world_the_end] --------
[12:05:11] [Server thread/INFO]: Mob Spawn Range: 8
[12:05:11] [Server thread/INFO]: Cactus Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Cane Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Melon Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Mushroom Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Pumpkin Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Sapling Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Beetroot Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Carrot Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Potato Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Wheat Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: NetherWart Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Vine Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Cocoa Growth Modifier: 100%
[12:05:11] [Server thread/INFO]: Entity Activation Range: An 32 / Mo 32 / Mi 16 / Tiv true
[12:05:11] [Server thread/INFO]: Experience Merge Radius: 3.0
[12:05:11] [Server thread/INFO]: Entity Tracking Range: Pl 48 / An 48 / Mo 48 / Mi 32 / Other 64
[12:05:11] [Server thread/INFO]: Hopper Transfer: 8 Hopper Check: 1 Hopper Amount: 1
[12:05:11] [Server thread/INFO]: Random Lighting Updates: false
[12:05:11] [Server thread/INFO]: Custom Map Seeds:  Village: 10387312 Desert: 14357617 Igloo: 14357618 Jungle: 14357619 Swamp: 14357620 Monument: 10387313Ocean: 14357621 Shipwreck: 165745295 Slime: 987234911
[12:05:11] [Server thread/INFO]: Max TNT Explosions: 100
[12:05:11] [Server thread/INFO]: Tile Max Tick Time: 50ms Entity max Tick Time: 50ms
[12:05:11] [Server thread/INFO]: Arrow Despawn Rate: 1200
[12:05:11] [Server thread/INFO]: Allow Zombie Pigmen to spawn from portal blocks: true
[12:05:11] [Server thread/INFO]: Item Merge Radius: 2.5
[12:05:11] [Server thread/INFO]: Item Despawn Rate: 6000
[12:05:11] [Server thread/INFO]: View Distance: 10
[12:05:11] [Server thread/INFO]: Zombie Aggressive Towards Villager: true
[12:05:11] [Server thread/INFO]: Nerfing mobs spawned from spawners: false
[12:05:11] [Server thread/INFO]: Preparing start region for level minecraft:overworld (Seed: 1582517021810822702)
[12:05:12] [Server thread/INFO]: Preparing start region for level minecraft:the_nether (Seed: 1582517021810822702)
[12:05:12] [Server thread/INFO]: Preparing start region for level minecraft:the_end (Seed: 1582517021810822702)
[12:05:12] [Server thread/INFO]: Time elapsed: 364 ms
[12:05:12] [Server thread/INFO]: [SuperLobbyPlus] Enabling SuperLobbyPlus v1.3.3*
[12:05:12] [Server thread/INFO]: ==================================
[12:05:12] [Server thread/INFO]: #[SuperLobbPlus]#
[12:05:12] [Server thread/INFO]: #Activado correctamente#
[12:05:12] [Server thread/INFO]: #Plugin by Maurittoh#
[12:05:12] [Server thread/INFO]: #Twitter: @MauroReviews#
[12:05:12] [Server thread/INFO]: #Version: 1.3.1#
[12:05:12] [Server thread/INFO]: #[SuperLobbPlus]#
[12:05:12] [Server thread/INFO]: ==================================
[12:05:14] [Server thread/INFO]: Unknown command. Type "/help" for help.
[12:05:14] [Server thread/INFO]: Unknown command. Type "/help" for help.
[12:05:14] [Server thread/ERROR]: Error occurred while enabling SuperLobbyPlus v1.3.3 (Is it up to date?)
java.lang.RuntimeException: Could not find PlaceholderAPI!! Plugin can not work without it!
	at maurittoh.com.MainCommand.onEnable(MainCommand.java:161) ~[?:?]
	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:254) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:326) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:405) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:443) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:357) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:608) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:570) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:431) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:316) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:786) ~[minecraft_server.jar:git-Paper-521]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[12:05:14] [Server thread/INFO]: [SuperLobbyPlus] Disabling SuperLobbyPlus v1.3.3
[12:05:14] [Server thread/INFO]: 
[12:05:14] [Server thread/INFO]: ==================================
[12:05:14] [Server thread/INFO]: #[SuperLobbPlus]#
[12:05:14] [Server thread/INFO]: #Desactivado correctamente#
[12:05:14] [Server thread/INFO]: #Plugin by Maurittoh#
[12:05:14] [Server thread/INFO]: #Twitter: @MauroReviews#
[12:05:14] [Server thread/INFO]: #Version: 1.3.1#
[12:05:14] [Server thread/INFO]: #[SuperLobbPlus]#
[12:05:14] [Server thread/INFO]: ==================================
[12:05:14] [Server thread/ERROR]: Error occurred while disabling SuperLobbyPlus v1.3.3 (Is it up to date?)
org.bukkit.plugin.IllegalPluginAccessException: Plugin attempted to register maurittoh.com.comandos.CommandSpawn@4db8a1fd while not enabled
	at org.bukkit.plugin.SimplePluginManager.registerEvents(SimplePluginManager.java:541) ~[minecraft_server.jar:git-Paper-521]
	at maurittoh.com.MainCommand.registerEvents(MainCommand.java:492) ~[?:?]
	at maurittoh.com.MainCommand.onDisable(MainCommand.java:213) ~[?:?]
	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:256) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.plugin.java.JavaPluginLoader.disablePlugin(JavaPluginLoader.java:360) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.plugin.SimplePluginManager.disablePlugin(SimplePluginManager.java:437) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:330) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:405) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:443) ~[minecraft_server.jar:git-Paper-521]
	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:357) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:608) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:570) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:431) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:316) ~[minecraft_server.jar:git-Paper-521]
	at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:786) ~[minecraft_server.jar:git-Paper-521]
	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
[12:05:15] [Server thread/INFO]: Done (9.503s)! For help, type "help"
[12:05:15] [Server thread/INFO]: Starting GS4 status listener
[12:05:15] [Query Listener #1/INFO]: Query running on **.**.**.**:10434
        )

)
';
        
        $expectedAnalysis = 'Aternos\Codex\Analysis\Analysis Object
(
    [insights:protected] => Array
        (
            [0] => Aternos\Codex\Minecraft\Analysis\Information\Vanilla\VanillaVersionInformation Object
                (
                    [label:protected] => Minecraft version
                    [value:protected] => 1.13.2
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [12:04:31] [Server thread/INFO]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [12:04:31] [Server thread/INFO]: Starting minecraft server version 1.13.2
                                            [number:protected] => 2
                                        )

                                )

                            [level:protected] => INFO
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [1] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginEnablingProblem Object
                (
                    [pluginName:protected] => SuperLobbyPlus
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => SuperLobbyPlus
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => SuperLobbyPlus
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [12:05:14] [Server thread/ERROR]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [12:05:14] [Server thread/ERROR]: Error occurred while enabling SuperLobbyPlus v1.3.3 (Is it up to date?)
                                            [number:protected] => 126
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => java.lang.RuntimeException: Could not find PlaceholderAPI!! Plugin can not work without it!
                                            [number:protected] => 127
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at maurittoh.com.MainCommand.onEnable(MainCommand.java:161) ~[?:?]
                                            [number:protected] => 128
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:254) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 129
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:326) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 130
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:405) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 131
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:443) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 132
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:357) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 133
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:608) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 134
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:570) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 135
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:431) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 136
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:316) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 137
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:786) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 138
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 139
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

            [2] => Aternos\Codex\Minecraft\Analysis\Problem\Bukkit\PluginDisablingProblem Object
                (
                    [pluginName:protected] => SuperLobbyPlus
                    [solutions:protected] => Array
                        (
                            [0] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallDifferentVersionSolution Object
                                (
                                    [pluginName:protected] => SuperLobbyPlus
                                )

                            [1] => Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginRemoveSolution Object
                                (
                                    [pluginName:protected] => SuperLobbyPlus
                                )

                        )

                    [iterator:protected] => 0
                    [entry:protected] => Aternos\Codex\Minecraft\Log\Entry Object
                        (
                            [prefix:protected] => [12:05:14] [Server thread/ERROR]:
                            [lines:protected] => Array
                                (
                                    [0] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => [12:05:14] [Server thread/ERROR]: Error occurred while disabling SuperLobbyPlus v1.3.3 (Is it up to date?)
                                            [number:protected] => 150
                                        )

                                    [1] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => org.bukkit.plugin.IllegalPluginAccessException: Plugin attempted to register maurittoh.com.comandos.CommandSpawn@4db8a1fd while not enabled
                                            [number:protected] => 151
                                        )

                                    [2] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.registerEvents(SimplePluginManager.java:541) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 152
                                        )

                                    [3] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at maurittoh.com.MainCommand.registerEvents(MainCommand.java:492) ~[?:?]
                                            [number:protected] => 153
                                        )

                                    [4] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at maurittoh.com.MainCommand.onDisable(MainCommand.java:213) ~[?:?]
                                            [number:protected] => 154
                                        )

                                    [5] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPlugin.setEnabled(JavaPlugin.java:256) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 155
                                        )

                                    [6] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.disablePlugin(JavaPluginLoader.java:360) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 156
                                        )

                                    [7] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.disablePlugin(SimplePluginManager.java:437) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 157
                                        )

                                    [8] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.java.JavaPluginLoader.enablePlugin(JavaPluginLoader.java:330) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 158
                                        )

                                    [9] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.plugin.SimplePluginManager.enablePlugin(SimplePluginManager.java:405) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 159
                                        )

                                    [10] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugin(CraftServer.java:443) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 160
                                        )

                                    [11] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at org.bukkit.craftbukkit.v1_13_R2.CraftServer.enablePlugins(CraftServer.java:357) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 161
                                        )

                                    [12] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.l(MinecraftServer.java:608) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 162
                                        )

                                    [13] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:570) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 163
                                        )

                                    [14] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.a(MinecraftServer.java:431) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 164
                                        )

                                    [15] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.DedicatedServer.init(DedicatedServer.java:316) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 165
                                        )

                                    [16] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at net.minecraft.server.v1_13_R2.MinecraftServer.run(MinecraftServer.java:786) ~[minecraft_server.jar:git-Paper-521]
                                            [number:protected] => 166
                                        )

                                    [17] => Aternos\Codex\Log\Line Object
                                        (
                                            [text:protected] => 	at java.lang.Thread.run(Thread.java:748) [?:1.8.0_144]
                                            [number:protected] => 167
                                        )

                                )

                            [level:protected] => ERROR
                            [time:protected] => 
                            [iterator:protected] => 0
                        )

                    [counter:protected] => 1
                )

        )

    [iterator:protected] => 2
)
';
        
        $this->assertEquals($expectedLog, print_r($log, true));
        $this->assertEquals($expectedAnalysis, print_r($analysis, true));

        $this->assertEquals("Minecraft version: 1.13.2", $analysis[0]->getMessage());

        $this->assertEquals("The plugin 'SuperLobbyPlus' could not be enabled.", $analysis[1]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'SuperLobbyPlus'.", $analysis[1][0]->getMessage());
        $this->assertEquals("Remove the plugin 'SuperLobbyPlus'.", $analysis[1][1]->getMessage());

        $this->assertEquals("The plugin 'SuperLobbyPlus' could not be disabled.", $analysis[2]->getMessage());
        $this->assertEquals("Install a different version of the plugin 'SuperLobbyPlus'.", $analysis[2][0]->getMessage());
        $this->assertEquals("Remove the plugin 'SuperLobbyPlus'.", $analysis[2][1]->getMessage());

    }
}