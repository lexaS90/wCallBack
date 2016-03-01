Ext.onReady(function() {
	wCallBack.config.connector_url = OfficeConfig.actionUrl;

	var grid = new wCallBack.panel.Home();
	grid.render('office-wcallback-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});