cs <?php include 'header.php';?>
<h3 class="text-center headingg">User Dashboard</h3>

<!-- main menu tabs-->
<div class="tab-user">
    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">User Profile</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Event / Schedular</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Class</button>
    <button class="tablinks" onclick="openCity(event, 'Inquiry')">Inquiry</button>
</div>

<div id="London" class="tabcontent">
    <div class="profile-contain">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu" >
                    <li class="active"><a href="" data-target-id="User-Details"><i class="glyphicon glyphicon-user"></i>User Details</a></li>
                    <li><a href="" data-target-id="Settings"><i class="glyphicon glyphicon-cog"></i>Change Password</a></li>
                    <li><a href="" data-target-id="Payment-History"><i class="glyphicon glyphicon-lock"></i> Payment History</a></li>
                    <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </div>
            <div class="col-md-9  admin-content" id="User-Details">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Avinash Kumar</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAd1AAAAJDk1ZDk3NDRiLWU4Y2ItNGZhZC04NzZhLWNlMWU0MTdlMWEyOA.jpg" class="img-circle img-responsive"> </div>
                            <div class=" col-md-9 col-lg-9 "> 
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>Avinash</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="mailto:avinash.k@purpledot.in">avinash.k@purpledot.in</a></td>
                                        </tr>
                                        <tr>
                                            <td>Mobile</td>
                                            <td>8951378186</td>
                                        </tr>
                                        <tr>
                                            <tr>
                                                <td>UserID</td>
                                                <td>MA01</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope icon-profile"></i></a>
                            <span class="pull-right">
                                <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning icon-profile"><i class="glyphicon glyphicon-edit icon-profile"></i></a>
                                <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger icon-profile"><i class="glyphicon glyphicon-remove icon-profile"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9  admin-content" id="Settings">
                    <form action="/password" method="post">
                         <div class="panel panel-info" style="margin: 1em;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="old_password" class="control-label panel-title">old Password</label></h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" id="new_password" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info" style="margin: 1em;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="new_password" class="control-label panel-title">New Password</label></h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" id="new_password" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info" style="margin: 1em;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Confirm password</label></h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password_confirmation" id="confirm_password" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info border" style="margin: 1em;">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="pull-left">
                                        <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-9  admin-content" id="Payment-History">
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Payment History</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Amount</th>
                                        <th>Payment Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Rs 2000</td>
                                        <td>Net Banking</td>
                                        <td>Success</td>
                                    </tr>      
                                    <tr class="success">
                                        <td>02</td>
                                        <td>Rs 2000</td>
                                        <td>Net Banking</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>03</td>
                                        <td>Rs 2000</td>
                                        <td>Credit Card</td>
                                        <td>Fail</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>04</td>
                                        <td>Rs 2000</td>
                                        <td>Net Banking</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>05</td>
                                        <td>Rs 2000</td>
                                        <td>Net Banking</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>06</td>
                                        <td>Rs 2000</td>
                                        <td>Debit Card</td>
                                        <td>Fail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9  admin-content" id="logout">
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Confirm Logout</h3>
                        </div>
                        <div class="panel-body">
                            Do you really want to logout ?  
                            <a  href="#" class="label label-danger"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span >   Yes   </span>
                        </a>    
                        <a href="/account" class="label label-success"> <span >  No   </span></a>
                    </div>
                    <form id="logout-form" action="#" method="POST" style="display: none;">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- profile ends -->
</div>



<div id="Paris" class="tabcontent">
    <!-- event schedular -->
    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Event</th>
                        <th>attend</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">26</div>
                            <div class="dayofweek">Saturday</div>
                            <div class="shortdate text-muted">July, 2018</div>
                        </td>
                        <td class="agenda-time">
                            5:30 AM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                                Hatha Yoga
                            </div>
                        </td>
                        <td>
                            <select>
                                <option>Attending</option>
                                <option>Not Attending</option>
                            </select>
                        </td>
                    </tr>

                    <!-- Multiple events in a single day (note the rowspan) -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="3">
                            <div class="dayofmonth">24</div>
                            <div class="dayofweek">Thursday</div>
                            <div class="shortdate text-muted">July, 2018</div>
                        </td>
                        <td class="agenda-time">
                            8:00 - 9:00 AM 
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Pranayam
                            </div>
                        </td>
                         <td>
                            <select>
                                <option>Attending</option>
                                <option>Not Attending</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            10:15 AM - 12:00 PM 
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Desert Yoga
                            </div>
                        </td>
                         <td>
                            <select>
                                <option>Attending</option>
                                <option>Not Attending</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            7:00 - 9:00 PM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Hatha Yoga
                            </div>
                        </td>
                         <td>
                            <select>
                                <option>Attending</option>
                                <option>Not Attending</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- event schedular ends -->
</div>
<div id="Tokyo" class="tabcontent">
    <div class="col-md-4 col-md-offset-4">
        <form>
            <div class="form-group text-center">
                <label for="sel1">Select Classes</label>
                <select class="form-control" id="sel1">
                    <option>New Classes</option>
                    <option>Subscribed Classes</option>
                    <option>Corporate Classes</option>
                </select>
            </div>
        </form>
    </div>
    <div class="table-responsive" style="clear: both;">          
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Timing</th>
                    <th>Price</th>
                    <th>Make Payment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hatha Yoga</td>
                    <td>12-1-2018</td>
                    <td>12:05:58</td>
                    <td>Rs 450</td>
                    <td><a href="">Make Payment</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Power Yoga</td>
                    <td>13-1-2018</td>
                    <td>02:05:00</td>
                    <td>Rs 500</td>
                    <td><a href="">Make Payment</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pranayam</td>
                    <td>14-1-2018</td>
                    <td>07:00:00</td>
                    <td>Rs 250</td>
                    <td><a href="">Make Payment</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!--Inquiry -->
<div id="Inquiry" class="tabcontent">
    <div class="col-md-6 col-md-offset-2">
        <div class="form-area">  
            <form role="form">
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Inquiry Form</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>                
                </div>  
                <button type="button" id="submit" name="submit" class="btn btn-primary">Submit Form</button>
            </form>
        </div>
    </div>
</div>
<!-- Inquiry -->
<!-- main menu tabs ends-->



<script type="text/javascript">
    var app = {
        settings: {
            container: $('.calendar'),
            calendar: $('.front'),
            days: $('.weeks span'),
            form: $('.back'),
            input: $('.back input'),
            buttons: $('.back button')
        },

        init: function() {
            instance = this;
            settings = this.settings;
            this.bindUIActions();
        },

        swap: function(currentSide, desiredSide) {
            settings.container.toggleClass('flip');

            currentSide.fadeOut(900);
            currentSide.hide();

            desiredSide.show();
        },

        bindUIActions: function() {
            settings.days.on('click', function(){
                instance.swap(settings.calendar, settings.form);
                settings.input.focus();
            });

            settings.buttons.on('click', function(){
                instance.swap(settings.form, settings.calendar);
            });
        }
    }

    app.init();
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php include 'footer.php';?>