let L1=document.querySelector('.locationcheck1').innerHTML;
let L2=document.querySelector('.locationcheck2').innerHTML;
let M1=document.querySelector('.showmap1');
let M2=document.querySelector('.showmap2');
console.log(L1,L2,M1,M2)

if (L1=="觀塘分店"){
    M1.setAttribute("href", "https://goo.gl/maps/D1bYPYAGmVsz7H3AA");
}
else{
    M1.setAttribute("href", "https://goo.gl/maps/hMskNwCdmrrGaPy19");
}

if (L2=="上水分店"){
    M2.setAttribute("href", "https://goo.gl/maps/hMskNwCdmrrGaPy19");
}
else{
    M2.setAttribute("href", "https://goo.gl/maps/D1bYPYAGmVsz7H3AA");
}
