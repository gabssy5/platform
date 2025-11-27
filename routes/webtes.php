<!-- Simpan ini di file resources/views/form.blade.php -->
<form action="/store" method="POST">
    @csrf
    <button type="submit">Kirim Data</button>
</form>
