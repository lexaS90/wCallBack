wCallBack.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'wcallback-panel-home', renderTo: 'wcallback-panel-home-div'
		}]
	});
	wCallBack.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(wCallBack.page.Home, MODx.Component);
Ext.reg('wcallback-page-home', wCallBack.page.Home);