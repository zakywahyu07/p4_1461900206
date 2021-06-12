<head>
  <meta name="viewport" content="width=device-width,
  initial-scale=1">
  <title>Data BuKu</title>
  <style>
      table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
      }
      thead {
        background-color: #f2f2f2;
      }
      th, td {
        text-align: left;
        padding: 8px;
      }
      tr:nth-child(even) { background-color: #f2f2f2}
      .tambah {
        padding: 8px 16px ;
        text-decoration: none;
      }
  </style>
</head>
<body>
  <div style="overflow-x:auto;">
    {{-- <a class="tambah" href="{{route('buku.create')}}"> Tambah Data</a> --}}
  <table>
      <thead>
          <tr>
              <th>Id</th>
              <th>Judul</th>
              <th>Tahun Terbit</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        @foreach($Buku as $buku)
        <tr>
            <td>{{$buku->id}}</td>
            <td>{{$buku->judul}}</td>
            <td>{{$buku->tahun_terbit}}</td>
            <td>
              <a href="{{ url('buku0206/' .$buku->id. "/edit") }}">Edit</a>
              |
              <form action="{{}}">

              </form>
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>
  </div>