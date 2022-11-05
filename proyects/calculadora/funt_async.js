
// const getInformation = (text)=>{
//     return new Promise((response, reject)=>{
//         setTimeout(() => { response(text) }, Math.random()*2000);
//     })
// }
// // getInformation().then(resultado => console.log(resultado));

// const toShowData = async ()=>{
//     let dato1 = await getInformation('1. Francisco');
//     console.log(dato1);
//     let dato2 = await getInformation('2. Adelmo');
//     console.log(dato2);
//     let dato3 = await getInformation('3. Colmenares');
//     console.log(dato3);
//     let dato4 = await getInformation('4. Panta');
//     console.log(dato4);
// }
// toShowData();


// let subjects = {
//     course1: 'Matemática',
//     course2: 'Arte',
//     course3: 'Programación'
// }

// const getSubjects = ()=>{
//     return  new Promise((resolve, reject) => {
//         setTimeout(()=>{
//             resolve(subjects);
//         }, 1000)
//     })
// }

// const toShowData = async ()=>{
//     let valor = await getSubjects();
//     document.write(`Los cursos son: <br><br>
//     Materias<br>
//     -----------<br>
//     ${valor.course1}<br>
//     ${valor.course2}<br>
//     ${valor.course3}<br>
//     ${valor.course4}<br>
//     `);
// }
// toShowData();
