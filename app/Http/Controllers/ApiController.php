<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\ProPlayer;

class ApiController extends Controller
{
    public function get_api_key(){
        $api_array = ['RGAPI-482808a9-5661-43d9-b7a8-8ba5d69e55e7'];
        return $api_array[rand(0,count($api_array)-1)];
    }

    public function queueid_to_queuename($id){
        switch($id){
            case 420: return "RANKED SOLO"; break;
            case 440: return "RANKED FLEX"; break;
            case 450: return "ARAM"; break;
            default: return "NORMAL"; break;
        }
    }


    public function championid_to_championname($id){
        switch($id){
            case 266: return "Aatrox"; break;
            case 412: return "Thresh"; break;
            case 23: return "Tryndamere"; break;
            case 79: return "Gragas"; break;
            case 69: return "Cassiopeia"; break;
            case 136: return "AurelionSol"; break;
            case 13: return "Ryze"; break;
            case 78: return "Poppy"; break;
            case 14: return "Sion"; break;
            case 1: return "Annie"; break;
            case 202: return "Jhin"; break;
            case 43: return "Karma"; break;
            case 111: return "Nautilus"; break;
            case 240: return "Kled"; break;
            case 99: return "Lux"; break;
            case 103: return "Ahri"; break;
            case 2: return "Olaf"; break;
            case 112: return "Viktor"; break;
            case 34: return "Anivia"; break;
            case 27: return "Singed"; break;
            case 86: return "Garen"; break;
            case 127: return "Lissandra"; break;
            case 57: return "Maokai"; break;
            case 25: return "Morgana"; break;
            case 28: return "Evelynn"; break;
            case 105: return "Fizz"; break;
            case 74: return "Heimerdinger"; break;
            case 238: return "Zed"; break;
            case 68: return "Rumble"; break;
            case 82: return "Mordekaiser"; break;
            case 37: return "Sona"; break;
            case 96: return "KogMaw"; break;
            case 55: return "Katarina"; break;
            case 117: return "Lulu"; break;
            case 22: return "Ashe"; break;
            case 30: return "Karthus"; break;
            case 12: return "Alistar"; break;
            case 122: return "Darius"; break;
            case 67: return "Vayne"; break;
            case 110: return "Varus"; break;
            case 77: return "Udyr"; break;
            case 89: return "Leona"; break;
            case 126: return "Jayce"; break;
            case 134: return "Syndra"; break;
            case 80: return "Pantheon"; break;
            case 92: return "Riven"; break;
            case 121: return "KhaZix"; break;
            case 42: return "Corki"; break;
            case 268: return "Azir"; break;
            case 51: return "Caitlyn"; break;
            case 76: return "Nidalee"; break;
            case 85: return "Kennen"; break;
            case 3: return "Galio"; break;
            case 45: return "Veigar"; break;
            case 432: return "Bard"; break;
            case 150: return "Gnar"; break;
            case 90: return "Malzahar"; break;
            case 104: return "Graves"; break;
            case 254: return "Vi"; break;
            case 10: return "Kayle"; break;
            case 39: return "Irelia"; break;
            case 64: return "LeeSin"; break;
            case 420: return "Illaoi"; break;
            case 60: return "Elise"; break;
            case 106: return "Volibear"; break;
            case 20: return "Nunu"; break;
            case 4: return "TwistedFate"; break;
            case 24: return "Jax"; break;
            case 102: return "Shyvana"; break;
            case 429: return "Kalista"; break;
            case 36: return "DrMundo"; break;
            case 427: return "Ivern"; break;
            case 131: return "Diana"; break;
            case 223: return "TahmKench"; break;
            case 63: return "Brand"; break;
            case 113: return "Sejuani"; break;
            case 8: return "Vladimir"; break;
            case 154: return "Zac"; break;
            case 421: return "RekSai"; break;
            case 133: return "Quinn"; break;
            case 84: return "Akali"; break;
            case 163: return "Taliyah"; break;
            case 18: return "Tristana"; break;
            case 120: return "Hecarim"; break;
            case 15: return "Sivir"; break;
            case 236: return "Lucian"; break;
            case 107: return "Rengar"; break;
            case 19: return "Warwick"; break;
            case 72: return "Skarner"; break;
            case 54: return "Malphite"; break;
            case 157: return "Yasuo"; break;
            case 101: return "Xerath"; break;
            case 17: return "Teemo"; break;
            case 75: return "Nasus"; break;
            case 58: return "Renekton"; break;
            case 119: return "Draven"; break;
            case 35: return "Shaco"; break;
            case 50: return "Swain"; break;
            case 91: return "Talon"; break;
            case 40: return "Janna"; break;
            case 115: return "Ziggs"; break;
            case 245: return "Ekko"; break;
            case 61: return "Orianna"; break;
            case 114: return "Fiora"; break;
            case 9: return "Fiddlesticks"; break;
            case 31: return "ChoGath"; break;
            case 33: return "Rammus"; break;
            case 7: return "LeBlanc"; break;
            case 16: return "Soraka"; break;
            case 26: return "Zilean"; break;
            case 56: return "Nocturne"; break;
            case 222: return "Jinx"; break;
            case 83: return "Yorick"; break;
            case 6: return "Urgot"; break;
            case 203: return "Kindred"; break;
            case 21: return "MissFortune"; break;
            case 62: return "Wukong"; break;
            case 53: return "Blitzcrank"; break;
            case 98: return "Shen"; break;
            case 201: return "Braum"; break;
            case 5: return "XinZhao"; break;
            case 29: return "Twitch"; break;
            case 11: return "MasterYi"; break;
            case 44: return "Taric"; break;
            case 32: return "Amumu"; break;
            case 41: return "Gangplank"; break;
            case 48: return "Trundle"; break;
            case 38: return "Kassadin"; break;
            case 161: return "Vel'Koz"; break;
            case 143: return "Zyra"; break;
            case 267: return "Nami"; break;
            case 59: return "JarvanIV"; break;
            case 81: return "Ezreal"; break;
            case 555: return "Pyke"; break;
            case 145: return "Kaisa"; break;
            case 142: return "Zoe"; break;
            case 516: return "Ornn"; break;
            case 141: return "Kayn"; break;
            case 497: return "Rakan"; break;
            case 498: return "Xayah"; break;
            case 164: return "Camille"; break;
            case 350: return "Yuumi"; break;
            case 517: return "Sylas"; break;
            default: return "Draven"; break;
        }
    }

    public function spellid_to_spellname($id){
        switch($id){
            case 21: return "Barrier"; break;
            case 13: return "Mana"; break;
            case 1: return "Boost"; break;
            case 3: return "Exhaust"; break;
            case 4: return "Flash"; break;
            case 6: return "Haste"; break;
            case 7: return "Heal"; break;
            case 14: return "Dot"; break;
            case 11: return "Smite"; break;
            case 12: return "Teleport"; break;
            case 32: return "Snowball"; break;
            default: return "Dot"; break;
        }
    }


    public function user_match_history($id){
        $user = User::findOrFail($id);
        $user_id = $user->get_summoner_id($this->get_api_key());
        $account_id = $user->get_account_id($this->get_api_key());
        $match_list = $user->get_match_list($account_id, $this->get_api_key());
        foreach($match_list['matches'] as $match){
            $match_stats = $user->get_match_stats($match['gameId'], $this->get_api_key());
            foreach($match_stats['participantIdentities'] as $participant){
                if($participant['player']['accountId']==$account_id){
                    foreach($match_stats['participants'] as $player){
                        if($player['participantId']==$participant['participantId']){
                            foreach($match_stats['teams'] as $team){
                                if($team['teamId']==$player['teamId']){
                                    $kda = $player['stats']['deaths'] != 0 ? round(($player['stats']['kills']+$player['stats']['assists'])/$player['stats']['deaths'],1) : $player['stats']['kills']+$player['stats']['assists'];
                                    $player_matchs_info [] = [
                                        'championId' => $player['championId'],
                                        'championName' => $this->championid_to_championname($player['championId']),
                                        'win' => $player['stats']['win'],
                                        'spell1' => $this->spellid_to_spellname($player['spell1Id']),
                                        'spell2' => $this->spellid_to_spellname($player['spell2Id']),
                                        'runa1' => $player['stats']['perk0'],
                                        'runa2' => $player['stats']['perkSubStyle'],
                                        'kda' => $kda,
                                        'item0' => $player['stats']['item0'],
                                        'item1' => $player['stats']['item1'],
                                        'item2' => $player['stats']['item2'],
                                        'item3' => $player['stats']['item3'],
                                        'item4' => $player['stats']['item4'],
                                        'item5' => $player['stats']['item5'],
                                        'item6' => $player['stats']['item6'],
                                        'kills' => $player['stats']['kills'],
                                        'deaths' => $player['stats']['deaths'],
                                        'assists' => $player['stats']['assists'],
                                        'totalMinionsKilled' => $player['stats']['totalMinionsKilled'] + $player['stats']['neutralMinionsKilled'],
                                        'champLevel' => $player['stats']['champLevel'],
                                        'largestMultiKill' => $player['stats']['largestMultiKill'],
                                        'gameDuration' => gmdate('i:s',$match_stats['gameDuration']),
                                        'gameDurationSec' => $match_stats['gameDuration'],
                                        'queue' => $this->queueid_to_queuename($match_stats['queueId'])
                                    ];
                                }
                            }
                        }
                    }
                }
            } 
        }

        return response()->json([
            'player_matchs_info' => $player_matchs_info
        ]);
    }

    public function get_match_history(){
        return response()->json([
            'player_matchs_info' => [[
                "championId"=> 134,
                "championName"=> "Syndra",
                "win"=> false,
                "spell1"=> "Flash",
                "spell2"=> "Dot",
                "runa1"=> 8112,
                "runa2"=> 8200,
                "kda"=> 0.9,
                "item0"=> 1004,
                "item1"=> 3116,
                "item2"=> 3089,
                "item3"=> 3151,
                "item4"=> 1004,
                "item5"=> 1004,
                "item6"=> 3340,
                "kills"=> 4,
                "deaths"=> 11,
                "assists"=> 6,
                "totalMinionsKilled"=> 180,
                "champLevel"=> 16,
                "largestMultiKill"=> 1,
                "gameDuration"=> "33:23",
                "gameDurationSec"=> 2003,
                "queue"=> "NORMAL"
               ],
                [
                "championId"=> 69,
                "championName"=> "Cassiopeia",
                "win"=> true,
                "spell1"=> "Flash",
                "spell2"=> "Teleport",
                "runa1"=> 8010,
                "runa2"=> 8100,
                "kda"=> 5.8,
                "item0"=> 3157,
                "item1"=> 3040,
                "item2"=> 3027,
                "item3"=> 3151,
                "item4"=> 3089,
                "item5"=> 3116,
                "item6"=> 3340,
                "kills"=> 20,
                "deaths"=> 5,
                "assists"=> 9,
                "totalMinionsKilled"=> 249,
                "champLevel"=> 18,
                "largestMultiKill"=> 2,
                "gameDuration"=> "37:09",
                "gameDurationSec"=> 2229,
                "queue"=> "NORMAL"
               ],
                [
                "championId"=> 61,
                "championName"=> "Orianna",
                "win"=> true,
                "spell1"=> "Flash",
                "spell2"=> "Teleport",
                "runa1"=> 8360,
                "runa2"=> 8200,
                "kda"=> 2.5,
                "item0"=> 3285,
                "item1"=> 3165,
                "item2"=> 0,
                "item3"=> 3020,
                "item4"=> 0,
                "item5"=> 1056,
                "item6"=> 3340,
                "kills"=> 5,
                "deaths"=> 4,
                "assists"=> 5,
                "totalMinionsKilled"=> 157,
                "champLevel"=> 14,
                "largestMultiKill"=> 1,
                "gameDuration"=> "22:49",
                "gameDurationSec"=> 1369,
                "queue"=> "NORMAL"
               ],
                [
                "championId"=> 157,
                "championName"=> "Yasuo",
                "win"=> false,
                "spell1"=> "Flash",
                "spell2"=> "Dot",
                "runa1"=> 8010,
                "runa2"=> 8100,
                "kda"=> 1.2,
                "item0"=> 1055,
                "item1"=> 3046,
                "item2"=> 3006,
                "item3"=> 3091,
                "item4"=> 3031,
                "item5"=> 1053,
                "item6"=> 3340,
                "kills"=> 5,
                "deaths"=> 11,
                "assists"=> 8,
                "totalMinionsKilled"=> 167,
                "champLevel"=> 15,
                "largestMultiKill"=> 1,
                "gameDuration"=> "30:02",
                "gameDurationSec"=> 1802,
                "queue"=> "NORMAL"
               ],
                [
                "championId"=> 157,
                "championName"=> "Yasuo",
                "win"=> false,
                "spell1"=> "Flash",
                "spell2"=> "Dot",
                "runa1"=> 8010,
                "runa2"=> 8100,
                "kda"=> 0.3,
                "item0"=> 1055,
                "item1"=> 3087,
                "item2"=> 1018,
                "item3"=> 1038,
                "item4"=> 3006,
                "item5"=> 1037,
                "item6"=> 3340,
                "kills"=> 0,
                "deaths"=> 8,
                "assists"=> 2,
                "totalMinionsKilled"=> 185,
                "champLevel"=> 13,
                "largestMultiKill"=> 0,
                "gameDuration"=> "24:30",
                "gameDurationSec"=> 1470,
                "queue"=> "NORMAL"
               ],
                [
                "championId"=> 3,
                "championName"=> "Galio",
                "win"=> true,
                "spell1"=> "Flash",
                "spell2"=> "Teleport",
                "runa1"=> 8439,
                "runa2"=> 8300,
                "kda"=> 4,
                "item0"=> 1056,
                "item1"=> 3152,
                "item2"=> 3047,
                "item3"=> 3191,
                "item4"=> 0,
                "item5"=> 0,
                "item6"=> 3340,
                "kills"=> 2,
                "deaths"=> 2,
                "assists"=> 6,
                "totalMinionsKilled"=> 85,
                "champLevel"=> 10,
                "largestMultiKill"=> 1,
                "gameDuration"=> "15:44",
                "gameDurationSec"=> 944,
                "queue"=> "NORMAL"
               ],
                [
                "championId"=> 157,
                "championName"=> "Yasuo",
                "win"=> true,
                "spell1"=> "Flash",
                "spell2"=> "Dot",
                "runa1"=> 8010,
                "runa2"=> 8100,
                "kda"=> 2.4,
                "item0"=> 3052,
                "item1"=> 3087,
                "item2"=> 3031,
                "item3"=> 3006,
                "item4"=> 3072,
                "item5"=> 1037,
                "item6"=> 3340,
                "kills"=> 14,
                "deaths"=> 8,
                "assists"=> 5,
                "totalMinionsKilled"=> 221,
                "champLevel"=> 17,
                "largestMultiKill"=> 2,
                "gameDuration"=> "30:08",
                "gameDurationSec"=> 1808,
                "queue"=> "NORMAL"
               ],
                [
                "championId"=> 69,
                "championName"=> "Cassiopeia",
                "win"=> true,
                "spell1"=> "Flash",
                "spell2"=> "Teleport",
                "runa1"=> 8010,
                "runa2"=> 8100,
                "kda"=> 2.3,
                "item0"=> 1056,
                "item1"=> 3040,
                "item2"=> 3027,
                "item3"=> 1052,
                "item4"=> 1026,
                "item5"=> 1028,
                "item6"=> 3340,
                "kills"=> 1,
                "deaths"=> 3,
                "assists"=> 6,
                "totalMinionsKilled"=> 164,
                "champLevel"=> 14,
                "largestMultiKill"=> 1,
                "gameDuration"=> "25:28",
                "gameDurationSec"=> 1528,
                "queue"=> "NORMAL"
               ]]
        ]);
    }

    public function ranked_info($id){
        $user = User::findOrFail($id);
        $user_id = $user->get_summoner_id($this->get_api_key());
        $account_id = $user->get_account_id($this->get_api_key());

        return response()->json($user->get_ranked_stats($user_id, $this->get_api_key()));
    }

    public function profile_pro($id){
        $user = new User();
        $proplayer = ProPlayer::find($id);
        $accountId = $proplayer->get_account_id_by_puuid($this->get_api_key());
        $summonerId = $proplayer->get_summoner_id_by_puuid($this->get_api_key());
        $match_list = $user->get_match_list($accountId, $this->get_api_key());
        $aux_champion_mastery = $proplayer->get_champion_masteries($summonerId, $this->get_api_key());
        foreach($aux_champion_mastery as $champion){
            $champion_mastery [] = ['champion' => $this->championid_to_championname($champion['champion']), 'championPoints' =>  $champion['championPoints']];
        }
        foreach($match_list['matches'] as $match){
            $match_stats = $user->get_match_stats($match['gameId'], $this->get_api_key());
            foreach($match_stats['participantIdentities'] as $participant){
                if($participant['player']['currentAccountId']==$accountId){
                    foreach($match_stats['participants'] as $player){
                        if($player['participantId']==$participant['participantId']){
                            foreach($match_stats['teams'] as $team){
                                if($team['teamId']==$player['teamId']){
                                    $kda = $player['stats']['deaths'] != 0 ? round(($player['stats']['kills']+$player['stats']['assists'])/$player['stats']['deaths'],1) : $player['stats']['kills']+$player['stats']['assists'];
                                    $proplayer_matchs_info [] = [
                                        'championId' => $player['championId'],
                                        'championName' => $this->championid_to_championname($player['championId']),
                                        'win' => $player['stats']['win'],
                                        'spell1' => $this->spellid_to_spellname($player['spell1Id']),
                                        'spell2' => $this->spellid_to_spellname($player['spell2Id']),
                                        'runa1' => $player['stats']['perk0'],
                                        'runa2' => $player['stats']['perkSubStyle'],
                                        'kda' => $kda,
                                        'item0' => $player['stats']['item0'],
                                        'item1' => $player['stats']['item1'],
                                        'item2' => $player['stats']['item2'],
                                        'item3' => $player['stats']['item3'],
                                        'item4' => $player['stats']['item4'],
                                        'item5' => $player['stats']['item5'],
                                        'item6' => $player['stats']['item6'],
                                        'kills' => $player['stats']['kills'],
                                        'deaths' => $player['stats']['deaths'],
                                        'assists' => $player['stats']['assists'],
                                        'totalMinionsKilled' => $player['stats']['totalMinionsKilled'] + $player['stats']['neutralMinionsKilled'],
                                        'champLevel' => $player['stats']['champLevel'],
                                        'largestMultiKill' => $player['stats']['largestMultiKill'],
                                        'gameDuration' => gmdate('i:s',$match_stats['gameDuration']),
                                        'gameDurationSec' => $match_stats['gameDuration'],
                                        'queue' => $this->queueid_to_queuename($match_stats['queueId'])
                                    ];
                                }
                            }
                        }
                    }
                }
            }
        }

        return view('profilepro',[
            'proplayer_matchs_info' => $proplayer_matchs_info,
            'proplayer' => $proplayer,
            'champion_mastery' => $champion_mastery
        ]);
    }

    

    public function one_match($id){
        $user = User::find($id);
        $accountId = $user->get_account_id($this->get_api_key());
        $summonerId = $user->get_summoner_id($this->get_api_key());
        $match_list = $user->get_match_list($accountId, $this->get_api_key(), 1);
        foreach($match_list['matches'] as $match){
            $match_stats = $user->get_match_stats($match['gameId'], $this->get_api_key());
            foreach($match_stats['participantIdentities'] as $participant){
                if($participant['player']['currentAccountId']==$accountId){
                    foreach($match_stats['participants'] as $player){
                        if($player['participantId']==$participant['participantId']){
                            foreach($match_stats['teams'] as $team){
                                if($team['teamId']==$player['teamId']){
                                    $kda = $player['stats']['deaths'] != 0 ? round(($player['stats']['kills']+$player['stats']['assists'])/$player['stats']['deaths'],1) : $player['stats']['kills']+$player['stats']['assists'];
                                    $user_match_info [] = [
                                        'championId' => $player['championId'],
                                        'championName' => $this->championid_to_championname($player['championId']),
                                        'win' => $player['stats']['win'],
                                        'spell1' => $this->spellid_to_spellname($player['spell1Id']),
                                        'spell2' => $this->spellid_to_spellname($player['spell2Id']),
                                        'runa1' => $player['stats']['perk0'],
                                        'runa2' => $player['stats']['perkSubStyle'],
                                        'kda' => $kda,
                                        'item0' => $player['stats']['item0'],
                                        'item1' => $player['stats']['item1'],
                                        'item2' => $player['stats']['item2'],
                                        'item3' => $player['stats']['item3'],
                                        'item4' => $player['stats']['item4'],
                                        'item5' => $player['stats']['item5'],
                                        'item6' => $player['stats']['item6'],
                                        'kills' => $player['stats']['kills'],
                                        'deaths' => $player['stats']['deaths'],
                                        'assists' => $player['stats']['assists'],
                                        'totalMinionsKilled' => $player['stats']['totalMinionsKilled'] + $player['stats']['neutralMinionsKilled'],
                                        'champLevel' => $player['stats']['champLevel'],
                                        'largestMultiKill' => $player['stats']['largestMultiKill'],
                                        'gameDuration' => gmdate('i:s',$match_stats['gameDuration']),
                                        'gameDurationSec' => $match_stats['gameDuration'],
                                        'queue' => $this->queueid_to_queuename($match_stats['queueId'])
                                    ];
                                }
                            }
                        }
                    }
                }
            }
        }

        return response()->json($user_match_info);
    }
}

