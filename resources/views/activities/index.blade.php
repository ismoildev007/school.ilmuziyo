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
                                <th scope="col">description_uz</th>
                                <th scope="col">photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activities as $active)
                                <tr>
                                    <td>{{ $active->id }}</td>
                                    <td>{{ $active->title_uz }}</td>
                                    <td>{{ $active->description_uz }}</td>
                                    <td><img src="{{ asset('storage/' . $active->photo) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('activities.show', ['activity' => $active->id]) }}" class="mr-1"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('activities.edit', ['activity' => $active->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('activities.destroy', ['activity'=> $active->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('activities.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
