<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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

    
    public function store(Request $request)
    {
        //dd($request->user()->id);
        //validation

        
        $this -> validate($request, [
            'movie_name' => ['required', 'string', 'max:255'],
            'link' => ['required', 'url'],
            'movie_img' => ['required'],
            'rate' => ['integer', 'max:10', 'min:1'],
            'year' => ['required', 'integer', 'digits:4', 'min:1900', 'max:'.(date('Y')+1)],
        ]);

        

        //insert into DB
        $name = $request->file('movie_img')->getClientOriginalName();
        $request->file('movie_img')->store('public/images/');
        $user_id = $request->user()->id;
        Movie::create([
            'name'=> $request -> movie_name,
            'image'=> $name,
            'description'=> $request -> movie_description,
            'link'=> $request -> link,
            'downloads'=>0,
            'rate'=> $request -> rate,
            'year'=> $request -> year,
            'user_id'=> $user_id,
        ]);
        
        // $movie = new Movie();

        // $movie->name = $request->movie_name;
        // $movie->description = $request->description;
        // $movie->image = $name;
        // $movie->user_id = $request->user()->id;
        // $movie->link = $request->link;
        // $movie->downloads = 0;
        // $movie->rate = $request->rate;
        // $movie->year = $request->year;
        // $movie->save();

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
