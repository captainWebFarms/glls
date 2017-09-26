@extends('layouts.layout')

@section('title')
    Find Distributor
@endsection
@section('style')
    <script src="../../js/ios-orientationchange-fix.min.js"></script>
    <style>
        img {
            width: auto;
            max-width: 100%;
        }

        .none {
            display: none;
        }





        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 30%;
            top: 0;
            width: auto; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: auto;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
@endsection
@section('hero_text')
    {{ $page->title }}
@endsection
@section('content')
    <div class="row expanded collapse">
        <div class="small-12 columns">
            <img name="newmap" src="newmap.jpg" width="1440" height="860" id="newmap" usemap="#m_newmap" alt=""/>
            <map name="m_newmap" id="m_newmap">
                <area shape="rect" coords="967,401,984,430" href="javascript:;" alt="" onmouseover="PopUp(1)"
                      onmouseout="Hide(1)"/>
                <area shape="rect" coords="947,420,967,449" href="javascript:;" alt="" onmouseover="PopUp(2)"
                      onmouseout="Hide(2)"/>
                <area shape="rect" coords="918,401,935,435" href="javascript:;" alt="" onmouseover="PopUp(3)"
                      onmouseout="Hide(3)"/>
                <area shape="rect" coords="901,420,918,449" href="javascript:;" alt="" onmouseover="PopUp(4)"
                      onmouseout="Hide(4)"/>
                <area shape="rect" coords="980,495,1004,545" href="javascript:;" alt="" onmouseover="PopUp(5)"
                      onmouseout="Hide(5)"/>
                <area shape="rect" coords="1148,430,1179,461" href="javascript:;" alt="" onmouseover="PopUp(6)"
                      onmouseout="Hide(6)"/>
                <area shape="rect" coords="1109,545,1148,602" href="javascript:;" alt="" onmouseover="PopUp(7)"
                      onmouseout="Hide(7)"/>
                <area shape="rect" coords="1086,529,1109,561" href="javascript:;" alt="" onmouseover="PopUp(8)"
                      onmouseout="Hide(8)"/>
                <area shape="rect" coords="1231,602,1241,628" href="javascript:;" alt="" onmouseover="PopUp(9)"
                      onmouseout="Hide(9)"/>
                <area shape="rect" coords="1179,646,1213,700" href="javascript:;" alt="" onmouseover="PopUp(10)"
                      onmouseout="Hide(10)"/>
                <area shape="rect" coords="1330,691,1367,780" href="javascript:;" alt="" onmouseover="PopUp(11)"
                      onmouseout="Hide(11)"/>
                <area shape="rect" coords="1064,341,1098,401" href="javascript:;" alt="" onmouseover="PopUp(12)"
                      onmouseout="Hide(12)"/>
                <area shape="rect" coords="940,340,971,392" href="javascript:;" alt="" onmouseover="PopUp(13)"
                      onmouseout="Hide(13)"/>
                <area shape="rect" coords="1064,224,1109,294" href="javascript:;" alt="" onmouseover="PopUp(14)"
                      onmouseout="Hide(14)"/>
                <area shape="rect" coords="845,495,870,529" href="javascript:;" alt="" onmouseover="PopUp(15)"
                      onmouseout="Hide(15)"/>
                <area shape="rect" coords="845,431,870,481" href="javascript:;" alt="" onmouseover="PopUp(16)"
                      onmouseout="Hide(16)"/>
                <area shape="rect" coords="758,194,809,271" href="javascript:;" alt="" onmouseover="PopUp(17)"
                      onmouseout="Hide(17)"/>
                <area shape="rect" coords="655,304,692,341" href="javascript:;" alt="" onmouseover="PopUp(18)"
                      onmouseout="Hide(18)"/>
                <area shape="rect" coords="664,401,692,449" href="javascript:;" alt="" onmouseover="PopUp(19)"
                      onmouseout="Hide(19)"/>
                <area shape="rect" coords="646,413,664,449" href="javascript:;" alt="" onmouseover="PopUp(20)"
                      onmouseout="Hide(20)"/>
                <area shape="rect" coords="423,717,450,762" href="javascript:;" alt="" onmouseover="PopUp(21)"
                      onmouseout="Hide(21)"/>
                <area shape="rect" coords="396,665,423,717" href="javascript:;" alt="" onmouseover="PopUp(22)"
                      onmouseout="Hide(22)"/>
                <area shape="rect" coords="423,628,450,665" href="javascript:;" alt="" onmouseover="PopUp(23)"
                      onmouseout="Hide(23)"/>
                <area shape="rect" coords="377,610,396,646" href="javascript:;" alt="" onmouseover="PopUp(24)"
                      onmouseout="Hide(24)"/>
                <area shape="rect" coords="358,580,396,602" href="javascript:;" alt="" onmouseover="PopUp(25)"
                      onmouseout="Hide(25)"/>
                <area shape="rect" coords="378,529,414,573" href="javascript:;" alt="" onmouseover="PopUp(26)"
                      onmouseout="Hide(26)"/>
                <area shape="rect" coords="332,509,358,561" href="javascript:;" alt="" onmouseover="PopUp(27)"
                      onmouseout="Hide(27)"/>
                <area shape="rect" coords="265,461,307,529" href="javascript:;" alt="" onmouseover="PopUp(28)"
                      onmouseout="Hide(28)"/>
                <area shape="rect" coords="255,377,300,449" href="javascript:;" alt="" onmouseover="PopUp(29)"
                      onmouseout="Hide(29)"/>
                <area shape="rect" coords="332,304,368,377" href="javascript:;" alt="" onmouseover="PopUp(30)"
                      onmouseout="Hide(30)"/>
                <area shape="rect" coords="758,561,798,625" href="javascript:;" title="africa" alt="africa"
                      onmouseover="PopUp(31)" onmouseout="Hide(31)"/>
            </map>
        </div>
    </div>
    @for ($i = 1; $i < 32; $i++)
        <div id="myModal{{$i}}" class="modal">
            <div id="modal-content" style="background-color:rgb(210,210,210);opacity: 0.8; border-radius: 30px; ">
                <br/>
                <p> id = {{$i}}</p>
                @foreach($popup as $popups)
                    @if($popups->popupId == $i)
                        @foreach($companies as $company)
                            @if ($company->id == $popups->companyId)
                                {{--{{$company}}--}}
                                <p style="color:black">Company Name :  {{$company->companyName}}<br/>
                                Phone Number : {{$company->phoneNumber}}<br/>
                                Email : {{$company->email}}<br/>
                                Website : {{$company->website}}<br/>
                                Address : {{$company->address}}</p>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                <br/>
            </div>
        </div>
    @endfor
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('css/jquery.qtip.min.js') }}"></script>
    <script src="{{ asset('css/jquery.rwdImageMaps.js') }}"></script>
    <script src="{{ asset('css/jquery.rwdImageMaps.min.js') }}"></script>
    <script>
        function PopUp(i) {
            document.getElementById('myModal' + i).style.display = "block";

        }
        function Hide(i) {
            document.getElementById('myModal' + i).style.display = "none";
        }
        $(document).ready(function (e) {
            $('img[usemap]').rwdImageMaps();
        });
    </script>
@endsection