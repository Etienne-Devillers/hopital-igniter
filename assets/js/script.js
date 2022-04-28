// Crétation des lignes cliquables pour le tableau

let rowList = document.querySelectorAll('.tRow');
// console.log(rowList);

rowList.forEach(element => {

    element.addEventListener('click', () =>{
        window.location.href = '/Patient/profil?id='+element.id ;
    });

});
