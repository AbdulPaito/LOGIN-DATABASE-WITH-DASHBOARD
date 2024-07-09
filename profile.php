<section id="profile-section">
    <h1>Profile</h1>
    <p>Manage your profile here.</p>
    <table class="profile-table">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
            <th>Column 4</th>
            <th>Column 5</th>
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
