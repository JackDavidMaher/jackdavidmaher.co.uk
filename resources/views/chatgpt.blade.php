<x-layout>
    <div id="main">
        <section class="post">
            <header class="major">
                <h1>Chet GiPeeTi</h1>
            </header>

            <form autocomplete="off" id="chatForm">
                <label for="prompt">Enter your Prompt Here:</label>
                <textarea id="prompt" name="prompt" required></textarea>
                <br>
                <button type="button" onclick="sendPrompt('HotelPenzance')">Send (Hotel Penzance)</button>
                <button type="button" onclick="sendPrompt('UBSport')">Send (UBSport)</button>
                <br>
                <div id="chatBox" class="chat-box"></div>
                <p id="response"
                    style="margin-top: 20px;padding: 15px;min-height: 120px;border: 2px solid #440000ff;border-radius: 1px;background-color: #fafafa;white-space: pre-wrap;font-family: monospace;">
                </p>
            </form>
        </section>



        <script>
            function sendPrompt(type) {
                const userPrompt = document.getElementById("prompt").value;
                console.log("Button clicked:", type);
                console.log("User input:", userPrompt);
                fetch("/chat", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ prompt:userPrompt, type })
                })
                    .then(res => res.json())
                    .then(data => {
                        console.log("Server reply:", data);
                        document.getElementById("response").innerText = data.reply;
                    })
                    .catch(err => {
                        console.error("Fetch error:", err);
                        document.getElementById("response").innerText = "Error: " + err;
                    });
            }
        </script>
    </div>
</x-layout>