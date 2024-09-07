<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>提案結果</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center mb-10">提案された駅</h1>
        <div class="bg-white p-6 rounded shadow-md text-center">
            <p>駅1: {{ $station1 }}</p>
            <p>駅2: {{ $station2 }}</p>
            <p class="text-xl font-bold mt-4">提案された駅は <span class="text-blue-500">{{ $suggestedStation }}</span> です。</p>
        </div>
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-blue-500 hover:underline">戻る</a>
        </div>
    </div>
</body>
</html>
