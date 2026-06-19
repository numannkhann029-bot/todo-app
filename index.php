<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List App</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>To Do List</h1>

    <div class="task-form">

        <input type="text" id="task_name"
            placeholder="Enter Task">

        <textarea id="description"
            placeholder="Task Description"></textarea>

        <select id="status">
            <option value="pending">
                Pending
            </option>

            <option value="in_progress">
                In Progress
            </option>

            <option value="done">
                Done
            </option>
        </select>

        <button onclick="addTask()">
            Add Task
        </button>

    </div>

    <div class="filter-box">

        <input type="text"
            id="search"
            placeholder="Search Task">

        <select id="filterStatus">
            <option value="all">
                All
            </option>

            <option value="pending">
                Pending
            </option>

            <option value="in_progress">
                In Progress
            </option>

            <option value="done">
                Done
            </option>
        </select>

    </div>

    <div id="task-list">
        <!-- Tasks Here -->
    </div>

</div>

<script src="script.js"></script>

</body>
</html>