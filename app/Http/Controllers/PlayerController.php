<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Player;
class PlayerController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return Player::with(['team', 'user'])->get();
        return Player::select('players.id', 'first_name', 'last_name', 'team_id', 'name', 'color', 'practice_night')->join('teams', 'team_id', '=', 'teams.id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $player = new Player;
        $player-> first_name = request('first_name');
        $player-> last_name = request('last_name');
        $player-> team_id = request('team_id');
        $player-> user_id = request('user_id');
        $player->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Player::where('players.id', $id)
            ->select('players.id', 'first_name', 'last_name', 'team_id', 'name', 'color', 'practice_night')
            ->join('teams', 'team_id', '=', 'teams.id')
            ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $player = Player::updateOrCreate(
            ['id'=> request('id')],
            ['first_name' => request('first_name'),
            'last_name' => request('last_name'),        
            'team_id' => request('team_id')]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Player::find($id)->delete();
    }

    // playerList
    // teamList
    // gameList

    // get my games given player id
    //     use player id to get team id
    //         use team id to get home games
    //         use team id to get away games
    //         merge two game arrays
    //         sort by date

}
