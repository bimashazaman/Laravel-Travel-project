window.onload = ()=>{
    fetch("/check").then(res=>{
        console.log(res)
    })
}