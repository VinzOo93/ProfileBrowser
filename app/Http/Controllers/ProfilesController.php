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
     * @return string
     */
    public function store(Request $request): string
    {
        $profile = new Profiles();

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'photo' => 'nullable|max: 1999',
        ]);
        $image = $request->file('photo');

        // upload image
        if ($image != null) {

            $filenameWithExt = $image->getClientOriginalName();

            // get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just Extension
            $extension = $image->getClientOriginalExtension();


            // String To store
            $fileNameToStore = $filename.'.'.$extension;


            // Upload Image
           $image->move(public_path('images'), $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $profile ->create([
          'name' => request('name'),
          'description' => request('description'),
          'photo' => $fileNameToStore,
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
     * @param Profiles $profile
     * @return Application|Factory|View
     */
    public function edit(Profiles $profile)
    {


        return view('profiles.edit', [
            'profile'  => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Profiles $profile
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, Profiles $profile)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'photo' => 'nullable|max: 1999',
        ]);
        $image = $request->file('photo');

        // upload image
        if ($image != null) {

            $filenameWithExt = $image->getClientOriginalName();

            // get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just Extension
            $extension = $image->getClientOriginalExtension();


            // String To store
            $fileNameToStore = $filename.'.'.$extension;


            // Upload Image
            $image->move(public_path('images'), $fileNameToStore);

        } else {
            // get back the string of a photo through the de DB
            $tab = $profile->find($profile,'photo');
            //convert the table object to string
            $string = $profile->getPhoto($tab[0]);
            // select only the name of the image in the string
            $fileNameToStore = substr($string, 10, -2);
        }


        $profile ->update([
            'name' => request('name'),
            'description' => request('description'),
            'photo' => $fileNameToStore,
            'created_at' => new \DateTime('now'),
            'updated_at' => '',

        ]);
        return redirect('/profiles')->with('success', 'Profile correctly updated !!');
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
