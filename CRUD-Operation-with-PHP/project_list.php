<?php
require 'Includes/functions.php';

$page = "projects";
$pageTitle = "Project List | Time Trucker";

// preserving data integrity
if (isset($_POST['delete'])) {
    if (delete_project(filter_input(INPUT_POST, 'delete', FILTER_SANITIZE_NUMBER_INT))) {
        header('location: project_list.php?msg=Project+Deleted');
        exit;
    } else {
        header('location: project_list.php?msg=Unable+to+Delete+Project');
        exit;
    }
}

if (isset($_GET['msg'])) {
    $error_message = trim(filter_input(INPUT_GET, 'msg', FILTER_SANITIZE_STRING));
}

include("Includes/header.php");

?>

<div class="section catalog random">

    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <h1 class="actions-header">Project List</h1>
            <div class="actions-item">
                <a class="actions-link" href="project.php">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#project_icon"></use></svg>
                    </span>
                    Add Project
                </a>
            </div>

            <?php
            if (isset($error_message)) {
                echo "<p class='message'>$error_message</p>";
            }
            ?>

            <div class="class-container">
                <ul class="items">
                    <!-- reading project data -->
                    <?php
                    foreach (get_project_list() as $item) {
                        // updating projects
                        echo "<li><a href='project.php?id=" . $item['project_id'] . "'>" . $item['title'] . "</a>";
                        // preserving data integrity --- onsubmit=\"return confirm('Are you sure you want to delete this task?'); \"
                        echo "<form method='post' action='project_list.php' onsubmit=\"return confirm('Are you sure you want to delete this project?'); \">\n";
                        echo "<input type='hidden' value='" . $item['project_id'] . "' name='delete' />\n";
                        echo "<input type='submit' class='button--delete' value='Delete' />\n";
                        echo "</form>";
                        echo "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php include("Includes/footer.php"); ?>