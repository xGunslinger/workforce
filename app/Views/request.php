<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Workforce</title>

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
            padding: .4rem 0 .4rem;
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
        header .line {
            background-color: rgba(247, 248, 249, 1);
            /*border-bottom: 1px solid rgba(242, 242, 242, 1);*/
            /*border-top: 1px solid rgba(242, 242, 242, 1);*/
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
            <li class="menu-item hidden"><a href="#">Schedule</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/request')?>">Requests</a></li>
            <li class="menu-item hidden"><a href="#">Notifications</a></li>
            <li class="menu-item hidden"><a href="#">Working Hours</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/') ?>">Log Out</a></li>
        </ul>
    </div>
</header>

<!--    /*********************************************************/-->
    <!-- REQUEST FORM -->
<section>
<div class="container mt-3">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <h2>Request</h2>
            <form action="<?php echo base_url('RequestController/request') ?>" method="post">
                <div class="form-group mb-3">
                    <input type="text" name="employee_email" placeholder="Supervisor" value="<?= set_value('employee_email') ?>" class="form-control" >
                </div>
                <div class="form-group mb-5">
                    <input type="text" name="title" placeholder="Title" value="<?= set_value('title') ?>" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <textarea name="description" placeholder="Description" value="<?= set_value('description') ?>" class="form-control"></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>


<header>
    <div class="line">
    </div>
        </header>

<!--FOOTER: DEBUG INFO + datetime-->
<footer>
    <div class="render">
        <p>Page rendered in {elapsed_time} seconds</p>
    </div>
    <div class="datetime">
        <p><?=date('d/m/y H:i')?></p>
    </div>
</footer>
</body>
</html>