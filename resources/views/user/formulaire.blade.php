@extends('template')
@section('content')

    <form class="" action="{{ url('/register') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firstname">firstname</label>
            <input type="text" class="form-control" name="firstname" placeholder="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">lastname</label>
            <input type="text" class="form-control" name="lastname" placeholder="lastname">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control">
                <option value="men">men</option>
                <option value="women">women</option>
            </select>
        </div>
        <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="newsletter" value="yes"> suscribe to newsletter
              </label>
            </div>
        </div>
        <div class="form-group">
            <div class="radio">
              <label>
                <input type="radio" name="mood" value="happy" checked>
                    Happy
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="mood" value="sad">
                    Sad
              </label>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection
