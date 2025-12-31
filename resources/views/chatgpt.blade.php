<x-layout>
    <div id="main">
        <section class="post">
            <header class="major">
                <h1>Chet GiPeeTi</h1>
                <p>Hotel Penzance is testing small/medium cleanly formated sites. <br>UBSport is testing small/medium messily formated sites. <br>Hotel Califonia is testing very small cleanly formated sites.</p>
            </header>

            <form autocomplete="off" id="chatForm">
                <label for="prompt">Enter your Prompt Here:</label>
                <textarea id="prompt" name="prompt" required style="width: 100%; min-height: 100px;border: 2px solid #440000ff;border-radius: 1px; max-height: 400px; overflow-y: hidden; resize: none;"></textarea>
                <br>
                <button type="button" onclick="sendPrompt('HotelPenzance')">Send (Hotel Penzance)</button>
                <button type="button" onclick="sendPrompt('UBSport')">Send (UBSport)</button>
                <button type="button" onclick="sendPrompt('HotelCalifornia')">Send (Hotel California)</button>
                <br>
                <div id="chatBox" class="chat-box"></div>
                <p id="response"
                    style="margin-top: 20px;padding: 15px;min-height: 120px;border: 2px solid #440000ff;border-radius: 1px;background-color: #fafafa;white-space: pre-wrap;font-family: monospace;">
                </p>
            </form>
        </section>



        <script>
            const textarea = document.getElementById('prompt');

                textarea.addEventListener('input', autoResize, false);
                function autoResize() {
                    this.style.height = 'auto';
                    this.style.height = this.scrollHeight + 'px';
                }
            function sendPrompt(type) {
                const userPrompt = document.getElementById("prompt").value;
                const responseEl = document.getElementById("response");
                
                console.log("Button clicked:", type);
                console.log("User input:", userPrompt);

                const pleaseWaitMessage = ["Licking Battery","Solving Quantum Equations","Reticulating Splines","Calculating Infinite Improbabilities","Aligning Bits","Charging Flux Capacitors","LEROOOOOY JENKINS!!!!","Polishing Pixels","Debugging the Matrix","Counting to Infinity","Warming up the Hamsters","Consulting the Magic 8-Ball","Spinning up the Servers","Feeding the Gremlins","Tuning the Antennae","Recalibrating Sensors","Sharpening Pencils","Brewing Coffee","Synchronizing Clocks","Taking Tea Break","Charging Neural Networks","Adjusting the Dials","Loading the Fun","Preparing Awesomeness","Generating Randomness","Optimizing Happiness","Building Sandcastles","Painting Rainbows","Catching Fireflies","Chasing Butterflies","Finding Nemo","Counting Sheep","Juggling Flaming Torches","Taming Dragons","Mining for Gold","Exploring the Cosmos","Mapping the Genome","Composing Symphonies","Writing Novels","Designing Rollercoasters","Inventing New Flavors","Training Unicorns","Negotiating with Aliens"];

                responseEl.innerText = "Sending Request"
                const thinkingInterval = setInterval(() => {
                    responseEl.innerText = pleaseWaitMessage[Math.floor(Math.random() * pleaseWaitMessage.length)];;
                }, 450);

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
                        clearInterval(thinkingInterval); // Stop updating once response arrives
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