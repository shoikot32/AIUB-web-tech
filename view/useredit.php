<?php
include '../control/useredit_action.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>ABC Airlines - Edit User</title>
    <link rel="stylesheet" type="text/css" href="../style/useredit.css">
</head>
<body>
    <h1>ABC Airlines</h1>
    <hr>     

    <!-- Search Form -->
    <h2>Search User</h2>
    <form method="POST" style="margin-bottom:20px;">
        <label for="search_value">Search by ID or Username:</label>
        <input type="text" id="search_value" name="search_value" value="<?php echo htmlspecialchars($searchedValue ?? ''); ?>">
        <input type="submit" name="search" value="Search">
        <input type="submit" name="all" value="Show All Users"><br>
        <span style="color:red;"><?php echo $searchError ?? ''; ?></span>
    </form>

    <?php if ($row): ?>
        <h2>Edit User</h2>
        <form method="POST">
            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">

            <table align="center">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo htmlspecialchars($row['username']); ?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>"></td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstname" value="<?php echo htmlspecialchars($row['firstname']); ?>"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastname" value="<?php echo htmlspecialchars($row['lastname']); ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>"></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>"></td>
                </tr>
                <tr>
                    <td>Passport:</td>
                    <td><input type="text" name="passport" value="<?php echo htmlspecialchars($row['passport']); ?>"></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob" value="<?php echo htmlspecialchars($row['dob']); ?>"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="male" <?php if ($row['gender'] == "male") echo "checked"; ?>> Male
                        <input type="radio" name="gender" value="female" <?php if ($row['gender'] == "female") echo "checked"; ?>> Female
                        <input type="radio" name="gender" value="other" <?php if ($row['gender'] == "other") echo "checked"; ?>> Other
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea name="address"><?php echo htmlspecialchars($row['address']); ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="update" value="Update">
                        <input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete this user?');">
                        <input type="submit" name="add" value="Add New User">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="color:green; text-align:center;"><?php echo $errMsg ?? ''; ?></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><a href="http://localhost/view/firstlab/view/adminlogin.php" class="link">Logout</a></td>
                </tr>
            </table>
        </form>
    <?php endif; ?>

    <!-- Show All Users -->
    <?php if (!empty($allUsers)) : ?>
        <h2>All Registered Users</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Passport</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allUsers as $user) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['firstname']); ?></td>
                        <td><?php echo htmlspecialchars($user['lastname']); ?></td>
                        <td><?php echo htmlspecialchars($user['username']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['phone']); ?></td>
                        <td><?php echo htmlspecialchars($user['passport']); ?></td>
                        <td><?php echo htmlspecialchars($user['dob']); ?></td>
                        <td><?php echo htmlspecialchars($user['gender']); ?></td>
                        <td><?php echo htmlspecialchars($user['address']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php elseif (isset($_POST['all'])) : ?>
        <p style="color:red;">No users found in the database.</p>
    <?php endif; ?>
</body>
</html>
