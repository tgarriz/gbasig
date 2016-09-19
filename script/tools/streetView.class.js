function streetView() {
    function a(a) {
        a || (a = app.mapPanel.map.getCenter());
        b && b.anc && b.close();
        b = new GeoExt.Popup({
            title: "Street View",
            location: a,
            width: 600,
            height: 500,
            collapsible: !0,
            map: app.mapPanel,
            items: [ new gxp.GoogleStreetViewPanel() ]
        });
        b.show();
    }
    OpenLayers.Class(OpenLayers.Control, {
        defaults: {
            pixelTolerance: 1,
            stopSingle: !0
        },
        initialize: function(a) {
            this.handlerOptions = OpenLayers.Util.extend({}, this.defaults);
            OpenLayers.Control.prototype.initialize.apply(this, arguments);
            this.handler = new OpenLayers.Handler.Click(this, {
                click: this.trigger
            }, this.handlerOptions);
        },
        trigger: function(b) {
            a(this.map.getLonLatFromViewPortPx(b.xy));
        }
    });
    var b;
    a();
}
