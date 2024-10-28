<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="國立中興大學推廣教育組致力於提供多元學習機會。透過豐富的課程和專業師資，致力於滿足不同學習需求。無論您是尋求職業技能提升、專業知識更新，還是追求個人興趣的學習者，我們都提供包容性的學習環境。我們擁有先進的教學資源和熱忱的教學團隊，確保學員能夠在這裡取得實質的學習成果，成為學無止境的學習者。">
        <meta name="author" content="國立中興大學推廣教育組">
        <title inertia>{{ config('app.name', '國立中興大學推廣教育組') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="icon" href="/favicon.ico">

        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <noscript>
          <p>中興大學推廣教育組</p>
          <p>您的瀏覽器不支援 JavaScript 或 JavaScript已停用，請先至您的瀏覽器設定中開啟 JavaScript</p>
        </noscript>
        <noscript>Your browser does not support JavaScript. If the webpage function is not working properly, please open the browser JavaScript status.</noscript>
    </body>
</html>
