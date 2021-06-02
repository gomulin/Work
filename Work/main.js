document.querySelector("#message_form").addEventListener("submit", function(event) {
    event.preventDefault();

    const data = {
        message: event.target.message_input.value,
        user_name: document.querySelector("#username").innerHTML,
    };

    event.target.message_input.value = "";

    fetch("/SendMessage.php", {
        method: "post",
        headers: {
            "Content-type": "application/json"
        },
        body: JSON.stringify(data),
    });
});

setInterval(function() {
    fetch("/GetChatHistory.php", {
        method: "post",
        headers: {
            "Content-type": "application/json",
        },
    }).then(response => response.json()).then(data => {
        const messageStore = document.querySelector("#message_store");
        messageStore.innerHTML = "";
        data.reverse().forEach(message => {
            messageStore.innerHTML +=
                `<div class="message-card">
                    <h5 class="message-card__title">${message.user_name}</h5>
                    <p class="message-card__message">${message.message}</p>
                </div>`

        });
    })
}, 1000);