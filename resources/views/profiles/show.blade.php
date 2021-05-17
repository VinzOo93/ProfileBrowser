@includeFirst(['layouts.app'])
<div class="table-crud-2">
    <div class="navbar navigation">
        <nav>
            <ul>
                <li>
                    <a href="{{url('profiles')}}">Index Profile</a>
                </li>
            </ul>
        </nav>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Photo name</th>
            <th>Date created</th>
            <th>Last update</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody class="tbody-show">
            <tr>
                <td class="id">{{ $profile->id }}</td>
                <td class="name">{{ $profile->name }}</td>
                <td class="description">{{ $profile->description }}</td>
                <td class="photo">{{ $profile->photo }}<img class="profile-img" src="{{asset('images/'.$profile->photo)}}" alt="img-{{$profile->name}}"></td>
                <td class="created_at">{{ $profile->created_at }}</td>
                <td class="updated_at">{{ $profile->updated_at }}</td>
                <td>
                    <a href="{{url('profiles/'.$profile->id.'/update')}}">update</a>
                    <form method="POST" action="{{url('profiles/'.$profile->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

</div>

