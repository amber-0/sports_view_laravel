@extends('layouts.dashboard_layout')

@section('content')


<body class="font-sans leading-normal tracking-normal bg-gray-100">
	<nav id="header" class="fixed top-0 z-10 w-full bg-white shadow">
		<div class="container flex flex-wrap items-center w-full pt-3 pb-3 mx-auto mt-0 md:pb-0">
			<div class="w-1/2 pl-2 md:pl-0">
				<a class="flex items-center mb-4 font-medium text-gray-900 title-font md:mb-0" href="#">
					<img src="img/icon.png" class="w-10 h-10 p-2 text-white bg-yellow-500 rounded-full">
					<span class="ml-3 text-xl">SPORTS VIEW</span>
				</a>
			</div>
			
			<div class="w-1/2 pr-0">
				<div class="relative flex inline-block float-right">
					<div class="block pr-4 lg:hidden">
						<button id="nav-toggle" class="flex items-center px-3 py-2 text-gray-500 border border-gray-600 rounded appearance-none hover:text-gray-900 hover:border-teal-500 focus:outline-none">
							<svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<title>Menu</title>
								<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
							</svg>
						</button>
					</div>
				</div>
			</div>

			<div class="z-20 flex-grow hidden w-full mt-2 bg-white lg:flex lg:items-center lg:w-auto lg:block lg:mt-0" id="nav-content">
				<ul class="items-center flex-1 px-4 list-reset lg:flex md:px-0">
					<li class="my-2 mr-6 md:my-0">
						<a href="#" class="block py-1 pl-1 text-pink-600 no-underline align-middle border-b-2 border-orange-600 md:py-3 hover:text-gray-900 hover:border-orange-600">
							<i class="mr-3 text-pink-600 fas fa-home fa-fw"></i><span class="pb-1 text-sm md:pb-0">リアルタイムデータ</span>
						</a>
					</li>
					<!-- <li class="my-2 mr-6 md:my-0">
						<a href="#" class="block py-1 pl-1 text-gray-500 no-underline align-middle border-b-2 border-white md:py-3 hover:text-gray-900 hover:border-pink-500">
							<i class="mr-3 fas fa-tasks fa-fw"></i><span class="pb-1 text-sm md:pb-0">Tasks</span>
						</a>
					</li> -->
					<li class="my-2 mr-6 md:my-0">
						<a href="#" class="block py-1 pl-1 text-gray-500 no-underline align-middle border-b-2 border-white md:py-3 hover:text-gray-900 hover:border-purple-500">
							<i class="mr-3 fa fa-envelope fa-fw"></i><span class="pb-1 text-sm md:pb-0">みんなの掲示板</span>
						</a>
					</li>
					<li class="my-2 mr-6 md:my-0">
						<a href="#" class="block py-1 pl-1 text-gray-500 no-underline align-middle border-b-2 border-white md:py-3 hover:text-gray-900 hover:border-green-500">
							<i class="mr-3 fas fa-chart-area fa-fw"></i><span class="pb-1 text-sm md:pb-0">大ちゃんの予想部屋</span>
						</a>
					</li>
					<!-- <li class="my-2 mr-6 md:my-0">
						<a href="#" class="block py-1 pl-1 text-gray-500 no-underline align-middle border-b-2 border-white md:py-3 hover:text-gray-900 hover:border-red-500">
							<i class="mr-3 fa fa-wallet fa-fw"></i><span class="pb-1 text-sm md:pb-0">Payments</span>
						</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>



    <!--Container-->
    <div class="container w-full pt-20 mx-auto">

        <div class="w-full px-4 mb-8 leading-normal text-gray-800 md:px-0 md:mt-8">

            <!--Console Content-->

            <div class="flex flex-wrap">
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <div class="p-2 bg-white border rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-green-600 rounded"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-500 uppercase">みんなの投げ銭(円)</h5>
                                <h3 class="text-3xl font-bold"><i class="fas fa-circle-yen"></i>
                                    @foreach($yen_sums as $yen_num)
                                    {{ $yen_num->sum }}
                                    @endforeach                                
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <div class="p-2 bg-white border rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-pink-600 rounded"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-500 uppercase">総回答者数</h5>
                                <h3 class="text-3xl font-bold">
                                    @foreach($count_nums as $count_num)
                                    {{ $count_num->count }}
                                    @endforeach
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <div class="p-2 bg-white border rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-yellow-600 rounded"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-500 uppercase">予備</h5>
                                <h3 class="text-3xl font-bold">予備<span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <div class="p-2 bg-white border rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-blue-600 rounded"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-500 uppercase">Server Uptime</h5>
                                <h3 class="text-3xl font-bold">152 days</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <div class="p-2 bg-white border rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-indigo-600 rounded"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-500 uppercase">To Do List</h5>
                                <h3 class="text-3xl font-bold">7 tasks</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <div class="p-2 bg-white border rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-red-600 rounded"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-500 uppercase">Issues</h5>
                                <h3 class="text-3xl font-bold">3 <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!--Divider-->
            <hr class="mx-4 my-8 border-b-2 border-gray-400">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <!-- <div class="w-full p-3 md:w-1/2">
                    <div class="bg-white border rounded shadow">
                        <div class="p-3 border-b">
                            <h5 class="font-bold text-gray-600 uppercase">Graph</h5>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                            new Chart(document.getElementById("chartjs-7"), {
                                "type": "bar",
                                "data": {
                                    "labels": ["January", "February", "March", "April"],
                                    "datasets": [{
                                        "label": "Page Impressions",
                                        "data": [10, 20, 30, 40],
                                        "borderColor": "rgb(255, 99, 132)",
                                        "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                    }, {
                                        "label": "Adsense Clicks",
                                        "data": [5, 15, 10, 30],
                                        "type": "line",
                                        "fill": false,
                                        "borderColor": "rgb(54, 162, 235)"
                                    }]
                                },
                                "options": {
                                    "scales": {
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="w-full p-3 md:w-1/2">
                    <div class="bg-white border rounded shadow">
                        <div class="p-3 border-b">
                            <h5 class="font-bold text-gray-600 uppercase">Graph</h5>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                            new Chart(document.getElementById("chartjs-0"), {
                                "type": "line",
                                "data": {
                                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                    "datasets": [{
                                        "label": "Views",
                                        "data": [65, 59, 80, 81, 56, 55, 40],
                                        "fill": false,
                                        "borderColor": "rgb(75, 192, 192)",
                                        "lineTension": 0.1
                                    }]
                                },
                                "options": {}
                            });
                            </script>
                        </div>
                    </div>
                </div> -->

                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Graph Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="p-3 border-b">
                            <h5 class="font-bold text-gray-600 uppercase">リアルタイム選手人気(日本)</h5>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                            new Chart(document.getElementById("chartjs-1"), {
                                "type": "bar",
                                "data": {
                                    // "labels": ["大谷翔平", "ダルビッシュ有", "甲斐拓也", "牧原大成", "中野拓夢", "近藤健介", "ラーズ・ヌートバー"],
                                    "labels": {!! json_encode($bar_labels) !!},
                                    "datasets": [{
                                        "label": "Likes",
                                        // "data": [65, 59, 80, 81, 56, 55, 100],
                                        "data": {!! json_encode($bar_data) !!},
                                        "fill": false,
                                        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                        "borderWidth": 1
                                    }]
                                },
                                "options": {
                                    "scales": {
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Graph Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="p-3 border-b">
                            <h5 class="font-bold text-gray-600 uppercase">みんなの勝敗予想</h5>
                        </div>
                        <div class="p-5">
                            {{-- チャート表示のためのデータ取得 --}}
                                <canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": {!! json_encode($labels) !!},
                                        // "labels": ["日本", "メキシコ"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": {!! json_encode($data) !!},
                                            // "data": [300, 50],
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)"]
                                        }]
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Template Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="p-3 border-b">
                            <h5 class="font-bold text-gray-600 uppercase">予備</h5>
                        </div>
                        <div class="p-5">
                        </div>
                    </div>
                    <!--/Template Card-->
                </div>


                <div class="w-full p-3">
                    <!--Table Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="p-3 border-b">
                            <h5 class="font-bold text-gray-600 uppercase">みんなの応援コメント</h5>
                        </div>
												<div class="w-full mx-auto my-10 overflow-auto lg:w-4/5">
													<table class="w-full text-left whitespace-no-wrap table-auto">
														<thead>
															<tr>
																<th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 rounded-tl rounded-bl title-font">ニックネーム</th>
																<th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">応援している選手</th>
																<th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">応援メッセージ</th>
															</tr>
														</thead>
														<tbody>
                                                            
                                                            @foreach($sports_shows as $sports_show)
															<tr>
																<td class="px-4 py-3 border-t-2 border-b-2 border-gray-200">{{ $sports_show->name }}</td>
																<td class="px-4 py-3 border-t-2 border-b-2 border-gray-200">{{ $sports_show->cheer }}</td>
																<td class="px-4 py-3 border-t-2 border-b-2 border-gray-200">{{ $sports_show->comment }}</td>
															</tr>
                                                            @endforeach

														</tbody>
													</table>
												</div>
                    </div>
                    <!--/table Card-->
                </div>
            </div>
            <!--/ Console Content-->
        </div>
    </div>
    <!--/container-->


@endsection

