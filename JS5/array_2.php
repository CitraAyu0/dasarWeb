<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            box-shadow: 0 0 8px rgba(0,0,0,0.2);
        }
        th, td {
            border: 1px solid #555;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #af4cacff;
            color: white;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        caption {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'];
    ?>
    <table>
        <caption>Data Dosen</caption>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>