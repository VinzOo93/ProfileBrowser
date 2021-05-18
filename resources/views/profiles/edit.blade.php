@includeFirst(['layouts.app'])
<h1>Updating profile of {{$profile->name}}</h1>
<div class="tab-form">
    <div class="navbar navigation">
        <nav>
            <ul>
                <li>
                    <a href="{{url('profiles')}}">Index Profiles</a>
                </li>
            </ul>
        </nav>
    </div>
    <form method="POST" action="{{asset('profiles/'.$profile->id)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="line-form">
            <label for="name">name</label>
            <input class="name" id="name" name="name" type="text" value="{{$profile->name}}">
        </div>
        <div class="line-form">
            <label for="description">description</label>
            <textarea class="description" id="description" name="description">{{$profile->description}}</textarea>
        </div>
        <div class="line-form">
            <label for="photo">photo</label>
            <input  class="photo" id="photo" name="photo" type="file" >
        </div>
        <button class="register">Register</button>
    </form>

</div>
