<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Blog</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">description_uz</th>
                                <th scope="col">description_ru</th>
                                <th scope="col">description_en</th>
                                <th scope="col">photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($specials as $special)
                                <tr>
                                    <td>{{ $special->id }}</td>
                                    <td>{{ $special->description_uz }}</td>
                                    <td>{{ $special->description_ru }}</td>
                                    <td>{{ $special->description_en }}</td>
                                    <td><img src="{{ asset( $special->photo) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('special.edit', ['special' => $special->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('special.destroy', ['special'=> $special->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('special.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
