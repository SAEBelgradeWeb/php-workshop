<?php require 'partials/header.view.php' ?>

<h1>Contact us</h1>

<form action="/submit-form" method="post">

    <label for="message">Type your message</label>
    <div>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <button>Send</button>
</form>

<?php require 'partials/footer.view.php' ?>
