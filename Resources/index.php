<?php
/**
 * Your framework's main entry point file.
 * 
 * This file serves as the main entry point for your framework,
 * responsible for bootstrapping and initializing the application.
 * 
 * =======================================================
 * GNU GENERAL PUBLIC LICENSE
 * Version 3, 29 June 2007
 *
 * I, Marc Raineer Filosopo, hereby declare that I am the original
 * author of the software framework developed on April 19, 2023.
 * I grant permission to use, modify, and distribute this software
 * framework under the terms and conditions of the GNU General Public
 * License Version 3 or any later version published by the Free
 * Software Foundation.
 *
 *
 * Marc Raineer Filosopo
 * April 19, 2023
 * =======================================================
 */

// Your bootstrap and initialization logic goes below
?>
<html lang="en" oncontextmenu="return false;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="public/js/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/indexCss.css">
    <link rel="stylesheet" href="public/css/bootstrap-4.6.0-dist/css/bootstrap.css">
    </style>
</head>

<body>
    <div class="row mr-0 ml-0">
        <nav id="sidebar" class="col-2 p-0 bg-light" style="overflow:hidden">
            <iframe id="navbar" src="SideNavController" name="FraNav"
                style="border:0px;width:100%;height:100%;"></iframe>
        </nav>
        <div id="content" class="col p-0">
            <iframe id="content" src="MasterController" name="FraContent"
                style="border:0px solid black;width:100%;height:100%;"></iframe>
        </div>
    </div>



</body>
<script type="application/javascript" src="Resources/indexJs.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    function hide() {
        $("#sidebar").toggleClass('active');
    }
    function SideNavRefocus(sendData) {
        const message = sendData;
        const iframe = document.querySelector("iframe");
        iframe.contentWindow.postMessage(message, "*");
    }


</script>


</html>