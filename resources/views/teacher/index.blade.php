<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>O'qituvchilar ro'yxati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Ism Familiya</th>
                                <th scope="col">Yo'nalishi uz</th>
                                <th scope="col">Yo'nalishi ru</th>
                                <th scope="col">Yo'nalsihi en</th>
                                <th scope="col">photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>{{ $teacher->title_uz }}</td>
                                    <td>{{ $teacher->description_uz }}</td>
                                    <td>{{ $teacher->description_ru }}</td>
                                    <td>{{ $teacher->description_en }}</td>
                                    <td><img src="{{ asset( $teacher->photo) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('teacher.edit', ['teacher' => $teacher->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('teacher.destroy', ['teacher'=> $teacher->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('teacher.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
