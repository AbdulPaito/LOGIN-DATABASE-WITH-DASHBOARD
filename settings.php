<?php
require_once('database.php'); // Make sure this file includes your database connection

// Perform query
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Check if query execution was successful
if (!$result) {
    die("Database query failed."); // Handle the error appropriately
}
?>

<section id="settings-section">
    <h1>Settings</h1>
    <table class="settings-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $counter++; ?></td>
                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                    <td><?php echo htmlspecialchars($row['password']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>

<?php
// More PHP code here if needed
?>
