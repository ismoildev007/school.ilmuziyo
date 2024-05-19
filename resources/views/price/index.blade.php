<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Narxlarimiz</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Boshlang'ich sinf narxi</th>
                                <th scope="col">Qolgan sinflar narxi</th>
                                <th scope="col">1 maxal ovqat narxi</th>
                                <th scope="col">3 maxal ovqat narxi</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prices as $price)
                                <tr>
                                    <td>{{ $price->id }}</td>
                                    <td>{{ $price->inf_price }}</td>
                                    <td>{{ $price->all_price }}</td>
                                    <td>{{ $price->kitchen_price_one }}</td>
                                    <td>{{ $price->kitchen_price_three }}</td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('price.edit', ['price' => $price->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('price.destroy', ['price'=> $price->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('price.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
