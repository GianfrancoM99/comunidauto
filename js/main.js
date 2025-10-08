// creación array para iterar

let autos = [
    {marca:"Ford", modelo:"Fiesta", precio:5000000},
    {marca:"Toyota", modelo:"Corolla", precio:12000000},
    {marca:"VW", modelo:"Golf", precio:8000000},
    {marca:"Chevrolet", modelo:"Onix", precio:7000000},
    {marca:"Honda", modelo:"Civic", precio:11000000},
    {marca:"Renault", modelo:"Clio", precio:6000000},
    {marca:"Peugeot", modelo:"208", precio:6500000},
    {marca:"Nissan", modelo:"Sentra", precio:9000000},
    {marca:"Hyundai", modelo:"Elantra", precio:9500000},
    {marca:"Kia", modelo:"Rio", precio:7200000},
    {marca:"Mazda", modelo:"3", precio:11500000},
    {marca:"Subaru", modelo:"Impreza", precio:13000000},
    {marca:"Fiat", modelo:"Punto", precio:5500000},
    {marca:"Citroën", modelo:"C3", precio:6800000},
    {marca:"Suzuki", modelo:"Swift", precio:6000000}
];

// datos para el selector
let tasaDolar = 1450;
let monedaActual = "ars";

function mostrarAutos(lista){
  let ul = document.getElementById("lista");
  ul.className="listaUl";
  ul.innerHTML = "";
  lista.forEach(a=>{
    let li = document.createElement("li");
    li.className="listaLi";
    let precio = a.precio;
    let simbolo = "$";
    if(monedaActual === "usd") {
      precio = (a.precio / tasaDolar).toFixed();
      simbolo = "u$s ";
    }
    li.textContent = `${a.marca} ${a.modelo} - ${simbolo}${precio}`;
    ul.appendChild(li);
  });
}
mostrarAutos(autos);

document.getElementById("moneda").addEventListener("change", e=>{
  monedaActual = e.target.value;
  let texto = document.getElementById("buscar").value.toLowerCase();
  let filtrados = autos.filter(a =>
    a.marca.toLowerCase().includes(texto) ||
    a.modelo.toLowerCase().includes(texto)
  );
  mostrarAutos(filtrados);
});

document.getElementById("buscar").addEventListener("input", e=>{
  let texto = e.target.value.toLowerCase();
  let filtrados = autos.filter(a =>
    a.marca.toLowerCase().includes(texto) ||
    a.modelo.toLowerCase().includes(texto)
  );
  mostrarAutos(filtrados);
});