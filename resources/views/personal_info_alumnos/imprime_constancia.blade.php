<html>
    <head>
        <style>
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: 0cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 2cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
            }

            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
            }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <img src="{{ url('app-assets/images/head.JPG')}}">
        </header>

        <footer>
            <img src="{{ url('app-assets/images/foot.JPG')}}">
        </footer>
        
        <!-- Wrap the content of your PDF inside a main tag -->
        <main>

               <table style="width: 100%;" border="0">
                <tr>
                    <td style="" colspan="2">
                        <br><br>
                        <br><br>
                        <label style="font-size: 20px;">CONFIRMATION OF ENROLLMENT</label><br>
                    </td>
                    <td style="" colspan="2">
                        <table style="width: 90%;" border="0">
                            <tr>
                                <td style="text-align: right;">
                                    <img class="brand-logo" alt="stack admin logo"  style="width: 90px;" src="{{ url('app-assets/images/logo/thumbnail_mati-talent-sin-fondo.png') }}">
                                </td>
                                <td> <label style="font-size: 20px;">TALENT INSTITUTE</label></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <label style="color: blue; ">
                                        SCHOOL INFORMATION <br>
                                        221 West Hallandale Beach Blvd. <br>
                                        #312, Hallandale Breach, FL 33009 <br>
                                        www.matik12.com<br>
                                        FL DOE#5743
                                    </label>
                                </td>
                            </tr>
                        </table>                        
                    </td>
                </tr>
            </table>
            <br><br><br>

            <label>
                <br><br><br>
                <?php echo nl2br($datos->texto); ?>
            </label>
            <br>
            <br>
            <br><br><br>
            <center>
            <label style="text-align: center;">
            
            <img src="{{ url('app-assets/images/firma.jpg')}}" style="width: 120px;">
            <hr style=" width: 150px;" /> 
            OFFICIAL SIGNATURE<br>
            Mati Talent lnstitute Private School<br>
            FL DOE #5743<br>
            Texas . Florida<br>
            </label>
            </center>
        </main>
    </body>
</html>