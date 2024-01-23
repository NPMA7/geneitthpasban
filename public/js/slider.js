function structure() {
  let schedule = document.querySelector(".schedule");
  let piket = document.querySelector(".piket");
  let structure = document.querySelector(".structure");
  if (structure.style.display === "block") {
    schedule.style.display = "none";
    piket.style.display = "none";
  } else {
    structure.style.display = "block";
    schedule.style.display = "none";
    piket.style.display = "none";
  }
}
function schedule() {
  let structure = document.querySelector(".structure");
  let schedule = document.querySelector(".schedule");
  let piket = document.querySelector(".piket");
  if (schedule.style.display === "block") {
    structure.style.display = "none";
    piket.style.display = "none";
  } else {
    structure.style.display = "none";
    schedule.style.display = "block";
    piket.style.display = "none";
  }
}
function piket() {
  let structure = document.querySelector(".structure");
  let schedule = document.querySelector(".schedule");
  let piket = document.querySelector(".piket");
  if (piket.style.display === "block") {
    schedule.style.display = "none";
    structure.style.display = "none";
  } else {
    structure.style.display = "none";
    schedule.style.display = "none";
    piket.style.display = "block";
  }
}
