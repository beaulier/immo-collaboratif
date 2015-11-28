/*-----------------------------------------------------*/
/*Generation de la MAP et localisation de l'utilisateur*/
/*-----------------------------------------------------*/
var map = L.map('map').setView([48.810881, 2.378957], 16);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox.outdoors',
    accessToken: "pk.eyJ1IjoiYmVhdWxpZXJ0aG9tYXMiLCJhIjoiY2loZGc1MXJoMGJzdHZxa2xub2ZqaHV1eSJ9.yYiNhz5x6szFz2r297zEsw",
}).addTo(map);
locateUser();

function locateUser() 
{
    map.locate({enableHighAccuracy: true,  setView: false});
    function onLocationFound(e) {
        var radius = e.accuracy / 3;
        L.marker(e.latlng).addTo(map).bindPopup("Vous êtes ici !").openPopup();
        L.circle(e.latlng, radius).addTo(map);
    }
    function onLocationError(e) {
        alert(e.message);
    }
        map.on('locationfound', onLocationFound);
}
/*-------------------*/
/*Creation des icones*/
/*-------------------*/
var homeIcon = L.icon({
	iconUrl : '../icones/maison_icone.png',
	iconSize:     [41, 46], 
    iconAnchor:   [22, 94], 
    popupAnchor:  [-3, -76] 
});
var LogedinIcon = L.icon({
	iconUrl : '../icones/statut_en_ligne_icone.png',
	iconSize:     [41, 41], 
    iconAnchor:   [22, 94], 
    popupAnchor:  [-3, -76] 
});
var LogedoutIcon = L.icon({
	iconUrl : '../icones/statut_hors_ligne_icone.png',
	iconSize:     [41, 41], 
    iconAnchor:   [22, 94], 
    popupAnchor:  [-3, -76] 
});
/*--------------------------------------------------------------------------*/
/*Récuperation des informations BDD et création des marqueurs (table profil)*/
/*--------------------------------------------------------------------------*/
var name = document.getElementById('name').innerHTML;
var tab_name = name.split('#');
var adresse = document.getElementById('adresse').innerHTML;
var tab_adresse = adresse.split('#');
var state = document.getElementById('state').innerHTML;
var tab_state = state.split('#');
var elements_length = tab_name.length;
elements_length--;
var url, geocoder, coordinates;
var j = 0;
for (var i = 0; i < elements_length; i++)
{
	url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/'+tab_adresse[i]+'.json?access_token=pk.eyJ1IjoiYmVhdWxpZXJ0aG9tYXMiLCJhIjoiY2loZGc1MXJoMGJzdHZxa2xub2ZqaHV1eSJ9.yYiNhz5x6szFz2r297zEsw';
	geocoder = L.mapbox.geocoder(url);
	coordinates = geocoder.query(tab_adresse[i], getCoords);
}

function getCoords(err, data)
{
	lng = data.latlng[0];
	lat = data.latlng[1];
		if (tab_state[j] == 1)
		{
			markername = 'marker_'+j;
			markername = L.marker([lng, lat], {icon: LogedinIcon}).addTo(map);
			markername.bindPopup('<b>'+tab_name[j]+'</b><br>En ligne<br /><p><a onclick="open_profile('+j+')" >Voir son profil</a></p>').openPopup();
		}
		else if (tab_state[j] == 0)
		{
			markername = 'marker_'+j;
			markername = L.marker([lng, lat], {icon: LogedoutIcon}).addTo(map);
			markername.bindPopup('<b>'+tab_name[j]+'</b><br>Hors ligne<br /><p><a onclick="open_profile('+j+')" >Voir son profil</a></p>').openPopup();
		}
	j++;
}
function open_profile(identifiant)
{
	var page = window.open("../php/profil.php?identifiant="+identifiant+"", "Profil","menubar=no, status=no, scrollbars=no, menubar=no, width=800, height=600");
}
/*-------------------------------------------------------------------------*/
/*Récuperation des informations BDD et création des marqueurs (table zones)*/
/*-------------------------------------------------------------------------*/
var adresse_ap = document.getElementById('adresse_ap').innerHTML;
var tab_adresse_ap = adresse_ap.split('#');
var intitule_ap = document.getElementById('intitule_ap').innerHTML;
var tab_intitule_ap = intitule_ap.split('#');
var elements_length_ap = tab_adresse_ap.length;
elements_length_ap--;
var coordinates_ap;
var n = 0;
for (var i = 0; i < elements_length_ap; i++)
{
	url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/'+tab_adresse_ap[i]+'.json?access_token=pk.eyJ1IjoiYmVhdWxpZXJ0aG9tYXMiLCJhIjoiY2loZGc1MXJoMGJzdHZxa2xub2ZqaHV1eSJ9.yYiNhz5x6szFz2r297zEsw';
	geocoder = L.mapbox.geocoder(url);
	coordinates = geocoder.query(tab_adresse_ap[i], getCoords_ap);
}

function getCoords_ap(err, data)
{
	lng_ap = data.latlng[0];
	lat_ap = data.latlng[1];
	zonename = 'zone_'+n;
	zonename = L.marker([lng_ap, lat_ap], {icon: homeIcon}).addTo(map);
	zonename.bindPopup('<b>'+tab_intitule_ap[n]+'</b><br><p><a onclick="open_page_ap('+n+')" >Participez au débat !</a></p>').openPopup();
	n++;
}
function open_page_ap(identifiant)
{
	var page = window.open("../php/appart.php?identifiant="+identifiant+"", "Profil","menubar=no, status=no, scrollbars=no, menubar=no, width=1600, height=960");
}

