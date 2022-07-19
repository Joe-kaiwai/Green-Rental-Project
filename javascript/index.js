/* get date from document*/
let date1 = document.querySelector(".date1").value;
let date2 = document.querySelector(".date2").value;

/* convert string to date */
let diffdate1 = new Date (date1);
let diffdate2 = new Date (date2);

/* calculate the diff */
let Difference_In_Time = diffdate2.getTime() - diffdate1.getTime();
let Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

/* show result up to the largest interger */
console.log(Difference_In_Days);
console.log(Math.ceil(Difference_In_Days));
