<x-message-banner msg="User Login Successfully" class="success" />
<x-message-banner msg="User Signup Successfully" class="success" />
<br>
<br>
<x-message-banner msg="User Login Failed" class="alert" />
<br>
<br>
<x-message-banner msg="User Signup Failed" class="warning" />

<h1>Home Page 1</h1>

<style>
    .success {
        background: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .alert {
        background: lightsalmon;
        color: red;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .warning {
        background: orange;
        color: yellow;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
</style>