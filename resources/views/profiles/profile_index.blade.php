@includeFirst(['layouts.app'])

<h1>Profiles Manager</h1>
<div class="table-crud">
    <div class="navbar navigation">
        <nav>
            <ul>
                <li>
                    <a class="home" href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a class="create" href="{{url('profiles/create')}}">New Profile</a>
                </li>
            </ul>
        </nav>
    </div>
    <div>
        @if( session()->has('success'))
            <div class="success alert-danger">
                <h4>Your action has been registered correctly 😀 !! </h4>
                <p>{{session()->get('success')}}</p>
            </div>
        @endif
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
        <tbody class="t-body-index">
        @foreach($profiles as $profile)
            <tr>
                <td class="id">{{ $profile->id }}</td>
                <td class="name">{{ $profile->name }}</td>
                <td class="description">{{ $profile->description }}</td>
                <td class="photo">{{ $profile->photo }}</td>
                <td class="created_at">{{ $profile->created_at }}</td>
                <td class="updated_at">{{ $profile->updated_at }}</td>
                <td>
                    <a href="{{url('/profiles/'.$profile->id.'/show')}}">show</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

</div>

