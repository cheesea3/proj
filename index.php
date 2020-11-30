<html>
<head>
    <!-- character encoding for the document (seo purposes). -->
    <meta charset="UTF-8">
    <!-- indicates the base url of the site. -->
    <base href="localhost/proj/index.php">
    <!-- links document to the stylesheet -->
    <link href="style.css" rel="stylesheet">
    <!-- connects client-side scripting to the document  -->
    <script src="javascript.js"></script>

    <!-- holds title. -->
    <title>School project</title>
    <style>
        .imperfect-games {
            min-height: 100vh;
        }

        /*
         Built mobile-first
         */
        .imperfect-games,
        .imperfect-games-body {
            display: flex;
            flex: 1 1 auto;
            flex-direction: column;
            background-color: aquamarine;
        }

        .imperfect-games-content {
            flex: 1 1 auto;
            background-color: white;
        }


        .imperfect-games-sidebar-1 {
            order: -1;
        }

        /*
        Responsive Web Design
         */

        @media (min-width: 768px) {
            .imperfect-games-body {
                flex-direction: row;
            }
            .hg-sidebar {
                flex: 0 0 260px;
                background-color: seagreen;
            }
        }
    </style>
</head>

<!-- holds header and nav-bar, main content, lastly the footer. -->
<body class="imperfect-games">
<header>
    b
    <!-- header content -->
</header>

<div class="imperfect-games-body">

    <section class="imperfect-games-content">
        a
        <!-- Main page content -->
    </section>

    <div class="imperfect-games-sidebar-1 hg-sidebar">
        c
        <!-- sidebar 1 content -->
    </div>

    <div class="imperfect-games-sidebar-2 hg-sidebar">
        d
        <!-- sidebar 2 content -->
    </div>

</div>

<footer>
    e
    <!-- footer content -->
</footer>
</body>


</html>
