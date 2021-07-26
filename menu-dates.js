window.addEventListener("DOMContentLoaded", function () {
  const mondayDate = document.getElementById("monday-date");
  const tuesdayDate = document.getElementById("tuesday-date");
  const wednesdayDate = document.getElementById("wednesday-date");
  const thursdayDate = document.getElementById("thursday-date");
  const fridayDate = document.getElementById("friday-date");

  function getMonday(d) {
    d = new Date(d);
    var day = d.getDay(),
      diff = d.getDate() - day + (day == 0 ? -6 : 1); // adjust when day is sunday
    return new Date(d.setDate(diff));
  }
  let mondayDatum = getMonday(new Date()).getDate();
  let mondayMonth = getMonday(new Date()).getMonth() + 1;
  let mondayYear = getMonday(new Date()).getFullYear();
  mondayDate.innerHTML = mondayYear + ". " + mondayMonth + ". " + mondayDatum;

  function getTuesday(d) {
    d = new Date(d);
    var day = d.getDay(),
      diff = d.getDate() - day + (day == 0 ? -6 : 1) + 1; // adjust when day is sunday
    return new Date(d.setDate(diff));
  }
  let TuesdayDatum = getTuesday(new Date()).getDate();
  let TuesdayMonth = getTuesday(new Date()).getMonth() + 1;
  let TuesdayYear = getTuesday(new Date()).getFullYear();
  tuesdayDate.innerHTML =
    TuesdayYear + ". " + TuesdayMonth + ". " + TuesdayDatum;

  function getWednesday(d) {
    d = new Date(d);
    var day = d.getDay(),
      diff = d.getDate() - day + (day == 0 ? -6 : 1) + 2; // adjust when day is sunday
    return new Date(d.setDate(diff));
  }
  let WednesdayDatum = getWednesday(new Date()).getDate();
  let WednesdayMonth = getWednesday(new Date()).getMonth() + 1;
  let WednesdayYear = getWednesday(new Date()).getFullYear();
  wednesdayDate.innerHTML =
    WednesdayYear + ". " + WednesdayMonth + ". " + WednesdayDatum;

  function getThursday(d) {
    d = new Date(d);
    var day = d.getDay(),
      diff = d.getDate() - day + (day == 0 ? -6 : 1) + 3; // adjust when day is sunday
    return new Date(d.setDate(diff));
  }
  let ThursdayDatum = getThursday(new Date()).getDate();
  let ThursdayMonth = getThursday(new Date()).getMonth() + 1;
  let ThursdayYear = getThursday(new Date()).getFullYear();
  thursdayDate.innerHTML =
    ThursdayYear + ". " + ThursdayMonth + ". " + ThursdayDatum;
  function getFriday(d) {
    d = new Date(d);
    var day = d.getDay(),
      diff = d.getDate() - day + (day == 0 ? -6 : 1) + 4; // adjust when day is sunday
    return new Date(d.setDate(diff));
  }
  let FridayDatum = getFriday(new Date()).getDate();
  let FridayMonth = getFriday(new Date()).getMonth() + 1;
  let FridayYear = getFriday(new Date()).getFullYear();
  fridayDate.innerHTML = FridayYear + ". " + FridayMonth + ". " + FridayDatum;
});
