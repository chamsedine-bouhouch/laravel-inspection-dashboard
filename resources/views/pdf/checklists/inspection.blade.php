@extends('layouts.pdf')
@section('content')

<div>
    <p class="c22 c66">
        <span style="
                        overflow: hidden;
                        display: inline-block;
                        margin: 0px 0px;
                        border: 0px solid #000000;
                        transform: rotate(0rad) translateZ(0px);
                        -webkit-transform: rotate(0rad) translateZ(0px);
                        width: 617px;
                        height: 75px;
                    "><img alt="" src="images/image1.png" style="
                            width: 617px;
                            height: 75px;
                            margin-left: -0px;
                            margin-top: -0px;
                            transform: rotate(0rad) translateZ(0px);
                            -webkit-transform: rotate(0rad) translateZ(0px);
                        " title="" /></span><span style="
                        overflow: hidden;
                        display: inline-block;
                        margin: 0px 0px;
                        border: 0px solid #000000;
                        transform: rotate(0rad) translateZ(0px);
                        -webkit-transform: rotate(0rad) translateZ(0px);
                        width: 79.85px;
                        height: 85.17px;
                    "><img alt="" src="images/image2.jpg" style="
                            width: 79.85px;
                            height: 85.17px;
                            margin-left: 0px;
                            margin-top: 0px;
                            transform: rotate(0rad) translateZ(0px);
                            -webkit-transform: rotate(0rad) translateZ(0px);
                        " title="" /></span>
    </p>
    <p class="c3">
        <span class="c29">INSPECTION CHECKLIST OF {{$checklist->title}}</span>
    </p>
    <p class="c3 c11"><span class="c30"></span></p>
</div>
<p class="c8"><span class="c80"></span></p>
<a id="t.1476fdbf48f7f374fbb9ee06da3f6414ec672dfc"></a><a id="t.0"></a>
<table class="c89">
    <tbody>
        <tr class="c90">
            <td class="c45" colspan="4" rowspan="1">
                <p class="c22">
                    <span class="c2">Owner&rsquo;s Name &amp; Address</span>
                </p>
            </td>
            <td class="c63" colspan="8" rowspan="1">
                <p class="c22"><span class="c35">&nbsp; {{$checklist->owner}}</span></p>
            </td>
        </tr>
        <tr class="c88">
            <td class="c45" colspan="4" rowspan="1">
                <p class="c22">
                    <span class="c2">Manufacturer&rsquo;s Name &amp; Year</span>
                </p>
            </td>
            <td class="c63" colspan="8" rowspan="1">
                <p class="c22"><span class="c35">&nbsp; {{$checklist->manufacturer_number}}</span></p>
            </td>
        </tr>
        <tr class="c79">
            <td class="c45" colspan="4" rowspan="1">
                <p class="c22">
                    <span class="c28">Type of Crane and nature of power (e.g. Derrick
                        manual, Tower Derrick-electric, Mobile
                        telescopic-hydraulic)</span>
                </p>
            </td>
            <td class="c63" colspan="8" rowspan="1">
                <p class="c22"><span class="c35">&nbsp;</span></p>
            </td>
        </tr>
        <tr class="c77">
            <td class="c45" colspan="4" rowspan="1">
                <p class="c22">
                    <span class="c28">Make and type of derricking interlock (e.g Lock
                        Valve, Mechanical)</span>
                </p>
            </td>
            <td class="c63" colspan="8" rowspan="1">
                <p class="c22"><span class="c35">&nbsp;{{$checklist->derricking}}</span></p>
            </td>
        </tr>
        <tr class="c59">
            <td class="c46 c86" colspan="2" rowspan="1">
                <p class="c22">
                    <span class="c2">Manufacturer&rsquo;s Serial No.</span>
                </p>
            </td>
            <td class="c49" colspan="2" rowspan="1">
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
            <td class="c32 c46" colspan="2" rowspan="1">
                <p class="c22"><span class="c2">Model No.</span></p>
            </td>
            <td class="c58" colspan="3" rowspan="1">
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
            <td class="c72 c46" colspan="2" rowspan="1">
                <p class="c22"><span class="c2">Rope Diameter</span></p>
            </td>
            <td class="c32" colspan="1" rowspan="1">
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
        </tr>
        <tr class="c71">
            <td class="c86 c46" colspan="2" rowspan="1">
                <p class="c22">
                    <span class="c2">Automatic Safe Load Indicator</span>
                </p>
            </td>
            <td class="c49" colspan="2" rowspan="1">
                <p class="c22 c11 c70"><span class="c2"></span></p>
            </td>
            <td class="c32 c46" colspan="2" rowspan="1">
                <p class="c22">
                    <span class="c2">Crane Capacity</span>
                </p>
            </td>
            <td class="c58" colspan="3" rowspan="1">
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
            <td class="c72 c46" colspan="2" rowspan="1">
                <p class="c22"><span class="c2">No. of Fall</span></p>
            </td>
            <td class="c32" colspan="1" rowspan="1">
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
        </tr>
        <tr class="c69">
            <td class="c86 c46" colspan="2" rowspan="1">
                <p class="c22"><span class="c2">Boom Length</span></p>
            </td>
            <td class="c49" colspan="2" rowspan="1">
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
            <td class="c32 c46" colspan="2" rowspan="1">
                <p class="c22">
                    <span class="c2">Outrigger Span</span>
                </p>
            </td>
            <td class="c58" colspan="3" rowspan="1">
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
            <td class="c46 c72" colspan="2" rowspan="1">
                <p class="c22">
                    <span class="c2">Registration No.</span>
                </p>
            </td>
            <td class="c32" colspan="1" rowspan="1">
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
        </tr>
        <!-- Questions Historical Data -->
        <tr class="c18">
            <td class="c45" colspan="4" rowspan="1">
                <p class="c3">
                    <span class="c42">Historical Data</span>
                </p>
            </td>
            <td class="c26" colspan="1" rowspan="1">
                <p class="c3"><span class="c55">S</span></p>
            </td>
            <td class="c26" colspan="1" rowspan="1">
                <p class="c3"><span class="c42">U</span></p>
            </td>
            <td class="c26" colspan="2" rowspan="1">
                <p class="c3"><span class="c42">N/A</span></p>
            </td>
            <td class="c51 c46" colspan="4" rowspan="1">
                <p class="c3"><span class="c42">Remarks</span></p>
            </td>
        </tr>

        @forelse ($checklist->answers as $answer )


        <tr class="c18">
            <td class="c9" colspan="4" rowspan="1">
                <p class="c27">
                    <span class="c7">{{$answer->question->title}}</span>
                </p>
            </td>
            <td class="c21" colspan="1" rowspan="1">
                <p class="c3 c11"><span class="c2">
                        @if ($answer->value == 'S')
                        X
                         @endif
                    </span></p>
            </td>
            <td class="c21" colspan="1" rowspan="1">
                <p class="c3 c11"><span class="c2">
                        @if ($answer->value == 'U')
                        X
                         @endif
                    </span></p>
            </td>
            <td class="c21" colspan="2" rowspan="1">
                <p class="c3 c11"><span class="c2">
                        @if ($answer->value == 'N/A')
                        X
                         @endif
                    </span></p>
            </td>
            <td class="c19" colspan="4" rowspan="1">
                <p class="c3 c11"><span class="c2">{{$answer->comment}}</span></p>
            </td>
        </tr>
        @empty

        @endforelse



        <!-- 2 type  -->

        <!-- 
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3">
                            <span class="c5">Walk Around Crane</span>
                        </p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c41">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c41">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c41">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c41">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Check Level &amp; Stability</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Check Wheels / Tyres</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Check Chassis For Cracks / Damage</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Check Crane Level Indicators</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3"><span class="c5">Outriggers</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Structural Condition</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Hydraulic Hoses / Valves</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Lubrication </span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Outrigger Legs Leaks / Damage</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Foot Plates</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3">
                            <span class="c5">Turntable / Crane Body</span>
                        </p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Ensure Level &amp; Stability</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Wear Gear Teeth / Rollers</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Cracks</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Bolts &nbsp;Security </span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Swing Brake Function</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3"><span class="c5">Counter Weight</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Correct Size</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Attachments &ndash;Connections / Bolts</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3"><span class="c5">Engine Housing</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Power Output Satisfactory</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Cleanliness</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Guard Security</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Clear Access </span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Brake / Clutch Adjustment</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3"><span class="c5">Cab</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Glass Visibility (Damage)</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Instrument Function</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Horn Operation</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Fire Extinguisher</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Control Functioning</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Clear Access / Walkways</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Seat Belt Condition &nbsp;If Fitted</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3"><span class="c5">Hoist Drums</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Correct Drum Size &nbsp;&amp; Spooling Of Hoist
                                Lines</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11" id="h.gjdgxs">
                            <span class="c15"></span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Check Drum Side For Cracks</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Check Dogs/Pawls/ Locking Devices</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Drum Control Motion</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3">
                            <span class="c5"
                                >Boom Sections (As per Crane Model)</span
                            >
                        </p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Extend / Retract Boom</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Boom Stops If Fitted</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Rope Guides</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Boom Wear Pad Adjustment</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Jib Attachments</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Check For Damage / Distortion</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Lubrication</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3"><span class="c5">Sheave System</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Check Jib Head Sheave For Cracks / Broken /
                                Wear</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Ensure Hoist Line / Sheave Match</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Lubrication &ndash; Move &ndash; Freely</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3">
                            <span class="c5"
                                >Main / Aux Hook &amp; Block System</span
                            >
                        </p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Sheaves In Block Function</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Check Sheaves For Damage</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Check Hook For Wear</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Check Hook Security To Block</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Proper Becket If Fitted</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Properly Reeved For Load</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3">
                            <span class="c5">Wire Rope / Hoist Line</span>
                        </p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Overall Condition Of Rope</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">End Connections</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Correct Grips Fitted</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3"><span class="c5">Safety Devices</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c46 c51" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Safe Load Indicator Function</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Anti Two Block Function</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Swing Radius Warning</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Boom Back Stop If Fitted</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Job / Site Specific Device E.G. Personnel
                                Basket</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >All Control Electrical Operation</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c45" colspan="4" rowspan="1">
                        <p class="c3">
                            <span class="c5">Electrical System</span>
                        </p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c55">S</span></p>
                    </td>
                    <td class="c26" colspan="1" rowspan="1">
                        <p class="c3"><span class="c42">U</span></p>
                    </td>
                    <td class="c26" colspan="2" rowspan="1">
                        <p class="c3"><span class="c42">N/A</span></p>
                    </td>
                    <td class="c51 c46" colspan="4" rowspan="1">
                        <p class="c3"><span class="c42">Remarks</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Beacon Function</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7"
                                >Head Lights / Side / Stop Lights</span
                            >
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Reverse Alarm</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Swing Alarm</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22">
                            <span class="c7">Indicator Warning Lights</span>
                        </p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3 c11"><span class="c15"></span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr>
                <tr class="c18">
                    <td class="c9" colspan="4" rowspan="1">
                        <p class="c22"><span class="c7">Boom Lights</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c33">&nbsp;</span></p>
                    </td>
                    <td class="c1" colspan="1" rowspan="1">
                        <p class="c3"><span class="c12">&nbsp;</span></p>
                    </td>
                    <td class="c34" colspan="2" rowspan="1">
                        <p class="c3 c11"><span class="c7"></span></p>
                    </td>
                    <td class="c24" colspan="4" rowspan="1">
                        <p class="c3"><span class="c7">&nbsp;</span></p>
                    </td>
                </tr> -->


        <tr class="c74">
            <td class="c46 c75" colspan="12" rowspan="1">
                <p class="c3"><span class="c83">Load Test</span></p>
            </td>
        </tr>
        <tr class="c18">
            <td class="c53 c73" colspan="1" rowspan="1">
                <p class="c3">
                    <span class="c7">Boom Length (Min / Int / Max)</span>
                </p>
            </td>
            <td class="c73 c78" colspan="2" rowspan="1">
                <p class="c3"><span class="c7">Radius</span></p>
            </td>
            <td class="c81 c73" colspan="4" rowspan="1">
                <p class="c3">
                    <span class="c7">Safe Working Load</span>
                </p>
            </td>
            <td class="c73 c81" colspan="3" rowspan="1">
                <p class="c3">
                    <span class="c7">Proof Load Test</span>
                </p>
            </td>
            <td class="c65" colspan="2" rowspan="1">
                <p class="c3"><span class="c7">Remarks</span></p>
            </td>
        </tr>
        <tr class="c18">
            <td class="c53" colspan="1" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
            <td class="c38" colspan="2" rowspan="1">
                <p class="c27 c11"><span class="c33"></span></p>
            </td>
            <td class="c48" colspan="4" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
            <td class="c60" colspan="3" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
            <td class="c82" colspan="2" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
        </tr>
        <tr class="c18">
            <td class="c53" colspan="1" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
            <td class="c38" colspan="2" rowspan="1">
                <p class="c27 c11"><span class="c33"></span></p>
            </td>
            <td class="c48" colspan="4" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
            <td class="c60" colspan="3" rowspan="1">
                <p class="c11 c27"><span class="c12"></span></p>
            </td>
            <td class="c82" colspan="2" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
        </tr>
        <tr class="c18">
            <td class="c53" colspan="1" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
            <td class="c38" colspan="2" rowspan="1">
                <p class="c27 c11"><span class="c33"></span></p>
            </td>
            <td class="c48" colspan="4" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
            <td class="c60" colspan="3" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
            <td class="c82" colspan="2" rowspan="1">
                <p class="c27 c11"><span class="c12"></span></p>
            </td>
        </tr>
        <tr class="c18">
            <td class="c43 c87" colspan="7" rowspan="1">
                <p class="c22">
                    <span class="c28">Defects noted and alterations or repairs
                        required before Crane is put into service.</span>
                </p>
            </td>
            <td class="c43 c84" colspan="5" rowspan="1">
                <p class="c3"><span class="c28">&nbsp;</span></p>
            </td>
        </tr>
        <tr class="c91">
            <td class="c75 c43" colspan="12" rowspan="1">
                <p class="c22">
                    <span class="c2">Inspection Results:</span>
                </p>
                <p class="c22 c11"><span class="c2"></span></p>
                <p class="c22 c11"><span class="c2"></span></p>
            </td>
        </tr>
    </tbody>
</table>
<p class="c27 c11"><span class="c12"></span></p>
<p class="c27">
    <span class="c12">Inspector:  {{ __($checklist->user->name)}}&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        Client: {{ __($checklist->owner)}}
    </span>
</p>
<div>
    <p class="c3">
        <span class="c2">S = Satisfactory. U = Unsatisfactory. N/A =Not Applicable.
            &nbsp;Reference: ASME B30.3, 5, 14, 22 &amp; 29 BS 7121-2-1,
            3 &amp; 5, </span><span class="c85">BS EN 13001-1</span>
    </p>
    <p class="c22">
        <span class="c12">AIS Documented Information&nbsp;</span><span class="c64">&nbsp;AIS-FR-INS-63 Rev 01</span>
    </p>
    <p class="c22 c11"><span class="c64"></span></p>
</div>
<br>
<br>
<br>
<p>Attached Image :</p>
@if ($checklist->image)
    
<img src="{{ public_path().'/images/'.$checklist->image }}" alt="checklist_image" > 
@endif

@endsection