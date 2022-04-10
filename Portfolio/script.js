console.log("running");
document.querySelector('.cross').style.display = 'none';
document.querySelector('.hamburger').addEventListener("click", ()=>{
    console.log("Event is clicked");
    document.getElementById('sidebar').classList.toggle('sidebarGo');
    if(document.getElementById('sidebar').classList.contains('sidebarGo')){
        document.querySelector('.cross').style.display = 'none';
        document.querySelector('.ham').style.display = 'inline';
    }
    else{
        document.querySelector('.ham').style.display = 'none';
        setTimeout(() => {
            document.querySelector('.cross').style.display = 'inline';
        }, 300);
    }
});