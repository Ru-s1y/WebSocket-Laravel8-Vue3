<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="app">
        <header>
            <h1>Let's Talk!</h1>
            <input type="text" name="username" id="username" placeholder="Please Enter a username...">
        </header>
    </div>
    <div id="message"></div>
    <form id="message_form">
        <input type="text" name="message" id="message_input" placeholder="Write a message...">
        <button type="submit" id="message_send">Send Message</button>
    </form>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>