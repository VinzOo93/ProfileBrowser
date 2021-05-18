@includeFirst(['layouts.app'])
<h1> Insert a new profile</h1>
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
    <form method="POST" action="{{asset('create')}}" enctype="multipart/form-data">
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
            <input  class="photo" id="" name="photo" type="file">
        </div>
        <button class="register">Register</button>
    </form>

</div>
