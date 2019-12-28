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
            <table style="width: 100%;" border="">
                <tr>
                    <td style="" colspan="2">
                        <br><br>
                        <h3>OFFICIAL TRANSCRIPT</h3>
                        <p style="font-size: 14px;">STUDENT INFORMATION</p>
                        <h2>Jacob Mendoza contreras</h>
                    </td>
                    <td style="" colspan="2">
                        <table style="width: 100%;" border="0">
                            <tr>
                                <td style="text-align: right;">
                                    <img class="brand-logo" alt="stack admin logo"  style="width: 90px;" src="{{ url('app-assets/images/logo/thumbnail_mati-talent-sin-fondo.png') }}">
                                </td>
                                <td> <label>TALENT INSTITUTE</label></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <label style="color: blue; ">
                                        SCHOOL INFORMATION <br>
                                        221 West Hallandale Beach Blvd. <br>
                                        #312, Hallandale Breach, FL 33009 <br>
                                        www.matik12.com<br>
                                        FL DIE#5743
                                    </label>
                                </td>
                            </tr>
                        </table>                        
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td></td>
                    <td>School year:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Grade:</td>
                    <td></td>
                    <td>Student ID:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>D.O.B.:</td>
                    <td colspan="3"></td>
                </tr>
                <tr><td colspan="4"></td></tr>
                <tr>
                    <td colspan="3">
                        <table border="1" style="border-collapse: collapse; border-color: blue;">
                            <tr>
                                <td>COURSE</td>
                                <td>PERCENTAGE</td>
                                <td>LETTER GRADE</td>
                            </tr>
                        </table>
                        <!--<table border="1" style="border-collapse: collapse; border-color: blue;">
                            <tr style="background: blue; color: white;">
                                <td>COURSE</td>
                                <td>PERCENTAGE</td>
                                <td>LETTER GRADE</td>
                            </tr>    
                            <tr>
                                <td>aaa</td>
                                <td>aaa</td>
                                <td>aaa</td>
                            </tr>
                            <tr>
                                <td>Avg. GRADE</td>
                                <td colspan="2"></td>
                            </tr>
                        </table>--->
                    </td>
                    <td>
                        <table style="background: blue; color: white; width: 100%;">
                            <tr>
                                <td>Granding scale</td>
                            </tr>
                            <tr>
                                <td>
                                    A = 90-100<br>
                                    B = 80-100 <br>
                                    C = 70-100 <br>
                                    D = 60-100
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <label>
                An Academic advisor has reviewed the simple work and verified the grades assigned to the course of study. <br>
                PABLO ALFREDO CABRERA VIRUEÑA has successfully completed the 6 grade during the 2018-2019 academic year and is promoted to grade 7.
            </label>
            <br>
            <label style="text-align: center;">
            ______________________________ <br>
            OFFICIAL SIGNATURE
            </label>
        </main>
    </body>
</html>
