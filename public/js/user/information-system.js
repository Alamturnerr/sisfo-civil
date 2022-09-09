$(document).ready(function(){
// Map
	// let map = L.map('map').setView([-0.9240756, 118.6008512], 4.53);
    //     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //         maxZoom: 19,
    //         attribution: '© OpenStreetMap'
    //     }
    // ).addTo(map);
    let map = L.map('map').setView([-0.9240756, 118.6008512], 4.53);
    L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
    minZoom: 5,
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3'] 
    }).addTo(map)
// End Map

// 
    let greenIcon = L.icon({
        iconUrl: '/icon/hijau.png',
        iconSize:     [30, 46], // size of the icon
    });
    let redIcon = L.icon({
        iconUrl: '/icon/merah.png',
        iconSize:     [30, 46], // size of the icon
    });
    let yellowIcon = L.icon({
        iconUrl: '/icon/kuning.png',
        iconSize:     [30, 46], // size of the icon
    });
// 

// Marker
    const dalam_pembangunan = L.layerGroup().addTo(map);
    const daerah_rawan = L.layerGroup().addTo(map);
    const daerah_strategis = L.layerGroup().addTo(map);
    $.getJSON('/sistem-informasi/data',function(data){
        $.each(data,function(index){
            let desc;
            if(data[index].status.toLowerCase()== 'dalam pembangunan'){
                desc=`
                    <div class=container-fluid information-system-popup p-0 m-0'>
                        <h5>${data[index].title}</h5> <hr>
                        <div class='custom-information-system-${data[index].id} p-0 m-0'></div>
                        <h6 class='status-system-information badge badge-warning p-1 my-2'>${data[index].status}</h6>
                        <p class='py-0 my-0'><strong>Provinsi</strong> : ${data[index].province} <br>
                        <strong>Kota</strong> : ${data[index].city}<br>
                        <strong>Alamat</strong> : ${data[index].address}</p>
                        <p class='description-is pt-1 mt-1'>${data[index].description}<p>
                    </div>`;
            }
            else if(data[index].status.toLowerCase()== 'daerah rawan'){ 
                desc=`
                    <div class=container-fluid information-system-popup p-0 m-0'>
                        <h5>${data[index].title}</h5> <hr>
                        <div class='custom-information-system-${data[index].id} p-0 m-0'></div>
                        <h6 class='status-system-information badge badge-danger p-1 my-2'>${data[index].status}</h6>
                        <p class='py-0 my-0'><strong>Provinsi</strong> : ${data[index].province} <br>
                        <strong>Kota</strong> : ${data[index].city}<br>
                        <strong>Alamat</strong> : ${data[index].address}</p>
                        <p class='description-is pt-1 mt-1'>${data[index].description}<p>
                    </div>`;
            }
            else if(data[index].status.toLowerCase()== 'daerah strategis'){ 
                desc=`
                    <div class=container-fluid information-system-popup p-0 m-0'>
                        <h5>${data[index].title}</h5> <hr>
                        <div class='custom-information-system-${data[index].id} p-0 m-0'></div>
                        <h6 class='status-system-information badge badge-success p-1 my-2'>${data[index].status}</h6>
                        <p class='py-0 my-0'><strong>Provinsi</strong> : ${data[index].province} <br>
                        <strong>Kota</strong> : ${data[index].city}<br>
                        <strong>Alamat</strong> : ${data[index].address}</p>
                        <p class='description-is pt-1 mt-1'>${data[index].description}<p>
                    </div>`;
            }
            if(data[index].status.toLowerCase()== 'dalam pembangunan'){
                let marker=L.marker([data[index].x, data[index].y], {icon: yellowIcon}).addTo(map).bindPopup(desc,{
                    minWidth:300
                });
                dalam_pembangunan.addLayer(marker);
            }
            else if(data[index].status.toLowerCase()== 'daerah rawan'){ 
                let marker=L.marker([data[index].x, data[index].y], {icon: redIcon}).addTo(map).bindPopup(desc,{
                    minWidth:300
                });
                daerah_rawan.addLayer(marker);
            }
            else if(data[index].status.toLowerCase()== 'daerah strategis'){ 
                let marker=L.marker([data[index].x, data[index].y], {icon: greenIcon}).addTo(map).bindPopup(desc,{
                    minWidth:300
                });
                daerah_strategis.addLayer(marker);
            }
        })
    });
// End Marker

// Filter layer
    var overlayMaps = {
        "Dalam Pembangunan": dalam_pembangunan,
        "Daerah Rawan":daerah_rawan,
        "Daerah Strategis":daerah_strategis
    };
    var layerControl = L.control.layers(null,overlayMaps).addTo(map);
// End Filter
})

