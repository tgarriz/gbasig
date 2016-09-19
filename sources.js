var sources = {
    Geodesia: {
        url: "http://geobasig.com.ar/geoserver29/Geodesia/wms?",
        title: "Geodesia",
        ptype: "gxp_wmscsource"
    },
    Desarrollo: {
    
	url: "http://desarrollo.geobasig.com.ar/geoserver29/Geodesia/wms?",
	title: "Desarrollo",
	ptype: "gxp_wmscsource"
    },
    Arba: {
        url: "http://cartoservices.arba.gov.ar/geoserver/cartoservice/wms?",
        title: "Arba",
        ptype: "gxp_wmscsource"
    },
    urbasig: {
        url: "http://sig.gobierno.gba.gov.ar/geoserver/urbasig/wms?",
        title: "UrbaSig",
        ptype: "gxp_wmscsource"
    },
    ol: {
        ptype: "gxp_olsource"
    },
    /*bing: {
        ptype: "gxp_bingsource"
    },*/
    google: {
    	ptype: "gxp_googlesource"
    },
    osm:{
        ptype: "gxp_osmsource"
    },
    mapquest: {
    ptype: "gxp_mapquestsource"
    }
}
