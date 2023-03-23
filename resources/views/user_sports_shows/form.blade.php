<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPORTS VIEW</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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




  <!------------------------------------- 全回答者数 ------------------------------------->
  <div class="flex flex-wrap justify-center">
    <div class="w-full md:w-1/2 xl:w-1/3 pt-3">
      <!--Metric Card-->
      <div class="bg-white border rounded shadow p-2">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
          </div>
          <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-500">総回答者数</h5>
            <h3 class="font-bold text-3xl">249</h3>
          </div>
        </div>
      </div>
    </div> 
  </div>





  <!------------------------------------- フロー図・フォームの全体構成 ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 pb-12 pt-6 mx-auto flex flex-wrap">
      <div class="flex flex-wrap w-full bg-gray-500/10 rounded-lg">
        <div class="lg:w-2/5 md:w-1/2 px-10 md:py-10">
          <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-yellow-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 1</h2>
              <p class="leading-relaxed">興味のある試合を選ぼう！</p>
            </div>
          </div>
          <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-yellow-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
              <p class="leading-relaxed">試合に関するアンケートに答えよう！</p>
            </div>
          </div>
          <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-yellow-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <circle cx="12" cy="5" r="3"></circle>
                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 3</h2>
              <p class="leading-relaxed">みんなの意見を見てみよう！</p>
            </div>
          </div>
          <div class="flex relative">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-yellow-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 4</h2>
              <p class="leading-relaxed">リアルタイムで反映される集計結果や掲示板に書き込み、試合に参加しよう！</p>
            </div>
          </div>
          <!-- <div class="flex relative">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-yellow-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
              <p class="leading-relaxed">Pitchfork ugh tattooed scenester echo park gastropub whatever cold-pressed retro.</p>
            </div>
          </div> -->
        </div>



        <!------------------------------------- フォームの内容 ------------------------------------->
        <div class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12">
        <form class="w-full max-w-lg mx-auto mt-6 mb-6">

          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-full px-3 mb-6 md:mb-0">
              <div class="flex mb-2">
                <text class="text-white bg-red-500 font-normal text-sm ml-2 p-0.5 rounded-md">
                  必須
                </text>
                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold my-1 ml-2" for="grid-first-name">
                  あなたのニックネームを教えてください。
                </label>
              </div>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="ジーズの大ちゃん">
            </div>
          </div>

          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                どっちのチームが勝つと思う？
              </label>
              <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>チーム1</option>
                  <option>チーム2</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
            </div>

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                予備領域
              </label>
              <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>回答1</option>
                  <option>回答2</option>
                  <option>回答3</option>
                  <option>回答4</option>
                  <option>回答5</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
            </div>
          </div>

          <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
            何点でゲームセットすると思う？
          </label>
          <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                日本
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
            </div>
            <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
              <div class="relative mt-6">
                <div class="block appearance-none w-full py-3 text-center rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  VS
                </div>
              </div>
            </div>
            <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                メキシコ
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
            </div>
          </div>

          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                この試合で誰を応援する？
              </label>
              <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>選手1</option>
                  <option>選手2</option>
                  <option>選手3</option>
                  <option>選手4</option>
                  <option>選手5</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
            </div>

            <div class="w-full md:w-1/2 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
                その選手に投げ銭するとしたら？
              </label>
              <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>1円</option>
                  <option>10円</option>
                  <option>100円</option>
                  <option>1000円</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
            </div>
          </div>

          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-password">
                応援する選手へコメントを書こう！
              </label>
              <textarea cols="30" rows="8" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="textbox" placeholder="○○選手の今日の活躍が楽しみです！応援しています。"></textarea>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </section>

  <div class="flex justify-center">
    <a href="{{ route('user.show') }}">
      <input class="mb-10 py-3 px-8 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold 
      bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition-all 
      text-sm dark:focus:ring-offset-gray-800" type="submit" value="送信する">
    </a>
  </div> 







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


