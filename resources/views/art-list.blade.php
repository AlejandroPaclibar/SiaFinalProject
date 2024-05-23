<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert to pdf</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Artwork List</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Images</th>
                <th>Artwork Names</th>
                <th>Descrirption</th>
                <th>Price</th>
                <th>QRcode</th>
            </tr>
        </thead>
        <tbody>
            @php $count = 0; @endphp
            @foreach($artworks as $art) 
                @if($count++ > 10)
                <div style="page-break-after: always"> &nbsp; </div>
                @php $count = 0; @endphp
                @endif
            <tr>
                <img src="url({{$art->imageUrl}})" alt="" srcset="">
                <td>{{$art->art_name}}</td>
                <td>{{$art->description}}</td>               
                <td>{{$art->price}}</td>
                <td><img src="data:image/png;base64,{{ base64_encode(QrCode::size(70)->generate($art->art_name)) }}" alt="QR Code"></td>

            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>