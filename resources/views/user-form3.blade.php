<div>
    <h1 style="text-align: center;"><u>User Form-3 (form validation)</u></h1>
    <form action="adduser3" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Enter User Name" value="{{old('username')}}" 
            class="{{$errors->first('username')?'input-error':''}}">
            <span>@error('username') {{$message}} @enderror</span>
        </div>

        <div class="input-wrapper">
            <input type="text" name="email" placeholder="Enter User Email" value="{{old('email')}}" class="{{$errors->first('email')?'input-error':''}}">
            <span>@error('email') {{$message}} @enderror</span>
        </div>

        <div class="input-wrapper">
            <input type="text" name="city" placeholder="Enter User City" value="{{old('city')}}" class="{{$errors->first('city')?'input-error':''}}">
            <span>@error('city') {{$message}} @enderror</span>
        </div>

        <div class="input-wrapper">
            <h3>Skill</h3>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="HTML" id="html">
            <label for="html">HTML</label>
            <input type="checkbox" name="skill[]" value="Laravel" id="laravel">
            <label for="laravel">Laravel</label>
            <input type="checkbox" name="skill[]" value="JavaScript" id="javascript">
            <label for="javascript">JavaScript</label>
            <span>@error('skill') {{$message}} @enderror</span>
        </div>

        <div class="input-wrapper">
            <button>Add User</button>
        </div>
    </form>
</div>



<style>
    input[type="text"].input-error{
        border: 2px solid red;
        color: red;
    }
    input[type="text"] {
        border: 2px solid grey;
        height: 45px;
        width: 400px;
        border-radius: 5px;
        font-size: 20px;
    }

    .input-wrapper {
        margin: 10px;
    }

    label {
        font-size: 25px;
    }

    button {
        border: 2px solid gray;
        height: 40px;
        width: 100px;
        background-color: lightskyblue;
        border-radius: 8px;
        font-size: 15px;
    }

    span {
        color: red;
    }

</style>