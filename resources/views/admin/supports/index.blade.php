<h1>Listagem dos suportes</h1>

<a href="{{ route('supports.create') }}">Criar dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    >
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
