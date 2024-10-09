<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        table {
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
        }
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        input[type="text"] {
            width: 80px;
            padding: 5px;
            margin: 10px 0;
            text-align: center;
        }
        input[type="submit"] {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .hasil {
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>

<?php
$hasil = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'tambah':
            $hasil = $angka1 + $angka2;
            break;
        case 'kurang':
            $hasil = $angka1 - $angka2;
            break;
        case 'kali':
            $hasil = $angka1 * $angka2;
            break;
        case 'bagi':
            $hasil = $angka2 != 0 ? $angka1 / $angka2 : 'Tidak bisa dibagi dengan nol';
            break;
    }
}
?>

<table>
    <tr>
        <th colspan="4">Kalkulator Sederhana</th>
    </tr>
    <tr>
        <td colspan="4" class="hasil">Hasil: <?php echo $hasil; ?></td>
    </tr>
    <tr>
        <td colspan="4">
            <form method="post">
                <input type="text" name="angka1" placeholder="Angka 1" required>
                <input type="text" name="angka2" placeholder="Angka 2" required>
                <br>
                <input type="submit" name="operator" value="tambah">
                <input type="submit" name="operator" value="kurang">
                <input type="submit" name="operator" value="kali">
                <input type="submit" name="operator" value="bagi">
            </form>
        </td>
    </tr>
</table>

</body>
</html>
