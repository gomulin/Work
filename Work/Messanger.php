<div class="container">
    <p>
        <strong id="username"><?= $_SESSION['user'][0] ?></strong> ||
        <a href="index.php?link=logout">Выйти</a>
    </p>
    <form id="message_form" class="margin-bottom">
        <fieldset>
            <legend>Написать сообщение</legend>
            <textarea name="message_input" col="64" placeholder="Введите сообщение"></textarea>
            <button type="submit">Отправить</button>
        </fieldset>
    </form>
    <div id="message_store"></div>
</div>
<script src="main.js"></script>