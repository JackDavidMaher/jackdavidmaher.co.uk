<x-layout>
    <x-slot name="title">Hitster</x-slot>
    <x-slot name="description">Team Based Music Knowledge Game</x-slot>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Hitster</h1>
        <p class="text-gray-700 mb-6">Team Based Music Knowledge Game</p>
    </div>

    <button onclick="connectSpotify()">Connect Spotify</button>
    <div id="result"></div>

    <script>
        function connectSpotify() {
            window.location.href = "/spotify/login";
        }

        async function getYear() {
            const res = await fetch('/spotify/current-year');
            const data = await res.json();

            if (!data.playing) {
                document.getElementById('result').innerText = "Nothing playing";
                return;
            }

            document.getElementById('result').innerText =
                `${data.track} (${data.year})`;
        }

        setInterval(getYear, 5000);
    </script>

</x-layout>