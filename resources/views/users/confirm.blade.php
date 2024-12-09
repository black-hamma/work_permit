<!DOCTYPE html>
<html>

<head>
    <title>Confirm User Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body class="p-4">
    <div class="container">
        <h1>User Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>First Name</th>
                <td>{{ $user->first_name }}</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>{{ $user->last_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>{{ $user->company }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $user->phone }}</td>
            </tr>
            <tr>
                <th>Is Admin</th>
                <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $user->status ? 'Active' : 'Inactive' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ $password }}</td>
            </tr>
        </table>
        <form action="{{ route('users.generate-pdf', $user->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Generate PDF</button>
        </form>
    </div>
</body>

</html>
