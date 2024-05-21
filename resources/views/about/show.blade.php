<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Maktab haqida</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">description_uz</th>
                                <th scope="col">description_ru</th>
                                <th scope="col">description_en</th>
                                <th scope="col">chuqurlashtirilgan f_uz</th>
                                <th scope="col">chuqurlashtirilgan f_ru</th>
                                <th scope="col">chuqurlashtirilgan f_en</th>
                                <th scope="col">Boshlang'ich talim tili uz</th>
                                <th scope="col">Boshlang'ich talim tili ru</th>
                                <th scope="col">Boshlang'ich talim tili en</th>
                                <th scope="col">katta sinf talim tili uz</th>
                                <th scope="col">katta sinf talim tili ru</th>
                                <th scope="col">katta sinf talim tili en</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $abouts->id }}</td>
                                <td>{{ $abouts->description_uz }}</td>
                                <td>{{ $abouts->description_ru }}</td>
                                <td>{{ $abouts->description_en }}</td>
                                <td>{{ $abouts->sciences_uz }}</td>
                                <td>{{ $abouts->sciences_ru }}</td>
                                <td>{{ $abouts->sciences_en }}</td>
                                <td>{{ $abouts->language_uz }}</td>
                                <td>{{ $abouts->language_ru }}</td>
                                <td>{{ $abouts->language_en }}</td>
                                <td>{{ $abouts->big_language_uz }}</td>
                                <td>{{ $abouts->big_language_ru }}</td>
                                <td>{{ $abouts->big_language_en }}</td>
                                <td><img src="{{ asset( $abouts->photo) }}" alt="" style="width: 120px;"></td>
                                <td>
                                    <div class="d-flex tools">
                                        <a href="{{ route('about.edit', ['about' => $abouts->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                        @auth
                                            <form action="{{ route('about.destroy', ['about'=> $abouts->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                            </form>
                                        @endauth
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('about.index') }}" class="btn btn-outline-info">Orqaga <i class="fa fa-backward"></i></a>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
