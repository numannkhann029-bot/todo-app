<?php

include("../config/database.php");

$search = "";

if(isset($_GET['search'])){
    $search = $_GET['search'];
}

$filter = "all";

if(isset($_GET['filter'])){
    $filter = $_GET['filter'];
}

$sql = "SELECT * FROM tasks
WHERE task_name LIKE '%$search%'";

if($filter != "all"){
    $sql .= " AND status='$filter'";
}

$sql .= " ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
?>

<div class="task-card">

    <h3>
        <?php echo $row['task_name']; ?>
    </h3>

    <p>
        <?php echo $row['description']; ?>
    </p>

    <p class="status <?php echo $row['status']; ?>">
        Status:
        <?php echo ucfirst(
        str_replace("_"," ",
        $row['status']
        ));
        ?>
    </p>

    <div class="actions">

        <select onchange="updateStatus(
        <?php echo $row['id']; ?>,
        this.value)">

            <option value="pending"
            <?php
            if($row['status']=="pending")
            echo "selected";
            ?>>
            Pending
            </option>

            <option value="in_progress"
            <?php
            if($row['status']=="in_progress")
            echo "selected";
            ?>>
            In Progress
            </option>

            <option value="done"
            <?php
            if($row['status']=="done")
            echo "selected";
            ?>>
            Done
            </option>

        </select>

        <button onclick="editTask(
        <?php echo $row['id']; ?>,
        `<?php echo $row['task_name']; ?>`,
        `<?php echo $row['description']; ?>`
        )">
            Edit
        </button>

        <button onclick="deleteTask(
        <?php echo $row['id']; ?>
        )">
            Delete
        </button>

    </div>

</div>

<?php
}
?>