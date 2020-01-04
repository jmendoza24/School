@extends('layouts.app')
@section('titulo')Confirmation of enrollment

@endsection

@section('content')
<div class="pull-right">
<button class="btn btn-outline-success" onclick="guarda_credencial({{$info->id}})">Guardar</button>
<a href="{{ route('download.constancia',['id_alumno'=>$info->id])}}">
    <button class="btn btn-outline-primary" style="display: none;" id="btn_imprime"><i class="fa fa-print" aria-hidden="true"></i></button>
</a>
</div>
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
            <input type="hidden" id="avg_calif" value="0">
            <textarea class="form-control" style="height: 200px;" id="text_pie">Date: {{ date('F')}} {{date('d')}}, {{date('Y')}}

                This confirms the enrollment of the following student in Mati Talent lnstitute Private School.
                Name: {{ $info->name}}
                Date of Birth: {{ substr($info->date_birth,0,10)}}
                Student Grade: @if($info->grade==1)Prekinder
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

            Enrollment Period: {{ $info->ciclo }}

            </textarea>

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
            </label>
            </center>
@endsection
