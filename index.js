function validate(){
    var text=document.getElementById('duration');
    var today=new Date();
    let hours=today.getHours();

    if(hours>=0 && hours<12){
            text.innerHTML="Good Morning!";
    }else if(hours>=12 && hours<15){
        text.innerHTML="Good Afternoon!";
    }else if(hours>=15 && hours<19){
        text.innerHTML="Good Evening!";
    }else{
        text.innerHTML="How did it get so late so soon?";
    }

}
validate();