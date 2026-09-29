<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>material</th>
                <th>cor</th>
                <th>textura</th>
                <th>peso</th>
                <th>unidadeMedida</th>
                <th>aplicacoes</th>
                <th>prazoValidade</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->material }}</td>
                    <td>{{ $p->cor }}</td>
                    <td>{{ $p->textura }}</td>
                    <td>{{ $p->peso }}</td>
                    <td>{{ $p->unidadeMedida }}</td>
                    <td>{{ $p->aplicacoes }}</td>
                    <td>{{ $p->prazoValidade }}</td>
                </tr>
                @andforeach
        </tbody>
    </table>
</div>
