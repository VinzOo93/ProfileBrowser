@includeFirst(['layouts.app'])


<h1>Profile Browser</h1>

<div class="tab-profile">
    @foreach($profiles as $profile)
        <div class="col">
            <button id="{{$profile->id}}" class="button-raw">{{$profile->name}}  </button>
            <div id="content-{{$profile->id}}" class="content">
                <div class="conainer">

                    <h3>{{$profile->name}}</h3>
                    <p><img class="profile-img" src="{{asset('images/'.$profile->photo)}}" alt="img-{{$profile->name}}">{{$profile->description}}</p></div>
            </div>
        </div>

    @endforeach
</div>
