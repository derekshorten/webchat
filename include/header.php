
<header>
WEBSITE BASED INSTANT MESSANGER  
<P></p>
<script>
var today = new Date();          // Create a new date object
var hourNow = today.getHours(); // Find the current hour 

//Display the approiate greeting based on the crrent time
if (hourNow > 18) {
  greeting = 'GOOD EVENING'
} else if (hourNow > 12) {
  greeting = 'GOOD AFTERNOON';	
} else if (hourNow > 0) {
  greeting = 'GOOD MORNING';  
} else {
  greeting = 'WELCOME';
}
document.write(greeting);
</script>
</header>

</html>
