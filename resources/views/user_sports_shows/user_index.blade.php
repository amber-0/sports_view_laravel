@extends('layouts.normal_layout')

@section('content')


  <!------------------------------------- 以下、見たい試合を選択するgalary ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-10">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">WBC</h1>
        <!-- 下線 -->
        <span class="mx-auto h-1 w-14 text-center rounded bg-yellow-500 mt-2 mb-4"></span>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">3月8日〜22日までWBC開幕中<br>世界一、baseballが暑い場所はここにある。
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/america_vs_venezuela.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">QUATER FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">America vs Venezuela</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/puertorico_vs_mexico.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">QUATER FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Puerto Rico vs Mexico</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/cuba_vs_america.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">SEMIFINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Cuba vs America</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <a href="{{ route('user.mexico_vs_japan') }}">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/mexico_vs_japan.jpg">
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">SEMIFINAL</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Mexico vs Japan</h1>
                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/final.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Unknown vs Unknown</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <button type="button" class="mt-20 py-3 px-8 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold 
        bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition-all 
        text-sm dark:focus:ring-offset-gray-800">
        もっと見る
        </button>
      </div>
    </div>
    <!-- 区切り線 -->
    <hr class="border-b-1 border-gray-400 my-2 mx-40">
  </section>





  <!------------------------------------- 以下、見たい試合を選択するgalary ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-10">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">プロ野球</h1>
        <!-- 下線 -->
        <span class="mx-auto h-1 w-14 text-center rounded bg-yellow-500 mt-2 mb-4"></span>
        <!-- 大ちゃん文章挿入 -->
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">プロたちの試合を刮目せよ。<br>世界一暑い場所はここにある。
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">QUATER FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">America vs Venezuela</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">QUATER FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Puerto Rico vs Mexico</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">SEMIFINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Cuba vs America</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">SEMIFINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Mexico vs Japan</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Unknown vs Unknown</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <button type="button" class="mt-20 py-3 px-8 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold 
        bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition-all 
        text-sm dark:focus:ring-offset-gray-800">
        もっと見る
        </button>
      </div>
    </div>
    <!-- 区切り線 -->
    <hr class="border-b-1 border-gray-400 my-2 mx-40">  
  </section>





  <!------------------------------------- 以下、見たい試合を選択するgalary ------------------------------------->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-10">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">全国高校野球選手権大会</h1>
        <!-- 下線 -->
        <span class="mx-auto h-1 w-14 text-center rounded bg-yellow-500 mt-2 mb-4"></span>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">球児達のドラマに涙する瞬間<br>世界一暑い場所はここにある。
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">QUATER FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">America vs Venezuela</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">QUATER FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Puerto Rico vs Mexico</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">SEMIFINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Cuba vs America</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">SEMIFINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Mexico vs Japan</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">FINAL</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Unknown vs Unknown</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <!-- 画像サイズは600×360にする（大ちゃん画像と文章挿入） -->
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <button type="button" class="mt-20 py-3 px-8 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold 
        bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition-all 
        text-sm dark:focus:ring-offset-gray-800">
        もっと見る
        </button>
      </div>
    </div>
    <!-- 区切り線 -->
    <hr class="border-b-1 border-gray-400 my-2 mx-40">  
  </section>





  <!-- 中澤大輔の挨拶（大ちゃん文章挿入） -->
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="img/daisuke_nakazawa.png">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-20 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="w-full mx-auto text-center h-full bg-gray-100 p-8 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 
                69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 
                93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 
                56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 
                22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 
                24.399 40.501 35.2 65.301 24.399z">
                </path>
              </svg>
              <p class="leading-relaxed text-lg">みなさん、こんにちは！野球ファンの皆さん、お待たせしました。こちらは、野球に関するリアルタイムデータを集約したサービスです。
                プロ野球、高校野球、大学野球など、さまざまなカテゴリーの試合中の皆さんの反応をリアルタイムでお届けしています。また、野球のルールや歴史、野球用語の解説など、
                野球をより深く理解するための情報も今後掲載する予定です。野球ファンの皆さんとともに、野球の世界を楽しみましょう！</p>
              <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-8 mb-6"></span>
              <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">SPORTS VIEW Inc. CEO</h2>
              <p class="text-gray-500">中澤大輔</p>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>


@endsection
