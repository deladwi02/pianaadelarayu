<hr>
<div>
<script type="Text/Javascript">
var months = new Array();
months[0] = "JANUARI";
months[1] = "FEBRUARI";
months[2] = "MARET";
months[3] = "APRIL";
months[4] = "MEI";
months[5] = "JUNI";
months[6] = "JULI";
months[7] = "AGUSTUS";
months[8] = "SEPTEMBERr";
months[9] = "OKTOBER";
months[10] = "NOVEMBER";
months[11] = "DESEMBER";
var currentDate = new Date();
var currentMonth = currentDate.getMonth();
var hariini=currentDate.getDate();
currentDate.setDate(1);
document.write("<table align='center' border=0 cellpadding=3 cellspacing=5>");
document.write("<tr>");
document.write("<td colspan=7 align='center'><strong>"+ months[currentMonth] +"</strong></td>");
document.write("</tr>")
document.write("<tr bgcolor='#FFFFFF'>");
document.write("<td align='center'><h6>Min- </h6></td>");
document.write("<td align='center'><h6>Sen- </h6></td>");
document.write("<td align='center'><h6>Sel- </h6></td>");
document.write("<td align='center'><h6>Rab- </h6></td>");
document.write("<td align='center'><h6>Kam- </h6></td>");
document.write("<td align='center'><h6>Jum- </h6></td>");
document.write("<td align='center'><h6>Sab </h6></td>");
document.write("</tr>");
if (currentDate.getDay() != 0)
{
document.write("<tr>");
for (i = 0; i < currentDate.getDay(); i++)
{
document.write("<td>&nbsp;</td>");
}
}
while (currentDate.getMonth() == currentMonth)
{
if (currentDate.getDay == 0)
{
document.write("<tr>");
}
if (hariini==currentDate.getDate())
{
document.write("<td align='center' bgcolor='#00FF00'> <font color='#0000FF'><strong>" + currentDate.getDate() + "</strong></font></td>");
}
else
{
document.write("<td align='center'>" + currentDate.getDate() + "</td>");
}
if (currentDate.getDay() == 6)
{
document.write("</tr>");
}
currentDate.setDate(currentDate.getDate() + 1);
}
for (i = currentDate.getDay(); i <= 6; i++)
{
document.write("<td>&nbsp;</td>");
}
document.write("</table>");
</script>
</div><hr>