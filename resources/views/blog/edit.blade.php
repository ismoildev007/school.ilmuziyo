<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('blog.update', ['blog' => $blogs->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_uz" placeholder="description_uz" value="{{ $blogs->description_uz }}" />
                        @error('description_uz')
                        <label for="if" class="text-danger">description_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_ru" placeholder="description_ru" value="{{ $blogs->description_ru }}" />
                        @error('description_ru')
                        <label for="if" class="text-danger">description_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_en" placeholder="description_en" value="{{ $blogs->description_en }}" />
                        @error('description_en')
                        <label for="if" class="text-danger">description_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('photo')
                    <label for="if" class="text-danger">faylni yuklashni unutdingiz</label>
                    @enderror

                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('blog.index') }}" class="btn btn-outline-info" type="submit" id="sendMessageButton">Orqada</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</x-layouts.admin>
