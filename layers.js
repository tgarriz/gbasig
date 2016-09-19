var arbabc = {
		        source: "arba",
		        name: "macizos",
		        visibility: false,
		        title: "Macizos",
		        group: "geoserver"
		    }

var layers = [
        //CAPAS PREDEFINIDAS
        {
            source: "Geodesia",
            name: "red_ferroviaria",
            visibility: false,
            title: "Ferrocarril",
            group: "IGN"
        },
        //CAPAS FOTO
        {
            source: "Geodesia",
            name: "vuelos",
            visibility: false,
            title: "Vuelo_1997",
            group: "Foto"
        },{
	    source: "Geodesia",
            name: "vuelo_1997",
            visibility: false,
            title: "A._Metropolitana-Esc5000-97",
            group: "Foto"
        },{
	    source: "Geodesia",
            name: "litoral_50000",
            visibility: false,
            title: "Litoral_1975",
            group: "Foto"
        },{
	    source: "Geodesia",
            name: "corfo_50000",
            visibility: false,
            title: "Corfo_1971",
            group: "Foto"
        },{
	    source: "Geodesia",
            name: "catastro_100000",
            visibility: false,
            title: "Catastro_80-85",
            group: "Foto"
        },{
            source: "Geodesia",
            name: "Catalogo",
            visibility: false,
            title: "Catalogo Fotogrametrico",
            group: "Foto"
        },
	//CAPAS DE LA DAIS
	{
            source: "Geodesia",
            name: "cub_hid_marzo",
            visibility: false,
            title: "Marzo 2016",
            group: "Dais"
        },{     
            source: "Geodesia",
            name: "cubhidrica-febrero-2016",
            visibility: false,
            title: "Febrero 2016",
            group: "Dais"
        },{
            name: "cub_hid_2009",
            visibility: false,
            title: "Noroeste-2009",
            group: "Dais"
        },{
            source: "Geodesia",
            name: "cub_hid_2002",
            visibility: false,
            title: "Noroeste-2002",
            group: "Dais"
        },
	//CAPAS IGN
	{
            source: "Geodesia",
            name: "grilla_100000",
            visibility: false,
            title: "Grilla al 100000",
            group: "IGN"
        },{
            source: "Geodesia",
            name: "grilla_50000",
            visibility: false,
            title: "Grilla al 50000",
            group: "IGN"
        },{
            source: "Geodesia",
            name: "grilla_25000",
            visibility: false,
            title: "Grilla al 25000",
            group: "IGN"
        },
        //CAPAS IGN
        {
            source: "Geodesia",
            name: "secundaria",
            visibility: false,
            title: "Red Secundaria",
            group: "IGN"
        },{
            source: "Geodesia",
            name: "rutas_nac",
            visibility: false,
            title: "Rutas Nacionales",
            group: "IGN"
        },{
            source: "IGN",
            name: "Rutas_Provinciales",
            visibility: false,
            title: "Rutas Provinciales",
            group: "IGN"
        },{
            source: "Geodesia",
            name: "ejidos_urbanos",
            visibility: false,
            title: "Ejidos Urbanos",
            group: "IGN"
        },{
            source: "Geodesia",
            name: "cuerpos_de_agua",
            visibility: false,
            title: "Cuerpos de Agua",
            group: "IGN"
        },{
            source: "Geodesia",
            name: "cursos_de_agua",
            visibility: false,
            title: "Cursos de Agua",
            group: "IGN"
        },{
            source: "Geodesia",
            name: "curvas_de_nivel",
            visibility: false,
            title: "Curvas de Nivel",
            group: "IGN"
        },
        //CAPAS TOPO
        {
            source: "Geodesia",
            name: "vinculaciones",
            visibility: false,
            title: "vinculaciones",
            group: "Topo"
        },{
            source: "Geodesia",
            name: "mensulas",
            visibility: false,
            title: "mensulas",
            group: "Topo"
        },{
            source: "Geodesia",
            name: "geoba",
            visibility: false,
            title: "Red Geoba",
            group: "Topo"
        },
	//CAPAS CARTO
        {
            source: "Geodesia",
            name: "gr_5000",
            visibility: false,
            title: "Cartas 5000",
            group: "Carto"
        },
	{
            source: "Geodesia",
            name: "gr_10000",
            visibility: false,
            title: "Cartas 10000",
            group: "Carto"
        },
	//CAPAS GEOSERVER (GEODIGIT)
	 {
            source: "Desarrollo",
            name: "ParcelarioCompleto",
            visibility: true,
            title: "Parcelario",
            group: "Geoserver"
        },{
	    source: "Geodesia",
	    name: "Parcelario_Transparente",
	    visibility: false,
	    title: "Parcelario Transparente",
	    group: "Geoserver"
	},{
            source: "Geodesia",
            name: "urbanizaciones_cerradas",
            visibility: false,
            title: "Urbanizaciones Cerradas",
            group: "Geoserver"
        },{
            source: "Geodesia",
            name: "parques_industriales",
            visibility: false,
            title: "Parques Industriales",
            group: "Geoserver"
        },
	{
            source: "Arba",
            name: "Cotas",
            visibility: true,
            title: "Cotas",
            group: "Geoserver"
        },

	 //CAPAS TERRITORIAL
	{
            source: "Arba",
            name: "Grupo ARBA",
            visibility: false,
            title: "Catastro", 
            group: "Capa Territorial"
        },

        // CAPAS URBASIG
        {
            source: "urbasig",
            name: "zonificacion",
            visibility: false,
            title: "Zonificacion",
            group: "Geoserver"
        },
        // CAPAS BASE
        {
            source: "google",
            name: "HYBRID",
            title: "Google Híbrido",
            group: "background"
        },{
            source: "google",
            name: "ROADMAP",
            title: "Google Callejero",
            group: "background"
        },{
            source: "google",
            name: "SATELLITE",
            title: "Google Satélite",
            group: "background",
	    useTiltImages: true
        },{
            source: "google",
            name: "TERRAIN",
            title: "Google Físico",
            group: "background"
        },/*{
            source: "bing",
            name: "Aerial",
            title: "Bing Satélite",
            selected: false,
            group: "background"
        },//{
          //  source: "ol",
          //  group: "background",
          //  fixed: true,
          //  type: "OpenLayers.Layer.XYZ",
          //  args: ["HereMap",
          //  [
          //      "http://2.base.maps.cit.api.here.com/maptile/2.1/maptile/newest/normal.day/6/21/39/256/png8?lg=ENG&app_id=RnTeDzNnDwC8g7Q0qlWi&app_code=zzsEFCQkHyDW827tVq5CsQ"
          //  ],
          //  {
          //      attribution: "&copy; 2013 Nokia</span>&nbsp;<a href='http://maps.nokia.com/services/terms' target='_blank' title='Terms of Use' style='color:#333;text-decoration: underline;'>Terms of Use</a></div> <img src='http://api.maps.nokia.com/2.2.4/assets/ovi/mapsapi/by_here.png' border='0'>"
          //  }
          //  ]},
	{
            source: "bing",
            name: "Road",
            title: "Bing Callejero",
            selected: false,
            group: "background"
        },*/{
            source: "osm",
            name: "mapnik",
            title: "Open Street Map",
            selected: true,
            group: "background"
        },{
            source: "ol",
            group: "background",
            fixed: true,
            type: "OpenLayers.Layer",
            args: ["Sin capa base",
            {
                visibility: false
            }]
        },
        arbabc
]
