// const mahasiswa = {
//     nama: "Muhammad Abdiel Firjatullah",
//     nim: "2031710156",
//     email: "abdielfirdie@gmail.com"
// };

// console.log(JSON.stringify(mahasiswa));

// * Vanilla Javascript

let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        let mahasiswa = JSON.parse(xhr.responseText);
        console.log(mahasiswa);
    }
}
xhr.open('GET', 'coba.json', true);
xhr.send();

// * jQuery

$.getJSON('coba.json', function (data) {
    console.log(data);
});