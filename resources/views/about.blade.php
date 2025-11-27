<!-- Simpan ini di file resources/views/form.blade.php -->
<form action="/store" method="POST">
    @csrf
    <button type="submit">Kirim Data</button>
</form>
<form action="/update" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">update data</button>
</form>
<form action="/delete" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">hapus data</button>
</form>

<form action="/welcome" method="POST">
    @csrf
    @method('MATCH')
    <button type="submit">metode gabungan</button>
</form>

<a href="/show/10">Tampilkan ID 10</a>
<a href="/show/999">Tampilkan ID 999</a>
<a href="/show/12345">Tampilkan ID 12345</a>
<break>

<a href="/edit/gaby">Tampilkan gaby</a>
<a href="/edit/gabrielle">Tampilkan gabrielle</a>
<a href="/edfit/alehandro">Tampilkan ID alehandro</a>

