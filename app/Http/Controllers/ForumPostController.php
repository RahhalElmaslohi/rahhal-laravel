<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\Etudient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ForumPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = ForumPost::all();
        return view('forum.index', ['forums'=>$forums]);
        //return $forums[0]->title;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            //insert -> lastid  => select where lastId
            $newPost = forumPost::create([
                'title' => $request->title,
                'body'  => $request->body,
                'users_id' => Auth::user()->id

            ]);

            return redirect(route('forum.show', $newPost->id));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\forumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function show(forumPost $forumPost)
    {

           //select * from forum_posts where id = $forumPost"
        return view('forum.show', ['forumPost' => $forumPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function edit(forumPost $forumPost)
    {


        return view('forum.edit', ['forumPost' => $forumPost
                                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\forumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forumPost $forumPost)
    {
        //update where forumPost->id  => select where forumPost->id
        $forumPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect(route('forum.show', $forumPost->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(forumPost $forumPost)
    {
        $forumPost->delete();

        return redirect(route('forum.index'));
    }



    public function page(){
        $forumPosts = forumPost::select()
                ->paginate(5);

                return view('forum.page', ['forumPosts' => $forumPosts]);
    }
}
