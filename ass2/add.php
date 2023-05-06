<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Employee</title>
</head>
<body>
    <h1>Add new Employee</h1>
    <form action="processAdd.php" method="POST">
        <div>EmpID: <input name="empID" type="text" required/></div>
        <div>Password: <input name="password" type="password" required/></div>
        <div>Full name: <input name="fullname" type="text" required/></div>
        <div>Email: <input name="email" type="email" required/></div>
        <div>Role:
            <select name="role" id="role">
                <option value="1">Staff</option>
                <option value="2">Admin</option>
            </select>
        </div>
        <div>Salary: <input name="salary" type="number" min="0" required/></div>
        <input type="submit" value="Add">
    </form>
</body>
</html>