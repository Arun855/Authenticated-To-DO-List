<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do List</title>
</head>
<body>
<h1 id="myHeader">TO DO List</h1>

<!-- STEPs 1 and 2 below here  -->
<input type="button" id="addButton" onclick="addTask()" value="Add">
<input type="text" id="input" placeholder="enter task ...">

<hr>

<ul id="tasks">
  <li>
    <input type="button" class="done" onclick="markDone(this.parentNode)" value="&#x2713;" />
    <input type="button" class="remove" onclick="remove(this.parentNode)" value="&#x2715;" />
    <input type="button" class="important" onclick="important(this.parentNode)" value="!" />
    make todo list
  </li>

</ul>
<hr>
<!-- STEPs 8 and 9 below here  -->

<div id="divabout">
</div>

<input type="button" id="aboutButton" value="About" onclick="doAbout()">

<!-- STEP 13 below here  -->
<input type="button" id="clearButton" value="Clear" onclick="clearAbout()">
</body>

<style>
  


/* remove indentation of list items */

ul {
  padding-left: 0;
}


/* remove traditional bullet from front of list items */
/* Step 3 below here */
li {
  font-size: 20px;
  list-style-type: none;
  background-color: #eee;
  border: 1px solid #c3c3c3;
  padding: 10px 0px 10px 5px;
}


/* Step 5 below here */
.done {
  background-color: green;
}

.remove {
  background-color: red;
}

/* mark task as finished */
/* Step 6 below here */
li.finished {
  color: white;
  background-color: gray;
  text-decoration: line-through;
}

input[type="text"] {
  font-size: 18px;
  width: 94%;
  padding: 10px;
  background-color: beige;
}

input[type="button"] {
  font-size: 1.2em;
  margin: -6px 4px 0px 0px;
}

#addButton {
  padding: 10px;
}

/* Step 10 below here */
.yellowbackground {
  background-color: yellow;
}


/* Step 12 below here */
#divabout {
  width: 300px;
  font-size: 20px;
  margin: 10px;
}

.important {
  background-color: lightblue;  
}

body {
  background-color: burlywood;
}

#aboutButton {
  padding: default;
}

#clearButton {
  padding: default;
}
</style>

<script>
function addTask() {
  var input = document.getElementById("input");
  // get current text from input field
  var newTask = input.value;
  // only add new item to list if some text was entered
  if (newTask != "") {
    // create new HTML list item
    var item = document.createElement("li");
    // add HTML for buttons and new task text
    // Note, need to use '' because of "" in HTML
    item.innerHTML =
      '<input type="button" class="done" onclick="markDone(this.parentNode)" value="&#x2713;" /> ' +
      '<input type="button" class="remove" onclick="remove(this.parentNode)" value="&#x2715;" /> ' +
      '<input type="button" class="important" onclick="important(this.parentNode)" value="!" />' +
      newTask;
    // add new item as part of existing list
    document.getElementById("tasks").appendChild(item);

    /* Step 4 below here */
    input.value = "";
    input.placeholder = "enter next task ...";
  }
}

// change styling used for given item
function markDone(item) {
  item.className = "finished";
}

/* Step 7 below here */
function remove(item) {
  // remove item completely from document
  if (item.className == "finished") {
    item.remove();
  }
}

/* Step 11 below here */
function doAbout() {
  var divabout = document.getElementById("divabout");
  divabout.innerHTML = "Author: Amogh M C";
  divabout.className = "yellowbackground";
}

/* Step 14 below here */
function clearAbout() {
  var divabout = document.getElementById("divabout");
  divabout.innerHTML = "";
}

function important (item) { 
  if (item.className != "finished") {
    item.className = "important";
  }
}
  </script>
</html>
