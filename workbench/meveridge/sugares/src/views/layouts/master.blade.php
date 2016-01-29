<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            @yield('title')
        </title>
        <link rel="icon" type="image/png" href="sugar_icon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{ HTML::style('./vendor/css/bootstrap-responsive.css'); }}
        {{ HTML::style('./vendor/css/bootstrap.min.css'); }}
        
        <style type="text/css">
            /* Large desktop */
            @media (min-width: 980px) {
                body {
                    padding-top: 60px;
                }
                .linediv-l {
                    border-right: 1px white solid;
                }
                .linediv-r {
                    border-left: 1px white solid;
                }
                
                .container{
                    padding-left:10px;
                }
            }
            /* Landscape phones and down */
            @media (max-width: 480px) {
                .copy {
                    padding: 2.5% 10%;
                }
                .linediv-l {
                    border-bottom: 1px white solid;
                }
                .linediv-r {
                    border-top: 1px white solid;
                }
            }
            /* All form factors */
            /* Main body and headings */
            body{
                font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            }
            .heading, .subheading {
                font-family: 'Ubuntu', Helvetica, Arial, sans-serif;
                text-align: center;
            }
            
            ul.treeAction{
                list-style-type: none;
                padding: 0px;
                font-size: 12px;
            }
            
            label{
                cursor:default;
            }
        </style>
    </head>
    <body>

        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>