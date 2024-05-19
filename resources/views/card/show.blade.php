<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Darsdan tashqari mashg'ulotlar</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">title_uz</th>
                                <th scope="col">title_ru</th>
                                <th scope="col">title_en</th>
                                <th scope="col">description_uz</th>
                                <th scope="col">description_ru</th>
                                <th scope="col">description_en</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $cards->id }}</td>
                                <td>{{ $cards->title_uz }}</td>
                                <td>{{ $cards->title_ru }}</td>
                                <td>{{ $cards->title_en }}</td>
                                <td>{{ $cards->description_uz }}</td>
                                <td>{{ $cards->description_ru }}</td>
                                <td>{{ $cards->description_en }}</td>
                                <td><img src="{{ asset('storage/' . $cards->photo) }}" alt="" style="width: 120px;"></td>
                                <td>
                                    <div class="d-flex tools">
                                        <a href="{{ route('card.edit', ['card' => $cards->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                        @auth
                                            <form action="{{ route('card.destroy', ['card'=> $cards->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
