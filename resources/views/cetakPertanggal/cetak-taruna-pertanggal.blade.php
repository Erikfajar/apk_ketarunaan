<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table.static{
            position: relative;
            /* left: 3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Taruna</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Cetak Taruna</b></p>
        <table class="class static" align="center" rules="all" border="1px" style="width: 95%;">
            <thead>
                <tr>
                    <th style="width:80px;"><strong>No</strong></th>
                    <th><strong>Nit_Taruna/i</strong></th>
                    <th><strong>Nama</strong></th>
                    <th><strong>Tingkat</strong></th>
                    <th><strong>Jurusan</strong></th>
                    <th><strong>Alasan</strong></th>
                    <th><strong>Tanggal</strong></th>
            
                </tr>
            </thead>
            <tbody>
                @foreach ($cetakPertanggal as $item)
                <tr>
                    <td><strong>{{ $loop->iteration }}</strong></td>
                    <td>{{ $item->nit }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tingkat }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->alasan }}</td>
                    <td>{{ date('d-m-Y', strtotime($item->tgl)) }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>