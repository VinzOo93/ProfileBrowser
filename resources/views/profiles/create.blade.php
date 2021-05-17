@includeFirst(['layouts.app'])
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
    <div>
        @if( $errors->any())
        <div class="alert alert-danger">
            <h4> Please enter all the values in required fields 😞 !!!</h4>
        </div>
        @endif
    </div>
    <form method="POST" action="{{asset('create')}}">
        @method('POST')
        @csrf
        <div class="line-form">
            <label for="name">name</label>
            <input class="name" id="name" name="name" type="text">
        </div>
        <div class="line-form">
            <label for="description">description</label>
            <textarea class="description" id="description" name="description" ></textarea>
        </div>
        <div class="line-form">
            <label for="photo">photo</label>
            <input  class="photo" id="photo" name="photo" type="text">
        </div>
        <button class="register">Register</button>
    </form>

</div>
