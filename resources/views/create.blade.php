<form action="/create/store" method="POST">

    @csrf

    <h1>nama buku</h1>
    <input type="text" name="nama_buku">
    <h1>synopsis</h1>
    <input type="text" name="synopsis">
    <h1>genre</h1>
    <select name="genre" id="genre">
        <option value="Horror">Horror</option>
        <option value="Romance">Romance</option>
        <option value="Action">Action</option>
        <option value="Psycology">Psycology</option>
        <option value="Slice Of Life">Slice Of Life</option>
    </select>
    <h1>harga</h1>
    <input type="number" name="harga">

    <h1>penerbit</h1>
    <input type="text" name="penerbit" id="penerbit">

    <button type="submit">Tambahkan</button>
</form>