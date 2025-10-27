<?php

namespace App\Http\Controllers;

use App\Models\Playerinformation;
use App\Models\Board;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Events\PlayerCountUpdated;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

     public function room(Request $request){
        $action = $request->input('action');
        // 新しいプレイヤーを作成
        $player = new Playerinformation();
        $player->name = $request->name;
        $player->boards_id = 0;
        $player->settlement = 0;
        $player->city = 0;
        $player->max_road = 0;
        $player->knight = 0;
        $player->gamecard = 0;
        $player->lumber = 0;
        $player->brick = 0;
        $player->wheat = 0;
        $player->wool = 0;
        $player->iron = 0;
        $player->resource = 0;
        $player->score = 0;
        $player->turn = 0;
        $player->save();
       // 部屋作成か参加の分岐
        if($action === 'create'){
        $limit = $request->input('limit', 3);
        $board = new Board();
        $board->limit = $limit;
        $board->play = 1;
        $board->save();
        $player->boards_id = $board->id;
        $player->save();
        $player->turn = 1;
        
        return redirect('wait');
       }elseif($action === 'join'){
            return redirect('join');
        }
    }
    public function delete(Request $request){
        //DBのplayername削除ボタン
        Playerinformation::query()->delete();
        Board::query()->delete();
        return redirect('');
    }
    public function join(Request $request){
        $players = Playerinformation::where('boards_id','!=',0)->get();

        //wait画面の人に通知
         $playerName = $request->input('name');
         broadcast(new PlayerCountUpdated($playerName))->toOthers();

        return view("join",compact('players'));
    }
    public function wait(){
        $boardslimits = Board::get();//自分の部屋の情報のみを表示させる
        return view("wait",compact('boardslimits'));
    }

    public function game(Request $request)
{
    $boardId = $request->input('boards_id');
    $board = Board::find($boardId);

    // 必要に応じてログインユーザーの所属確認など入れる
    if (!$board) {
        abort(404);
    }

    return view('game', compact('board'));
}
}
