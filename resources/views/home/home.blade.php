@includeFirst(['layouts.app'])


<h1>Profile Browser</h1>

<div class="tab-profile">
    @foreach($profiles as $profile)
    <div class="col">
              <button  id="{{$profile->id}}" class="button-raw">{{$profile->name}}  </button>
        <div class="content">
            <h3>{{$profile->name}}</h3>
            <img class="profile-img" src="{{asset('images/'.$profile->photo)}}" alt="img-{{$profile->name}}">
            <p>{{$profile->description}}</p>
        </div>
    </div>

    @endforeach
</div>
