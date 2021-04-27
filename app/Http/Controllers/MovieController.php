<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('movies');
    }

    /**
     * Display add movie form.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_movie_form()
    {
        return view('add_movie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // //validation
        // $this -> validate($request, [
        //     'movie_name' => 'required|max:255',
        //     'link' => 'required',
        //     'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
        // ]);

        //insert into DB
        $name = $request->file('movie_img')->getClientOriginalName();
        $request->file('movie_img')->store('public/images/');
        
        //dd($request->user()->id);
        // $request->user()->movies()->create([
        //     'name'=> $request -> movie_name,
        //     'image'=> $name,
        //     'description'=> $request -> movie_description,
        //     'link'=> $request -> link,
        //     'rate'=> $request -> rate,
        //     'year'=> $request -> year,
        // ]);
        $movie = new Movie();

        $movie->name = $request->movie_name;
        $movie->description = $request->description;
        $movie->image = $name;
        $movie->user_id = $request->user()->id;
        $movie->link = $request->link;
        $movie->downloads = 0;
        $movie->rate = $request->rate;
        $movie->year = $request->year;
        $movie->save();

        return redirect()->back()->with('success', 'Your Movie was added successfully!');;
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



    /**
     * Search for the specified movie
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        //
    }
}
