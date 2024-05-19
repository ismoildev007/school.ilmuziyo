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
                                <th scope="col">Description_uz</th>
                                <th scope="col">chuqurlashtirilgan f</th>
                                <th scope="col">Boshlang'ich talim tili</th>
                                <th scope="col">katta sinf talim tili</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $about)
                                <tr>
                                    <td>{{ $about->id }}</td>
                                    <td>{{ $about->description_uz }}</td>
                                    <td>{{ $about->sciences_uz }}</td>
                                    <td>{{ $about->language_uz }}</td>
                                    <td>{{ $about->big_language_uz }}</td>
                                    <td><img src="{{ asset('storage/' . $about->photo) }}" alt="" style="width: 120px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('about.show', ['about' => $about->id]) }}" class="mr-1"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('about.edit', ['about' => $about->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('about.destroy', ['about'=> $about->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                                </form>
                                            @endauth
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <a href="{{ route('about.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
