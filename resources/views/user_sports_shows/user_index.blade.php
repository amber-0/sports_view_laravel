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
    <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
      <a class="flex items-center mb-4 font-medium text-gray-900 title-font md:mb-0">
        <!-- アイコン -->
        <img src="img/icon.png" class="w-10 h-10 p-2 text-white bg-yellow-500 rounded-full">
        <span class="ml-3 text-xl">SPORTS VIEW</span>
      </a>
      <!-- <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
        <a class="mr-5 hover:text-gray-900">First Link</a>
        <a class="mr-5 hover:text-gray-900">Second Link</a>
        <a class="mr-5 hover:text-gray-900">Third Link</a>
        <a class="mr-5 hover:text-gray-900">Fourth Link</a>
      </nav>
      <button class="inline-flex items-center px-3 py-1 mt-4 text-base bg-gray-100 border-0 rounded focus:outline-none hover:bg-gray-200 md:mt-0">
        Start Now
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button> -->
    </div>
  </header>


  <!------------------------------------- 以下、見たい試合を選択するgalary ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col w-full mb-10 text-center">
        <h1 class="text-2xl font-medium text-gray-900 sm:text-3xl title-font">WBC</h1>
        <!-- 下線 -->
        <span class="h-1 mx-auto mt-2 mb-4 text-center bg-yellow-500 rounded w-14"></span>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">3月8日〜22日までWBC開幕中<br>世界一、baseballが暑い場所はここにある。
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/america_vs_venezuela.jpg">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">QUATER FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">America vs Venezuela</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/puertorico_vs_mexico.jpg">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">QUATER FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Puerto Rico vs Mexico</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/cuba_vs_america.jpg">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">SEMIFINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Cuba vs America</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <a href="{{ route('user.mexico_vs_japan') }}">
              <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/mexico_vs_japan.jpg">
              <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">SEMIFINAL</h2>
                <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Mexico vs Japan</h1>
                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/final.jpg">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Unknown vs Unknown</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="https://dummyimage.com/600x360">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">THE SUBTITLE</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <button type="button" class="inline-flex items-center justify-center gap-2 px-8 py-3 mt-20 text-sm font-semibold text-white transition-all bg-yellow-500 border border-transparent rounded-full hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
        もっと見る
        </button>
      </div>
    </div>
    <!-- 区切り線 -->
    <hr class="mx-40 my-2 border-gray-400 border-b-1">
  </section>





  <!------------------------------------- 以下、見たい試合を選択するgalary ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col w-full mb-10 text-center">
        <h1 class="text-2xl font-medium text-gray-900 sm:text-3xl title-font">プロ野球</h1>
        <!-- 下線 -->
        <span class="h-1 mx-auto mt-2 mb-4 text-center bg-yellow-500 rounded w-14"></span>
        <!-- 大ちゃん文章挿入 -->
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">プロたちの試合を刮目せよ。<br>世界一暑い場所はここにある。
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/fighters_vs_eagles.png">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">QUATER FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">America vs Venezuela</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/giants_vs_dragons.png">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">QUATER FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Puerto Rico vs Mexico</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/haws_vs_marines.png">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">SEMIFINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Cuba vs America</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/lions_vs_buffalos.png">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">SEMIFINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Mexico vs Japan</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/swallows_vs_carp.png">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Unknown vs Unknown</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="img/tigers_vs_baystars.png">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">THE SUBTITLE</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <button type="button" class="inline-flex items-center justify-center gap-2 px-8 py-3 mt-20 text-sm font-semibold text-white transition-all bg-yellow-500 border border-transparent rounded-full hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
        もっと見る
        </button>
      </div>
    </div>
    <!-- 区切り線 -->
    <hr class="mx-40 my-2 border-gray-400 border-b-1">  
  </section>





  <!------------------------------------- 以下、見たい試合を選択するgalary ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col w-full mb-10 text-center">
        <h1 class="text-2xl font-medium text-gray-900 sm:text-3xl title-font">全国高校野球選手権大会</h1>
        <!-- 下線 -->
        <span class="h-1 mx-auto mt-2 mb-4 text-center bg-yellow-500 rounded w-14"></span>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">球児達のドラマに涙する瞬間<br>世界一暑い場所はここにある。
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="https://dummyimage.com/600x360">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">QUATER FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">America vs Venezuela</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="https://dummyimage.com/600x360">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">QUATER FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Puerto Rico vs Mexico</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="https://dummyimage.com/600x360">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">SEMIFINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Cuba vs America</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="https://dummyimage.com/600x360">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">SEMIFINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Mexico vs Japan</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="https://dummyimage.com/600x360">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">FINAL</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Unknown vs Unknown</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 sm:w-1/2">
          <div class="relative flex">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="https://dummyimage.com/600x360">
            <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
              <h2 class="mb-1 text-sm font-medium tracking-widest text-yellow-500 title-font">THE SUBTITLE</h2>
              <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <button type="button" class="inline-flex items-center justify-center gap-2 px-8 py-3 mt-20 text-sm font-semibold text-white transition-all bg-yellow-500 border border-transparent rounded-full hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
        もっと見る
        </button>
      </div>
    </div>
    <!-- 区切り線 -->
    <hr class="mx-40 my-2 border-gray-400 border-b-1">  
  </section>





  <!-- 中澤大輔の挨拶（大ちゃん文章挿入） -->
  <section class="text-gray-600 body-font">
    <div class="container flex flex-col items-center px-5 py-24 mx-auto md:flex-row">
      <div class="w-5/6 mb-10 lg:max-w-lg lg:w-full md:w-1/2 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="img/daisuke_nakazawa.png">
      </div>
      <div class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-20 md:pl-16 md:items-start md:text-left">
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="w-full h-full p-8 mx-auto text-center bg-gray-100 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 mb-8 text-gray-400" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 
                69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 
                93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 
                56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 
                22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 
                24.399 40.501 35.2 65.301 24.399z">
                </path>
              </svg>
              <p class="text-lg leading-relaxed">みなさん、こんにちは！野球ファンの皆さん、お待たせしました。こちらは、野球に関するリアルタイムデータを集約したサービスです。
                プロ野球、高校野球、大学野球など、さまざまなカテゴリーの試合中の皆さんの反応をリアルタイムでお届けしています。また、野球のルールや歴史、野球用語の解説など、
                野球をより深く理解するための情報も今後掲載する予定です。野球ファンの皆さんとともに、野球の世界を楽しみましょう！</p>
              <span class="inline-block w-10 h-1 mt-8 mb-6 bg-yellow-500 rounded"></span>
              <h2 class="text-sm font-medium tracking-wider text-gray-900 title-font">SPORTS VIEW Inc. CEO</h2>
              <p class="text-gray-500">中澤大輔</p>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>




  <!------------------------------------- footer ------------------------------------->
  <footer class="text-gray-600 bg-gray-100 body-font">
    <div class="container flex flex-col items-center px-5 py-8 mx-auto sm:flex-row">
      <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
        <!-- アイコン -->
        <img src="img/icon.png" class="w-10 h-10 p-2 text-white bg-yellow-500 rounded-full">
        <span class="ml-3 text-xl">SPORTS VIEW</span>
      </a>
      <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0">© 2023 SPORTS VIEW Inc.
      </p>

      <!-- 各種SNSアイコンの表示 -->
      <!-- <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
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



