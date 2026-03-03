// name = "alamin";
// var name = "alamin";
// let name = "alamin";
// const name = "alamin";

let std = [1, 'alamin', 2.5];
std[0];

// if(1 === "1"){

// }else{

// }

// for(let a=0; a<10; a++){

// }

// function sum(a, b){
//     return a+b;
// }
// let sum = function (a, b){
//     return a+b;
// }
// let sum = (a,b)=>a+b;
// let test = function( a, b){
//     let c = a(10,20) +b;
//     return c;
// }
// test(sum, 10)

console.log(std);
//alert('test');
//document.write('testing js script...');

function test(){
    let head = document.getElementsByTagName('h1')[0];
    let username = document.getElementById('username');

    if(username.value == ""){
        document.getElementById('msg').innerHTML = "please type username!";
    }else{
        head.innerHTML = username.value;
        head.style.color = "red";
        document.getElementById('msg').innerHTML = "";
    // username.value = "";

    }
}

let move = document.getElementById('btn');

move.addEventListener('click', ()=>{
    let d1 = document.getElementById('d1');

    // let val = "";
    // alert(parseInt(val));

    // for(let a=0; a<50;a++){
    //     setTimeout(()=>{
    //         let current = window.getComputedStyle(d1).left;
    //         if(current == ""){
    //             current = "10px";
    //         }else{
    //             //let newpos = current.replace('px', '');
    //             current = parseInt(current)+10+"px";
    //         }
    //         
    //     }, 100*(a+1));
    // }

    let count =0;
    let interval = setInterval(()=>{
        if(count>50){
            clearInterval(interval);
        }else{
            let current = window.getComputedStyle(d1).left;
            if(current == ""){
                current = "10px";
            }else{
                current = parseInt(current)+10+"px";
            }
            d1.style.left = current;
        }
        count++;
    }, 100);
});
