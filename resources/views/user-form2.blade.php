<div>
    <h1 style="text-align: center;">User Form-2</h1>
    <form action="adduser2" method="post">
        @csrf

        <div class="form-wrapper">
            <h3>Skill</h3>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Laravel" id="laravel">
            <label for="laravel">Laravel</label>
            <input type="checkbox" name="skill[]" value="JavaScript" id="javascript">
            <label for="javascript">JavaScript</label>
            <input type="checkbox" name="skill[]" value="JQuery" id="jquery">
            <label for="jquery">JQuery</label>
        </div>

        <div class="form-wrapper">
            <h3>Gender</h3>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label>
        </div>

        <div class="form-wrapper">
            <h3>Age</h3>
            <input type="range" name="age" min="10" max="60">
        </div>

        <div class="form-wrapper">
            <h3>City</h3>
            <select name="city">
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="Aurangabad">Aurangabad</option>
                <option value="Nasik">Nasik</option>
                <option value="Thane">Thane</option>
            </select>
        </div>

        <div class="form-wrapper">
            <button>Add User</button>
        </div>
    </form>
</div>
<style>

.form-wrapper{
        margin: 10px;
    }

     button{
        background-color: lightskyblue;
        border-radius: 8px;
    }
</style>
