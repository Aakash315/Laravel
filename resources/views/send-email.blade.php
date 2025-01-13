<div>
    <h1>Add details for Email</h1>
    <form action="send-email" method="post">
        @csrf
        <div>
            <input type="text" name="to" placeholder="Enter Email Address">
        </div>
        <br>
        <div>
            <input type="text" name="subject" placeholder="Enter Email Subject">
        </div>
        <br>
        <div>
            <textarea name="message" placeholder="Enter Message"></textarea>
        </div>
        <br>
        <div>
            <button>Send Email</button>
        </div>
    </form>
</div>
