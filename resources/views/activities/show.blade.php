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
                                <td>{{ $activity->id }}</td>
                                <td>{{ $activity->title_uz }}</td>
                                <td>{{ $activity->title_ru }}</td>
                                <td>{{ $activity->title_en }}</td>
                                <td>{{ $activity->description_uz }}</td>
                                <td>{{ $activity->description_ru }}</td>
                                <td>{{ $activity->description_en }}</td>
                                <td><img src="{{ asset( $activity->photo) }}" alt="" style="width: 120px;"></td>
                                <td>
                                    <div class="d-flex tools">
                                        <a href="{{ route('activities.edit', ['activity' => $activity->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                        @auth
                                            <form action="{{ route('activities.destroy', ['activity'=> $activity->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
