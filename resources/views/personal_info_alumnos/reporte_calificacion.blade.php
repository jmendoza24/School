@extends('layouts.app')
@section('titulo')Boleta de calificación 

@endsection

@section('content')
<div class="pull-right">
<button class="btn btn-outline-success" onclick="guarda_credencial({{$info->id}})">Guardar</button>
<a href="{{ route('download.boleta',['id_alumno'=>$info->id])}}">
    <button class="btn btn-outline-primary" style="display: none;" id="btn_imprime"><i class="fa fa-print" aria-hidden="true"></i></button>
</a>
</div>
    <table style="width: 100%;" border="0">
                <tr>
                    <td style="" colspan="2">
                        <br><br>
                        <br><br>
                        <label style="font-size: 25px;">OFFICIAL TRANSCRIPT</label><br>
                        <label style="font-size: 16px;">STUDENT INFORMATION</label> <br>
                        <label style="font-size: 18px; font-weight: bold;">{{ $info->name }}</label>                
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
                        @elseif($info->grade==2)Kinder
                        @elseif($info->grade==3)1
                        @elseif($info->grade==4)2
                        @elseif($info->grade==5)3 
                        @elseif($info->grade==6)4
                        @elseif($info->grade==7)5
                        @elseif($info->grade==8)6
                        @elseif($info->grade==9)7
                        @elseif($info->grade==10)8
                        @elseif($info->grade==11)9
                        @elseif($info->grade==12)10
                        @elseif($info->grade==13)11
                        @elseif($info->grade==14)12
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
                                <td style="text-align: center;"><input type="text" id="avg_calif" class="form-control"> </td>
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
                <textarea class="form-control" id="text_pie" style="width: 900px; height: 200px;">
                An Academic advisor has reviewed the simple work and verified the grades assigned to the course of study. 
                
                {{ $info->name }} has successfully completed the  @if($info->grade==1)Prekinder
                        @elseif($info->grade==2)Kinder
                        @elseif($info->grade==3)1
                        @elseif($info->grade==4)2
                        @elseif($info->grade==5)3
                        @elseif($info->grade==6)4
                        @elseif($info->grade==7)5
                        @elseif($info->grade==8)6
                        @elseif($info->grade==9)7
                        @elseif($info->grade==10)8
                        @elseif($info->grade==11)9
                        @elseif($info->grade==12)10
                        @elseif($info->grade==13)11
                        @elseif($info->grade==14)12 @endif grade during the {{ $info->ciclo }} academic  @if($info->grade==1) and is promoted to grade  Kinder
                        @elseif($info->grade==2) and is promoted to grade  1
                        @elseif($info->grade==3) and is promoted to grade  2
                        @elseif($info->grade==4) and is promoted to grade  3
                        @elseif($info->grade==5) and is promoted to grade  4
                        @elseif($info->grade==6) and is promoted to grade  5
                        @elseif($info->grade==7) and is promoted to grade  6
                        @elseif($info->grade==8) and is promoted to grade  7
                        @elseif($info->grade==9) and is promoted to grade  8
                        @elseif($info->grade==10) and is promoted to grade  9
                        @elseif($info->grade==11) and is promoted to grade  10
                        @elseif($info->grade==12) and is promoted to grade  11
                        @elseif($info->grade==13) and is promoted to grade  12
                        @endif .</textarea>
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
@endsection
