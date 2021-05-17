<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $profiles = Profiles::all();

        return view('profiles.profile_index', [
            'profiles'  => $profiles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $profile = new Profiles();


        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'photo' => 'required',
        ]);

      $profile ->create([
          'name' => request('name'),
          'description' => request('description'),
          'photo' => request('photo'),
          'created_at' => new \DateTime('now'),
          'updated_at' => '',

      ]);



        return redirect('/profiles')->with('success', 'New profile registred correctly !! ');

    }

    /**
     * Display the specified resource.
     *
     * @param Profiles $profile
     * @return Application|Factory|View
     */
    public function show(Profiles $profile)
    {
        return view('profiles.show', [
            'profile'  => $profile
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Profiles $profiles
     * @return Response
     */
    public function edit(Profiles $profiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Profiles $profiles
     * @return Response
     */
    public function update(Request $request, Profiles $profiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param Profiles $profile
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Profiles $profile)
    {
        $profile->delete();

        return redirect('/profiles')->with('success', 'Profile correctly deleted !!');

    }


}
