<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main>
    <main id="main">
        <section class="mx-3 mt-4">
            <div class="row">
                @foreach($flags as $flag)
                    <div class="col-md-7 text-center">
                        <h1 class="mt-5" style=";color: #00838d">{{ $flag['title_' .$lang] }}</h1>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset( $flag->photo) }}" alt="" style="border-radius: 40px;width: 100%;">
                    </div>
                @endforeach
            </div>
        </section>
        <section style="border-radius: 30px;background: url('../assets/img/maktabim.jpg');background-size: cover; max-width: 100%;" class="hero px-3 mx-2 d-flex align-items-center">
            <div class="container">
                <div class="row mx-3">
                    <div class="text-center">
                        <h1>{{ __('words.infrastructure') }}</h1>
                    </div>
                        <div class="col-md-5 mt-5 infrastructure">
                            @foreach($infrastructure as $inf)
                            <button class="btn btn-light mt-2 mb-2" style="border-radius: 20px;">{{ $inf['title_' . $lang] }}</button>
                            @endforeach
                            <button class="btn btn-light mt-2 mb-2" style="border-radius: 20px;">Kutubxona</button>
                            <button class="btn btn-light mt-2 mb-2" style="border-radius: 20px;">Studiya</button>
                            <button class="btn btn-light mt-2 mb-2" style="border-radius: 20px;">Sport zali</button>
                            <button class="btn btn-light mt-2 mb-2" style="border-radius: 20px;">Futbol maydoni</button>
                            <button class="btn btn-light mt-2 mb-2" style="border-radius: 20px;">24/7 xavfsizlik</button>
                        </div>
                    @foreach($inf_photos as $inf_photo)
                        <div class="col-md-7"><img src="{{ asset( $inf_photo->photo ) }}" alt="" style="width: 100%;border-radius: 30px"></div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mx-3">
            <!--        O'Narxlarimiz-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="text-center"><h1>{{ __('words.price') }}</h1></div>
                        <div class="col-md-4">
                            <div class="text-center" style="background-color: #B8F9D3;border-radius: 20px;padding: 5px;">
                                <h5>{{ __('words.inf_price') }}</h5>
                            </div>
                            @foreach($prices as $price)
                                <div class="text-center mt-3 mb-3" style="background-color: #B8F9D3;border-radius: 10px;padding: 55px;">
                                    <h2>{{ $price->inf_price }} soʻm</h2>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            <div class="text-center" style="background-color: #e3f7fa;border-radius: 20px;padding: 5px;">
                                <h5>{{ __('words.all_price') }}</h5>
                            </div>
                            @foreach($prices as $price)

                            <div class="text-center mt-3 mb-3" style="background-color: #e3f7fa;border-radius: 10px;padding: 55px;">
                                <h2>{{ $price->all_price }} soʻm</h2>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <h2>{{ __('words.kitchen_price') }}</h2>
                            </div>
                            <div class="d-flex justify-content-around">
                                @foreach($prices as $price)
                                    <div class="text-center mt-3" style="background-color: #B8F9D3;border-radius: 10px;padding: 30px;">
                                        <b>1 mahal</b><br>
                                        <b>{{ $price->kitchen_price_one }} soʻm</b>
                                    </div>
                                    <div class="text-center mt-3 mx-1" style="background-color: #e3f7fa;border-radius: 10px;padding: 35px;">
                                        <b>3 mahal</b><br>
                                        <b>{{ $price->kitchen_price_three }} so'm</b>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!--        O'Narxlarimiz end-->

            <!--        O'qituvchilar-->
            <section>
                <div class="container">
                    <div class="text-center mb-5"><h1>{{ __('words.teacher') }}</h1></div>
                    <div class="row">
                        @foreach($teachers as $teacher)
                            <div class="col-md-3 text-center">
                                <a href="/shohruh" class="text-center">
                                    <img src="{{ asset( $teacher->photo) }}" class="card-img-top" alt="..." style="height: 200px;width: 200px;border-radius: 50%">
                                    <div class="card-body">
                                        <b>{{ $teacher->title_uz }}</b>
                                        <p class="text-center">{{ $teacher['description_' . $lang] }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--        O'qituvchilar end-->

            <!--    Ro'yxatdan o'tish-->
            <section style="border-radius: 30px;background: url('../assets/img/maktabim.jpg');background-size: cover; max-width: 100%;" id="sign_up" class="hero px-3 mx-2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-white solo">
                            <span style="font-size: 58px" class="text_a">{{ __('words.sign_text') }}</span>
                            <h4 style="color: white;font-size: 27px" class="text_b">{{ __('words.info') }}</h4>
                        </div>
                        <div class="col-md-6 text-white mb-3 solo_back">
                            <span style="font-size: 20px" class="text_a">{{ __('words.connect') }}</span>
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
            <!--    BLog-->
            <section>
                <div class="container">
                    <div class="text-center text-black solo"><h1>{{ __('words.special') }}</h1></div>
                    <div class="row">
                        @foreach($specials as $special)
                            <div class="col-md-4">
                                <a href="/uz" class="card n">
                                    <img src="{{ asset( $special->photo) }}" class="card-img-top" alt="..." style="height: 200px;width: 100%;">
                                    <div class="card-body">
                                        <p class="card-text">{{ $special['description_' . $lang] }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--    Blok end-->
        </section>
    </main>


    <footer id="footer">
        <section id="contact" class="contact">
            <section style="border-radius: 30px;background: url('../assets/img/maktabim.jpg');background-size: cover; max-width: 100%;" id="sign_up" class="hero px-3 mx-2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-white solo">
                            <div class="row">
                                <span style="font-size: 58px" class="text_a">{{ __('words.connect') }}</span>
                                <div class="col-lg-6 col-md-12 footer-links d-flex">
                                    @foreach($contacts as $contact)
                                        <div>
                                            <ul>
                                                <li><i class="bx bxl-telegram"></i> <a href="{{ $contact->telegram }}" class="text-white">Telegram</a></li>
                                                <li><i class="bx bxl-instagram"></i> <a href="{{ $contact->instagram }}" class="text-white">Instagram</a></li>
                                                <li><i class="bx bxl-youtube"></i> <a href="{{ $contact->youtube }}" class="text-white">Youtube</a></li>
                                                <li><i class="bx bxl-linkedin"></i> <a href="{{ $contact->linkedin }}" class="text-white">Linkedin</a></li>

                                            </ul>
                                        </div>
                                        <ul>
                                            <li><i class="bx bxl-facebook"></i> <a href="{{ $contact->facebook }}" class="text-white">Facebook</a></li>
                                            <li><a href="{{ $contact->facebook }}" class="text-white">{{ $contact->phone_number }}</a></li>

                                        </ul>
                                    @endforeach
                                </div>
                                <h4>{{ __('words.location') }}</h4><br>
                                <h5>{{ __('words.loc') }}</h5>
                            </div>
                        </div>
                        <div class="col-md-6 text-white mb-3 solo_back">
                            <span style="font-size: 20px" class="text_a">{{ __('words.connect') }}</span>
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

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <p><strong>"Ilm-u ziyo Tibbiyot kolleji"</strong><br>Biz bilan bog'laning</p>
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
