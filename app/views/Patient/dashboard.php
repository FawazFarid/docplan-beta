<?php 
$mapper = new \Mapper\PatientMapper();
$model = $mapper->findByProperty("email", $_SESSION['email']);
?>
<div class="ui borderless menu">
    <div class="ui container">
        <div class="item">
            <img class="ui small image" src="<?php echo URL; ?>web/images/big-logo.png">
        </div>
        <div class ="right item">
            
            <div class ="ui pointing dropdown compact link item">   
                <span class="text"><?php echo $model->first_name; ?></span>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a href="<?php echo URL; ?>Patient/" class="item"><i class="home icon"></i>Dashboard</a>
                    <a href="<?php echo URL; ?>Patient/History" class="blue item"><i class="clock icon"></i>History</a>
                    <a href="<?php echo URL; ?>Patient/Settings" class="item"><i class="settings icon"></i>Settings</a>
                    <div class="divider"></div>
                    <a href="<?php echo URL; ?>logout" class="item"><i class="power icon"></i>Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui container">
    <div class="ui fluid secondary pointing menu">
        <a href="<?php echo URL; ?>Patient/" class="blue active item"><i class="home icon"></i>Dashboard</a>
        <a href="<?php echo URL; ?>Patient/History" class="red item"><i class="clock icon"></i>History</a>
        <a href="<?php echo URL; ?>Patient/Settings" class="item"><i class="settings icon"></i>Settings</a>
    </div>
    <div class="ui bottom attached segment">
        <h1 class="ui center aligned dividing header">Welcome, <?php echo $model->first_name;?></h1>
        <p><a href="<?php echo URL; ?>Search">Search</a> for your favourite doctor and book an appointment.</p>
        <p><a href="<?php echo URL; ?>Appointment/new-appointment"><i class="plus icon"></i>New Appointment.</a></p>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </div>
    <br/>
</div>


