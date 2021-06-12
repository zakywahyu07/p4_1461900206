<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900206_KEGIATAN4_P
  </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>
  <div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
        <a href="/buku/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">ID</th>
            <th class="px-4 py-3">Judul</th>
            <th class="px-4 py-3">Tahun Terbit</th>
            <th class="px-4 py-3">Jenis</th>
          </tr>
        </thead>
        <tbody>
        @foreach($buku as $buku)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $buku->id }}</td>
            <td class="px-4 py-4">{{ $buku->judul }}</td>
            <td class="px-4 py-4">{{ $buku->tahun_terbit }}</td>
            <td class="px-4 py-4">{{ $buku->jenis }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      
    </div>
  </div>
</body>
</html>