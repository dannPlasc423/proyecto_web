var alumnos = ["Lucia", "Diego", "Alondra", "Victor"];
var materias = ["Algoritmia", "Ingles", "Estatica", "BD", "ED"];
var registros = ["21110119", "21110136", "21110134", "21110109"];


for(var i=0; i<=alumnos.length; i++){
    console.log(alumnos[i]);
};

for(var i=0; i<=materias.length; i++){
    console.log(materias[i]);
};

for(var i=0; i<=registros.length; i++){
    console.log(registros[i]);
};

materias.forEach((mat)=>{
    console.log(mat);

});