loadTasks();

document.getElementById(
"search"
).addEventListener(
"keyup",
loadTasks
);

document.getElementById(
"filterStatus"
).addEventListener(
"change",
loadTasks
);

function addTask(){

    let task_name =
    document.getElementById(
    "task_name").value;

    let description =
    document.getElementById(
    "description").value;

    let status =
    document.getElementById(
    "status").value;

    if(task_name==""){
        alert("Enter Task");
        return;
    }

    let formData =
    new FormData();

    formData.append(
    "task_name",
    task_name
    );

    formData.append(
    "description",
    description
    );

    formData.append(
    "status",
    status
    );

    fetch(
    "backend/add_task.php",
    {
        method:"POST",
        body:formData
    })

    .then(response =>
    response.text())

    .then(data => {

        document.getElementById(
        "task_name").value="";

        document.getElementById(
        "description").value="";

        loadTasks();
    });
}

function loadTasks(){

    let search =
    document.getElementById(
    "search").value;

    let filter =
    document.getElementById(
    "filterStatus").value;

    fetch(
"backend/get_tasks.php?search=" +
search +
"&filter=" +
filter
)

    .then(response =>
    response.text())

    .then(data => {

        document.getElementById(
        "task-list"
        ).innerHTML = data;
    });
}

function deleteTask(id){

    let formData =
    new FormData();

    formData.append("id",id);

    fetch(
    "backend/delete_task.php",
    {
        method:"POST",
        body:formData
    })

    .then(response =>
    response.text())

    .then(data => {
        loadTasks();
    });
}

function updateStatus(
id,status){

    let formData =
    new FormData();

    formData.append(
    "id",
    id
    );

    formData.append(
    "status",
    status
    );

    fetch(
    "backend/update_status.php",
    {
        method:"POST",
        body:formData
    })

    .then(response =>
    response.text())

    .then(data => {
        loadTasks();
    });
}

function editTask(
id,
oldTask,
oldDescription
){

    let task =
    prompt(
    "Edit Task",
    oldTask
    );

    let desc =
    prompt(
    "Edit Description",
    oldDescription
    );

    if(task==null){
        return;
    }

    let formData =
    new FormData();

    formData.append(
    "id",
    id
    );

    formData.append(
    "task_name",
    task
    );

    formData.append(
    "description",
    desc
    );

    fetch(
    "backend/update_task.php",
    {
        method:"POST",
        body:formData
    })

    .then(response =>
    response.text())

    .then(data => {
        loadTasks();
    });
}