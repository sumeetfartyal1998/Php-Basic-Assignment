var arr=[];
// Display function
function dis(val){
    document.getElementById("result").value+=val;
}

// Calculates and prints the output
function calculate(){
    let inp=document.getElementById("result").value;
    let res=eval(inp);
    document.getElementById("result").value=res;
    history(inp,res); 
}

// Function that shows the history of all the calculations done
function history(x,y){
    var task = x +" = "+y
    console.log(task)
    arr.push(task);
    var list=document.getElementById('history');
    var li = document.createElement('li');
    li.className='a'
    li.id='li'
    arr.forEach(function(val,ind){
        li.innerHTML=val
        list.appendChild(li);
    })
}

// Delete function
function del(){
    let d=document.getElementById("result").value;
    document.getElementById("result").value=d.slice(0,d.length-1);
}

// Clear function
function clr(){
    document.getElementById("result").value="";
}