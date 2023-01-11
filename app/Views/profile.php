<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
            border-bottom: 1px solid rgba(242, 242, 242, 1);
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
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        /*********************************************************/
        /* STATUS STYLE */
        .status {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
            padding: .4rem 2rem;
        }
        header .status ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: left;
        }
        header .status li {
            display: inline-block;
        }
        header .status li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.status-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.status-item a:hover,
        header li.status-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
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
            <li class="menu-item hidden"><a href="#">Workforce</a></li>
            <li class="menu-item hidden"><a href="#">Schedule</a></li>
            <li class="menu-item hidden"><a href="#">Requests</a></li>
            <li class="menu-item hidden"><a href="#">Notifications</a></li>
            <li class="menu-item hidden"><a href="#">Working Hours</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/') ?>">Log Out</a></li>
        </ul>
    </div>
</header>

<!--    /*********************************************************/-->
<!--    CONTENT -->
    <section>
        <h1>Welcome back, <?php echo $row->name;?>!</h1>
        <h2>Position: <?php echo $row->position; ?></h2>
        <h2>Current status: ВСТАВИТЬ СТАТУС ИЗ БД </h2>
        <p>У нас было два пакетика травы, семьдесят пять ампул мескалина, 5 пакетиков диэтиламида лизергиновой кислоты или ЛСД, </p>
        <p> солонка, наполовину наполненная кокаином, и целое море разноцветных амфетаминов, барбитуратов и транквилизаторов, </p>
        <p>а так же литр текилы, литр рома, ящик «Бадвайзера», пинта чистого эфира, и 12 пузырьков амилнитрита. </p>
        <p>Не то, чтобы всё это было категорически необходимо в поездке, но если уж начал собирать коллекцию, то к делу надо подходить серьёзно.</p>
    </section>

<!--    /*********************************************************/-->
<!-- STATUS  -->
<header>
<div class="status">
    <ul>
        <li class="status-item hidden"><a href="#">Online</a></li>
        <li class="status-item hidden"><a href="#">Break</a></li>
        <li class="status-item hidden"><a href="#">Offline</a></li>
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
