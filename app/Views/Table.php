<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User List</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Registration Date</th>
    </tr>
    <?php foreach ($data as $user): ?>
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['status']; ?></td>
            <td><?php echo $user['regdate']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
