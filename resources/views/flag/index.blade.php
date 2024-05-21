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
                                <th scope="col">photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($flags as $flag)
                                <tr>
                                    <td>{{ $flag->id }}</td>
                                    <td>{{ $flag->title_uz }}</td>
                                    <td><img src="{{ asset( $flag->photo) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('flag.show', ['flag' => $flag->id]) }}" class="mr-1"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('flag.edit', ['flag' => $flag->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('flag.destroy', ['flag'=> $flag->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('flag.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
