/***********************/
/**** Wymondham Map ****/
/***********************/
var wmap = L.map('w-map').setView([52.5760453, 1.1343817], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(wmap);

var wmarker = L.marker([52.5760453, 1.1343817]).addTo(wmap);

/***********************/
/**** Cambridge Map ****/
/***********************/
var cmap = L.map('c-map').setView([52.2355313, 0.1531668], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(cmap);

var cmarker = L.marker([52.2355313, 0.1531668]).addTo(cmap);

/************************/
/** Great Yarmouth Map **/
/************************/
var ymap = L.map('y-map').setView([52.5559057, 1.7108708], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(ymap);

var ymarker = L.marker([52.5559057, 1.7108708]).addTo(ymap);

