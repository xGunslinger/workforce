<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Workforce</title>

    <!--    /*********************************************************/-->
    <!-- STYLES -->
    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        .list-group-item-action:hover
        {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }

        header .line {
            background-color: rgba(247, 248, 249, 1);
            padding: 2rem;
        }

        /*********************************************************/
        /*FOOTER STYLE */
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .render {
            color: rgba(255, 255, 255, 1);
            padding: 1rem 1.75rem;
        }
        footer .datetime {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .1rem 1.75rem;
        }
        }
    </style>
</head>
<body>
<header>

    <!--    /*********************************************************/-->
    <!--    MENU BUTTONS -->
    <div class="menu">
        <ul>
            <li class="menu-toggle"><button onclick="toggleMenu();">&#9776;</button></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/profile')?>">Workforce</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/schedule')?>">Schedule</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/request')?>">Requests</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/notification')?>">Notifications</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/working_hours')?>">Working Hours</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/') ?>">Log Out</a></li>
        </ul>
    </div>
</header>

<!--    /*********************************************************/-->
<!--    CONTENT -->
<section>
    <div class="container">

        <h2>Working Hours</h2>
        <p><?php echo $row->name;?> starts day at <?php echo $row->start_at;?></p>
        <p>Your per hour rate is <?php echo $row->per_hour_rate;?></p>

        <div class="row">
            <div class="col-6">
                <div class="mb-3 ">
                    <div class="rounded-3 mb-1">
                        <a class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Today is <?php echo date('d/m/y');?></h5>
                            </div>
                            <p class="mb-1">Online time: <?php echo $row->working_hours;?> </p>
                            <p class="mb-1">Earned: <?php echo (date('H', strtotime($row->working_hours)))*($row->per_hour_rate);?> $</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="rounded-3 mb-1">
                        <a class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Weekly report</h5>
                                <small>Work in progress...</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="rounded-3 mb-1">
                        <a class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Montly report</h5>
                                <small>Work in progress...</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<header>
    <div class="line">
    </div>
</header>

<!--    /*********************************************************/-->
<!--FOOTER: DEBUG INFO + datetime-->
<footer>
    <div class="render">
        <p>Page rendered in {elapsed_time} seconds</p>
    </div>
    <div class="datetime">
        <p><?=date('d/m/y H:i')?></p>
    </div>
</footer>

</html>
