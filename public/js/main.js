const tabItem    = document.querySelectorAll('.tab-item');
const tabSection = document.querySelectorAll('.tab-section');



// console.log(tabItem);
function init()
{
    tabItem.forEach((element)=>{
        element.addEventListener('click',function(){
                removeBorder();
                removeShowClass();
                //get index
                index = this.dataset.index;
                //select tab-section by index
                section = document.getElementById(`tab-section-${index}`);
                //add show class in section
                section.classList.add('show');
                //add tab-border in manu item
                this.classList.add('tab-border');
        });
    });
}


function removeBorder()
{
    tabItem.forEach((element)=>{
        element.classList.remove('tab-border');
    })
}

function removeShowClass()
{
    tabSection.forEach(element=>{
        element.classList.remove('show');
    })
}
init();
