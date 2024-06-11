<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>
<style>
    .bgg{
        color: #f29906 !important;
    }
</style>
<x-layouts.main>
    <main id="main">
        <section style="border-radius: 30px; margin-top: 80px;background: url('../assets/img/maktabim.jpg');background-size: cover; max-width: 100%;" id="hero" class="hero px-3 mx-2 d-flex align-items-center">
            <div class="container">
                @foreach ($homes as $home)
                    <div class="text-center">
                        <h1>{{ $home['title_'. $lang] }}</h1>
                        <p class="text-white">{{ $home['description_' . $lang] }}</p>
                        <a href="#contact" class="btn btn-outline-light mt-2 mb-2">{{ __('words.apply') }}</a>
                        <a href="{{ route('detail') }}" class="btn btn-outline-light mt-2 mb-2">{{ __('words.detail') }}</a>
                    </div>
                @endforeach
            </div>
        </section>

        <div class="mx-4">
            <div class="tn-atom" style="transform-origin: center center;"><img class="tn-atom__img t-img loaded" data-original="https://static.tildacdn.one/tild6434-3063-4639-b937-376332313966/Group_37160.svg" alt="" imgfield="tn_img_1684838436150" src="https://static.tildacdn.one/tild6434-3063-4639-b937-376332313966/Group_37160.svg"></div>

        </div>

        <section id="why-us" class="why-us">
            <div id="why_us" class="mx-4">
                <div class="text-center"><h1>{{ __('words.card') }}</h1></div>
                <div class="row d-flex">
                    <div class="col-md-8">
                        <div class="row">
                            @foreach($cards as $card)
                                <div class="col-md-6">
                                    <div class="card1" >
                                        <h3>{{ $card['title_' . $lang] }}</h3>
                                        <p class="small">{{ $card['description_' . $lang] }}</p>
                                        <div class="dimmer"></div>
                                        <div class="go-corner">
                                            <div class="go-arrow">
                                                →
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @foreach($photo as $to)
                        <div class="col-md-4 col-12">
                            <img style="width: 100%;     margin-top: 10px;    height: 96%;  border-radius: 15px;" src="{{ asset( $to->photo) }}" alt="">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="mt-3 mx-4">
                <div class="tn-elem" style="max-width: 100%; border-radius: 20px; height: auto;">
                    <div class="row">
                        <div class="col-md-6 col-12 d-flex justify-content-between">
                            <svg viewBox="0 0 52.5 55.5" fill="none" xmlns="http://www.w3.org/2000/svg" class="rotating-svg mb-3" style="width: 70px; margin-left: 50px; margin-top: 20px;">
                                <path d="M27.80825 29.28075C27.859 29.85125 26.79875 30.16375 26.24925 29.28075C25.65525 28.50075 26.092 26.68925 27.80825 26.1665C29.425 25.54725 31.98325 26.73575 32.486 29.28075C33.1265 31.728 31.19225 35.02925 27.80825 35.51C24.529725 36.1715 20.4669 33.49275 20.012425 29.28075C19.323525 25.1715 22.762625 20.370375 27.80825 19.937175C32.75625 19.2283 38.311 23.405675 38.72275 29.28075C39.4555 35.053 34.52325 41.3535 27.80825 41.739C21.19255 42.49525 14.141025 36.818 13.775725 29.28075C12.9976 21.84155 19.42545 14.050225 27.80825 13.70815C36.0855 12.90925 44.64275 20.076525 44.9595 29.28075C45.785 38.38225 37.8555 47.6735 27.80825 47.968C17.8622 48.8145 7.812175 40.148 7.53895 29.28075C6.67075 18.51645 16.092325 7.727225 27.80825 7.479075C39.41975 6.58525 50.9705 16.751475 51.19625 29.28075C52.113 41.71225 41.18875 53.9925 27.80825 54.19725C14.533025 55.1345 1.4803825 43.477 1.3021975 29.28075C0.34194 15.1873 12.761 1.407205 27.80825 1.25" stroke="white" stroke-width="2.5" stroke-linecap="round" class="svg-path"></path>
                            </svg>
                            <div class="mt-4 mx-2 advantage">
                                <p style="font-size: 20px; color: white;">Ilm-u ziyo {{ __('words.detail_text') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 text-end">
                            <a href="{{ route('detail') }}" class="btn btn-outline-light mx-5 mt-4 mb-3" style="border-radius: 30px; width: 200px; height: 40px;">{{ __('words.detail') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="haqida" class="haqida">
            <div class="mx-1">
                <div class="row d-flex justify-content-around">
                    @foreach($abouts as $about)
                        <div class="col-12 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center px-lg-5">
                            <h1 style="color: black">{{__('words.about')}}</h1>
                            <div class="icon-box">
                                <p class="description">{{ $about['description_' . $lang]}}</p>
                            </div>
                            <div class="icon-box">
                                <h4 class="title" style="color: #00838d"><a>{{ __('words.advanced') }}</a></h4>
                                <div class="d-flex mt-4">
                                    <div class="fan mx-3"><p style="margin-top: 20px;"><b class="text-dark">Ingliz tili </b></p></div>
                                    <div class="fan_e"><p style="margin-top: 20px;"><b class="text-dark">{{ $about['sciences_' . $lang] }}</b></p></div>
                                </div>
                            </div>
                            <div class="icon-box mt-3">
                                <h4 class="title" style="color: #00838d"><a>Ta'lim tili :</a></h4>
                                <div class="d-flex">
                                    <div class="fan_min">
                                        <p style="margin-top: 25px;">
                                            <b class="text-dark">Boshlangʻich sinfda: {{ $about['language_' . $lang] }}</b>
                                        </p>
                                    </div>
                                </div>
                                <p class="description">*{{ $about['big_language_' . $lang] }}</p>
                            </div>
                        </div>
                    @endforeach
                    @foreach($abouts as $about)
                            <div class="col-11 col-lg-5 video-box d-flex justify-content-center align-items-stretch position-relative" style="background-image: url('{{ asset( $about->photo) }}')">
                                <a href="/" class="glightbox play-btn mb-4"></a>
                            </div>
                    @endforeach
                </div>

            </div>
            <div class="mx-4 mt-3">
                <div class="tn-elem1" style="max-width: 100%; border-radius: 20px; height: auto;">
                    <div class="row mb-3 mt-1">
                        <div class="col-md-6 col-12 d-flex justify-content-between">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="rotating-svg1 mb-2" fill="none" style="width: 110px; margin-left: 50px; margin-top: 15px;">
                                <path d="M25 0L26.86825 12.7106L32.3895 1.1169225L30.43875 13.81505L39.1225 4.368425L33.52625 15.9258L44.60075 9.465625L35.85575 18.8553L48.33725 15.9556L37.221 22.3433L50 23.261575L37.5 26.07975L49.4415 30.7345L36.6685 29.733L46.71125 37.7105L34.8005 32.978L42.052 43.56975L32.06125 35.5265L35.8775 47.79125L28.69475 37.15225L28.7365 50L25 37.7105L21.263475 50L21.305275 37.15225L14.122525 47.79125L17.9388 35.5265L7.948025 43.56975L15.199725 32.978L3.288675 37.7105L13.331475 29.733L0.5584525 30.7345L12.500025 26.07975L0 23.261575L12.77925 22.3433L1.662895 15.9556L14.14435 18.8553L5.399425 9.465625L16.473975 15.9258L10.877525 4.368425L19.5613 13.81505L17.610475 1.1169225L23.13185 12.7106L25 0Z" fill="white"></path>
                            </svg>
                            <div class="mt-4 mx-2 advantage">
                                <p style="font-size: 20px; color: white;">{{ __('words.pys') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 text-end">
                            <a href="{{ route('detail') }}" class="btn btn-outline-light mx-5 mt-4 mb-3" style="border-radius: 30px; width: 200px; height: auto;">{{ __('words.detail') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    Ro'yxatdan o'tish-->
        <section style="border-radius: 30px;background: url('../assets/img/maktabim.jpg');background-size: cover; max-width: 100%;" id="sign_up" class="hero px-3 mx-2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white solo">
                        <span style="font-size: 50px" class="text_a">{{ __('words.sign_text') }}</span>
                        <h4 style="color: white;font-size: 23px;margin-top: 12px;" class="text_b">{{ __('words.info') }}</h4>
                    </div>
                    <div class="col-md-6 text-white mb-3 solo_back">
                        <span style="font-size: 20px" class="text_a">{{ __('words.sign_text') }}</span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <input type="text" class="form-control mb-3" placeholder="Ismingizni kiriting">
                        <select name="b" id="a" class="form-control mb-3">
                            <option value="">Qaysi tumanda istiqomad qilasiz?</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                        </select>
                        <select name="b" id="b" class="form-control mb-3">
                            <option value="">Farzandingiz qaysi sinfda o'qiydi?</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                            <option value="">Kasbi</option>
                        </select>
                        <input type="text" class="form-control mb-3" placeholder="+998919579717">
                        <button type="button" class="form-control">{{ __('words.apply') }}</button>
                    </div>
                </div>
            </div>
        </section>
        <!--    Ro'yxatdan o'tish end-->
        <section>
            <div class="mx-4">
                <div class="text-center"><h1>{{ __('words.active') }}</h1></div>
                <div class="row">
                    @foreach ($activities as $index => $active)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="img-container">
                                    <img src="{{ asset( $active->photo) }}" alt=""/>
                                </div>
                                <div class="card-details">
                                    <h2 class="bgg">{{ $active['title_' . $lang] }}</h2>
                                    <ul>
                                        <li>{{ $active['description_' . $lang] }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section >
            <div class="container">
                <div class="text-center text-dark mb-3 solo"><h1>{{ __('words.process') }}</h1></div>
                <div class="text-center text-dark mb-3 solo_back"><h1>{{ __('words.process') }}</h1></div>
                <div class="row">
                    <div class="col-md-4">
                        <div  class="card education">
                            <div class="overlay"></div>
                            <div class="circle">

                                <svg width="71px" height="76px" viewBox="29 14 71 76" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(30.000000, 14.000000)">
                                        <g id="Group-8" fill="#D98A19">
                                            <g id="Group-7">
                                                <g id="Group-6">
                                                    <path d="M0,0 L0,75.9204805 L69.1511499,75.9204805 L0,0 Z M14.0563973,32.2825679 L42.9457663,63.9991501 L14.2315268,63.9991501 L14.0563973,32.2825679 Z" id="Fill-1"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group-20" transform="translate(0.000000, 14.114286)" stroke="#FFFFFF" stroke-linecap="square">
                                            <path d="M0.419998734,54.9642857 L4.70316223,54.9642857" id="Line"></path>
                                            <path d="M0.419998734,50.4404762 L4.70316223,50.4404762" id="Line"></path>
                                            <path d="M0.419998734,45.9166667 L4.70316223,45.9166667" id="Line"></path>
                                            <path d="M0.419998734,41.3928571 L2.93999114,41.3928571" id="Line"></path>
                                            <path d="M0.419998734,36.8690476 L4.70316223,36.8690476" id="Line"></path>
                                            <path d="M0.419998734,32.3452381 L4.70316223,32.3452381" id="Line"></path>
                                            <path d="M0.419998734,27.8214286 L4.70316223,27.8214286" id="Line"></path>
                                            <path d="M0.419998734,23.297619 L2.93999114,23.297619" id="Line"></path>
                                            <path d="M0.419998734,18.7738095 L4.70316223,18.7738095" id="Line"></path>
                                            <path d="M0.419998734,14.25 L4.70316223,14.25" id="Line"></path>
                                            <path d="M0.419998734,9.72619048 L4.70316223,9.72619048" id="Line"></path>
                                            <path d="M0.419998734,5.20238095 L2.93999114,5.20238095" id="Line"></path>
                                            <path d="M0.419998734,0.678571429 L4.70316223,0.678571429" id="Line"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p>{{ __('words.card_a') }}</p>
                            <p class="text-center">{{ __('words.card_a_text') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card credentialing">
                            <div class="overlay"></div>
                            <div class="circle">

                                <svg width="64px" height="72px" viewBox="27 21 64 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs>
                                        <polygon id="path-1" points="60.9784821 18.4748913 60.9784821 0.0299638385 0.538377293 0.0299638385 0.538377293 18.4748913"></polygon>
                                    </defs>
                                    <g id="Group-12" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(27.000000, 21.000000)">
                                        <g id="Group-5">
                                            <g id="Group-3" transform="translate(2.262327, 21.615176)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <g id="Clip-2"></g>
                                                <path d="M7.17774177,18.4748913 L54.3387782,18.4748913 C57.9910226,18.4748913 60.9789911,15.7266455 60.9789911,12.3681986 L60.9789911,6.13665655 C60.9789911,2.77820965 57.9910226,0.0299638385 54.3387782,0.0299638385 L7.17774177,0.0299638385 C3.52634582,0.0299638385 0.538377293,2.77820965 0.538377293,6.13665655 L0.538377293,12.3681986 C0.538377293,15.7266455 3.52634582,18.4748913 7.17774177,18.4748913" id="Fill-1" fill="#59A785" mask="url(#mask-2)"></path>
                                            </g>
                                            <polygon id="Fill-4" fill="#FFFFFF" transform="translate(31.785111, 30.877531) rotate(-2.000000) translate(-31.785111, -30.877531) " points="62.0618351 55.9613216 7.2111488 60.3692832 1.50838775 5.79374073 56.3582257 1.38577917"></polygon>
                                            <ellipse id="Oval-3" fill="#25D48A" opacity="0.216243004" cx="30.0584472" cy="21.7657707" rx="9.95169733" ry="9.17325562"></ellipse>
                                            <g id="Group-4" transform="translate(16.959615, 6.479082)" fill="#54C796">
                                                <polygon id="Fill-6" points="10.7955395 21.7823628 0.11873799 11.3001058 4.25482787 7.73131106 11.0226557 14.3753897 27.414824 1.77635684e-15 31.3261391 3.77891399"></polygon>
                                            </g>
                                            <path d="M4.82347935,67.4368303 L61.2182039,67.4368303 C62.3304205,67.4368303 63.2407243,66.5995595 63.2407243,65.5765753 L63.2407243,31.3865871 C63.2407243,30.3636029 62.3304205,29.5263321 61.2182039,29.5263321 L4.82347935,29.5263321 C3.71126278,29.5263321 2.80095891,30.3636029 2.80095891,31.3865871 L2.80095891,65.5765753 C2.80095891,66.5995595 3.71126278,67.4368303 4.82347935,67.4368303" id="Fill-8" fill="#59B08B"></path>
                                            <path d="M33.3338063,67.4368303 L61.2181191,67.4368303 C62.3303356,67.4368303 63.2406395,66.5995595 63.2406395,65.5765753 L63.2406395,31.3865871 C63.2406395,30.3636029 62.3303356,29.5263321 61.2181191,29.5263321 L33.3338063,29.5263321 C32.2215897,29.5263321 31.3112859,30.3636029 31.3112859,31.3865871 L31.3112859,65.5765753 C31.3112859,66.5995595 32.2215897,67.4368303 33.3338063,67.4368303" id="Fill-10" fill="#4FC391"></path>
                                            <path d="M29.4284029,33.2640869 C29.4284029,34.2202068 30.2712569,34.9954393 31.3107768,34.9954393 C32.3502968,34.9954393 33.1931508,34.2202068 33.1931508,33.2640869 C33.1931508,32.3079669 32.3502968,31.5327345 31.3107768,31.5327345 C30.2712569,31.5327345 29.4284029,32.3079669 29.4284029,33.2640869" id="Fill-15" fill="#FEFEFE"></path>
                                            <path d="M8.45417501,71.5549073 L57.5876779,71.5549073 C60.6969637,71.5549073 63.2412334,69.2147627 63.2412334,66.3549328 L63.2412334,66.3549328 C63.2412334,63.4951029 60.6969637,61.1549584 57.5876779,61.1549584 L8.45417501,61.1549584 C5.34488919,61.1549584 2.80061956,63.4951029 2.80061956,66.3549328 L2.80061956,66.3549328 C2.80061956,69.2147627 5.34488919,71.5549073 8.45417501,71.5549073" id="Fill-12" fill="#5BD6A2"></path>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                            <p>{{ __('words.card_b') }}</p>
                            <p class="text-center">{{ __('words.card_b_text') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card human-resources">
                            <div class="overlay"></div>
                            <div class="circle">


                                <svg width="66px" height="77px" viewBox="1855 26 66 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1855.000000, 26.000000)">
                                        <path d="M4.28872448,42.7464904 C4.28872448,39.3309774 5.4159227,33.7621426 6.40576697,30.4912557 C10.5920767,32.1098991 14.3021264,35.1207513 18.69596,35.1207513 C30.993618,35.1207513 42.5761396,28.7162991 49.9992251,17.9014817 C56.8027248,23.8881252 60.8188351,33.0463165 60.8188351,42.7464904 C60.8188351,60.817447 47.6104607,76.6693426 32.5537798,76.6693426 C17.4970989,76.6693426 4.28872448,60.817447 4.28872448,42.7464904" id="Fill-8" fill="#AFCEFF"></path>
                                        <path d="M64.3368879,31.1832696 L62.8424171,46.6027478 L60.6432609,46.7824348 L59.8340669,34.6791304 L47.6573402,25.3339478 C44.2906753,34.068487 34.3459503,40.2903304 24.4684093,40.2903304 C17.7559812,40.2903304 10.046244,37.4168 5.80469412,32.8004522 L5.80469412,34.6791304 L5.80469412,46.6027478 L4.28932167,46.6027478 L1.30187314,27.8802435 C1.30187314,20.9790957 3.52342407,15.5432 7.27229127,11.3578087 C13.132229,4.79558261 21.8124018,0.0492173913 30.5672235,0.342852174 C37.4603019,0.569286957 42.6678084,2.72991304 50.8299179,0.342852174 C51.4629405,1.44434783 51.8615656,3.00455652 51.5868577,5.22507826 C51.4629405,6.88316522 51.2106273,7.52302609 50.8299179,8.45067826 C58.685967,14.1977391 64.3368879,20.7073739 64.3368879,31.1832696" id="Fill-10" fill="#3B6CB7"></path>
                                        <path d="M58.9405197,54.5582052 C62.0742801,54.8270052 65.3603242,52.60064 65.6350321,49.5386574 C65.772386,48.009127 65.2617876,46.5570226 64.3182257,45.4584487 C63.3761567,44.3613357 62.0205329,43.6162922 60.4529062,43.4818922 L58.9405197,54.5582052 Z" id="Fill-13" fill="#568ADC"></path>
                                        <path d="M6.32350389,54.675367 C3.18227865,54.8492104 0.484467804,52.4957496 0.306803449,49.4264626 C0.217224782,47.8925496 0.775598471,46.4579757 1.75200594,45.3886191 C2.7284134,44.3192626 4.10792487,43.6165843 5.67853749,43.530393 L6.32350389,54.675367 Z" id="Fill-15" fill="#568ADC"></path>
                                    </g>
                                </svg>

                            </div>
                            <p>{{ __('words.card_c') }}</p>
                            <p class="text-center">{{ __('words.card_c_text') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>{{ __('words.question') }}</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        @foreach($questions as $key => $question)
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $key }}">
                                    {{ $question['title_' . $lang] }}
                                    <i class="bx bx-chevron-down icon-show"></i>
                                    <i class="bx bx-chevron-up icon-close"></i>
                                </a>
                                <div id="faq-list-{{ $key }}" class="collapse {{ $key == 0 ? 'show' : '' }}" data-bs-parent=".faq-list">
                                    <p>{{ $question['description_' . $lang] }}</p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
        </section>

        <!--    BLog-->
        <section>
            <div class="container">
                <div class="text-center text-black solo"><h1>Blog</h1></div>
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-4">
                            <a href="/shohruh" class="card n">
                                <img src="{{ asset( $blog->photo) }}" class="card-img-top" alt="..." style="height: 200px;width: 100%;">
                                <div class="card-body">
                                    <p class="card-text">{{ $blog['description_' . $lang] }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--    Blok end-->
        <section id="contact" class="contact">
            <section style="border-radius: 30px;background: url('../assets/img/maktabim.jpg');background-size: cover; max-width: 100%;" id="sign_up" class="hero px-3 mx-2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-white solo">
                            <div class="row">
                                <span style="font-size: 50px" class="text_a">{{ __('words.connect') }}</span>

                                <h4>{{ __('words.location') }}</h4><br>
                                <h5>{{ __('words.loc') }}:</h5>
                            </div>
                        </div>
                        <div class="col-md-6 text-white mb-3 solo_back">
                            <span style="font-size: 20px; margin-top: 12px;" class="text_a">{{ __('words.sign_text') }}</span>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input type="text" class="form-control mb-3" placeholder="Ismingizni kiriting">
                            <select name="b" id="a" class="form-control mb-3">
                                <option value="">Qaysi tumanda istiqomad qilasiz?</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                            </select>
                            <select name="b" id="b" class="form-control mb-3">
                                <option value="">Farzandingiz qaysi sinfda o'qiydi?</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                                <option value="">Kasbi</option>
                            </select>
                            <input type="text" class="form-control mb-3" placeholder="+998919579717">
                            <button type="button" class="form-control">{{ __('words.apply') }}</button>
                        </div>
                    </div>
                    <div class="row mt-2">

                        <div class="col-lg-12 mt-lg-0">
                            <div>
                                <iframe style="border:0; width: 100%; height: 350px; border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d776.7648597751727!2d65.80914382851854!3d38.85399639822598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4ea7421d88f3bf%3A0x797a8ef8306eac95!2sIlm-u%20Ziyo%20Tibbiyot%20Kolleji!5e0!3m2!1sen!2s!4v1710011036932!5m2!1sen!2s" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </section>
    </main>
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <p><strong>"{{ __('words.school') }}"</strong><br>{{ __('words.connect') }}</p>
            </div>
            @foreach($contacts as $contact)
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="{{ $contact->telegram }}" target="_blank" class="telegram"><i class="bx bxl-telegram"></i></a>
                <a href="{{$contact->instagram}}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{ $contact->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ $contact->youtube }}" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="{{ $contact->linkedin }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            @endforeach
        </div>
    </footer>
</x-layouts.main>
