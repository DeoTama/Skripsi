<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkm;
use App\Review;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::all();
        $pkm = Pkm::all();
        return view('review.index', ['pkm' => $pkm]);
        return view('review.index', ['pkm' => $pkm, 'review' => $review]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showByReview() {
        $pkmkc = ['1', '2', '3', '4', '5', '6', '7'];
        $pkmp = ['8', '9', '10', '11', '12', '13', '14', '6', '7'];
        $pkmk = ['15', '16', '17', '18', '19', '6', '7'];
        $pkmm = ['20', '21', '22', '23', '24', '6', '7'];
        $pkmt = ['25', '26', '27', '28', '29', '6', '7'];

        if($pkm->jenis_pkm('PKM-KC')) {
            $users = Pkm::whereHas('reviews', static function($q) use ($pkmkc){
                return $q->whereIn('id', $pkmkc);
            })->get();
            return view('review.index', compact('review'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
