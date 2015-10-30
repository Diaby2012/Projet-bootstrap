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
	font-family:"Arial \(Arabic\)", sans-serif;
	mso-font-charset:178;}
.xl68
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;}
.xl69
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl70
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:right;}
.xl71
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";}
.xl72
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";}
.xl73
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl74
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl75
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border:.5pt solid windowtext;}
.xl76
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	border:.5pt solid windowtext;}
.xl77
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;}
.xl78
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:top;}
.xl79
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
.xl80
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl81
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border:.5pt solid windowtext;}
.xl82
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;}
.xl83
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl84
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;}
.xl85
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
.xl86
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
.xl87
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl88
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl89
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl90
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
.xl91
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl92
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl93
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl94
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl95
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl96
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl97
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl98
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl99
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl100
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl101
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:right;}
.xl102
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center-across;}
.xl103
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl104
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl105
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl106
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl107
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	white-space:normal;}
.xl108
	{mso-style-parent:style49;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";}
.xl109
	{mso-style-parent:style0;
	font-size:12.0pt;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl110
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl111
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl112
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	white-space:normal;}
.xl113
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
.xl114
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl115
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl116
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl117
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl118
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl119
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl120
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
.xl121
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
.xl122
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
.xl123
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
.xl124
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl125
	{mso-style-parent:style0;
	font-size:18.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl126
	{mso-style-parent:style0;
	font-size:18.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl127
	{mso-style-parent:style0;
	font-size:18.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl128
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
.xl129
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
.xl130
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
.xl131
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
.xl132
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
.xl133
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
.xl134
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl135
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl136
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl137
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;
	mso-text-control:shrinktofit;}
.xl138
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;
	mso-text-control:shrinktofit;}
.xl139
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;
	mso-text-control:shrinktofit;}
.xl140
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;
	mso-text-control:shrinktofit;}
.xl141
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;
	mso-text-control:shrinktofit;}
.xl142
	{mso-style-parent:style0;
	font-size:7.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;
	mso-text-control:shrinktofit;}
.xl143
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
.xl144
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
.xl145
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
	border-left:.5pt solid windowtext;}
.xl147
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
.xl148
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
.xl149
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl150
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl151
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl152
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl153
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl154
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl155
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
.xl156
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
.xl157
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
.xl158
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
.xl159
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
.xl160
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
.xl161
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
.xl162
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
.xl163
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
.xl164
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
.xl165
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
.xl166
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl167
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl168
	{mso-style-parent:style49;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	text-align:center;
	white-space:normal;}
.xl169
	{mso-style-parent:style49;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"_ * \#\,\#\#0\.00_ \;_ * \\-\#\,\#\#0\.00_ \;_ * \0022-\0022??_ \;_ \@_ ";
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	white-space:normal;}
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
	border-left:1.0pt solid windowtext;}
.xl171
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
.xl172
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
.xl173
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl174
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl175
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl176
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl177
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl178
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
.xl179
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;}
.xl180
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
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
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl182
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;}
.xl183
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
.xl184
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl185
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
.xl186
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
.xl187
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
.xl188
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
.xl189
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
.xl190
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
.xl191
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
.xl192
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
.xl193
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
.xl194
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
.xl195
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
.xl196
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
.xl197
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
.xl198
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
.xl199
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
.xl200
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Standard;
	text-align:center;}
.xl201
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
.xl202
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl203
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl204
	{mso-style-parent:style0;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl205
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
.xl206
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
.xl207
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
.xl208
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
.xl209
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
.xl210
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
.xl211
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
.xl212
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
.xl213
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
.xl214
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl215
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl216
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl217
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl218
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl219
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:"Arial \(Arabic\)";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl220
	{mso-style-parent:style0;
	font-size:12.0pt;
	
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;}
.xl221
	{mso-style-parent:style57;
	color:#3F3F3F;
	font-size:11.0pt;
	font-weight:700;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border:.5pt solid #3F3F3F;}

</style>

<div style="border-top: 1px solid black;  width: 1170px; margin: 0 auto; ">
<table border=0 cellpadding=0 cellspacing=0 width=100% style="border-collapse:
 collapse;table-layout:fixed;">
 <col width=9 style="mso-width-source:userset;mso-width-alt:329;width:7pt">
 <col width=19 span=4 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=60 style="mso-width-source:userset;mso-width-alt:2194;width:45pt">
 <col width=73 style="mso-width-source:userset;mso-width-alt:2669;width:55pt">
 <col width=110 style="mso-width-source:userset;mso-width-alt:4022;width:83pt">
 <col width=19 span=2 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=70 style="mso-width-source:userset;mso-width-alt:2560;width:53pt">
 <col width=99 style="mso-width-source:userset;mso-width-alt:3620;width:74pt">
 <col width=19 span=8 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=10 style="mso-width-source:userset;mso-width-alt:365;width:8pt">
 <col width=19 style="mso-width-source:userset;mso-width-alt:694;width:14pt">
 <col width=142 style="mso-width-source:userset;mso-width-alt:5193;width:107pt">
 <col width=19 style="mso-width-source:userset;mso-width-alt:694;width:14pt">
 <col width=65 style="mso-width-source:userset;mso-width-alt:2377;width:49pt">
 <col width=19 span=5 style="mso-width-source:userset;mso-width-alt:694;
 width:14pt">
 <col width=24 style="mso-width-source:userset;mso-width-alt:877;width:18pt">
 <col width=12 style="mso-width-source:userset;mso-width-alt:438;width:9pt">
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 width=9 style="height:15.0pt;width:7pt"></td>
  <td colspan=30 class=xl68 width=1052 style="width:786pt">REPUBLIQUE A
  LGERIENNE DEMOCRATIQUE ET POUPULAIRE<span style="mso-spacerun:yes"> </span></td>
  <td class=xl69 width=12 style="width:9pt"></td>
 </tr>
 <tr height=34 style="mso-height-source:userset;height:25.5pt">
  <td height=34 class=xl67 style="height:25.5pt"></td>
  <td colspan=10 class=xl113>OPERATION BUDGETAIRE</td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=18 style="height:13.5pt">
  <td height=18 class=xl67 style="height:13.5pt"></td>
  <td colspan=10 class=xl114 style="border-right:1.0pt solid black">DIRECTION
  DES RESSOURCES EN EAU</td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=18 style="mso-height-source:userset;height:13.5pt">
  <td height=18 class=xl67 style="height:13.5pt"></td>
  <td colspan=10 class=xl117 style="border-right:1.0pt solid black">WILAYA DE
  MOSTAGANEM</td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td colspan=2 rowspan=2 class=xl120 style="border-right:1.0pt solid black;
  border-bottom:1.0pt solid black">B 2</td>
  <td class=xl69></td>
 </tr>
 <tr height=18 style="mso-height-source:userset;height:13.5pt">
  <td height=18 class=xl67 style="height:13.5pt"></td>
  <td colspan=10 class=xl124>CODE<span style="mso-spacerun:yes">  </span>211</td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=42 style="mso-height-source:userset;height:31.5pt">
  <td height=42 class=xl67 style="height:31.5pt"></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl70><span style="mso-spacerun:yes"> </span></td>
  <td class=xl69></td>
  <td class=xl70></td>
  <td class=xl69></td>
  <td class=xl70></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td colspan=12 class=xl125 width=422 style="border-right:.5pt solid black;
  width:315pt">FICHE DE PAIEMENT</td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl71></td>
  <td class=xl72></td>
 </tr>
 <tr height=20 style="mso-height-source:userset;height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td colspan=17 rowspan=2 class=xl128 style="border-right:.5pt solid black;
  border-bottom:.5pt solid black">N° DE L"OPERATION<span
  style="mso-spacerun:yes"> </span></td>
  <td class=xl73></td>
  <td colspan=5 class=xl134 style="border-right:.5pt solid black">N° FICHE</td>
  <td colspan=4 rowspan=2 class=xl137 width=74 style="border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:55pt">N° de la fiche d"engagement
  initial</td>
 </tr>
 <tr height=17 style="mso-height-source:userset;height:12.75pt">
  <td height=17 class=xl67 style="height:12.75pt"></td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td colspan=5 class=xl143 style="border-right:.5pt solid black">PAIEMENT<span
  style="mso-spacerun:yes"> </span></td>
 </tr>
 <tr height=20 style="mso-height-source:userset;height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td class=xl75 style="border-top:none">&nbsp;</td>
  <td class=xl75 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl75 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl72></td>
  <td class=xl76 style="border-top:none">N</td>
  <td class=xl76 style="border-top:none;border-left:none">K</td>
  <td class=xl76 style="border-top:none;border-left:none">5</td>
  <td colspan=3 class=xl146 style="border-right:.5pt solid black;border-left:
  none">341</td>
  <td class=xl76 style="border-top:none;border-left:none">4</td>
  <td colspan=3 class=xl146 style="border-right:.5pt solid black;border-left:
  none">262</td>
  <td colspan=3 class=xl146 style="border-right:.5pt solid black;border-left:
  none">127</td>
  <td colspan=2 class=xl146 style="border-right:.5pt solid black;border-left:
  none">14</td>
  <td colspan=2 class=xl146 style="border-right:.5pt solid black;border-left:
  none">01</td>
  <td class=xl77></td>
  <td colspan=2 class=xl146 style="border-right:.5pt solid black">2015</td>
  <td colspan=3 class=xl146 style="border-right:.5pt solid black;border-left:
  none">002</td>
  <td colspan=4 rowspan=2 class=xl149 width=74 style="border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:55pt">&nbsp;</td>
 </tr>
 <tr height=82 style="mso-height-source:userset;height:61.5pt">
  <td height=82 class=xl67 style="height:61.5pt"></td>
  <td class=xl78></td>
  <td class=xl78></td>
  <td class=xl78></td>
  <td class=xl72></td>
  <td colspan=2 class=xl155 style="border-right:.5pt solid black">PROGRAMME<span
  style="mso-spacerun:yes"> </span></td>
  <td class=xl79 style="border-left:none">FINANCEMENT<span
  style="mso-spacerun:yes"> </span></td>
  <td colspan=3 class=xl155 style="border-right:.5pt solid black;border-left:
  none">CHAPITRE</td>
  <td class=xl79 style="border-left:none">ARTICLE</td>
  <td colspan=6 class=xl158 style="border-right:.5pt solid black;border-left:
  none">GESTIONNAIRE</td>
  <td colspan=4 class=xl158 style="border-right:.5pt solid black;border-left:
  none">N° ORDRE</td>
  <td class=xl72></td>
  <td colspan=2 class=xl161 style="border-right:.5pt solid black">GESTION<span
  style="mso-spacerun:yes"> </span></td>
  <td colspan=3 class=xl163 style="border-right:.5pt solid black;border-left:
  none">N°</td>
 </tr>
 <tr height=8 style="mso-height-source:userset;height:6.0pt">
  <td height=8 class=xl67 style="height:6.0pt"></td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=20 style="mso-height-source:userset;height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=7 class=xl221>Libelle de l"operation :</td>
  <td class=xl70></td>
  <td colspan=23 rowspan=2 class=xl166 width=726 style="width:542pt">Renforcement
  des ouvrages de stockage et de station de pompage a travers la wilaya<span
  style="mso-spacerun:yes"> </span></td>
 </tr>
 <tr height=32 style="mso-height-source:userset;height:24.0pt">
  <td height=32 class=xl67 style="height:24.0pt"></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=29 style="mso-height-source:userset;height:21.75pt">
  <td height=29 class=xl67 style="height:21.75pt"></td>
  <td colspan=7 class=xl221>Objet de Paiement :</td>
  <td colspan=24 rowspan=2 class=xl167 width=745 style="width:556pt">Situation
  N°04 presentee par l"entreprise ETPBH<span style="mso-spacerun:yes"> 
  </span>B<span style="mso-spacerun:yes">  </span>au titre du Marche N°
  2014/065<span style="mso-spacerun:yes">   </span>Approuvé le 20/07/2014 pour
  le<span style="mso-spacerun:yes">  </span>lot 09 Realisation d"un reservoir
  250 M3 sureleve Douar Kaabchia commune de<span style="mso-spacerun:yes"> 
  </span>Mesra<span style="mso-spacerun:yes"> </span></td>
 </tr>
 <tr height=37 style="mso-height-source:userset;height:27.75pt">
  <td height=37 class=xl67 style="height:27.75pt"></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl73></td>
  <td class=xl73 dir=RTL></td>
 </tr>
 <tr height=0 style="display:none;mso-height-source:userset;mso-height-alt:
  285">
  <td class=xl67></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl70></td>
  <td class=xl68></td>
  <td class=xl68></td>
  <td></td>
  <td class=xl68></td>
  <td class=xl68></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=10 style="width:8pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=142 style="width:107pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td colspan=7 class=xl168 width=184 style="width:137pt"></td>
  <td class=xl69></td>
 </tr>
 <tr height=24 style="mso-height-source:userset;height:18.0pt">
  <td height=24 class=xl67 style="height:18.0pt"></td>
  <td colspan=11 class=xl84>Structure de Paiement Proposé</td>
  <td class=xl69></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=10 style="width:8pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl112 width=142 style="width:107pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td colspan=7 class=xl168 width=184 style="width:137pt"></td>
  <td class=xl69></td>
 </tr>
 <tr height=21 style="mso-height-source:userset;height:15.75pt">
  <td height=21 class=xl67 style="height:15.75pt"></td>
  <td class=xl81>&nbsp;</td>
  <td class=xl81 style="border-left:none">&nbsp;</td>
  <td class=xl81 style="border-left:none">&nbsp;</td>
  <td></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl107 width=10 style="width:8pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td class=xl112 width=142 style="width:107pt"></td>
  <td class=xl107 width=19 style="width:14pt"></td>
  <td colspan=7 class=xl168 width=184 style="width:137pt"></td>
  <td class=xl69></td>
 </tr>
 <tr height=18 style="height:13.5pt">
  <td height=18 class=xl67 style="height:13.5pt"></td>
  <td class=xl82>3</td>
  <td class=xl82></td>
  <td class=xl82>1</td>
  <td></td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td colspan=7 class=xl169 width=184 style="width:137pt">&nbsp;</td>
  <td class=xl69></td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl67 style="height:15.75pt"></td>
  <td colspan=3 class=xl170 style="border-right:1.0pt solid black">&nbsp;</td>
  <td colspan=17 class=xl173 style="border-right:1.0pt solid black;border-left:
  none">Rubriques</td>
  <td colspan=2 class=xl170 style="border-right:1.0pt solid black;border-left:
  none">Montant</td>
  <td colspan=9 class=xl170 style="border-right:1.0pt solid black;border-left:
  none">Observations</td>
 </tr>
 <tr height=17 style="height:12.75pt">
  <td height=17 class=xl67 style="height:12.75pt"></td>
  <td class=xl105>&nbsp;</td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl110 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl88 style="border-top:none">&nbsp;</td>
  <td class=xl111 style="border-top:none">&nbsp;</td>
  <td colspan=2 class=xl176 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">0 1</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Etude</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">0 2</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Batiment</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">1 807 687,44</td>
  <td class=xl84></td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">0 3</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Travaux public</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">0 4</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Machine et equipement de production</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">0 5</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Materiel de transport</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">0 6</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Formation</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td colspan=7 class=xl84></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">0 7</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Prestation de services externes</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">0 9</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Autres</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">&nbsp;</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">publication<span style="mso-spacerun:yes"> </span></td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl178 style="border-right:.5pt solid black">&nbsp;</td>
  <td colspan=17 class=xl181 style="border-right:.5pt solid black;border-left:
  none">Contrôle et suivi</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=3 class=xl202 style="border-right:.5pt solid black">&nbsp;</td>
  <td colspan=17 class=xl205 style="border-right:.5pt solid black;border-left:
  none">Montant non Ventilée</td>
  <td colspan=2 class=xl184 style="border-right:1.0pt solid black;border-left:
  none">&nbsp;</td>
  <td class=xl84></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=16 style="mso-height-source:userset;height:12.0pt">
  <td height=16 class=xl67 style="height:12.0pt"></td>
  <td class=xl85 style="border-top:none">&nbsp;</td>
  <td class=xl86 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
  <td class=xl101></td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
  <td class=xl89 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl90 style="border-top:none">&nbsp;</td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl83>&nbsp;</td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl67 style="height:15.75pt"></td>
  <td colspan=3 class=xl208 style="border-right:.5pt solid black">9 9</td>
  <td colspan=17 class=xl211 style="border-right:1.0pt solid black;border-left:
  none">Total</td>
  <td colspan=2 class=xl186 style="border-right:1.0pt solid black;border-left:
  none">1 807 687,44</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl91>&nbsp;</td>
  <td class=xl92>&nbsp;</td>
 </tr>
 <tr height=17 style="mso-height-source:userset;height:12.75pt">
  <td colspan=12 height=17 class=xl220 style="height:12.75pt"><span
  style="mso-spacerun:yes">  </span>Recapitulation :</td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=19 style="height:14.25pt">
  <td height=19 class=xl67 style="height:14.25pt"></td>
  <td class=xl93>&nbsp;</td>
  <td class=xl94>&nbsp;</td>
  <td class=xl95>&nbsp;</td>
  <td colspan=8 class=xl188 style="border-right:.5pt solid black;border-left:
  none">Paiements enterieurs</td>
  <td colspan=9 class=xl188 style="border-right:.5pt solid black;border-left:
  none">Paiement proposé</td>
  <td colspan=2 class=xl188 style="border-right:.5pt solid black;border-left:
  none">Total des Paiements</td>
  <td colspan=9 class=xl188 style="border-right:.5pt solid black;border-left:
  none">Observations</td>
 </tr>
 <tr height=19 style="mso-height-source:userset;height:14.25pt">
  <td height=19 class=xl67 style="height:14.25pt"></td>
  <td colspan=3 rowspan=3 class=xl191 style="border-right:.5pt solid black;
  border-bottom:.5pt solid black">&nbsp;</td>
  <td class=xl96 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
  <td class=xl96 style="border-top:none;border-left:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl96 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl96 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl97 style="border-top:none">&nbsp;</td>
  <td class=xl87 style="border-top:none">&nbsp;</td>
 </tr>
 <tr height=19 style="height:14.25pt">
  <td height=19 class=xl67 style="height:14.25pt"></td>
  <td colspan=8 class=xl199 style="border-right:.5pt solid black;border-left:
  none">15 751 490,34</td>
  <td colspan=9 class=xl199 style="border-right:.5pt solid black;border-left:
  none">1 807 687,44</td>
  <td colspan=2 class=xl199 style="border-right:.5pt solid black;border-left:
  none">17 559 177,78</td>
  <td class=xl98 style="border-left:none">&nbsp;</td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl106>&nbsp;</td>
 </tr>
 <tr height=17 style="height:12.75pt">
  <td height=17 class=xl67 style="height:12.75pt"></td>
  <td class=xl99 align=left style="border-left:none">75</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl100>&nbsp;</td>
  <td class=xl99 style="border-left:none">&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl99>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl99>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl74>&nbsp;</td>
  <td class=xl100>&nbsp;</td>
 </tr>
 <tr height=8 style="mso-height-source:userset;height:6.0pt">
  <td height=8 class=xl67 style="height:6.0pt"></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
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
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td colspan=2 class=xl200></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=11 class=xl214 style="border-right:1.0pt solid black">Ordonnance
  N°<span style="mso-spacerun:yes"> </span></td>
  <td class=xl101></td>
  <td class=xl70></td>
  <td class=xl101></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl108></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl67 style="height:15.75pt"></td>
  <td colspan=11 class=xl217 style="border-right:1.0pt solid black">du</td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl68>Mostaganem le<span style="mso-spacerun:yes">  </span></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=11 style="mso-height-source:userset;height:8.25pt">
  <td height=11 class=xl67 style="height:8.25pt"></td>
  <td class=xl98>&nbsp;</td>
  <td class=xl72></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl102></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl80>&nbsp;</td>
  <td class=xl103 style="border-left:none">&nbsp;</td>
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
  <td class=xl104></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=20 style="height:15.0pt">
  <td height=20 class=xl67 style="height:15.0pt"></td>
  <td colspan=11 class=xl214 style="border-right:1.0pt solid black">Admise en
  depense<span style="mso-spacerun:yes"> </span></td>
  <td class=xl101></td>
  <td class=xl70></td>
  <td class=xl101></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl68>Le Gestionnaire</td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
 </tr>
 <tr height=21 style="height:15.75pt">
  <td height=21 class=xl67 style="height:15.75pt"></td>
  <td colspan=11 class=xl217 style="border-right:1.0pt solid black">Le</td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl73 align=left><span style="mso-spacerun:yes">    </span><span
  style="display:none"><span style="mso-spacerun:yes"> </span></span></td>
  <td class=xl109 dir=RTL align=right><span
  style="mso-spacerun:yes"> </span>&#1593;&#1606;
  &#1575;&#1604;&#1608;&#1575;&#1604;&#1610; &#1608;
  &#1576;&#1578;&#1601;&#1608;&#1610;&#1590; &#1605;&#1606;&#1607;</td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl69></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style="display:none">
  <td width=9 style="width:7pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=60 style="width:45pt"></td>
  <td width=73 style="width:55pt"></td>
  <td width=110 style="width:83pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=70 style="width:53pt"></td>
  <td width=99 style="width:74pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=10 style="width:8pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=142 style="width:107pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=65 style="width:49pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=19 style="width:14pt"></td>
  <td width=24 style="width:18pt"></td>
  <td width=12 style="width:9pt"></td>
 </tr>
 <![endif]>
</table>

</body>

</html>
</page>';
require_once("html2pdf_v4.03/html2pdf.class.php");
$pdf = new HTML2PDF("L","A4","fr","UTF-8");
$pdf->writeHTML($content);
$pdf->SetDisplayMode('fullpage');
ob_clean();                    // RAJOUTE CECI
$pdf->output("lista.pdf");
?>
