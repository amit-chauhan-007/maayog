<style>
.sidebar[data-background-color="black"] {
    background: #191919;
}
.sidebar[data-color=rose] li.active>a {
    background-color: #e91e63;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(233,30,99,.4);
}
.sidebar .sidebar-background, .off-canvas-sidebar .sidebar-background {
    position: absolute;
    z-index: 1;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    background-size: cover;
    background-position: center center;
}
.sidebar .sidebar-background:after, .off-canvas-sidebar .sidebar-background:after {
    position: absolute;
    z-index: 3;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    background: #191919;
    opacity: .93;
}
.sidebar[data-background-color=black] .nav .nav-link, .sidebar[data-background-color=black] .nav .nav-item .nav-link {
    color: #fff;
}
.sidebar .logo .simple-text, .off-canvas-sidebar .logo .simple-text {
    text-transform: uppercase;
    padding: 5px 0px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    text-align: center;
    font-weight: 400;
    line-height: 30px;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 7px 15px;
}
</style>

<div class="sidebar" data-color="rose" data-background-color="black" data-image="<?php echo base_url('assets/img/sidebar-1.jpg'); ?>">
            <div class="logo">
                <a href="<?php echo base_url('dashboard');?>" class="simple-text">
                    MaaYog
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="dashboard">
                        <a class="nav-link" href="<?php echo base_url('dashboard');?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="userManagement">
                        <a class="nav-link" href="<?php echo base_url('user'); ?>">
                            <i class="material-icons">person</i>
                            <p>User Management</p>
                        </a>
                    </li>
                    <li class="classManagement" >
                        <a class="nav-link" href="<?php echo base_url('class');?>">
                            <i class="material-icons">content_paste</i>
                            <p>Class Management</p>
                        </a>
                    </li>
                    <li class="eventManagement" >
                        <a class="nav-link" href="<?php echo base_url('event');?>">
                            <i class="material-icons">library_books</i>
                            <p>Event Management</p>
                        </a>
                    </li>
                    <li class="paymentHistory" >
                        <a class="nav-link" href="<?php echo base_url('payment');?>">
                            <i class="material-icons">bubble_chart</i>
                            <p>payment History</p>
                        </a>
                    </li>
                    <li class="Notifications" >
                        <a class="nav-link" href="<?php echo base_url('notification');?>">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>