@includeFirst(['layouts.app'])

<h1>Profiles Manager</h1>
<div class="table-crud">
    <div class="navbar navigation">
        <nav>
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a class="create" href="{{url('profiles/create')}}">New Profile</a>
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
        <tbody>
        @foreach($profiles as $profile)
            <tr>
                <td class="id">{{ $profile->id }}</td>
                <td class="name">{{ $profile->name }}</td>
                <td class="description">{{ $profile->description }}</td>
                <td class="photo">{{ $profile->photo }}</td>
                <td class="created_at">{{ $profile->created_at }}</td>
                <td class="updated_at">{{ $profile->updated_at }}</td>
                <td>
                    <a href="">show</a>
                    <a href="">update</a>
                    <a href="">delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

</div>

