<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('about.update', ['about' => $abouts->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_uz"
                               placeholder="description_uz" value="{{ $abouts->description_uz }}"/>
                        @error('description_uz')
                        <label for="if" class="text-danger">description_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_ru"
                               placeholder="description_ru" value="{{ $abouts->description_ru }}"/>
                        @error('description')
                        <label for="if" class="text-danger">description_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_en"
                               placeholder="description_en" value="{{ $abouts->description_en }}"/>
                        @error('description_en')
                        <label for="if" class="text-danger">description_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="sciences_uz"
                               placeholder="Chuqurlashtirilgan fanlarni kiriting uzbek" value="{{ $abouts->sciences_uz }}"/>
                        @error('sciences_uz')
                        <label for="if" class="text-danger">Chuqurlashtirilgan fanlarni</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="sciences_ru"
                               placeholder="Chuqurlashtirilgan fanlarni kiriting rus" value="{{ $abouts->sciences_ru }}"/>
                        @error('sciences_ru')
                        <label for="if" class="text-danger">Chuqurlashtirilgan fanlarni rus</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="sciences_en"
                               placeholder="Chuqurlashtirilgan fanlarni kiriting english" value="{{ $abouts->sciences_en }}"/>
                        @error('sciences_en')
                        <label for="if" class="text-danger">Chuqurlashtirilgan fanlarni english</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="language_uz"
                               placeholder="boshlang'ich sinfda qaysi tillar uz" value="{{ $abouts->language_uz }}"/>
                        @error('language_uz')
                        <label for="if" class="text-danger">title_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="language_ru"
                               placeholder="boshlang'ich sinfda qaysi tillar ru" value="{{ $abouts->language_ru }}"/>
                        @error('language_ru')
                        <label for="if" class="text-danger">boshlang'ich sinfda qaysi tillar ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="language_en"
                               placeholder="boshlang'ich sinfda qaysi tillar en" value="{{ $abouts->language_en }}"/>
                        @error('language_en')
                        <label for="if" class="text-danger">boshlang'ich sinfda qaysi tillar en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="big_language_uz"
                               placeholder="Yuqori sinfda qaysi tillar uz" value="{{ $abouts->big_language_uz }}"/>
                        @error('big_language_uz')
                        <label for="if" class="text-danger">Yuqori sinfda qaysi tillar uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="big_language_ru"
                               placeholder="Yuqori sinfda qaysi tillar ru" value="{{ $abouts->big_language_ru }}"/>
                        @error('big_language_ru')
                        <label for="if" class="text-danger">Yuqori sinfda qaysi tillar ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="big_language_en"
                               placeholder="Yuqori sinfda qaysi tillar en" value="{{ $abouts->big_language_en }}"/>
                        @error('big_language_en')
                        <label for="if" class="text-danger">Yuqori sinfda qaysi tillar en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('photo')
                    <label for="if" class="text-danger">faylni yuklashni unutdingiz3</label>
                    @enderror
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
