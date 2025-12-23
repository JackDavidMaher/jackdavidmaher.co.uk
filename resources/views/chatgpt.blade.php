<x-layout>
    <div id="main">
        <section class="post">
            <header class="major">
                <h1>Chet JeePeeTee</h1>
            </header>

            <form onsubmit="sendPrompt(event)">
                <label for="prompt">Enter your Prompt Here:</label>
                <input type="text" id="prompt" name="prompt" required>
                <br><br>
                <button type="submit">Prompt</button>
            </form>
        </section>

        <p id="response"></p>

        <script>
            function sendPrompt(event) {
                event.preventDefault();

                const prompt = document.getElementById("prompt").value;

                fetch("/chat", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ prompt })
                })
                .then(res => res.json())
                .then(data => {
                    document.getElementById("response").innerText = data.reply;
                });
            }
        </script>
    </div>
</x-layout>
