<div id="navigator">
    <nav id="one">
        <label id="logo">DIGITAL FARMING</label>
        <div id="user">Hello, <?php echo $login_session; ?></div>
    </nav>
    <nav id="two">
        <ul>
            <li><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>
                    <span class="home">Home</span></a></li>
            <li><a href="employees.php"><i class="fa fa-folder" aria-hidden="true"></i>
                    <span class="employees">Employees</span></a></li>
            <li><a href="work_schedule.php"><i class="fa fa-tasks" aria-hidden="true"></i>
                    <span class="schedule">Schedules</span></a></li>
            <li><a href="leaves.php"><i class="fa fa-calendar" aria-hidden="true"></i>
                    <span class="requests">Leave Requests</span></a></li>
            <li><a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i>
                    <span class="settings">Settings</span></a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                <span class="logout">LogOut</span></a></li>
        </ul>
    </nav>
</div>