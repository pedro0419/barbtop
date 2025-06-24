document.addEventListener("DOMContentLoaded",() => {
    const butao = document.getElementById('butaoJS');
    const sidemenu = document.getElementById('sidemenu');

    
    butao.addEventListener('click',(Event)=> {
        Event.stopPropagation();
        sidemenu.classList.toggle('show');
    });

    sidemenu.addEventListener('click',(Event)=> {
        Event.stopPropagation();
    });

    document.addEventListener('click',(Event)=>{
        sidemenu.classList.remove('show');
    });
});