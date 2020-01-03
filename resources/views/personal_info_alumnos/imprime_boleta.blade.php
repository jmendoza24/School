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
                        <label style="font-size: 25px;">OFFICIAL TRANSCRIPT</label>
                        <label style="font-size: 16px;">STUDENT INFORMATION</label> <br>
                        <label style="font-size: 18px; font-weight: bold;">{{ $info->name }}</label>                
                    </td>
                    <td style="" colspan="2">
                        <table style="width: 100%;" border="0">
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
            <table style="width: 90%; margin: auto;">
                <tr>
                    <td>Gender: </td>
                    <td>
                        @if($info->gender==1)
                            M 
                        @elseif($info->gender==2)
                        F
                        @else
                        No def
                        @endif</td>
                    <td>School year:</td>
                    <td>{{ $info->ciclo }}</td>
                </tr>
                <tr>
                    <td>Grade:</td>
                    <td>
                        @if($info->grade==1)Prekinder
                        @elseif($info->level==2)Kinder
                        @elseif($info->level==3)1
                        @elseif($info->level==4)2
                        @elseif($info->level==5)3 
                        @elseif($info->level==6)4
                        @elseif($info->level==7)5
                        @elseif($info->level==8)6
                        @elseif($info->level==9)7
                        @elseif($info->level==10)8
                        @elseif($info->level==11)9
                        @elseif($info->level==12)10
                        @elseif($info->level==13)11
                        @elseif($info->level==14)12
                        @endif

                    </td>
                    <td>Student ID:</td>
                    <td>{{ $info->num_control }}</td>
                </tr>
                <tr>
                    <td>D.O.B.:</td>
                    <td colspan="3"></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <table id="materias" border="1" style=" width: 100%; border-collapse: collapse; ">
                            <tr style="background:blue; color: white; text-align: center;">
                                <td>COURSE</td>
                                <td>PERCENTAGE</td>
                                <td>LETTER GRADE</td>
                            </tr>
                            @foreach($materias as $mat)
                            <tr>
                                <td>{{ $mat->id_materia }}</td>
                                <td style="text-align: center;">{{ $mat->calificacion }}</td>
                                <td style="text-align: center;">{{ $mat->comentarios }}</td>
                            </tr>
                            @endforeach
                           
                            <tr>
                                <td>Avg. GRADE </td>
                                <td style="text-align: center;">{{ $datos->promedio}}</td>
                                <td></td>
                            </tr>
                        </table>
                </td>
                <td>
                    <table style="background: blue; color: white;">
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
            OFFICIAL SIGNATURE
            </label>
            </center>
        </main>
    </body>
</html>