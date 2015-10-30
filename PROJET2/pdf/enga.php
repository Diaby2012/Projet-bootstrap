<?php
require_once "config.php";
$content = '<page>
<style>
tr
	{mso-height-source:auto;}
col
	{mso-width-source:auto;}
br
	{mso-data-placement:same-cell;}
.style49
	{mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	mso-style-name:Milliers;
	mso-style-id:3;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:178;
	border:none;
	mso-protection:locked visible;
	mso-style-name:Normal;
	mso-style-id:0;}
.style57
	{background:#F2F2F2;
	mso-pattern:black none;
	color:#3F3F3F;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	border:.5pt solid #3F3F3F;
	mso-style-name:Sortie;
	mso-style-id:21;}
.font10
	{color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font16
	{color:white;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
td
	{mso-style-parent:style0;
	padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:178;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl67
	{mso-style-parent:style0;
	font-weight:700;
	font-family:"Arial \(Arabic\)", sans-serif;
	mso-font-charset:178;}
.xl68
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)", sans-serif;
	mso-font-charset:178;}
.xl69
	{mso-style-parent:style0;
	font-weight:700;
	font-family:"Arial \(Arabic\)", sans-serif;
	mso-font-charset:178;
	mso-number-format:"\@";}
.xl70
	{mso-style-parent:style0;
	font-weight:700;
	font-family:"Arial \(Arabic\)", sans-serif;
	mso-font-charset:178;
	mso-number-format:Standard;}
.xl71
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-weight:700;
	font-family:"Arial \(Arabic\)", sans-serif;
	mso-font-charset:178;
	mso-number-format:"\@";
	text-align:right;}
.xl72
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;}
.xl73
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl74
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:right;}
.xl75
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";}
.xl76
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";}
.xl77
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl78
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl79
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border:.5pt solid windowtext;}
.xl80
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border:.5pt solid windowtext;}
.xl81
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;}
.xl82
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;}
.xl83
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:top;}
.xl84
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-rotate:90;}
.xl85
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border:.5pt solid windowtext;}
.xl86
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;}
.xl87
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center-across;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl88
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl89
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;}
.xl90
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl91
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl92
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl93
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl94
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl95
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl96
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl97
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl98
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl99
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl100
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl101
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl102
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl103
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl104
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl105
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl106
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:right;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl107
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:right;}
.xl108
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center-across;}
.xl109
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl110
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl111
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl112
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl113
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:right;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl114
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl115
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl116
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl117
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	white-space:normal;}
.xl118
	{mso-style-parent:style49;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";}
.xl119
	{mso-style-parent:style0;
	font-size:12.0pt;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl120
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl121
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl122
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl123
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl124
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl125
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl126
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl127
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl128
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl129
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl130
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl131
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl132
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;}
.xl133
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl134
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl135
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl136
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl137
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl138
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl139
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl140
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl141
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl142
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl143
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl144
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl145
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl146
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl147
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl148
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-rotate:90;}
.xl149
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-rotate:90;}
.xl150
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-rotate:90;}
.xl151
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl152
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl153
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl154
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-rotate:90;}
.xl155
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-rotate:90;}
.xl156
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl157
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl158
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl159
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl160
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl161
	{mso-style-parent:style49;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	text-align:center;
	white-space:normal;}
.xl162
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl163
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl164
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl165
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl166
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl167
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl168
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl169
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl170
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl171
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl172
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl173
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl174
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl175
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;}
.xl176
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl177
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;}
.xl178
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl179
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl180
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl181
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl182
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl183
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl184
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl185
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl186
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl187
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl188
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl189
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl190
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl191
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl192
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;}
.xl193
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl194
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl195
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl196
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl197
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl198
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl199
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl200
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl201
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl202
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl203
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl204
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;}
.xl205
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl206
	{mso-style-parent:style57;
	color:#3F3F3F;
	font-size:11.0pt;
	font-weight:700;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border:.5pt solid #3F3F3F;}

</style>

<div style="border-top: 1px solid black;  width: 1280px; margin: 0 auto; ">
<table border=0 cellpadding=0 cellspacing=0 width=100% style="border-collapse:
 collapse;table-layout:fixed;">
 <col width=9 style="mso-width-source:userset;mso-width-alt:329;width:7pt">
 <col width=19 span=4 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=40 style="mso-width-source:userset;mso-width-alt:1462;width:30pt">
 <col width=68 style="mso-width-source:userset;mso-width-alt:2486;width:51pt">
 <col width=132 style="mso-width-source:userset;mso-width-alt:4827;width:99pt">
 <col width=19 span=2 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=70 style="mso-width-source:userset;mso-width-alt:2560;width:53pt">
 <col width=131 style="mso-width-source:userset;mso-width-alt:4790;width:98pt">
 <col width=19 span=8 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=10 style="mso-width-source:userset;mso-width-alt:365;width:8pt">
 <col width=43 style="mso-width-source:userset;mso-width-alt:1572;width:32pt">
 <col width=142 style="mso-width-source:userset;mso-width-alt:5193;width:107pt">
 <col width=19 style="mso-width-source:userset;mso-width-alt:694;width:14pt">
 <col width=115 style="mso-width-source:userset;mso-width-alt:4205;width:86pt">
 <col width=19 span=2 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=80 style="mso-width-source:userset;mso-width-alt:2925;width:60pt">
 <col width=19 span=2 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=24 style="mso-width-source:userset;mso-width-alt:877;width:18pt">
 <col width=12 style="mso-width-source:userset;mso-width-alt:438;width:9pt">
 <col width=64 style="width:48pt">
 <col width=65 style="mso-width-source:userset;mso-width-alt:2377;width:49pt">
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 width=9 style="height:15.0pt;width:7pt"></td>
  <td colspan=30 class=xl72 width=1216 style="width:908pt">REPUBLIQUE
  ALGERIENNE DEMOCRATIQUE ET POUPULAIRE<span style="mso-spacerun:yes"> </span></td>
  <td class=xl73 width=12 style="width:9pt"></td>
 </tr>
 <tr height=34 style="mso-height-source:userset;height:25.5pt">
  <td height=34 class=xl68 style="height:25.5pt"></td>
  <td colspan=10 class=xl121>OPERATION BUDGETAIRE</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=18 style="height:13.5pt">
  <td height=18 class=xl68 style="height:13.5pt"></td>
  <td colspan=10 class=xl122 style="border-right:.5pt solid black">DIRECTION
  DES RESSOURCES EN EAU</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=17 style="height:12.75pt">
  <td height=17 class=xl68 style="height:12.75pt"></td>
  <td colspan=10 class=xl125 style="border-right:.5pt solid black">WILAYA DE
  MOSTAGANEM</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td colspan=2 rowspan=2 class=xl128 style="border-right:1.0pt solid black;
  border-bottom:1.0pt solid black">B 1</td>
  <td class=xl73></td>
 </tr>
 <tr height=18 style="height:13.5pt">
  <td height=18 class=xl68 style="height:13.5pt"></td>
  <td colspan=10 class=xl132>CODE<span style="mso-spacerun:yes">  </span>211</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=42 style="mso-height-source:userset;height:31.5pt">
  <td height=42 class=xl68 style="height:31.5pt"></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl74><span style="mso-spacerun:yes"> </span></td>
  <td class=xl73></td>
  <td class=xl74></td>
  <td class=xl73></td>
  <td class=xl74></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td colspan=12 class=xl133 width=478 style="border-right:.5pt solid black;
  width:357pt">FICHE <font class="font16">DE</font><font class="font10"><br>
    D"ENGAGEMENT DE DEPENSE<span style="mso-spacerun:yes"> </span></font></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=7 style="mso-height-source:userset;height:5.25pt">
  <td height=7 class=xl68 style="height:5.25pt"></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl75></td>
  <td class=xl76></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td colspan=17 rowspan=2 class=xl136 style="border-right:.5pt solid black;
  border-bottom:.5pt solid black">N° DE L"OPERATION<span
  style="mso-spacerun:yes"> </span></td>
  <td class=xl77></td>
  <td colspan=5 class=xl142 style="border-right:.5pt solid black">N° FICHE</td>
  <td class=xl73></td>
  <td class=xl74></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td colspan=5 class=xl125 style="border-right:.5pt solid black">ENGAGEMENT<span
  style="mso-spacerun:yes"> </span></td>
  <td class=xl73></td>
  <td class=xl74></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td class=xl79 style="border-top:none">&nbsp;</td>
  <td class=xl79 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl79 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl76></td>
  <td class=xl80 style="border-top:none">N</td>
  <td class=xl80 style="border-top:none;border-left:none">K</td>
  <td class=xl80 style="border-top:none;border-left:none">5</td>
  <td colspan=3 class=xl145 style="border-right:.5pt solid black;border-left:
  none">341</td>
  <td class=xl80 style="border-top:none;border-left:none">2</td>
  <td colspan=3 class=xl145 style="border-right:.5pt solid black;border-left:
  none">262</td>
  <td colspan=3 class=xl145 style="border-right:.5pt solid black;border-left:
  none">127</td>
  <td colspan=2 class=xl145 style="border-right:.5pt solid black;border-left:
  none">14</td>
  <td colspan=2 class=xl145 style="border-right:.5pt solid black;border-left:
  none">01</td>
  <td class=xl81></td>
  <td colspan=2 class=xl145 style="border-right:.5pt solid black">2015</td>
  <td colspan=3 class=xl145 style="border-right:.5pt solid black;border-left:
  none">001</td>
  <td class=xl81></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
 </tr>
 <tr height=82 style="mso-height-source:userset;height:61.5pt">
  <td height=82 class=xl68 style="height:61.5pt"></td>
  <td class=xl83></td>
  <td class=xl83></td>
  <td class=xl83></td>
  <td class=xl76></td>
  <td colspan=2 class=xl148 style="border-right:.5pt solid black">PROGRAMME<span
  style="mso-spacerun:yes"> </span></td>
  <td class=xl84 style="border-left:none">FINANCEMENT<span
  style="mso-spacerun:yes"> </span></td>
  <td colspan=3 class=xl148 style="border-right:.5pt solid black;border-left:
  none">CHAPITRE</td>
  <td class=xl84 style="border-left:none">ARTICLE</td>
  <td colspan=6 class=xl151 style="border-right:.5pt solid black;border-left:
  none">GESTIONNAIRE</td>
  <td colspan=4 class=xl151 style="border-right:.5pt solid black;border-left:
  none">N° ORDRE</td>
  <td class=xl76></td>
  <td colspan=2 class=xl154 style="border-right:.5pt solid black">GESTION<span
  style="mso-spacerun:yes"> </span></td>
  <td colspan=3 class=xl156 style="border-right:.5pt solid black;border-left:
  none">N°</td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl76></td>
 </tr>
 <tr height=9 style="mso-height-source:userset;height:6.75pt">
  <td height=9 class=xl68 style="height:6.75pt"></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=20 style="mso-height-source:userset;height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=7 class=xl206>Libelle de l"operation :</td>
  <td class=xl74></td>
  <td colspan=23 rowspan=2 class=xl159 width=893 style="width:667pt">AEP des
  nouveaux pôles urbains de H’chem (Mostaganem),Hassi Mameche, Ain Tedeles,
  Pole d’excellence et du Bas Mazagran</td>
 </tr>
 <tr height=32 style="mso-height-source:userset;height:24.0pt">
  <td height=32 class=xl68 style="height:24.0pt"></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=29 style="mso-height-source:userset;height:21.75pt">
  <td height=29 class=xl68 style="height:21.75pt"></td>
  <td colspan=7 class=xl206>Objet de l"engagement :</td>
  <td colspan=24 rowspan=2 class=xl160 width=912 style="width:681pt">Projet de
  marche conclu avec l"entreprise<span style="mso-spacerun:yes"> 
  </span>ETPBH<span style="mso-spacerun:yes">  </span>AD pour le lot 08 Genie
  Civil et equipement de la station de pompage du nouveau pole urbain de Hassi
  Mameche<span style="mso-spacerun:yes"> </span></td>
 </tr>
 <tr height=37 style="mso-height-source:userset;height:27.75pt">
  <td height=37 class=xl68 style="height:27.75pt"></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl77></td>
  <td class=xl77 dir=RTL></td>
 </tr>
 <tr height=19 style="mso-height-source:userset;height:14.25pt">
  <td height=19 class=xl68 style="height:14.25pt"></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl74></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=10 style="width:8pt"></td>
  <td class=xl117 width=43 style="width:32pt"></td>
  <td class=xl117 width=142 style="width:107pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td colspan=7 class=xl161 width=295 style="width:220pt"></td>
  <td class=xl73></td>
 </tr>
 <tr height=24 style="mso-height-source:userset;height:18.0pt">
  <td height=24 class=xl68 style="height:18.0pt"></td>
  <td colspan=11 class=xl89>Structure d"engagement proposé</td>
  <td class=xl73></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=10 style="width:8pt"></td>
  <td class=xl117 width=43 style="width:32pt"></td>
  <td class=xl117 width=142 style="width:107pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td colspan=7 class=xl161 width=295 style="width:220pt"></td>
  <td class=xl73></td>
 </tr>
 <tr height=21 style="mso-height-source:userset;height:15.75pt">
  <td height=21 class=xl68 style="height:15.75pt"></td>
  <td class=xl85>&nbsp;</td>
  <td class=xl85 style="border-left:none">&nbsp;</td>
  <td class=xl85 style="border-left:none">&nbsp;</td>
  <td></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td class=xl117 width=10 style="width:8pt"></td>
  <td class=xl117 width=43 style="width:32pt"></td>
  <td class=xl117 width=142 style="width:107pt"></td>
  <td class=xl117 width=19 style="width:14pt"></td>
  <td colspan=7 class=xl161 width=295 style="width:220pt"></td>
  <td class=xl73></td>
 </tr>
 <tr height=18 style="height:13.5pt">
  <td height=18 class=xl68 style="height:13.5pt"></td>
  <td class=xl86>3</td>
  <td></td>
  <td class=xl86>1</td>
  <td></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td colspan=7 class=xl161 width=295 style="width:220pt"></td>
  <td class=xl73></td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl68 style="height:15.75pt"></td>
  <td colspan=3 class=xl162>&nbsp;</td>
  <td colspan=17 class=xl165 style="border-right:1.0pt solid black">Rubriques</td>
  <td colspan=2 class=xl162 style="border-right:1.0pt solid black;border-left:
  none">Montant</td>
  <td colspan=9 class=xl169 style="border-right:1.0pt solid black;border-left:
  none">Observations</td>
 </tr>
 <tr height=17 style="height:12.75pt">
  <td height=17 class=xl68 style="height:12.75pt"></td>
  <td class=xl115>&nbsp;</td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl120>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl93>&nbsp;</td>
  <td class=xl110>&nbsp;</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>0 1</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Etude</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>0 2</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Batiment</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>0 3</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Travaux
  public</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">1 500 410,00</td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>0 4</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Machine et
  equipement de production</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>0 5</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Materiel de
  transport</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>0 6</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Formation</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td colspan=7 class=xl89></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>0 7</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Prestation
  de services externes</td>
  <td colspan=2 class=xl179 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>0 9</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Autres</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>&nbsp;</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">publication<span
  style="mso-spacerun:yes"> </span></td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>&nbsp;</td>
  <td colspan=17 class=xl176 style="border-right:.5pt solid black">Contrôle et
  suivi</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=3 class=xl174>&nbsp;</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black">Montant non
  Ventilée</td>
  <td colspan=2 class=xl172 style="border-right:1.0pt solid black">&nbsp;</td>
  <td class=xl89></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=16 style="mso-height-source:userset;height:12.0pt">
  <td height=16 class=xl68 style="height:12.0pt"></td>
  <td class=xl90>&nbsp;</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl92>&nbsp;</td>
  <td class=xl107></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
  <td class=xl94 style="border-left:none">&nbsp;</td>
  <td class=xl95>&nbsp;</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl88>&nbsp;</td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl68 style="height:15.75pt"></td>
  <td colspan=3 class=xl184 style="border-right:.5pt solid black">9 9</td>
  <td colspan=17 class=xl187 style="border-right:1.0pt solid black;border-left:
  none">Total</td>
  <td colspan=2 class=xl190 style="border-right:1.0pt solid black;border-left:
  none">1 500 410,00</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
 </tr>
 <tr height=17 style="mso-height-source:userset;height:12.75pt">
  <td colspan=12 height=17 class=xl192 style="height:12.75pt"><span
  style="mso-spacerun:yes">  </span>Recapitulation :</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=19 style="height:14.25pt">
  <td height=19 class=xl68 style="height:14.25pt"></td>
  <td class=xl98>&nbsp;</td>
  <td class=xl99>&nbsp;</td>
  <td class=xl100>&nbsp;</td>
  <td colspan=8 class=xl193 style="border-right:.5pt solid black;border-left:
  none">Ancien solde</td>
  <td colspan=9 class=xl193 style="border-right:.5pt solid black;border-left:
  none">Engagement proposé</td>
  <td colspan=2 class=xl193 style="border-right:.5pt solid black;border-left:
  none">Nouveau solde</td>
  <td colspan=9 class=xl193 style="border-right:.5pt solid black;border-left:
  none">Observations</td>
 </tr>
 <tr height=19 style="mso-height-source:userset;height:14.25pt">
  <td height=19 class=xl68 style="height:14.25pt"></td>
  <td colspan=3 rowspan=3 class=xl196 style="border-right:.5pt solid black;
  border-bottom:.5pt solid black">&nbsp;</td>
  <td class=xl101 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl92 style="border-top:none">&nbsp;</td>
  <td class=xl101 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl101 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl101 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl92 style="border-top:none">&nbsp;</td>
 </tr>
 <tr height=19 style="height:14.25pt">
  <td height=19 class=xl68 style="height:14.25pt"></td>
  <td colspan=8 class=xl203 style="border-right:.5pt solid black;border-left:
  none">135 699 520,90</td>
  <td colspan=9 class=xl203 style="border-right:.5pt solid black;border-left:
  none">1 500 410,00</td>
  <td colspan=2 class=xl203 style="border-right:.5pt solid black;border-left:
  none">134 199 110,90</td>
  <td class=xl103 style="border-left:none">&nbsp;</td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl116>&nbsp;</td>
 </tr>
 <tr height=17 style="height:12.75pt">
  <td height=17 class=xl68 style="height:12.75pt"></td>
  <td class=xl104 style="border-left:none">&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl105>&nbsp;</td>
  <td class=xl104 style="border-left:none">&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl104>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl104>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl105>&nbsp;</td>
 </tr>
 <tr height=6 style="mso-height-source:userset;height:4.5pt">
  <td height=6 class=xl68 style="height:4.5pt"></td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td colspan=2 class=xl204></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=11 class=xl145 style="border-right:.5pt solid black">Visa du
  controleur financier</td>
  <td class=xl106 style="border-left:none">&nbsp;</td>
  <td class=xl74></td>
  <td class=xl107></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl118></td>
  <td class=xl108></td>
  <td class=xl108></td>
  <td class=xl108></td>
  <td class=xl108></td>
  <td class=xl108></td>
  <td class=xl108></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td colspan=11 class=xl145 style="border-right:.5pt solid black">N°</td>
  <td class=xl109 style="border-left:none">&nbsp;</td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl72>Mostaganem le<span style="mso-spacerun:yes"> </span></td>
  <td colspan=6 class=xl81></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td class=xl103>&nbsp;</td>
  <td class=xl102 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
  <td class=xl93 style="border-top:none">&nbsp;</td>
  <td class=xl93 style="border-top:none">&nbsp;</td>
  <td class=xl110 style="border-top:none">&nbsp;</td>
  <td class=xl111 style="border-left:none">&nbsp;</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl112></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td class=xl103>&nbsp;</td>
  <td class=xl76></td>
  <td colspan=6 class=xl81></td>
  <td class=xl74></td>
  <td class=xl107></td>
  <td class=xl113>&nbsp;</td>
  <td class=xl106 style="border-left:none">&nbsp;</td>
  <td class=xl74></td>
  <td class=xl107></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl72>Le Gestionnaire</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl68 style="height:15.0pt"></td>
  <td class=xl114>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl78>&nbsp;</td>
  <td class=xl105>&nbsp;</td>
  <td class=xl103 style="border-left:none">&nbsp;</td>
  <td class=xl76></td>
  <td class=xl76></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl77 align=left><span style="mso-spacerun:yes">     </span></td>
  <td class=xl119 dir=RTL align=right><span
  style="mso-spacerun:yes"> </span>&#1593;&#1606;
  &#1575;&#1604;&#1608;&#1575;&#1604;&#1610; &#1608;
  &#1576;&#1578;&#1601;&#1608;&#1610;&#1590; &#1605;&#1606;&#1607;</td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl73></td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl68 style="height:15.75pt"></td>
  <td class=xl71></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td colspan=2 class=xl204></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl68 style="height:15.75pt"></td>
  <td class=xl71></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl70></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl68 style="height:15.75pt"></td>
  <td class=xl71></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl68 style="height:15.75pt"></td>
  <td class=xl71></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
 </tr>
 <tr height=17 style="height:12.75pt">
  <td height=17 class=xl68 style="height:12.75pt"></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
  <td class=xl67></td>
 </tr>

 <tr height=0 style="display:none">
  <td width=9 style="width:7pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=40 style="width:30pt"></td>
  <td width=68 style="width:51pt"></td>
  <td width=132 style="width:99pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=70 style="width:53pt"></td>
  <td width=131 style="width:98pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=10 style="width:8pt"></td>
  <td width=43 style="width:32pt"></td>
  <td width=142 style="width:107pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=115 style="width:86pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=80 style="width:60pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=24 style="width:18pt"></td>
  <td width=12 style="width:9pt"></td>
 </tr>

</table>

</div>
 </page>';
require_once("html2pdf_v4.03/html2pdf.class.php");
$pdf = new HTML2PDF("P","A4","fr","UTF-8");
$pdf->writeHTML($content);
ob_clean();                    // RAJOUTE CECI
$pdf->output("lista.pdf");
?>