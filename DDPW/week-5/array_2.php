<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Domisli</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $dosen = array(
                    'nama' => 'Elok Hamdana',
                    'domisili' => 'Malang',
                    'jenis_kelamin' => 'Perempuan'
                );

                echo "<tr>";
                echo "<td>1</td>";
                echo "<td>{$dosen['nama']}</td>";
                echo "<td>{$dosen['domisili']}</td>";
                echo "<td>{$dosen['jenis_kelamin']}</td>";
                echo "</tr>";
            ?>
        </tbody>
    </table>
</body>
</html>