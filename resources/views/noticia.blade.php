<table border="1" >
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Noticia</th>
        </tr>
    </thead>
    <tbody>
        @foreach($noticias as $noticia)
        <tr>
            <td>{{$noticia->titulo}}</td>
            <td>{{$noticia->noticia}}</td>
        </tr>
        @endforeach
    </tbody>
</table>