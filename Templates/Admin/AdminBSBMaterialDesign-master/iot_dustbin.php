<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .btn-group button {
  background-color: #4CAF50; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
  </style>
</head>
<body>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyAHa-6SfB97IJ3rBUhsyzlMgxOXJE_0jrA",
    authDomain: "wired-method-268107.firebaseapp.com",
    databaseURL: "https://wired-method-268107.firebaseio.com",
    projectId: "wired-method-268107",
    storageBucket: "wired-method-268107.appspot.com",
    messagingSenderId: "118056636570",
    appId: "1:118056636570:web:d0f7184ef2b611819b4f23",
    measurementId: "G-2R3ZF5CSS2"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<h1>Click below the button to track the Status of Dustbin</h1>

<div class="btn-group">
  <button href="" style="width:50%"><b>ID:- 101</b></button>
  <button style="width:50%"><b>ID:- 102</b></button><br><br><br>
  <button style="width:50%"><b>ID:- 103</b></button>
  <button style="width:50%"><b>ID:- 104</b></button><br><br><br>
  <button style="width:50%"><b>ID:- 105</b></button>
  <button style="width:50%"><b>ID:- 106</b></button><br><br><br>
  <button style="width:50%"><b>ID:- 107</b></button>
  <button style="width:50%"><b>ID:- 108</b></button><br><br><br>
  <button style="width:50%"><b>ID:- 109</b></button>
  <button style="width:50%"><b>ID:- 110</b></button><br><br><br>
</div>
</body>

</html>