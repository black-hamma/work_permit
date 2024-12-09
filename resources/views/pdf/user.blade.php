<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table th {
            background-color: #f2f2f2;
        }

        h1,
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>User Details</h1>
    <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td>{{ $user->first_name }}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>{{ $user->last_name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Company</td>
            <td>{{ $user->company }}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>{{ $user->phone }}</td>
        </tr>
        <tr>
            <td>Is Admin</td>
            <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ $user->status ? 'Active' : 'Inactive' }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>{{ $password }}</td> <!-- Display plain text password -->
        </tr>
    </table>

</body>

</html>
