<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>駅提案システム</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center mb-10">駅提案システム</h1>
        <form action="{{ route('find-station') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="station1" class="block text-gray-700">駅1:</label>
                <input type="text" id="station1" name="station1" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="station2" class="block text-gray-700">駅2:</label>
                <input type="text" id="station2" name="station2" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-black py-2 px-4 rounded hover:bg-blue-600">提案された駅を探す</button>
        </form>
    </div>
</body>
</html>
