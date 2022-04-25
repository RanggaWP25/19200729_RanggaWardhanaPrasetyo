<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        .table-data th {
            background-color: grey;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>LAPORAN DATA ANGGOTA</center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $a = 1;
            foreach ($laporan as $l) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $l['nama']; ?></td>
                    <td><?= $l['alamat']; ?></td>
                    <td><?= $l['email']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>