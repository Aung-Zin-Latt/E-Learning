<?php

$pageTitle = "Project | Time Tracker";

require 'Includes/header.php';

?>

<div class="section catalog random">

    <div class="col-container page-container">
        <h1 class="action-header">Welcome</h1>
        <p class="header-p">What would you like to do today?</p>
        <div class="col col-70-md col-60-lg col-center">

            <div class="actions-item">
                <a href="task.php" class="actions-link">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
                    </span>
                Add Task</a>
            </div>

            <div class="actions-item">
                <a class="actions-link" href="project.php">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#project_icon"></use></svg>
                    </span>
                    Add Project
                </a>
            </div>

            <div class="actions-item">
                <a class="actions-link" href="project.php">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#report_icon"></use></svg>
                    </span>
                    View Report
                </a>
            </div>

        </div>
    </div>
</div>

<?php include 'Includes/footer.php'; ?>