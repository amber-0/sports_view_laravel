<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPORTS VIEW</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-yellow-50">

  <!------------------------------------- header ------------------------------------->
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <!-- アイコン -->
        <img src="img/icon.png" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full">
        <span class="ml-3 text-xl">SPORTS VIEW</span>
      </a>
      <!-- <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900">First Link</a>
        <a class="mr-5 hover:text-gray-900">Second Link</a>
        <a class="mr-5 hover:text-gray-900">Third Link</a>
        <a class="mr-5 hover:text-gray-900">Fourth Link</a>
      </nav>
      <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
        Start Now
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button> -->
    </div>
  </header>





  <!------------------------------------- 試合概要 ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-16 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="img/20230319-00310055-theanswer-000-4-view.jpg">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Mexico vs Japan
        </h1>
        <p class="mb-8 leading-relaxed">ＷＢＣ５大会連続の準決勝進出を決めた侍ジャパンの相手がメキシコに決まった。１次ラウンドＣ組では米国を撃破し１位通過、さらに準々決勝・プエルトリコ戦では４点差をひっくり返して勝利を収め、大会初の準決勝進出となった。</p>
        <div class="flex justify-center">
          <a href="{{ route('user.form') }}">
            <button class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">参加する</button>
          </a>
          </div>
      </div>
    </div>
  </section>





<!-- 区切り線 -->
<hr class="border-b-1 border-gray-400 my-2 mx-40">





  <!------------------------------------- 選手群1 ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-16 mx-auto">
      <div class="flex flex-col text-center w-full mb-5">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Mexico</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">メキシコ代表は5大会連続出場を誇るWBCの常連国。今大会では1次ラウンド初戦でコロンビア代表に敗れたものの、2戦目で優勝候補のアメリカ代表に勝利した。
          その後もイギリス代表、カナダ代表に連勝し準々決勝ラウンドに進出。プエルトリコ代表と対戦した準々決勝では初回に4点を失うも、小刻みに得点を奪い逆転勝ちを収め初のベスト4進出を決めた。
        </p>
      </div>
      <!-- 以下、大ちゃんに選手名入れてもらう -->
      <div class="flex flex-wrap -m-2">
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
              <p class="text-gray-500">UI Designer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/84x84">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Henry Letham</h2>
              <p class="text-gray-500">CTO</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/88x88">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
              <p class="text-gray-500">Founder</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
              <p class="text-gray-500">DevOps</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/94x94">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Martin Eden</h2>
              <p class="text-gray-500">Software Engineer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/98x98">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Boris Kitua</h2>
              <p class="text-gray-500">UX Researcher</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/100x90">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Atticus Finch</h2>
              <p class="text-gray-500">QA Engineer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/104x94">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Alper Kamu</h2>
              <p class="text-gray-500">System</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/108x98">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Rodrigo Monchi</h2>
              <p class="text-gray-500">Product Manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




<!-- 区切り線 -->
<hr class="border-b-1 border-gray-400 my-2 mx-40">




  <!------------------------------------- 選手群2 ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-16 mx-auto">
      <div class="flex flex-col text-center w-full mb-5">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Japan</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">2006年の第一回大会から、今回で五度目となるWBC。日本は３大会ぶりの優勝を果たせるか、国民の大きな注目を浴びている。
          3月16日のイタリア戦で大勝した日本は、米国・マイアミで開催される決勝シリーズに駒を進め、メキシコ（プールC１位）と日本時間3月21日（火）の８時から準決勝を戦うこととなった。</p>
      </div>

      <!-- 以下、大ちゃんに選手名入れてもらう -->
      <div class="flex flex-wrap -m-2">
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
              <p class="text-gray-500">UI Designer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/84x84">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Henry Letham</h2>
              <p class="text-gray-500">CTO</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/88x88">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
              <p class="text-gray-500">Founder</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
              <p class="text-gray-500">DevOps</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/94x94">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Martin Eden</h2>
              <p class="text-gray-500">Software Engineer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/98x98">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Boris Kitua</h2>
              <p class="text-gray-500">UX Researcher</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/100x90">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Atticus Finch</h2>
              <p class="text-gray-500">QA Engineer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/104x94">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Alper Kamu</h2>
              <p class="text-gray-500">System</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/108x98">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Rodrigo Monchi</h2>
              <p class="text-gray-500">Product Manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!------------------------------------- footer ------------------------------------->
  <footer class="text-gray-600 body-font bg-gray-100">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <!-- アイコン -->
        <img src="img/icon.png" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full">
        <span class="ml-3 text-xl">SPORTS VIEW</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2023 SPORTS VIEW Inc.
      </p>

      <!-- 各種SNSアイコンの表示 -->
      <!-- <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span> -->

    </div>
  </footer>
</body>
</html>


