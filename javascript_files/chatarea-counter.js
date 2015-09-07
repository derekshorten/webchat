(function(){
var chat = document.GetElementById('chat');
var chatCount =document.GetElementById('chat-count');

addEvent(chat,'focus',updateCounter);
addEvent (chat, 'input', updateCounter);

addEvent(chat, 'blur', function() {
	if(chat.value.length <=140){
	chatCount.className = 'hide';
	}
});

function updateCounter(e) {
 var target = e.target || e.srcElement;
 var count = 140 - target.value.length;
 if(count < 0) {
   chatCount.className = 'error';
 } else if (count <=15){
   chatCount.className = 'warn';
 } else{
   chatCount.className = 'good';
 }
 var charMsg = '<b>' + count + '</b>' + 'characters';
 chatCount.innerHTML = charMsg;
}
}()) 
    
 