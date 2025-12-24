<x-layout>
    <div id="main">
        <section class="post">
            <header class="major">
                <h1>Chet JiPeeTi</h1>
            </header>

            <form autocomplete="off" onsubmit="sendPrompt(event)">
                <label for="prompt">Enter your Prompt Here:</label>
                <textarea id="prompt" name="prompt" required></textarea>
                <br>
                <button type="submit">Send</button><br>
                <div id="chatBox" class="chat-box"></div>
                <p id="response"
                    style="margin-top: 20px;padding: 15px;min-height: 120px;border: 2px solid #440000ff;border-radius: 1px;background-color: #fafafa;white-space: pre-wrap;font-family: monospace;">
                </p>
            </form>
        </section>



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