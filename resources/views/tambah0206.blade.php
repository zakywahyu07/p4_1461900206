<form action="{{ route('buku0206.store') }}" method="post">
    @csrf
    id: <input type="text" name="id">
    judul: <input type="text" name="judul">
    tahun_terbit: <input type="text" name="tahun_terbit">
    <button type="submit">simpan</button>

</form>