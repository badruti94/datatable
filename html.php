<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>

<body>
    <table id="example">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Alamat</td>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Alamat</td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>1</td>
                <td>Andi</td>
                <td>Jakarta</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Budi</td>
                <td>Bandung</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Putri</td>
                <td>Cilacap</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Fitriani</td>
                <td>Cilacap</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Hariyah</td>
                <td>Cilacap</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Kania</td>
                <td>Cilacap</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Kuswandari</td>
                <td>Cilacap</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Yessi</td>
                <td>Cilacap</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Novitasari</td>
                <td>Cilacap</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Wirda</td>
                <td>Cilacap</td>
            </tr>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                pageLength: 3
            });
        });
    </script>
</body>

</html>