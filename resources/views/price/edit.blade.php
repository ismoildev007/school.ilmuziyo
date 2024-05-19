<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('price.update', ['price' => $prices->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="inf_price" placeholder="Boshlang'ich sinflar uchun to'lov summa" value="{{ $prices->inf_price }}" />
                        @error('inf_price')
                        <label for="if" class="text-danger">inf_price</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="all_price" placeholder="qolgan sinflar uchun to'lov summa" value="{{ $prices->all_price }}" />
                        @error('all_price')
                        <label for="if" class="text-danger">all_price</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="kitchen_price_one" placeholder="1 mahal ovqat uchun to'lov summa" value="{{ $prices->kitchen_price_one }}" />
                        @error('kitchen_price_one')
                        <label for="if" class="text-danger">kitchen_price_one</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="kitchen_price_three" placeholder="3 maxal ovqat uchun to'lov summa" value="{{ $prices->kitchen_price_three }}" />
                        @error('kitchen_price_three')
                        <label for="if" class="text-danger">kitchen_price_three</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('price.index') }}" class="btn btn-outline-info" type="submit" id="sendMessageButton">Orqada</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</x-layouts.admin>
