<!DOCTYPE html>
<html>
<head>
    <title>Upload Foto</title>
</head>
<body>
    <h1>Upload Foto</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('upload.photo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="photo">Pilih Foto:</label>
        <input type="file" name="photo" id="photo" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>