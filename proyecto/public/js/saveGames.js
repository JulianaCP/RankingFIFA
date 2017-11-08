function getList(){
    list1= JSON.parse(localStorage.listFinalChart);      
    document.getElementById("list").value= list1;
}
getList();