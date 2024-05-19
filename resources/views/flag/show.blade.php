<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Bizning bayroq</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">title_uz</th>
                                <th scope="col">title_ru</th>
                                <th scope="col">title_en</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $flags->id }}</td>
                                <td>{{ $flags->title_uz }}</td>
                                <td>{{ $flags->title_ru }}</td>
                                <td>{{ $flags->title_en }}</td>
                                <td><img src="{{ asset('storage/' . $flags->photo) }}" alt="" style="width: 120px;"></td>
                                <td>
                                    <div class="d-flex tools">
                                        <a href="{{ route('flag.edit', ['flag' => $flags->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                        @auth
                                            <form action="{{ route('flag.destroy', ['flag'=> $flags->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
