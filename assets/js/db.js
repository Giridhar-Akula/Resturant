// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyB8RML6C9DrfjZHBhD95cFVwXRS4OGZKWA",
    authDomain: "kaverikitchens-f7764.firebaseapp.com",
    databaseURL: "https://kaverikitchens-f7764-default-rtdb.firebaseio.com",
    projectId: "kaverikitchens-f7764",
    storageBucket: "kaverikitchens-f7764.appspot.com",
    messagingSenderId: "586774503589",
    appId: "1:586774503589:web:727476ed634dd187192d4c",
    measurementId: "G-7821SV4K8Q"
};




firebase.initializeApp(firebaseConfig);


// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('kaverikitchens').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var date = getInputVal('date');
  var email = getInputVal('email');
  var phone = getInputVal('phone');
  var message = getInputVal('message');
  var time= getInputVal('time');
  var people= getInputVal('people');

  // Save message
  saveMessage(name, date, email, phone, message, time, people);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('kaverikitchens').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name, date, email, phone, message, time, people){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    date:date,
    email:email,
    phone:phone,
    message:message,
    time:time,
    people:people
  });
}