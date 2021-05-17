@includeFirst(['layouts.app'])

<h1>Profiles Manager</h1>
<div class="table-crud">
    <div class="navbar navigation">
        <nav>
            <ul>
                <li>
                    <a href="{{url('/')}}">home</a>
                </li>
            </ul>
        </nav>
    </div>
    @foreach($profiles as $profile)

    @endforeach
</div>

